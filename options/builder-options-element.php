<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Perview
 
*///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
 if ( !function_exists ( "sao_element_perview" )){
add_action('wp_ajax_sao_element_perview', 'sao_element_perview');
add_action('wp_ajax_nopriv_sao_element_perview', 'sao_element_perview');
function sao_element_perview($val =false,$opt =false){
	
 	
	if(!empty($_REQUEST['default'])){
		$value = $val;
  		$option = $opt;
	}elseif(!empty($_REQUEST['value'])){
  		$value = sanitize_title($_REQUEST['value']);
		$option = sao_options_decode( urldecode(sao_options_encode(sao_sanitize_text_or_array_field($_REQUEST['option']))));
	}else{
  		$value = $val;
  		$option = $opt;
 		 
	}	 
	$key =rand(100000000,999999999);
	$args['key'] = $key;
	$args['option'] = $option;
	$cssanime = !empty( $option['cssanime']) ? ' data-aos="'.sao_builder_rtl_has($option['cssanime']).'" ' : '';
	$element_id = !empty( $option['element_id']) ? $option['element_id'] : '';
	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';
	
	if(has_filter('sao_builder_perview_'.$value)) {
		$filter =apply_filters('sao_builder_perview_'.$value, $args) ;	
 	
		echo '<section id="'.esc_attr($element_id ).'"  class="sao-element-'.esc_attr($key).' sao-element-item sao_element_'.esc_attr($value).' '.esc_attr($custom_class).' sao-auto-width "   >';
		echo '<form class="sao-form-none"></form>';
 			echo  balanceTags($filter['output'],'') ;
  		echo '</section>';
		echo '<style>';		
		echo balanceTags($filter['css'],'') ; 					  						
		echo '</style>';		
		 	 					  						
	}elseif(has_filter('sao_builder_'.$value)) {
		$filter =apply_filters('sao_builder_'.$value, $args) ;	
 
	//	echo '<section id="'.esc_attr($element_id ).'" class="sao-element-'.esc_attr($key).' sao-element-item sao_element_'.esc_attr($value).' '.esc_attr($custom_class).' sao-auto-width "    >';
			echo '<form class="sao-form-none"></form>';
 			echo  balanceTags($filter['output'],'') ;
		
 		//echo '</section>';
		echo '<style>';		
		echo balanceTags($filter['css'],'') ; 	
 		echo '</style>';	
 		 					  						
	}
	if(!empty($_REQUEST['value'])){
		die(0);
	}
}
 
 }
 
?>