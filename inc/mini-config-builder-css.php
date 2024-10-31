<?php

/*----------------------------------------------------------------
	 Box Boxed
 -------------------------------------------------------------*/

if ( !function_exists ( "sao_style_boxed_css" )){
function sao_style_boxed_css( $option,$item = false) {
	$css='';
	$boxed_css='';
  	$boxed_css.= sao_builder_background_color($option,'boxed_background_color');
	$boxed_css.= sao_builder_border_2( $option,'boxed_border');
	$boxed_css.= sao_builder_shadow( $option,'boxed_shadow');
	$boxed_css.= sao_builder_radius_mini($option,'boxed_radius');
  	$css.= sao_builder_item_css($boxed_css , $item .' .sao_style_boxed .sao-box-background');
	$hover_boxed_css='';

  	$hover_boxed_css.= sao_builder_background_color($option,'hover_boxed_background_color');
	$hover_boxed_css.= sao_builder_border_2( $option,'hover_boxed_border');
	$hover_boxed_css.= sao_builder_shadow( $option,'hover_boxed_shadow');
   	$css.= sao_builder_item_css($hover_boxed_css , $item .' .sao_style_boxed:hover .sao-box-background');	
	 	
	$padding_boxed_css= sao_element_padding_item($option,'padding_boxed');
  	$css.= sao_builder_item_css($padding_boxed_css , $item .' .sao_style_boxed'); 		
	return $css;
 		
}
}

