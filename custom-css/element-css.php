<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Title Css
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_title_css" )){
function sao_title_css($option=false,$hover=true) {
	$css='';
  	//Title Css
 
	if(!empty($option['title']) ){
	$css.= sao_var('tl-cr',$option,'title_color') ;
	$css.= sao_var_size('tl-fn-sz',$option,'title_font_size','size') ;
	$css.= sao_var_font_weight('tl',$option,'title_font_weight','bold') ;
	$css.= sao_var_size('tl-li-ht',$option,'title_line_height','size') ;
	$css.= sao_var('tl-fn-st',$option,'title_font_style') ;
		if($hover==true){
  		 	$css.= sao_var('hv-tl-cr',$option,'hover_title_color') ;
		}
	}
  	return $css;
}
}
 
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Headin Css
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_heading_css" )){

function sao_heading_css($option=false,$hover=true) {
	$css='';
  	//Title Css
 
	if(!empty($option['title']) ){
	$css.= sao_var('tl-cr',$option,'title_color') ;
	$css.= sao_var_size('tl-fn-sz',$option,'title_font_size','size') ;
	$css.= sao_var_font_weight('tl',$option,'title_font_weight','bold') ;
	$css.= sao_var_size('tl-li-ht',$option,'title_line_height','size') ;
	$css.= sao_var('tl-fn-st',$option,'title_font_style') ;
		if($hover==true){
  		 	$css.= sao_var('hv-tl-cr',$option,'hover_title_color') ;
		}
	}
  	return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Excerpt Css
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_excerpt_css" )){

function sao_excerpt_css($option=false,$hover=true) {
	$css='';
  	//Title Css
 
	if(!empty($option['details']) ){
	$css.= sao_var('ex-cr',$option,'details_color') ;
	$css.= sao_var_size('ex-fn-sz',$option,'details_font_size','size') ;
	$css.= sao_var_font_weight('ex',$option,'details_font_weight','normal') ;
	$css.= sao_var_size('ex-li-ht',$option,'details_line_height','size') ;
	$css.= sao_var('ex-fn-st',$option,'details_font_style') ;
		if($hover==true){
			$css.= sao_var('hv-ex-cr',$option,'hover_details_color') ;
		}
	}
  	return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Excerpt Css
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_text_css" )){

function sao_text_css($option=false,$hover=true) {
	$css='';
  	//Title Css
 
	if(!empty($option['text']) ){
	$css.= sao_var('ex-cr',$option,'text_color') ;
	$css.= sao_var_size('ex-fn-sz',$option,'text_font_size','size') ;
	$css.= sao_var_font_weight('ex',$option,'text_font_weight','normal') ;
	$css.= sao_var_size('ex-li-ht',$option,'text_line_height','size') ;
	$css.= sao_var('ex-fn-st',$option,'text_font_style') ;
		if($hover==true){
			$css.= sao_var('hv-ex-cr',$option,'hover_text_color') ;
		}
	}
  	return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Text Css
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_content_css" )){

function sao_content_css($option=false,$hover=true) {
	$css='';
  	//Title Css
 
	if(!empty($option['content']) ){
	$css.= sao_var('tb-cr',$option,'text_color') ;
	$css.= sao_var_size('tb-fn-sz',$option,'text_font_size','size') ;
	$css.= sao_var_font_weight('tb',$option,'text_font_weight','normal') ;
	$css.= sao_var_size('tb-li-ht',$option,'text_line_height','size') ;
	$css.= sao_var('tb-fn-st',$option,'text_font_style') ;
	 
	}
  	return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Boxed Css
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_boxed_css" )){

function sao_boxed_css( $option=false,$hover=true) {
	$css='';
 
	$bg_item='';
 	$box_layout = !empty($option['box_layout']) ? $option['box_layout']: 'none';
	$padding_item='';
	if($box_layout!=='none'){
 
 	$css.= sao_var('bx-bg',$option,'boxed_background_color') ;
	$css.= sao_var_border_2('bx',$option,'boxed_border') ;
	$css.= sao_var_shadow_mini('bx',$option,'boxed_shadow') ;
	$css.= sao_var_radius_mini('bx',$option,'boxed_radius') ;

	if($hover==true){
	$css.= sao_var('hv-bx-bg',$option,'hover_boxed_background_color') ;
	$css.= sao_var_border_2('hv-bx',$option,'hover_boxed_border') ;
	$css.= sao_var_shadow('hv-bx',$option,'hover_boxed_shadow') ;
	}
 
	$css.=  sao_var_padding('bx-pd',$option,'padding_boxed');
  
	}
	return $css;
 		
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Element Padding
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_padding" )){

function sao_element_padding( $option=false,$item = false) {
	$css='';
	 
	  
	$css.= sao_var_padding('el-pd',$option,'padding');
 		
	$css.= sao_var_padding('el-tab-pd',$option,'tablet_padding');
	$css.= sao_var_padding('el-mob-pd',$option,'mobile_padding');
 	 
		
	 
 	return $css;
	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Line
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_line_css" )){
function sao_line_css( $option=false) {
$css='';
if(!empty($option['title_line_bottom']['width']) && !empty($option['title_line_bottom']['size'])){
 		
  			$css.= '--sao-li-wt:'.$option['title_line_bottom']['width'].';';		
 			$border_width = intval(isset($option['title_line_bottom']['size'])) ? $option['title_line_bottom']['size'].'px ' : '';		
			$border_style =  isset($option['title_line_bottom']['style']) ?  $option['title_line_bottom']['style']: '';		
			$border_color =  isset($option['title_line_bottom']['color']) ?  $option['title_line_bottom']['color']: ' var(--sao-br-cr)';	
   			$css.= '--sao-li-br:'.$border_width.' '.$border_style.' '.$border_color.';';
 		
}
return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Icon
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_icon_css" )){

function sao_icon_css( $option=false,$item = false ) {
	$css='';
	
	// if(!empty($option['icon'])){

	 
 	$css.= sao_var_size('icn-sz',$option,'icon_font_size','size'); 
 	$css.= sao_var('icn-cr',$option,'icon_color'); 
 	$css.= sao_var('hv-icn-cr',$option,'hover_color'); 
 	
 
 

 	$icon_layout = !empty($option['icon_layout']) ? $option['icon_layout'] : ' ';
	$icon_hover = sao_icon_background_hover( $option);
	$icon_hover = !empty($icon_hover)? 'ef' : 'hv';
 		
 	  

	if(!empty($icon_layout)){
 
		  if($icon_layout=='boxed-rounded' || $icon_layout=='boxed-square' || $icon_layout=='boxed-diamond'){ 	
			 $css.= sao_var_gradient_background_color('icn',$option,'icon_background');
 			 $css.= sao_var_border_mini('icn',$option,'icon_border');
 			
 			
			$css.= sao_var_gradient_background_color($icon_hover.'-icn',$option,'hover_icon_background');
 			 $css.= sao_var_border_mini($icon_hover.'-icn',$option,'hover_icon_border');
			
		 }	 

  			
			 
			if($icon_layout=='boxed-diamond' || $icon_layout=='boxed-square'){
				$css.= sao_var_radius_mini('icn',$option,'icon_radius'); 
 			}
			 
		$css.=sao_icon_hover( $option);
		$css.=sao_var('icn-pd',$option,'icon_boxed_size');

	}
 	//}
	return $css;
 		 
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Button
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_button_css" )){
function sao_button_css( $option=false) {
	$css='';
 	if(!empty($option['button'])){
   
   
	$style =  !empty($option['button_style'])  ?  $option['button_style'] : 'style-1';		
  
	$css.= sao_var('btn-cr',$option ,'button_color');
	$css.= sao_var('hv-btn-cr',$option ,'hover_button_color');
 	 
	 if($style=='style-7'){
	  		$css.= '--sao-btn-pd:0px; '; 
 		 
 		}else{
			$css.=  sao_var_padding_mini('btn',$option,'button_padding');
 	 
			 $css.= sao_var_gradient_background_color('btn',$option,'button_background');
			 $css.= sao_var_gradient_background_color('hv-btn',$option,'hover_button_background');
			 
			 $css.= sao_var_border_mini('btn',$option,'button_border');
			 $css.= sao_var_border_mini('hv-btn',$option,'hover_button_border');
			  
			 $css.=sao_var_button_style($option);
 		}
	$css.= sao_var_radius_mini('btn',$option,'button_radius'); 
 	
 	$css.= sao_var_size('btn-fn-sz',$option,'button_font_size','size') ;
	$css.= sao_var_font_weight('btn',$option,'button_font_weight','500') ;
	$css.= sao_var('btn-fn-st',$option,'button_font_style') ;
   	}
	return $css;

}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Multi Border
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_multi_border_css" )){

function sao_multi_border_css( $option=false,$item = false) {
	$css='';
	 
 if(!empty($option['border_between_item']['size'])){
 		$css.= sao_var_size('gp-br-wt',$option,'border_between_item','size') ;
		$css.= sao_var_2('gp-br-st',$option,'border_between_item','style') ;
		$css.= sao_var_2('gp-br-cr',$option,'border_between_item','color') ;
	 }
 	return $css;
	
}
}


/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Image Css
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_css" )){

function sao_image_css($option=false ) {
	$css='';
	$image_css='';
 	if(!empty( $option['image_hover'])){
		sao_caption_effect($option);
	}
 	$image_css.= sao_var_border_2( 'img',$option,'image_border' );
	$image_css.= sao_var_shadow( 'img',$option,'image_shadow');
	$image_css.= sao_var_radius_mini( 'img',$option,'image_radius');
 
 
 	$image_css.= sao_var_border_2( 'hv-img',$option,'hover_image_border'  );
	$image_css.= sao_var_shadow( 'hv-img',$option,'hover_image_shadow');
	 	
  	$image_css.= sao_var('cap-bg',$option,'caption_background_color');  
 	$image_css.= sao_var('cap-cr',$option,'caption_color') ;
 	
 
			
  	return $image_css;
 		
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Slider Css
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_slider_css" )){

function sao_slider_css($option=false ) {
	$css='';
	$image_css='';
 	if(!empty( $option['image_hover'])){
		sao_caption_effect($option);
	}
 	$image_css.= sao_var_border_2( 'sl',$option,'image_border' );
	$image_css.= sao_var_shadow( 'sl',$option,'image_shadow');
	$image_css.= sao_var_radius_mini( 'sl',$option,'image_radius');
 
 
 	$image_css.= sao_var_border_2( 'hv-sl',$option,'hover_image_border'  );
	$image_css.= sao_var_shadow( 'hv-sl',$option,'hover_image_shadow');
	 	
  	$image_css.= sao_var('cap-bg',$option,'caption_background_color');  
 	$image_css.= sao_var('cap-cr',$option,'caption_color') ;
 	
 
			
  	return $image_css;
 		
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Arrow Layout Css
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_arrow_layout_css" )){

function sao_arrow_layout_css( $option=false) {
  	$arrow_location = !empty($option['arrow_layout']['location'])?  $option['arrow_layout']['location'] :'';
  	$arrow_size = !empty($option['arrow_layout']['size'])?  $option['arrow_layout']['size'] :'';
  	$arrow_layout = !empty($option['arrow_layout']['layout'])?  $option['arrow_layout']['layout'] :'';
	$css ='';
	if($arrow_size == 'small'){
		$size='30px';
		$css.='--sao-aw-sz:30px;';	
	}elseif($arrow_size == 'large'){
		$css.='--sao-aw-sz:60px;';
		$size='60px';
 	}else{
		$size='45px';
	}
	
 	if($arrow_location == 'slider-2'){
		$css.='--sao-aw-lc:20px;';	
	}elseif($arrow_location == 'slider-3'){
		$css.='--sao-aw-lc:calc('.$size.' / -2);';
	}
	
	if($arrow_layout == 'fixed'){
		$css.='--sao-aw-ly:1;';	
	} 
	if(!empty($option['arrow_radius'])){
		$css.='--sao-aw-rd:'.$option['arrow_radius'].'px;';
 	}
	$css.=sao_var_2('aw-cr',$option,'arrow_color','text');
	$css.=sao_var_2('aw-bg',$option,'arrow_color','background');
 	 
 	 
	 
	 
	return $css;
   
}
}
 ?>