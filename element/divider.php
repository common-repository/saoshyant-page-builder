<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Divider
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_divider" )){
add_filter('sao_element_item', 'sao_element_item_divider');
function sao_element_item_divider( $element ) {
 	
 	$element[] =  array(
 		'name'			=> 	__('Divider / Line','saoshyant-page-builder'),
 		'id'			=> 'divider',
 		'img'			=>  SAOPAGE_DIR.'assets/image/divider.jpg'
  	); 
	return $element;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Divider Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_divider_options" )){
add_filter('sao_element_options_divider', 'sao_divider_options');
function sao_divider_options( $option ) {
 
 
 
 	
	$option[]= array( 
		"name"			=> __('Divider','saoshyant-page-builder'),
		"id"			=> "divider",
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
		"name"			=> __('Width','saoshyant-page-builder'),
		"id"			=> "width",
		"type"			=> "select",
		"options"		=>  array(
			"100%"			=> "100%",
			"95%"			=> "95%",
			"90%"			=> "90%",
			"85%"			=> "85%",
			"80%"			=> "80%",
			"75%"			=> "75%",
			"70%"			=> "70%",
			"65%"			=> "65%",
			"60%"			=> "60%",
			"55%"			=> "55%",
			"50%"			=> "50%",
			"45%"			=> "45%",
			"40%"			=> "40%",
			"35%"			=> "35%",
			"30%"			=> "30%",
			"25%"			=> "25%",
			"20%"			=> "20%",
			"15%"			=> "15%",
			"10%"			=> "10%",
			"5%"			=> "5%",
			),
 		);	
	
 
  
 	$option[]= array( 
		"name"			=> __('Alignment','saoshyant-page-builder'),
 		"id"			=> "alignment",
 		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>  'center',
		"desc"			=>  __('Default "Center"','saoshyant-page-builder'),
		"type"			=> "select",
		"options"		=>  sao_array_options('align'),  				
		 
	); 
	$option[]= array( 
		"name"			=> __('Padding','saoshyant-page-builder'),
 		"id"			=> "padding",
  		"desc"			=>  __('Padding around the entire row,Default "0"','saoshyant-page-builder'),
 		"group"			=>  __('Layout','saoshyant-page-builder'),
 		"default"		=>  array( 
				"top"		=> 0,
				"left"		=> 0,
				"bottom"	=> 0,
				"right"		=> 0,
  						) ,  
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
 
																   Divider Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_divider_config" )){
add_filter('sao_builder_divider', 'sao_divider_config');
function sao_divider_config( $args ) {
 
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
		'sao-divider',
    
	);
	?>
	
    <aside  <?php  sao_el_id($option);?>  class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php  sao_el_cssanime($option);?> >
	
    <?php
	$item = '.sao-el-'.$key.''; 
 	$item_css='';
   	$item_css.= sao_var_border_mini('dv',$option,'divider'); 
 	$item_css.= sao_var_float('ag',$option,'alignment','center') ;
	$item_css.= sao_var('dv-wt',$option,'width') ;
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