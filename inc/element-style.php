<?php

if ( !function_exists ( "sao_post_title_css" )){

function sao_post_title_css( $option,$item = false) {
	$css='';

   	//Title Box Text
$title_css='';
	$title_css.= sao_builder_font_family_rtl($option,'title_font_family','title_font_weight') ;
 	$title_css.= sao_builder_color($option,'title_color') ;
	$title_css.= sao_builder_font_family($option,'title_font_family') ;
	$title_css.= sao_builder_font_size($option,'title_font_size') ;
	$title_css.= sao_builder_font_weight($option,'title_font_weight');
  	$title_css.= sao_builder_line_height( $option,'title_line_height' );
	$title_css.= sao_builder_text_transform($option,'title_transform');
	$title_css.= sao_builder_font_style( $option,'title_font_style' );
 	 
	$css.= sao_builder_item_css($title_css ,$item.' .sao-title'); 
 
	$hover_title_css= sao_builder_color($option,'hover_title_color') ;
	$css.= sao_builder_item_css($hover_title_css,$item.':hover .sao-title');  
	return $css;
  		
}
}
if ( !function_exists ( "sao_post_gap_css" )){

function sao_post_gap_css( $option,$item = false) {
	$css='';
    	//Title Box Text
 	if(!empty($option['space_item']['size'])){
		if(intval($option['space_item']['size'])){
			
			$margin='';
			$unit = !empty($option['space_item']['unit']) ? $option['space_item']['unit'] : 'px';
			$size = $option['space_item']['size'];
	
			$margin = ' padding:'.($size/2).$unit.' !important ';
			$css.= sao_builder_item_css($margin ,$item.' .sao-post-group-flex .sao-multi-post-item'); 
		 
 			$width = ' width:calc(100% + '.$size.$unit.') !important;margin:-'.($size/2).$unit.' !important; ';
 			$css.= sao_builder_item_css($width ,$item.' .sao-post-group-flex'); 
		}
	}
		
 	return $css;
  		
}
}
if ( !function_exists ( "sao_text_css" )){


function sao_text_css( $option,$item = false) {
	$css='';

   	//Title Box Text
 
 	//Title Css
 	$font_css='';
  	$font_css.= sao_builder_color( $option,'text_color');
	$font_css.= sao_builder_font_family($option,'text_font_family') ;
     	$font_css.= sao_builder_font_size( $option,'text_font_size' );
  	$font_css.= sao_builder_font_weight( $option,'text_font_weight' );
  	$font_css.= sao_builder_line_height( $option,'text_line_height' );
   	$font_css.= sao_builder_text_transform( $option,'text_transform' );
 	
	$css.= sao_builder_item_css( $font_css,$item.' .sao_text_block,'.$item.' .sao_text_block *' );
 
	return $css;
  		
}
}
if ( !function_exists ( "sao_details_css" )){


function sao_details_css( $option,$item = false) {
	$css='';

   	//Title Box Text
//Details Css
	$details_css='';
	$details_css.= sao_builder_color($option,'details_color') ;
 	$details_css.= sao_builder_font_family($option,'details_font_family');
	$details_css.= sao_builder_font_size($option,'details_font_size') ;
  	$details_css.= sao_builder_font_weight($option,'details_font_weight');
  	$details_css.= sao_builder_line_height( $option,'details_line_height' );
	$details_css.= sao_builder_font_style( $option,'details_font_style' );
  	$details_css.= sao_builder_margin_top( $option,'space_title_details' );
	
 	$css.= sao_builder_item_css($details_css , $item .' .sao-excerpt'); 
 
	return $css;
  		
}
}
?>