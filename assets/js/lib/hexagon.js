/*!
  Hexagon Progress jQuery Plugin
  @name jquery.hexagonprogress.js
  @description Draw animated hexagon progress bars
  @author Max Lawrence 
  @version 1.2.0
  @category jQuery plugin
  @copyright (c) 2015 Max Lawrence (http://www.avirtum.com)
  @license Licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) license.
*/ 
(function(a){"use strict";function b(a){this.init(a)}b.prototype={size:"parent",value:0,startAngle:Math.PI/2,lineWidth:0,lineCap:"round",clip:!0,background:null,lineBackFill:{color:"rgba(0, 0, 0, .1)"},lineFrontFill:{gradient:["rgba(0, 0, 0,0)"]},animation:{duration:1800,easing:"hexagonEasing"},animationStartValue:0,constructor:b,el:null,canvas:null,ctx:null,outerRadius:0,lineFill:null,lastValue:0,coordBack:[],coordFront:[],edges:[],init:function(b){a.extend(this,b),this.initWidget(),this.initFill(),this.draw()},initWidget:function(){var b=this.canvas=this.canvas||a("<canvas>").prependTo(this.el)[0];if("parent"==this.size){var c=a(b).parent().outerHeight(),d=a(b).parent().outerWidth();this.size=c>d?d:c}b.width=this.size,b.height=this.size,this.ctx=b.getContext("2d"),this.outerRadius=this.size/2},initCoordBack:function(){var c=this.outerRadius,d=this.getLineWidth(),c=c-d/2,e=c*Math.sqrt(3)/2,a=c/2,b=c-c*Math.sqrt(3)/2+d/2,f=a+d/2,g=0+b,h=f+c,i=g+0,j=h+a,k=i+e,l=j-a,m=k+e,n=l-c,o=m-0,p=[{x:f,y:g},{x:h,y:i},{x:j,y:k},{x:l,y:m},{x:n,y:o},{x:n-a,y:o-e},{x:f,y:g}],q=[{x:p[1].x-p[0].x,y:p[1].y-p[0].y},{x:p[2].x-p[1].x,y:p[2].y-p[1].y},{x:p[3].x-p[2].x,y:p[3].y-p[2].y},{x:p[4].x-p[3].x,y:p[4].y-p[3].y},{x:p[5].x-p[4].x,y:p[5].y-p[4].y},{x:p[0].x-p[5].x,y:p[0].y-p[5].y}];this.coordBack=p,this.edges=q},initCoordFront:function(b){var c=this.outerRadius,d=this.getLineWidth(),e=this.startAngle,a=180*e/Math.PI-60,a=360<Math.abs(a)?a-360*Math.floor(a/360):a,a=0>a?360+a:a,f=a+360*b,f=360<Math.abs(f)?f-360*Math.floor(f/360):f,g=Math.floor(a/60)+1,h=Math.floor(f/60)+1,j=Math.abs(60*(g-1)-a)/60,k=Math.abs(60*(h-1)-f)/60,l=Math.floor(b/(1/6)+j)+1,m=[],n=g,o=this.edges[n-1].x*j+this.coordBack[n-1].x,p=this.edges[n-1].y*j+this.coordBack[n-1].y;if(m.push({x:o,y:p}),1<l)for(var q=1;6>=q;q++){if(n==h&&g!=h){o=this.edges[n-1].x*k+this.coordBack[n-1].x,p=this.edges[n-1].y*k+this.coordBack[n-1].y,m.push({x:o,y:p});break}else o=this.coordBack[n].x,p=this.coordBack[n].y,m.push({x:o,y:p});n++,6<n&&(n=1)}n==h&&g==h&&(o=this.edges[n-1].x*k+this.coordBack[n-1].x,p=this.edges[n-1].y*k+this.coordBack[n-1].y,m.push({x:o,y:p})),this.coordFront=m},initFill:function(){function b(){var b=a("<canvas>")[0];b.width=c.size,b.height=c.size,b.getContext("2d").drawImage(m,0,0,c.size,c.size),c.lineFill=c.ctx.createPattern(b,"no-repeat"),c.drawFrame(c.lastValue)}var c=this,d=this.ctx;if(!this.lineFrontFill)throw Error("The lineFrontFill is not specified!");if(this.lineFrontFill.color&&(this.lineFill=this.lineFrontFill.color),this.lineFrontFill.gradient){var e=this.lineFrontFill.gradient;if(1==e.length)this.lineFill=e[0];else if(1<e.length){for(var f=this.lineFrontFill.gradientAngle||0,g=this.lineFrontFill.gradientDirection||[c.size/2*(1-Math.cos(f)),c.size/2*(1+Math.sin(f)),c.size/2*(1+Math.cos(f)),c.size/2*(1-Math.sin(f))],h=d.createLinearGradient.apply(d,g),j=0;j<e.length;j++){var k=e[j],l=j/(e.length-1);a.isArray(k)&&(l=k[1],k=k[0]),h.addColorStop(l,k)}this.lineFill=h}}if(this.lineFrontFill.image){var m;this.lineFrontFill.image instanceof Image?m=this.lineFrontFill.image:(m=new Image,m.src=this.lineFrontFill.image),m.complete?b():m.onload=b}},draw:function(){this.animation?this.drawAnimated(this.value):this.drawFrame(this.value)},drawAnimated:function(b){var c=this,d=this.el,e=a(this.canvas);e.stop(!0,!1),d.trigger("hexagon-animation-start"),e.css({animationProgress:0}).animate({animationProgress:1},a.extend({},this.animation,{step:function(a){var e=c.animationStartValue*(1-a)+b*a;c.drawFrame(e),d.trigger("hexagon-animation-progress",[a,e])}})).promise().always(function(){d.trigger("hexagon-animation-end")})},drawFrame:function(a){this.lastValue=a,this.ctx.clearRect(0,0,this.size,this.size),this.initCoordBack(),this.initCoordFront(a),this.background?this.drawWithBackground():(this.drawBack(),this.drawFront())},checkSupportCompositeMode:function(a,b){var c=a.globalCompositeOperation,d=!1;return a.globalCompositeOperation=b,a.globalCompositeOperation==b&&(d=!0),a.globalCompositeOperation=c,d},makeClipMask:function(){var a=this.ctx,b=this.getLineWidth(),c=this.outerRadius,d=b/2;this.outerRadius-=d,this.initCoordBack(),a.beginPath(),a.moveTo(this.coordBack[0].x+d,this.coordBack[0].y+d);for(var e=0;e<this.coordBack.length;e++)a.lineTo(this.coordBack[e].x+d,this.coordBack[e].y+d);a.closePath(),this.checkSupportCompositeMode(a,"destination-in")?(a.globalCompositeOperation="destination-in",a.fillStyle="#fff",a.fill()):a.clip(),this.outerRadius=c,this.initCoordBack()},drawWithBackground:function(){function a(){var a=f.width,b=f.height,e=c.size/a,g=c.size/b,h=g>e?g:e,i=a*h,j=b*h,k=(c.size-i)/2,l=(c.size-j)/2;d.save(),c.clip?c.checkSupportCompositeMode(d,"destination-in")?(d.drawImage(f,0,0,f.width,f.height,k,l,i,j),c.makeClipMask.call(c)):(c.makeClipMask.call(c),d.drawImage(f,0,0,f.width,f.height,k,l,i,j)):d.drawImage(f,0,0,f.width,f.height,k,l,i,j),d.restore(),c.drawBack.call(c),c.drawFront.call(c)}function b(){if(d.beginPath(),d.rect(0,0,c.size,c.size),c.background.color_2){if("vertical"===c.background.ori)var a=d.createLinearGradient(0,0,c.size,0);else if("diagonal"===c.background.ori)var a=d.createLinearGradient(0,c.size,c.size,0);else if("diagonal-bottom"===c.background.ori)var a=d.createLinearGradient(0,c.size,c.size,c.size);else if("radial"===c.background.ori){var b=c.size/2;a=d.createRadialGradient(b,b,0,b,b,b)}else var a=d.createLinearGradient(0,c.size,0,0);a.addColorStop(0,c.background.color),a.addColorStop(1,c.background.color_2)}else var a=c.background.color;d.fillStyle=a,d.fill()}var c=this,d=this.ctx,e=this.getLineWidth();if(this.background.color&&(d.save(),c.clip?c.checkSupportCompositeMode(d,"destination-in")?(b(),c.makeClipMask.call(c)):(c.makeClipMask.call(c),b()):b(),d.restore(),c.drawBack.call(c),c.drawFront.call(c)),this.background.image){var f;this.background.image instanceof Image?f=this.background.image:(f=new Image,f.src=this.background.image),f.complete?a():f.onload=a}},drawBack:function(){var a=this.ctx,b=this.getLineWidth();a.save(),a.beginPath(),a.moveTo(this.coordBack[0].x,this.coordBack[0].y);for(var c=0;c<this.coordBack.length;c++)a.lineTo(this.coordBack[c].x,this.coordBack[c].y);a.lineWidth=b,a.strokeStyle=this.lineBackFill.color,a.closePath(),a.stroke(),a.restore()},drawFront:function(){if(0!=this.value){var a=this.ctx,b=this.getLineWidth();a.save(),a.beginPath(),a.moveTo(this.coordFront[0].x,this.coordFront[0].y);for(var c=0;c<this.coordFront.length;c++)a.lineTo(this.coordFront[c].x,this.coordFront[c].y);a.lineWidth=b,a.strokeStyle=this.lineFill,a.lineCap=this.lineCap,a.stroke(),a.restore()}},getLineWidth:function(){return a.isNumeric(this.lineWidth)?this.lineWidth:this.size/14},getValue:function(){return this.value},setValue:function(a){this.animation&&(this.animationStartValue=this.lastFrameValue),this.value=a,this.draw()}},a.hexagonProgress={defaults:b.prototype},a.easing.hexagonEasing=function(a,e,f,b,c){return 1>(e/=c/2)?b/2*e*e*e+f:b/2*((e-=2)*e*e+2)+f},a.fn.hexagonProgress=function(c,d){var e=this.data("hexagon-progress");if("canvas"==c){if(!e)throw Error("Calling 'canvas' method on not initialized instance is forbidden");return e.canvas}if("value"==c){if(!e)throw Error("Calling 'value' method on not initialized instance is forbidden");if("undefined"==typeof d)return e.getValue();var f=arguments[1];return this.each(function(){a(this).data("hexagon-progress").setValue(f)})}return this.each(function(){var d=a(this),e=d.data("hexagon-progress"),f=a.isPlainObject(c)?c:{};if(e)e.init(f);else{var g=a.extend({},d.data());"string"==typeof g.lineBackFill&&(g.lineBackFill=JSON.parse(g.lineBackFill)),"string"==typeof g.lineFrontFill&&(g.lineFrontFill=JSON.parse(g.lineFrontFill)),"string"==typeof g.background&&(g.background=JSON.parse(g.background)),"string"==typeof g.animation&&(g.animation=JSON.parse(g.animation)),f=a.extend(g,f),f.el=d,e=new b(f),d.data("hexagon-progress",e)}})}})(window.jQuery);


