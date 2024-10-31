(function($){
 $.fn.sao_boxed = function() {
$(this).find(".sao-boxed-item-2[class*='-one'],.sao-boxed-multi-2[class*='-one-multi'] .sao-item").each(function(e) {
		var width_box = $(this).innerWidth();
 		var innerwidth = $(this).width();
 		
 		var width_icon = $(this).find('.sao-icon,.sao-image').outerWidth() / 2;
		var marign = (width_box - innerwidth ) / 2;
 	 	var border_width =( $(this).find('.sao-bg').outerWidth() - $(this).find('.sao-bg').width()) * 3/4  ;
     		var main_width = width_box - width_icon - marign - border_width ;
		$(this).find('.sao-bg').width(main_width);
  		});
		
		
		$(this).find(".sao-boxed-item-2[class*='-two'],.sao-boxed-multi-2[class*='-two-multi'] .sao-item").each(function(e) {
	
		var height_box = $(this).innerHeight();
 		var innerheight = $(this).height();
		var height_icon = $(this).find('.sao-icon,.sao-image,.sao-chart').outerHeight() / 2;
   	 	var border_width =( $(this).find('.sao-bg').outerHeight() - $(this).find('.sao-bg').height()) * 3/4  ;

		var marign = (height_box - innerheight) / 2;
   		var main_height = height_box - height_icon - marign - border_width ;
		$(this).find('.sao-bg').height(main_height);
	});		
	
	
		$(this).find(".sao-boxed-item-3[class*='-two'],.sao-boxed-multi-3[class*='-two-multi'] .sao-item").each(function(e) {
		var height_box = $(this).innerHeight();
 		var innerheight = $(this).height();
		var height_btn = $(this).find('.sao-btn').outerHeight() / 2;
   	 	var border_width =( $(this).find('.sao-bg').outerHeight() - $(this).find('.sao-bg').height()) * 3/4  ;

		var marign = (height_box - innerheight) / 2;
   		var main_height = height_box - height_btn - marign - border_width ;
		$(this).find('.sao-bg').height(main_height);
	});		
	
	
	$(this).find(".sao-boxed-item-4[class*='-two'],.sao-boxed-multi-4[class*='-two-multi'] .sao-item").each(function(e) {
		var height_box = $(this).innerHeight();
 		var innerheight = $(this).height();
		var height_icon = $(this).find('.sao-icon,.sao-image').outerHeight() / 2;
		var height_btn = $(this).find('.sao-btn').innerHeight() / 2;
		
   	 	var border_width =( $(this).find('.sao-bg').outerHeight() - $(this).find('.sao-bg').height()) * 3/4  ;
 		 var border_botton = border_width / 2;

		var marign = (height_box - innerheight) / 2 ;
   		var main_height = height_box - height_btn - height_icon - marign - marign - border_width ;
		$(this).find('.sao-bg').height(main_height).css({bottom : height_btn + marign - border_botton +'px'});
	});		
 }
 })(jQuery);