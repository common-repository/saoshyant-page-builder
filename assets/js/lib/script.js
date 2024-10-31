 jQuery(function($) {
	'use strict';
	jQuery(document).ready(function() {
 
 
	/****************************************************
	Auto Width Warp
	*****************************************************/	 
	 function auto_width_flex(width,id,res){
		var flex = id.find('.sao-flex');
		var width_return = width;
		if(flex.hasClass('sao_'+res+'_1_2')){
			  width_return = width / 2;
		}
 
		else if(flex.hasClass('sao_'+res+'_1_3')){
			  width_return = width / 3;
 		}
		else if(flex.hasClass('sao_'+res+'_1_4')){
			width_return = width / 4;
		}
		else if(flex.hasClass('sao_'+res+'_1_5')){
			width_return = width / 5;
		}
		else if(flex.hasClass('sao_'+res+'_1_6')){
			width_return = width / 6;
		}				
		else if(flex.hasClass('sao_'+res+'_1_7')){
			width_return = width / 7;
		}	
			else if(flex.hasClass('sao_'+res+'_1_8')){
			width_return = width / 8;
		}			
		return width_return;		

 	 }
	/****************************************************
	Auto Width Warp
	*****************************************************/	
 	function auto_width_warp(items,id){
		id.find('.sao-aw'+ items).each(function() {
			var widths = $(this).width();
			
			var body_width = $('body').width();
 
  		  if (window.matchMedia('(max-width: 1024px) and (min-width: 768px)').matches){
				widths =  auto_width_flex(widths,$(this),'tab') - 40;
 		 }else if (window.matchMedia('(max-width: 767px) and (min-width: 1px)').matches){
				widths =  auto_width_flex(widths,$(this),'mob')  - 40;
 		 } else{
 				widths =  auto_width_flex(widths,$(this),'col')  - 40;
 		 } 
			
	  		if (900 < widths ){
				$(this).addClass('sao-1200'+ items);
			
 
			}else if (600 < widths && widths <= 900){
				$(this).addClass('sao-900'+ items);
						
			}else if (400 < widths && widths <= 600){
				$(this).addClass('sao-600'+ items);
							
			}else if (300 < widths && widths <= 400){
				$(this).addClass('sao-400'+ items);
	 
			} else if (200 < widths && widths <= 300){
				$(this).addClass('sao-300'+ items);
				
		 
 
			}else if ( 200 > widths ){
				$(this).addClass('sao-200'+ items);
				
			}		 
		});
	}
	
	
	/****************************************************
	Remove Auto Width Warp
	*****************************************************/	
 	function remove_auto_width_warp(items,id ){
  		id.find('.sao-aw'+ items).each(function() {
			var widths = $(this).width();
	 
 				$(this).removeClass('sao-1200'+ items).removeClass('sao-900'+ items).removeClass('sao-600'+ items).removeClass('sao-400'+ items).removeClass('sao-300'+ items).removeClass('sao-200'+ items).removeClass('sao-000'+ items);
	
 			
 		}); 
	}
 	function  auto_width(id ){
		remove_auto_width_warp('',id); 
 		auto_width_warp('',id);    	
		
	}
	/****************************************************
	Width Warp Resize
	*****************************************************/	
	$(window).resize(function () { 
		auto_width($('body'));
   	});
	auto_width($('body'));
  
  
	/****************************************************
	Parallax
	*****************************************************/	
 	 if(jQuery().sao_parlx ){
		$('body').sao_parlx();
	}
	if(jQuery().stick_in_parent ){
	 	$(window).on('load', function () {
 		$(".sao-sc-sticky").each(function(index, element) {
			$(this).each(function(index, element) {
				$(this).find('.sao-col-inner').each(function(index, element) {
					$(this).stick_in_parent();
				});
			});
		});
		});
	}
	
   	/****************************************************
	Aos
	*****************************************************/	
	if(jQuery().sao_aos ){
		$('body').sao_aos();
	}  			
	
   	/****************************************************
	Icon Hexagon
	****************************************************/ 
	function icon_hexagon() {
 		if(jQuery().sao_hexagon){
			$("body").sao_hexagon();
		}
 	}
	
   	/****************************************************
	Icon Hexagon
	*****************************************************/

	function boxed() {
 		if(jQuery().sao_boxed){
			$("body").sao_boxed();
		}
 	}
	

 	if(jQuery().ZooMove){
 			$('.sao-zoom-image .sao-image').hover(
  			function() {
				$(this).ZooMove({
				cursor: 'false',
				scale: '2',
				move: 'true',
				over: 'false'
				});
  			},
			function() {
 			 $(this).find('.zoo-img').remove();
  			}
	);  
	}
	function sao_video_resize(){ 
		$('.sao-video').each(function(index, block) { 
			var width = $(this).find('.sao-video-warp').width();
			var height = $(this).find('.sao-video-warp').height(); 
			$(this).find('video,iframe').attr('width',width).attr('height',height); 		 
		});  
	}
	
	
 	function progressbar() {
 		if(jQuery().sao_progressbar){
			$("body").sao_progressbar();
		}
 	}
	function  chart() {
 		if(jQuery().sao_chart){
			$("body").sao_chart();
		}
 	}		
	function  count_number() {
 		if(jQuery().sao_count_number){
			$("body").sao_count_number();
		}
 	}		 	
	function  tabs() {
 		if(jQuery().sao_tabs){
			$("body").sao_tabs();
		}
 	}		 		 
 
	/****************************************************
	Sao Slider
	*****************************************************/	
	if(jQuery().sao_slider ){
		$('body').sao_slider();
	} 	 
   
	if(jQuery().sao_lightbox ){
			$('body').sao_lightbox();
	}
  
	 
	  
	icon_hexagon();
	boxed();
	sao_video_resize();
	progressbar();
	chart();
	count_number();
	tabs();
	$(window).resize(function(){
   		 setTimeout(function(){ 
				if(jQuery().sao_aos ){
		$('body').sao_aos();
	}
			icon_hexagon();
		   boxed();
		   
 		 }, 500);
	});	
	
   		 setTimeout(function(){ 
		icon_hexagon();
	boxed();
	sao_video_resize();
	progressbar();
	chart();
	count_number();
	tabs();

		 },1000);
	  
	
 }); 	
 
	 
 
});
 