<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element   Text Block
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_text_block" )){
add_filter('sao_element_item', 'sao_element_item_text_block');
function sao_element_item_text_block( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	__('Text Editor','saoshyant-page-builder'),
 		'id'			=> 'text_block',
		'img'			=>  SAOPAGE_DIR.'assets/image/text_block.jpg'
  	); 
 
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																     Text Block Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_text_block_options" )){
add_filter('sao_element_options_text_block', 'sao_text_block_options');
function sao_text_block_options( $option ) {
 	 
	$option[]= array( 
		"name"			=> __('Content','saoshyant-page-builder'),
  		"id"			=> "content",
  		"default"		=> 	__('<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>','saoshyant-page-builder'),
		"type"			=> "editor", 
	);  
	 
  
	$option[]= array( 
		"name"			=> __('Padding','saoshyant-page-builder'),
 		"id"			=> "padding",
  		"desc"			=>  __('Padding around the entire ,Default "0"','saoshyant-page-builder'),
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
 
	/********************************************************************
	Boxed Style
	*********************************************************************/		
	$option[]= array( 
		"name"			=> __('Style Layout','saoshyant-page-builder'),
 		"id"			=> "box_layout",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
  		"default"		=> '',
		"type"			=> "select",
		"options"		=>   array( 
 			""		=> __('None','saoshyant-page-builder'),
			"boxed"		=> __('Boxed','saoshyant-page-builder'),
		), 						
 	); 	 	
	

	$boxed_fold = array( 
			"boxed" => "box_layout", 
		);
	
	$option[]= array( 
		"name"			=> __('Padding in Boxed','saoshyant-page-builder'),
 		"id"			=> "padding_boxed",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"fold"			=>	$boxed_fold,
		"default"		=>  array( 
			"top"			=> '20',
			"left"			=> '20',
			"bottom"		=> '20',
			"right"			=> '20',
 			), 
 		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('margin'),						
 	);
	$option[]= array( 
		"name"			=>	esc_html__('Boxed Style','saoshyant-page-builder'),
 		"id"			=> "boxed_style_start", 
  		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"fold"			=>	$boxed_fold,
  		"type"			=>  "according-start",						
   	); 
  	 		
		
	$option[]= array( 
		"name"			=> __('Boxed Background Color','saoshyant-page-builder'),
 		"id"			=> "boxed_background_color",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"fold"			=>	$boxed_fold,
  		"type"			=> "color_rgba",
 	); 	

	$option[]= array( 
		"name"			=> __('Boxed Border','saoshyant-page-builder'),
 		"id"			=> "boxed_border",
 
		"default"		=>  array( 
			"size"			=> '1',
			"color"			=> '#eeeeee',
  		), 
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"type"			=> "multi_options",
 		"fold"			=>	$boxed_fold,
		"options"		=>  sao_multi_array_options('border_2'),						
	); 	
	
	
	$option[]= array( 
		"name"			=> __('Boxed Shadow','saoshyant-page-builder'),
 		"id"			=> "boxed_shadow",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"type"			=> "multi_options",
 		"fold"			=>	$boxed_fold,
		"options"		=>  sao_multi_array_options('shadow_mini'),						
 	); 
 
	 	
 	$option[]= array( 
		"name"			=> __('Border Radius','saoshyant-page-builder'),
 		"id"			=> "boxed_radius",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"type"			=> "multi_options",
  		"options"		=>  sao_multi_array_options('radius_mini'),						
	 
	); 	 
 
	$option[]= array( 
		"name"			=> __('Boxed Style','saoshyant-page-builder'),
 		"id"			=> "boxed_style_end", 
 		"fold"			=>	array( "boxed" => "style_layout"), 
  		"fold"			=>	$boxed_fold,
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
  		"type"			=>  "according-end",						
   	); 	

	$option[]= array( 
		"name"			=> __('Text Color','saoshyant-page-builder'),
 		"id"			=> "text_color",
 		"group"			=>  __('Design','saoshyant-page-builder'),
		"type"			=> "color_rgba", 
		
  	);  
	
  	include SAOPAGE_PATH . 'element/mini/text_typography.php';
	
	 


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
 
																   Text Block Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
if ( !function_exists ( "sao_text_block_config" )){
add_filter('sao_builder_text_block', 'sao_text_block_config');
function sao_text_block_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	ob_start(); 
	if(sao_element_show($option)=='show'){
 	global $sao_mini_style;
	$sao_mini_style++;
	$output='';
	$css ='';
	
 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
 	
	$classes=array(
		'sao-el-'.$key,
		 sao_element_show($option,true),
		$custom_class,
		'sao-text-block',
		 sao_el_box_layout($option),
   
	);
  
	
 
 
	if(!empty($option['content'])){?>
		<article <?php echo sao_el_id($option); ?> class="<?php echo esc_attr(join( ' ', $classes ));?>" <?php echo sao_el_cssanime($option);?>><?php echo wp_kses_post($option['content']);?></article> 
     <?php
    }  
	$item = '.sao-el-'.$key.''; 
	
	$item_css = sao_boxed_css($option,false); 
	$item_css.= sao_content_css($option); 
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