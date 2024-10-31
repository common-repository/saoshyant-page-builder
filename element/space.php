<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Space
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_space" )){
add_filter('sao_element_item', 'sao_element_item_space');
function sao_element_item_space( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	__('Empty Space','saoshyant-page-builder'),
 		'id'			=> 'space',
 		'img'			=>  SAOPAGE_DIR.'assets/image/space.jpg'
  	); 
   
 
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Space Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_space_options" )){
add_filter('sao_element_options_space', 'sao_space_options');
function sao_space_options( $option ) {
 
  
	$option[]= array( 
		"name"			=> __('Height','saoshyant-page-builder'),
		"id"			=> "height",
		"default"		=>  array( 
				"size"		=> 50,
				),
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
 
 	/*----------------------------------------------------------------
	 Image Style
	 -------------------------------------------------------------*/
	 
	$option[]= array( 
		"name"			=> __('Hide in Desktop','saoshyant-page-builder'),
 		"id"			=> "hide_desktop",
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
 		"type"			=> "checkbox",			 
	); 		
 
		
	$option[]= array( 
		"name"			=> __('Hide in Tablet','saoshyant-page-builder'),
 		"id"			=> "hide_table",
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
 		"type"			=> "checkbox",			 
	); 		
	 
 
 
 	$option[]= array( 
		"name"			=> __('Hide in Mobile','saoshyant-page-builder'),
 		"id"			=> "hide_mobile",
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
 		"type"			=> "checkbox",			 
	); 		
 
	 
 
	
		 
 
    return $option;
} 
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Space Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ( !function_exists ( "sao_space_config" )){
add_filter('sao_builder_space', 'sao_space_config');
function sao_space_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	if(sao_element_show($option)=='show'){
 	global $sao_mini_style;
	$sao_mini_style++;
   	ob_start(); 
	
		$classes=array(
			'sao-el-'.$key,
			sao_element_show($option,true),
			'sao-space',
		);		
		?>
         <aside   class="<?php echo esc_attr(join( ' ', $classes ));?>"  >

 
		 <?php 
	  
		$item = '.sao-el-'.$key.''; 
		$item_css= sao_var_size('sp-ht',$option,'height','size') ;
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