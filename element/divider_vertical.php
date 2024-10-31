<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Divider Vertical
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_divider_vertical" )){
add_filter('sao_element_item', 'sao_element_item_divider_vertical');
function sao_element_item_divider_vertical( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	__('Vertical Divider / Line','saoshyant-page-builder'),
 		'id'			=> 'divider_vertical',
 		'img'			=>  SAOPAGE_DIR.'assets/image/divider_vertical.jpg'
  	); 
   
 
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Divider Vertical Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_divider_vertical_options" )){
add_filter('sao_element_options_divider_vertical', 'sao_divider_vertical_options');
function sao_divider_vertical_options( $option ) {
 
	 
	$option[]= array( 
		"name"			=> __('Divider','saoshyant-page-builder'),
		"id"			=> "divider_vertical",
		"default"		=>  array( 
				"size"		=> 3,
				),
		"type"			=> "multi_options",
		"options"		=>  array(
					array( 
						"name"			=>  __('Size','saoshyant-page-builder'),
						"id"			=> "size",
						"type"			=> "number",
					),	
 					array( 
						"name"			=> 	__('Style','saoshyant-page-builder'),
						"id"			=> "style",
						"type"			=> "select",
						"options"		=>  sao_array_options('border_style'),
					),					
					array( 
						"id"			=> "color",
						"type"			=> "color_rgba",
					),
					 					
					 
					
					
				),	
		);	
	
	$option[]= array( 
		"name"			=> __('Height','saoshyant-page-builder'),
		"id"			=> "height",
		"type"			=> "number",
		 
 		);	
	
 
  
 	$option[]= array( 
		"name"			=> __('Alignment','saoshyant-page-builder'),
 		"id"			=> "alignment",
 		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>  'center',
		"desc"			=>  __('Default "Center"','saoshyant-page-builder'),
		"type"			=> "select",
		"options"		=> sao_array_options('align'),					
		 
	); 
	$option[]= array( 
		"name"			=> __('Padding','saoshyant-page-builder'),
 		"id"			=> "padding",
  		"desc"			=>  __('Padding around the entire row,Default "0"','saoshyant-page-builder'),
 		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>   sao_builder_default_padding(),
  		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('margin'),						
		  
	);	 
	$option[]= array( 
		"name"			=> esc_html__('CSS Animation','saoshyant-page-builder'),
 		"id"			=> "cssanime",
		"desc"			=>  esc_html__('Select type of animation if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.','saoshyant-page-builder'),
 		"group"			=>  esc_html__('Layout','saoshyant-page-builder'),
		"type"			=> "select",
 		"options"		=>  sao_array_options('cssanime'),						
 	);
	

	$option[]= array( 
		"name"			=> esc_html__('Element ID','saoshyant-page-builder'),
 		"id"			=> "element_id",
 		"group"			=>  esc_html__('Attribute','saoshyant-page-builder'),
		"desc"			=>  esc_html__('Enter Column ID ,','saoshyant-page-builder').'<a href="https://www.w3schools.com/tags/att_global_id.asp">'.esc_html__('Learn more','saoshyant-page-builder').'</a>',
		"type"			=> "text",
		 
	);
	
	$option[]= array( 
		"name"			=> esc_html__('Element Custom Class','saoshyant-page-builder'),
 		"id"			=> "custom_class",
 		"group"			=>  esc_html__('Attribute','saoshyant-page-builder'),
		"desc"			=>  esc_html__('Enter Class ,','saoshyant-page-builder'),
		"type"		=> "text",

	);			 
  	include SAOPAGE_PATH . 'element/mini/responsive.php';
    return $option;
} 
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Divider Vertical Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ( !function_exists ( "sao_divider_vertical_config" )){
add_filter('sao_builder_divider_vertical', 'sao_divider_vertical_config');
function sao_divider_vertical_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
		
	if(sao_element_show($option)=='show'){
 	global $sao_mini_style;
	$sao_mini_style++;
		
	$output='';
	$css =''; 
	 	ob_start(); 

 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
 
  	$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
		'sao-divider-vertical',
    
	);?>
    
	<aside  <?php  sao_el_id($option);?>  class="<?php echo esc_attr(join( ' ', $classes ));?>" <?php  sao_el_cssanime($option);?> >

	<?php
 	
	$item = '.sao-el-'.$key; 
 	$item_css='';
	$item_css.= sao_var_border_mini('dv',$option,'divider_vertical'); 
 	$item_css.= sao_var_float('ag',$option,'alignment','center') ;
 	$item_css.= sao_var_unit('dv-ht',$option,'height','px') ;
	$item_css.= sao_element_padding($option);
	$css.=sao_item_css($item_css,$item);
    
 	$return['output']= ob_get_clean();
  	$return['css']= $css;
  	$return['emptybefore']= true;
  	$return['emptyafter']= true;
	
	 
	return $return;	
	}
}
}
?>