if ( !function_exists ( "sao_style_multi_boxed_css" )){

function sao_style_multi_boxed_css( $option,$item = false) {
	$css='';
	$boxed_css='';
  	$boxed_css.= sao_builder_background_color($option,'boxed_background_color');
	$boxed_css.= sao_builder_border_2( $option,'boxed_border');
	$boxed_css.= sao_builder_shadow( $option,'boxed_shadow');
	$boxed_css.= sao_builder_radius_mini($option,'boxed_radius');
  	$css.= sao_builder_item_css($boxed_css , $item .' .sao_style_boxed .sao-box-background');
	$hover_boxed_css='';
 	 
 		
}
}
/*----------------------------------------------------------------
	 Icon Boxed
 -------------------------------------------------------------*/
 if ( !function_exists ( "sao_style_icon_css" )){

function sao_style_icon_css( $option,$item = false) {
	$css='';
 	$icon_size_css = sao_builder_font_size($option,'icon_font_size'); 
	$css.=sao_builder_item_css($icon_size_css,$item.' .sao-icon i');
	
	
 
 	$icon_css = sao_builder_color($option,'icon_color'); 
	$css.=sao_builder_item_css($icon_css,$item.' .sao-icon i');
	
	$hover_color_css= sao_builder_color($option,'hover_color'); 
	$css.=sao_builder_item_css($hover_color_css,$item.':hover .sao-icon i');
	
	
 	if(!empty($option['icon_layout'])){

	 
	$style_icon_css= '';
	$icon_alignment = !empty($option['icon_alignment']) ?$option['icon_alignment'] : 'left';

	$border_radius= sao_builder_radius_mini($option,'icon_radius');  
	$css.=sao_builder_item_css($border_radius,$item.' .sao-icon-boxed-square,'.$item.' .sao-icon-boxed-diamond');
	
	 
	$style_icon_css = sao_builder_gradient_background_color($option,'icon_background');
	$style_icon_css.= sao_builder_border_mini($option,'icon_border');
	$css.=sao_builder_item_css($style_icon_css,$item.' .sao-icon .sao-icon-background');
		


	$hover_background_css= sao_builder_gradient_background_color($option,'hover_icon_background');
 	$css.=sao_builder_item_css($hover_background_css,$item.' .sao-icon .sao-icon-background-hover');
	
	$hover_icon_border_css =sao_builder_border_mini($option,'hover_icon_border');
  	$css.=sao_builder_item_css($hover_icon_border_css,$item.':hover .sao-icon-background');
	
	//Icon Css 
 
	}
	return $css;
 		 
}
}
 if ( !function_exists ( "sao_style_button_css" )){
function sao_style_button_css( $option,$item = false) {
	$css='';

	$button_text_css = sao_builder_color($option ,'button_color');
	$css.=sao_builder_item_css($button_text_css,$item.' span');
	
	$hover_button_text_css = sao_builder_color($option ,'hover_button_color');
	$css.=sao_builder_item_css($hover_button_text_css,$item.':hover span');
	 
  		 
	$background_css= sao_builder_gradient_background_color($option,'button_background');
	$css.=sao_builder_item_css($background_css,$item.' .sao-button-background');
			
	$hover_background_css = sao_builder_gradient_background_color($option,'hover_button_background');
	$css.=sao_builder_item_css($hover_background_css,$item.' .sao-button-background::before');			
	 
	$border= sao_builder_border_mini($option,'button_border');				
	$css.=sao_builder_item_css($border,$item.' .sao-button-background');
	
  	$hover_button_border= sao_builder_border_mini($option,'hover_button_border');				
	$css.=sao_builder_item_css($hover_button_border,$item.':hover .sao-button-background');
  
	//All Button
 	$all_button_css= sao_builder_margin_top($option,'button_margin_top');  
 	$all_button_css.= sao_element_padding_item($option,'button_padding');  
	$css.=sao_builder_item_css($all_button_css,$item.' .sao-button');
 
 	$button_radius_css= sao_builder_radius_mini($option,'button_radius'); 
	$css.=sao_builder_item_css($button_radius_css,$item.' .sao-button-background');


    $css.= sao_builder_font_family_rtl($option,'button_font_family','button_font_weight') ;
	
	
	$font_css='';
 	$font_css.= sao_builder_font_family($option,'button_font_family') ;
	$font_css.= sao_builder_font_size($option,'button_font_size') ;
	$font_css.= sao_builder_font_weight($option,'button_font_weight');
	$font_css.= sao_builder_text_transform($option,'button_transform');
	$font_css.= sao_builder_font_style( $option,'button_font_style' );
 	$css.= sao_builder_item_css($font_css , $item .' .sao-button span'); 
 	$css.= sao_builder_item_css($font_css , $item .' .sao-button'); 
 	
	return $css;

}
 }
 if ( !function_exists ( "sao_style_details_css" )){
function sao_style_details_css( $option,$item = false) {
	$css='';
  	//Title Css
 	$css.= sao_builder_font_family_link($option,'title_font_family','title_font_weight') ;
     $css.= sao_builder_font_family_rtl($option,'title_font_family','title_font_weight') ;
	
	$title_css='';
	$title_css.= sao_builder_color($option,'title_color') ;
	$title_css.= sao_builder_font_family($option,'title_font_family') ;
	$title_css.= sao_builder_font_size($option,'title_font_size') ;
	$title_css.= sao_builder_font_weight($option,'title_font_weight');
  	$title_css.= sao_builder_line_height( $option,'title_line_height' );
	$title_css.= sao_builder_text_transform($option,'title_transform');
	$title_css.= sao_builder_font_style( $option,'title_font_style' );
 	 
	$css.= sao_builder_item_css($title_css , $item.' .sao-title'); 

  	$title_line_margin = sao_builder_margin_top($option ,'space_title_details'); 
 	$css.= sao_builder_item_css($title_line_margin , $item .' .sao-title-line-bottom'); 	
  	$title_line_bottom= sao_builder_width($option ,'title_line_bottom','width'); 
  	$title_line_bottom.= sao_builder_border_mini_top($option , 'title_line_bottom'); 
 	$css.= sao_builder_item_css($title_line_bottom , $item .' .sao-title-line-bottom::before'); 
	
	$hover_title_css= sao_builder_color($option,'hover_title_color') ;
	$css.= sao_builder_item_css($hover_title_css,$item.':hover .sao-title'); 
	//Details Css
	$details_css='';
	$details_css.= sao_builder_color($option,'details_color') ;
 	$details_css.= sao_builder_font_size($option,'details_font_size') ;
  	$details_css.= sao_builder_font_weight($option,'details_font_weight');
  	$details_css.= sao_builder_line_height( $option,'details_line_height' );
	$details_css.= sao_builder_font_style( $option,'details_font_style' );
  	$details_css.= sao_builder_margin_top( $option,'space_title_details' );
 	$css.= sao_builder_item_css($details_css , $item .' .sao-excerpt'); 
	
	$hover_details_css= sao_builder_color($option,'hover_details_color') ;
	
	
	
	
	$css.= sao_builder_item_css($hover_details_css , $item .':hover .sao-excerpt');  	   
	return $css;
}
 }
