 
(function($){
   var $w=$(window);
    $.fn.visible = function(partial,hidden,direction,container){
		if($(this).parents('body').hasClass('wp-admin')){
		return true;
		}
        if (this.length < 1)
            return;
	
	// Set direction default to 'both'.
	direction = direction || 'both';
	    
        var $t          = this.length > 1 ? this.eq(0) : this,
						isContained = typeof container !== 'undefined' && container !== null,
						$c				  = isContained ? $(container) : $w,
						wPosition        = isContained ? $c.position() : 0,
            t           = $t.get(0),
            vpWidth     = $c.outerWidth(),
            vpHeight    = $c.outerHeight(),
            clientSize  = hidden === true ? t.offsetWidth * t.offsetHeight : true;

        if (typeof t.getBoundingClientRect === 'function'){

            // Use this native browser method, if available.
            var rec = t.getBoundingClientRect(),
                tViz = isContained ?
												rec.top - wPosition.top >= 0 && rec.top < vpHeight + wPosition.top :
												rec.top >= 0 && rec.top < vpHeight,
                bViz = isContained ?
												rec.bottom - wPosition.top > 0 && rec.bottom <= vpHeight + wPosition.top :
												rec.bottom > 0 && rec.bottom <= vpHeight,
                lViz = isContained ?
												rec.left - wPosition.left >= 0 && rec.left < vpWidth + wPosition.left :
												rec.left >= 0 && rec.left <  vpWidth,
                rViz = isContained ?
												rec.right - wPosition.left > 0  && rec.right < vpWidth + wPosition.left  :
												rec.right > 0 && rec.right <= vpWidth,
                vVisible   = partial ? tViz || bViz : tViz && bViz,
                hVisible   = partial ? lViz || rViz : lViz && rViz,
		vVisible = (rec.top < 0 && rec.bottom > vpHeight) ? true : vVisible,
                hVisible = (rec.left < 0 && rec.right > vpWidth) ? true : hVisible;

            if(direction === 'both')
                return clientSize && vVisible && hVisible;
            else if(direction === 'vertical')
                return clientSize && vVisible;
            else if(direction === 'horizontal')
                return clientSize && hVisible;
        } else {

            var viewTop 				= isContained ? 0 : wPosition,
                viewBottom      = viewTop + vpHeight,
                viewLeft        = $c.scrollLeft(),
                viewRight       = viewLeft + vpWidth,
                position          = $t.position(),
                _top            = position.top,
                _bottom         = _top + $t.height(),
                _left           = position.left,
                _right          = _left + $t.width(),
                compareTop      = partial === true ? _bottom : _top,
                compareBottom   = partial === true ? _top : _bottom,
                compareLeft     = partial === true ? _right : _left,
                compareRight    = partial === true ? _left : _right;

            if(direction === 'both')
                return !!clientSize && ((compareBottom <= viewBottom) && (compareTop >= viewTop)) && ((compareRight <= viewRight) && (compareLeft >= viewLeft));
            else if(direction === 'vertical')
                return !!clientSize && ((compareBottom <= viewBottom) && (compareTop >= viewTop));
            else if(direction === 'horizontal')
                return !!clientSize && ((compareRight <= viewRight) && (compareLeft >= viewLeft));
        }
    };
  
    function EnglishTopersian(input) {
            var inputstring = input;
            var english  = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"]
            var persian = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"]
            for (var i = 0; i < 10; i++) {
                var regex = new RegExp(persian[i], 'g');
                inputstring = inputstring.toString().replace(regex, english[i]);
            }
            return inputstring;
        }

 
 
 		$.fn.jQuerySimpleCounter = function(percent=1000,duration=2000,end=''){
				var $this=$(this);
				var countTo=percent;
				var delayTo=duration;
				
				if(!delayTo){delayTo=8000};
  					$({countNum:$this.text()}).animate({countNum:countTo},{
						duration:delayTo,easing:'linear',
							step:function(){
								
								if($('body').hasClass('rtl')){
									var etp=EnglishTopersian( Math.floor(this.countNum) );
								}else{
									var etp =Math.floor(this.countNum);
								}
								$this.text(etp + end);
							
							},complete:function(){
								
								if($('body').hasClass('rtl')){
									var etp=EnglishTopersian( Math.floor(this.countNum) );
								}else{
									var etp =Math.floor(this.countNum);
								}
								
								$this.text(etp + end);
							}
					});
				 
 
	}
	
	 $.fn.sao_progressbar = function() {
 	$(this).find('[class*="sao-progress-item-"]').each(function(i, elem) {
				var	elem = $(this).find('.sao-bar');
				var this_elemnt = $(this);
				var percent = $(this).find('.sao-bar').attr('data-bar-percent');
 				var pro_duration =  parseInt($(this).find('.sao-bar').attr('data-bar-duration'));
				var count = $(this).find('.sao-progress-percent');
				var Interval = setInterval(function(){
 				if (!this_elemnt.hasClass('animated') && this_elemnt.visible(true)) {
						this_elemnt.addClass('animated');
  			if(this_elemnt.hasClass('animated')  ){
				  clearInterval(Interval);
			}
			 
						count.jQuerySimpleCounter(percent,pro_duration,'%');

				
			}	
			 		}, 500);
		
			
		});
 }
 	$.fn.sao_count_number = function( ) {
  $(this).find('.sao-count-number').each(function(index, element) {
	  
		var	elem = $(this);
 		var number =parseInt($(this).attr('number'));
 		var endnumber =$(this).attr('end');
 		var duration =  parseInt($(this).attr('duration'));
    		
		var Interval = setInterval(function(){
	 	 if(!elem.hasClass('animated') && elem.visible(true)){
			elem.addClass('animated');
  			if(elem.hasClass('animated')  ){
				  clearInterval(Interval);
			}
 			 
 			elem.jQuerySimpleCounter( number, duration, endnumber);

 		
			  }
 		}, 2000);
		});
		
	}
	
	
   $.fn.sao_chart = function() {
		var isset = function(variable){
		return typeof(variable) !== "undefined" && variable !== null && variable !== '';
	}
	 
$(this).find('.sao-chart').each(function(index, element) {
			var	elem = $(this);
		var option  = jQuery.parseJSON( $(this).find('.sao-json').html());
	 
 		if(isset(option['percent'])){
			var percent=parseInt(option['percent']);
   		 }else{
			var percent='0' ;
		 }			
		
		if(isset(option['endpercentage'])){
			var end_percentage=option['endpercentage'];
   		 }else{
			var end_percentage= '' ;
		 }	
		
		if(isset(option['duration'])){
			var bar_duration=parseInt(option['duration']);
   		 }else{
			var bar_duration=2000 ;
		 }		/*
  		*/
 		var percent_circle =percent / 100;
 		
		 if(isset(option['chart_size'])){
			var chart_size=parseInt(option['chart_size']);
   		 }else{
			var chart_size=150 ;
		 }
	  
	  
		 if(isset(option['bar_first'])){
			var first=option['bar_first'];
   		 }else{
			var first='red' ;
		 }	  
		 
		 if(isset(option['bar_second'])){
			var second=option['bar_second'];
   		 }else{
			var second=first ;
		 }	  
		 
		 if(isset(option['bar_size'])){
			var size=parseInt(option['bar_size']);
   		 }else{
			var size=5 ;
		 }	
		 
		  if(isset(option['track_color'])){
			var track=option['track_color'];
   		 }else{
			var track='rgba(128,128,128,0.1)' ;
		 }	  
		 
 		var chart_percent = $(this).find('.sao-chart-percent');

 		 
		/*
		var size = parseInt(option['bar_size']);		
		var track =option['track_color'];		
 		*/
		var Interval = setInterval(function(){

  	 if(!$(this).hasClass('animated') && elem.visible(true)){
		elem.addClass('animated');
  		if(elem.hasClass('animated')  ){
			  clearInterval(Interval);
		}
		if(jQuery().circleProgress){
				elem.circleProgress({
							value: percent_circle,
							animation: {
							  duration: bar_duration,
							  easing: 'circleProgressEasing'
							},
							 emptyFill:track,
							 size: chart_size,
							 thickness: size,
							 fill: {gradient: [first,second]}
				}) ; 
 		}
		
		
			chart_percent.jQuerySimpleCounter(percent,bar_duration,end_percentage);

 
 	  }
 		}, 500);	

  		}) ;	
		 
 }
 
	
	
 })(jQuery);

 