 jQuery(function($) {
 
	 $.fn.sao_tabs = function() {

		 
	/****************************************************
	Accordion
	*****************************************************/
 	$(this).on('click', '.sao-ac-title', function() {
		var $this = $(this);
		if($(this).parent().hasClass('sao-active')){
  			$(this).next().slideUp(300, function() {
  				$this.parent().removeClass('sao-active');
			});
		}else{
			$this.parents('.sao-ac').find('.sao-ac-item.sao-active').each(function() {
				var $this_active = $(this);

				$this_active.find('.sao-ac-content').slideUp(300, function() {
					$this_active.removeClass('sao-active');
				});
 			});
			$(this).next().slideDown(300, function() {
  				$this.parent().addClass('sao-active');
			});
 		 
		 
 
 		}
   	}); 
 
	/****************************************************
	Tabs
	*****************************************************/
	$(this).on('click', '.sao-tabs-title', function(e) {

		var key = $(this).attr('data-key');
		$(this).parents('.sao-tabs').find('.sao-tabs-active').each(function(index, block) {
			$(this).removeClass('sao-tabs-active');
		});
		$(this).parents('.sao-tabs').find('.sao-tabs-content-active').each(function(index, block) {
			$(this).removeClass('sao-tabs-content-active');
		});	
		$(this).parents('.sao-tabs').find('[data-key="'+key+'"]').addClass('sao-tabs-content-active');
		$(this).addClass('sao-tabs-active');
	});
  	
	}
	   
 
 
});
 