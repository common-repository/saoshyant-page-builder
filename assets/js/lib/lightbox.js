(function($){
 "use strict";
      $.fn.sao_lightbox = function() {

	$.sao_lightboxMove = function (direction, allImages) {
    		console.log(allImages);
			
    		direction = (direction == 'next') ? 'next' : 'prev';
			var actualId;
			$.each(allImages, function (index) {
       		if (allImages[index] === sao_lightboxActual) {
				actualId = index;
       		}
    	});
	
     	var iterator;
		if (direction == 'next') {
        	iterator = actualId + 1;
        	if (actualId == allImages.length - 1) {
            iterator = 0;
        	}
    	} else if (direction == 'prev') {
        	iterator = actualId - 1;
        	if (actualId == 0) {
            	iterator = allImages.length - 1;
        	}
    	}
		
		var newImage = allImages[iterator];
		$('.sao-lightbox-targetimg').css('display', 'none').attr('src', newImage.getAttribute('href'));
		$('.sao-lightbox-loading').css('display', 'block');
		
    	$('.sao-lightbox-targetimg').one('load', function () {
        	$('.sao-lightbox-loading').css('display', 'none');
        	$(this).css('display', 'inline-block');
    	});
    	
		var text = $(newImage).next().html();
    	var display = 'block';
		
		if (text == null) {
        	text = '';
        	display = 'none';
    	}
		$('.sao-lightbox-title').text(text).css('display', display);
		$('.sao-lightbox-counter').text($.sao_lightboxMessage(iterator + 1, allImages.length));
		sao_lightboxActual = newImage;
	}; 

 
	 

//-------------- LightBox --------------// 
	//Copyright (c) jzBox 
	$('.sao-builder-warp .sao-prettyphoto .sao-image img').parent('a').each(function(i, el) {
		var sao_page_href_value = this.href;
		if (/\.(jpg|png|gif|jpeg|bmp)$/.test(sao_page_href_value)) {
			$(this).addClass('sao-img-lightbox');
		}  
	});
     
	 
	if(jQuery('.sao-lightbox').hasClass('sao-lightbox-active')){
	
		$('.sao-img-lightbox').on('click',function (event) {
			
			$('.sao-lightbox').addClass('sao-lightbox-post-content')
			
			event.stopPropagation();
			event.preventDefault();
			var images = $('.sao-prettyphoto .sao-image img').parent('a');
			sao_lightboxActual = this;
			
			$('.sao-lightbox-targetimg').css('display', 'none').attr('src', this.getAttribute('href'));
			$('.sao-lightbox-targetimg').one('load', function () {
				$('.sao-lightbox-loading').css('display', 'none');
				$(this).slideToggle('slow');
			});
	
			var text = $(this).next().html();
			var display = 'block';
			if (text == null) {
				text = '';
				display = 'none';
			}
			
			$('.sao-lightbox-title').text(text).css('display', display);
			$('.sao-lightbox').addClass('sao-multi-lightbox').slideToggle('fast');
			var actualId;
			$.each(images, function (index) {
				if (sao_lightboxActual === images[index]) {
					actualId = index + 1;
				}
			});
			if (images.length == 1) {
				$('.sao-lightbox-moreitems').css('display', 'none');
			}
			
			$('.sao-lightbox-counter').text($.sao_lightboxMessage(actualId, images.length));
	});
	}
 
 
 	$(document).on('click','.sao-lightbox-post-content.sao-multi-lightbox .sao-lightbox-prevbig',function() {
			$.sao_lightboxMove('prev', $('.sao-prettyphoto .sao-image img').parent('a'));
	});

	$(document).on('click','.sao-lightbox-outer',function() {
			$('.sao-lightbox').slideToggle('fast');
	});
		
	$(document).on('click','.sao-lightbox-close',function() {
		$('.sao-lightbox').removeClass('sao-lightbox-singleimg').removeClass('sao-multi-lightbox').slideToggle('fast');
		$('.sao-lightbox').removeClass('sao-lightbox-post-contet').removeClass('sao-lightbox-gallery');
	});  
		 
	$(document).on('click','.sao-multi-lightbox.sao-lightbox-post-content .sao-lightbox-nextbig,.sao-multi-lightbox.sao-lightbox-post-content .sao-lightbox-targetimg',function() {
    	$.sao_lightboxMove('next', $('.sao-prettyphoto .sao-image img').parent('a'));
	});
 
	
	  function sao_numberpersian(input) {
            var inputstring = input;
            var english  = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"]
            var persian = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"]
            for (var i = 0; i < 10; i++) {
                var regex = new RegExp(persian[i], 'g');
                inputstring = inputstring.toString().replace(regex, english[i]);
            }
            return inputstring;
        }
		
	
	var sao_lightboxActual = null;

	$.sao_lightboxMessage = function (actual, last) {
    	return '' + sao_numberpersian(actual  + ' / ' + last);
	};
 
		
  
		$(document).on('keydown', function (event) {
			if(event.keyCode  == 37 ){
				
	
				if($('.sao-lightbox').hasClass('sao-multi-lightbox')){
				if($('.sao-lightbox').hasClass('sao-lightbox-post-content') ){
							
					$.sao_lightboxMove('prev', $('.sao-prettyphoto .sao-image img').parent('a'));
				}
				}
			}
		});
		$(document).on('keydown', function (event) {
				
				if($('.sao-lightbox').hasClass('sao-multi-lightbox')){
				if($('.sao-lightbox').hasClass('sao-lightbox-post-content') ){
					if(event.keyCode  == 39 ){
						$.sao_lightboxMove('next', $('.sao-prettyphoto .sao-image img').parent('a'));
					}
				}
				}
			
		});	
	
		 }
	
	
 })(jQuery);