/*----------------------------------------------------------------
	 Image Boxed
 -------------------------------------------------------------*/	
if ( !function_exists ( "sao_style_image_css" )){
function sao_style_image_css( $option,$item = false,$slider_item = false) {
	$css='';
	$image_css='';
 	$image_css.= sao_builder_border_2( $option,'image_border');
	$image_css.= sao_builder_shadow( $option,'image_shadow');
	$image_css.= sao_builder_radius_mini($option,'image_radius');
   	$css.= sao_builder_item_css($image_css , $item .' .sao-image ');
	
  	$hover_image_css= sao_builder_border_2( $option,'hover_image_border');
	$hover_image_css.= sao_builder_shadow( $option,'hover_image_shadow');
	
   	$css.= sao_builder_item_css($hover_image_css , $item .':hover .sao-image ');
	
  	$background_css='';
 
 	$background_css.= sao_builder_background_color($option,'caption_background_color');  
  	$css.= sao_builder_item_css($background_css,$item.' figcaption');	 
	
	$caption_css = sao_builder_color($option,'caption_color') ;
  	$css.= sao_builder_item_css($caption_css,$item.' .sao-hover-caption ');	 
	
   	$border_css= !empty($option['caption_color']) ? ' border-color:'.$option['caption_color'].' !important;': ' ';
	$css.= sao_builder_item_css($border_css , $item .' figcaption::after,'.$item .' figcaption::before'); 
			
  	return $css;
 		
}
}
/*----------------------------------------------------------------
	 Image slider Thumb
 -------------------------------------------------------------*/	
 if ( !function_exists ( "sao_style_slider_thumb_css" )){

function sao_style_slider_thumb_css( $option,$item = false) {
	$css='';
	$image_css='';
 	$image_css.= sao_builder_border_2( $option,'image_border');
	$image_css.= sao_builder_shadow( $option,'image_shadow');
	$image_css.= sao_builder_radius_mini($option,'image_radius');
  	$css.= sao_builder_item_css($image_css , $item .' .sao-slider-thumb ');
	
  	$hover_image_css= sao_builder_border_2( $option,'hover_image_border');
	$hover_image_css.= sao_builder_shadow( $option,'hover_image_shadow');
 	$css.= sao_builder_item_css($hover_image_css , $item .':hover .sao-slider-thumb ');
 
			
  	return $css;
 		
}
 }
 if ( !function_exists ( "sao_style_image_slider_css" )){

/*----------------------------------------------------------------
	 Image Slider
 -------------------------------------------------------------*/	
function sao_style_image_slider_css( $option,$item = false,$slider_item = false) {
	$css='';
	$image_css='';
 	$image_css.= sao_builder_border_2( $option,'image_border');
	$image_css.= sao_builder_shadow( $option,'image_shadow');
	$image_css.= sao_builder_radius_mini($option,'image_radius');
   	$css.= sao_builder_item_css($image_css , $item .' .lSSlideOuter');
	
  	$hover_image_css= sao_builder_border_2( $option,'hover_image_border');
	$hover_image_css.= sao_builder_shadow( $option,'hover_image_shadow');
	
    	$css.= sao_builder_item_css($hover_image_css , $item .':hover ');
	
  	$background_css='';
 
 	$background_css.= sao_builder_background_color($option,'caption_background_color');  
  	$css.= sao_builder_item_css($background_css,$item.' figcaption');	 
	
	$caption_css = sao_builder_color($option,'caption_color') ;
  	$css.= sao_builder_item_css($caption_css,$item.' .sao-hover-caption ');	 
	
   	$border_css= !empty($option['caption_color']) ? ' border-color:'.$option['caption_color'].' !important;': ' ';
	$css.= sao_builder_item_css($border_css , $item .' figcaption::after,'.$item .' figcaption::before'); 
			
  	return $css;
 		
}
}


 ?>