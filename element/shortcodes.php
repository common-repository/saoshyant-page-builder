<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Shortcodes
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_shortcodes" )){
add_filter('sao_element_item', 'sao_element_item_shortcodes');
function sao_element_item_shortcodes( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	__('Shortcodes','saoshyant-page-builder'),
 		'id'			=> 'shortcodes',
		'img'			=>  SAOPAGE_DIR.'assets/image/shortcodes.jpg'
  	); 
 
 
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Shortcodes Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_shortcodes_options" )){
add_filter('sao_element_options_shortcodes', 'sao_shortcodes_options');
function sao_shortcodes_options( $option ) {
 
 
	$option[]= array( 
		"name"			=> __("Content",'saoshyant-page-builder'),
  		"id"			=> "content",
		"desc"			=> __('input ShortCode','saoshyant-page-builder'),

		"type"			=> "textarea", 
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
 
																   Shortcodes Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  

if ( !function_exists ( "sao_shortcodes_config" )){
add_filter('sao_builder_shortcodes', 'sao_shortcodes_config');
function sao_shortcodes_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	$output='';
	
 	if(sao_element_show($option)=='show'){
	ob_start(); 	
	 $classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
 		'sao_shortcodes',
 
  
	);
 
?>
 	 <aside  <?php sao_el_id($option);?>  class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php sao_el_cssanime($option);?> >
	<?php if(!empty($option['content'])){?>
    
	 <section class="sao-shortcodes-warp" ><?php echo do_shortcode($option['content']); ?></article>
    
	<?php }?>	
	
	</aside>
    <?php
	
  	$css='';
   	$item = '.sao-el-'.$key; 
  	$item_css = sao_element_padding($option);
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