(function($){
 $.fn.sao_hexagon = function() {
 	$(this).find(".sao-icon-bh .sao-icon").each(function(e) {
 			
 			
    			var array  = {
				value:1,
				startAngle: Math.PI,
				animation:false,
 			}
			//alert($(this).width());
 
 			var background_first = $(this).attr('bgf');
			var background_second = $(this).attr('bgs');
 			var background_orientation = $(this).attr('bgo');
			if(background_first){
 				 array['lineCap']= "round";			
  				 array['clip']= true;
				 
				var background = {};
				background['color'] = background_first;
				if(background_second){
					if(rtl_js.is_rtl=='true'){
						background['color'] = background_second;
						background['color_2'] = background_first;

					}else{
						background['color_2'] = background_second;
 					}
				
				
				}
				
				if(background_orientation){
					background['ori'] = background_orientation;
				}
				
				array['background'] = background;		
	 
 			}
 			var border_size = $(this).attr('bos');
			if(border_size){
				array['lineWidth']= border_size;
			}
			var border_color = $(this).attr('boc');
			if(border_color){
				array['lineFrontFill']= {gradient: [border_color]};
			}
  				
			$(this).hexagonProgress(array);
		  
		  	// HOVER
			var hover_array  = {
				value:1,
				startAngle: Math.PI,
				animation:false,
 			}

 			var hover_background_first = $(this).attr('hbgf');
			var hover_background_second = $(this).attr('hbgs');
 			var hover_background_orientation = $(this).attr('hbgo');
			if(hover_background_first){
 				 hover_array['lineCap']= "round";			
  				 hover_array['clip']= true;
				 
				var hover_background = {};
				hover_background['color'] = hover_background_first;
				if(hover_background_second){
					
					if(rtl_js.is_rtl=='true'){
						hover_background['color'] = hover_background_second;
						hover_background['color_2'] = hover_background_first;

					}else{
						hover_background['color_2'] = hover_background_second;
 					}
					
 				}
				
				if(hover_background_orientation){
					hover_background['ori'] = hover_background_orientation;
				}
				hover_array['background'] = hover_background;		
				/* if(background_second){
					 hover_array['background']['color_2']
				 }*/
 
			}
 			var hover_border_size = $(this).attr('hbos');
			if(hover_border_size){
				hover_array['lineWidth']= hover_border_size;
			}
			var hover_border_color = $(this).attr('hboc');
			if(hover_border_color){
				hover_array['lineFrontFill']= {gradient: [hover_border_color]};
			}
  				
			$(this).find('i').hexagonProgress(hover_array);
			
 

  		});
 }
 })(jQuery);

	 