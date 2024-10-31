<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Html
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_html" )){
add_filter('sao_element_item', 'sao_element_item_html');
function sao_element_item_html( $element ) {
 	
	$element[] = array(
 		'name'			=> 	__('Html','saoshyant-page-builder'),
 		'id'			=> 'html',
		'img'			=>  SAOPAGE_DIR .'assets/image/html.jpg'
  	); 
   
 
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Html Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_html_options" )){
add_filter('sao_element_options_html', 'sao_html_options');
 function sao_html_options( $option ) {
 	 
	 
	$option[]= array( 
		"name"			=> __('Code','saoshyant-page-builder'),
 		"id"			=> "content",
  		"desc"			=> __('input html Code','saoshyant-page-builder'),
 		"type"			=> "textarea",
 		  
	);
 	$option[]= array( 
		"name"			=> __('Padding','saoshyant-page-builder'),
 		"id"			=> "padding",
  		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>  array( 
			"top"			=> '0',
			"left"			=> '0',
			"bottom"		=> '0',
			"right"			=> '0',
 			), 
		
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
		"name"			=> __('link Color','saoshyant-page-builder'),
 		"id"			=> "link_color", 
 		"group"			=>  __('Design','saoshyant-page-builder'),
 		"type"			=> "color_rgba", 
		
  	); 	
		
  	$option[]= array( 
		"name"			=> __('Text Color','saoshyant-page-builder'),
 		"id"			=> "text_color", 
 		"group"			=>  __('Design','saoshyant-page-builder'),
 		"type"			=> "color_rgba", 
		
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
 
																   Html Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_html_config" )){
add_filter('sao_builder_html', 'sao_html_config');
function sao_html_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
 	if(sao_element_show($option)=='show'){
	ob_start(); 
	
	  	$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
 		'sao-html',
 
  
	);
 	?>
 	 <aside  <?php sao_el_id($option);?>  class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php sao_el_cssanime($option);?> >

	
	<?php if(!empty($option['content'])){ ?>
  	 <section class="sao_text_block" ><?php echo wp_kses_post($option['content']);  ?></section>
	<?php } ?>
	</aside>
    <?php	
 	
 
 
 	$item = '.sao-el-'.$key; 
 	$item_css ='';
	$item_css.= sao_var('wdg-lk-cr',$option,'link_color'); 
	$item_css.= sao_var('wdg-txt-cr',$option,'text_color'); 
  	
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