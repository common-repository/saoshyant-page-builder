<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Text
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_text" )){
add_filter('sao_element_item', 'sao_element_item_text');
function sao_element_item_text( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	esc_html__('Text','saoshyant-page-builder'),
 		'id'			=> 'text',
		'img'			=>  SAOPAGE_DIR.'assets/image/text.jpg'
  	); 
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Text Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_text_options" )){
add_filter('sao_element_options_text', 'sao_text_options');
function sao_text_options($option) {
  	$option[]= array( 
		"name"			=> __('Title','saoshyant-page-builder'),
  		"default"		=> __('Lorem ipsum dolor sit amet','saoshyant-page-builder'),
 		"id"			=> "title",
 		"type"			=> "text",
 		  
	);
	$option[]= array( 
		"name"			=> __('Element tag','saoshyant-page-builder'),
 		"id"			=> "heading",
  		"default"		=> 'h3',
 		"type"			=> "select",
		"options"		=>  array( 
			''		=>	 esc_html__('Default','saoshyant-page-builder'),				
			'h1'	=> 'h1',						
			'h2' 	=> 'h2',						
			'h3' 	=> 'h3',						
			'h4' 	=> 'h4',						
			'h5' 	=> 'h5',						
			'h6' 	=> 'h6',						
			'p'		=> 'p',						
			'div'	=> 'div',						
			'span'	=> 'span',						
		),
 		  
	);
  	
	$option[]= array( 
		"name"			=> __('The Details','saoshyant-page-builder'),
 		"id"			=> "details",
  		"default"		=> __('sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud','saoshyant-page-builder'),
 		"type"			=> "textarea",
 		  
	);
 
	$option[]= array( 
		"name"			=> __('Link','saoshyant-page-builder'),
 		"id"			=> "link",
 		"type"			=> "text",
 		  
	);  
	
	$option[] = array(
  				"name"		=>  __('Open in new window','saoshyant-page-builder'),
  				"id"		=> "widows",
 				"type"		=> "checkbox",
				
 	);	
	
	
	$option[]= array( 
		"name"			=> __('Space Between Title And Details','saoshyant-page-builder'),
 		"id"			=> "space_title_details",
  		"group"			=>  __('Layout','saoshyant-page-builder'),
		"type"			=> "multi_options",
  	
		"options"		=>  array( 
			array( 
				"name"			=> __('Size','saoshyant-page-builder'),			
  				"id"			=> "size",
				"type"			=> "number",
 			),
 	 
			array( 
 				"name"			=> 	__('Unit','saoshyant-page-builder'),
 				"id"			=> "unit",
  				"type"			=> "select",
				"options"		=>  sao_array_options('unit'),
 			),		
		),	
		
  	); 
	 
	
	$option[]= array( 
		"name"			=> __('Padding','saoshyant-page-builder'),
 		"id"			=> "padding",
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
	/*----------------------------------------------------------------
	 Box Style
	 -------------------------------------------------------------*/
 	$option[]= array( 
		"name"			=> __('Box Layout','saoshyant-page-builder'),
 		"id"			=> "box_layout",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
  		"default"		=> '',
		"type"			=> "select",
		"options"		=>   array( 
			""		=> esc_html__('None','saoshyant-page-builder'), 
			"boxed"		=> esc_html__('Boxed','saoshyant-page-builder'), 
		), 						
				  
	); 	 	
	
	$boxed_fold = array( 
			"boxed" => "box_layout", 
		);
	 
	include SAOPAGE_PATH . 'element/mini/boxed.php';

	/********************************************************************
	Details
	*********************************************************************/					 
 
 	$option[]= array( 
		"name"			=> __('Details Alignment','saoshyant-page-builder'),
 		"id"			=> "alignment",
 		"group"			=>  __('Details','saoshyant-page-builder'),
		"default"		=>  'center',
		"desc"			=>  __('Default "Center"','saoshyant-page-builder'),
		"type"			=> "select",
		"options"		=> sao_array_options('align'),  
 		 
	); 
	 
	
 
 	include SAOPAGE_PATH . 'element/mini/details.php';

 	/********************************************************************
	Typography
	*********************************************************************/					 
  	include SAOPAGE_PATH . 'element/mini/title_typography.php';
 	include SAOPAGE_PATH . 'element/mini/details_typography.php';
   
 
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
 
																   Text Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_text_config" )){

add_filter('sao_builder_text', 'sao_text_config');
function sao_text_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
 	
	if(sao_element_show($option)=='show'){
	ob_start(); 
  	$css ='';  
 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
   
  
  	$classes=array(
		'sao-el-'.esc_attr($key),
		sao_element_show($option,true),
		$custom_class,
		'sao-text',
		sao_el_box_layout($option),
 		'sao-aw',
  
	);
 
 	//*********************************************************************START****************************************************/
 	?>
  
  
 	 <aside  <?php sao_el_id($option);?>  class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php sao_el_cssanime($option);?> >
	 		
            <?php
			if(!empty($option['title'])) sao_el_title($option);
			sao_el_line($option);
			if(!empty($option['details'])) sao_el_excerpt($option);
  		 	?>
            
      </aside> 
  	<?php
    //*********************************************************************END****************************************************/
	
   	
 
	$item = '.sao-el-'.$key.''; 
	$item_css='';
 	$item_css.= sao_var_align('ag',$option,'alignment','center') ;
  	$item_css.= sao_var_size('ex-mg-tp',$option,'space_title_details','size') ;
  	$item_css.= sao_boxed_css($option); 
  	$item_css.= sao_title_css($option); 
  	$item_css.= sao_line_css($option); 
  	$item_css.= sao_excerpt_css($option); 
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