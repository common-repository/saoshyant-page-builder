<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ( !function_exists ( "sao_element_config" )){
function sao_element_config($post_id=false,$column_key=false) {

	$output='';
	$css='';
	$script='';
	$element_json = get_post_meta($post_id, 'sao_element', true);
  	$element= sao_options_array_row($element_json);	
	
	if(!empty($element)):
	foreach($element as $element_key=> $element_value):  
		if($element_value['childern'] == $column_key){ 
				$element_option = sao_options_decode(urldecode($element_value['option']));
				$args['key'] = $element_key;
				$args['option'] = $element_option;
				$element_id = !empty( $element_option['element_id']) ?  ' id=" '.$element_option['element_id'].' " ' : '';
				$custom_class = !empty( $element_option['custom_class']) ? $element_option['custom_class'] : '';
				 
				$cssanime = !empty( $element_option['cssanime']) ? ' data-aos="'.sao_builder_rtl_has($element_option['cssanime']).'" ' : '';
 		 
				if(has_filter('sao_builder_'.$element_value['value'])) {
					$filter =apply_filters('sao_builder_'.$element_value['value'], $args);
					if(empty($filter['emptybefore'])){
					$output.= '<aside  '.esc_attr($element_id ).'  class="sao-element-'.esc_attr($element_key).' '.esc_attr($custom_class).' sao-element-item sao_element_'.esc_attr($element_value['value']).' sao-auto-width " '.$cssanime.' >';
					}

					
					
					$output.=!empty($filter['output'])?$filter['output']:'';
					$css.=!empty($filter['css'])?$filter['css']:'';
					
  					if(empty($filter['emptyafter'])){
						$output.= '</aside>';
 					}
													 
				}
						
 		} 
		
	endforeach;			
	endif;	
 
			 
	$return['css'] = $css;
	$return['output']= $output;
   	return $return;				 
	
  
}   
 }
?>