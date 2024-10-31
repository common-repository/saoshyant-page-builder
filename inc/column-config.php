<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Column Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ( !function_exists ( "sao_column_config" )){
function sao_column_config($post_id=false,$section_key=false,$section_option=false) {

	$output='';
	$css='';
	$script='';
	$column_json = get_post_meta($post_id, 'sao_column', true);
  	$column= sao_options_array_row($column_json);	
	
 			 ob_start();
 	if(!empty($column)):
	foreach($column as $column_key=> $column_value):  
		if($column_value['child'] == $section_key){
			 
			$column_option = sao_options_decode(urldecode($column_value['option']));
			$item = '.sao-col-'.esc_html($column_key);

 			$column_id = !empty($column_option['column_id']) ? ' id="'.esc_attr($column_option['column_id']).'"':'';
			$custom_class = !empty($column_option['custom_class']) ? $column_option['custom_class']:'';
 
			if(!empty( $column_option['main'])){
				$column_main = 'hide';
			}else{
			$column_main = !empty( $column_value['value']) ? $column_value['value'] : '';
			}
			 
 					
			if($column_main =='1_1'){
				$tablet_default = '1_1';
				
			}elseif($column_main =='1_2'||$column_main =='1_4'||$column_main =='3_4' ){
				$tablet_default = '1_1';
	
			}elseif($column_main =='1_3' || $column_main =='1_5'|| $column_main =='2_5' ||$column_main =='1_6' ){
				$tablet_default = '1_3';
				
			}elseif($column_main =='2_3' || $column_main =='3_5'|| $column_main =='4_5' ||$column_main =='5_6'){
				$tablet_default = '2_3';
			}
			$column_tablet = !empty( $column_option['tablet']) ? $column_option['tablet'] : $tablet_default;
 			$column_phone = !empty( $column_option['phone']) ? $column_option['phone'] : '1_1';
 	
	 		$responsive='';
			if($column_main!=='1_1'){
				$responsive.= 'sao_col_'.esc_attr($column_main).' ';
			
			}
			 
			if($column_tablet!=='1_1'){
				$responsive.= 'sao_tab_'.esc_attr($column_tablet).' ';
			
			}
		 
			if($column_phone!=='1_1'){
				$responsive.= 'sao_mob_'.esc_attr($column_phone).' ';
			}
			
 	 
			 
			$classes=array(
				'sao-col-w'.$column_key,
				$responsive,
				$custom_class 
		  
			);	
			?>

			<div <?php echo $column_id;?>  class="<?php echo esc_attr(join( ' ', $classes ));?>" <?php sao_el_cssanime($column_option);?> >
 
					<?php
					echo sao_column_cover($column_option);
 					if(!empty($section_option['sticky_columns']) ){?>
 					
                    	 <div class="sao-col-inner">
			 		
					<?php }?>
					<?php 
					$element =sao_element_config($post_id,$column_key);
					echo !empty($element['output'])?$element['output']:'';
					$css.=!empty($element['css'])?$element['css']:'';
 					?>
					<?php if(!empty($section_option['sticky_columns'])){?>
					 </div> 
					<?php }?>
					 			
					
 		 </div> 
			 
		<?php
		 $column_css='';
 		
		$column_css.= sao_var_padding('col-pd',$column_option,'padding');
		
			$column_css.= sao_var_padding('col-tab-pd',$column_option,'tablet_padding');
			$column_css.= sao_var_padding('col-mob-pd',$column_option,'phone_padding');
 		
		
		
		
		$column_css.=sao_column_cover($column_option,true);
 		$css.=sao_item_css($column_css,'.sao-col-w'.esc_attr($column_key).'');
	 
		}
 	endforeach;			
	endif;	
 
			 
	$return['css'] = $css;
	$return['output']= ob_get_clean();
 
  	return $return;		
}  
 }
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Column Cover
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ( !function_exists ( "sao_column_cover" )){
function sao_column_cover($option=false,$item=false) {
		$output ='';
		$css='';
	   
 
 	$background_parallax = !empty($option['background_parallax'] ) ?  $option['background_parallax'] :'none';
 		
	$background_color_style = !empty($option['background_color_style'] ) ?  $option['background_color_style'] :'gradient';
	$cover_css='';	 
	$has_parls='';	
	$has_parls_children='';	
	 
	 if(!empty($option['background_image']) ||  $background_color_style =='gradient' && !empty($option['background_color']['first']) && !empty($option['background_color']['second']) && $background_color_style !=='gradient'){
 		if($background_parallax == 'parallax-top' ||
			$background_parallax == 'parallax-bottom' ||
			$background_parallax == 'parallax-left'||
			$background_parallax == 'parallax-right'){
			global $sao_parlx_script;
			$sao_parlx_script++;
			$has_parls_children='-plx';
			$has_parls='-cv';
	 
  			$output.='<div class="sao-col-cover  sao-bg-'.esc_attr($background_parallax).'"><div class="parlx-children"></div></div>';
			
 		} 
	 } 
	   
  	  
		 
 
	   
	
  	
   
	if($background_color_style =='gradient'){
		
		$css.=sao_var_gradient_background_image('col'.$has_parls_children,$option);
	}else{
		$css.=sao_var_background_pattern_image('col'.$has_parls_children,$option);
		
	}
 
 		if($background_parallax=='parallax' && (!empty($option['background_color']['first'])  || !empty($option['background_image'])) ){
		 	$css.=' --sao-col-bg-at:fixed ;';
		
		}  

		//Border
		$css.=sao_var_border('col'.$has_parls,$option,'border');
		$css.=sao_var_radius('col'.$has_parls,$option,'radius');
		$css.=sao_var_shadow('col'.$has_parls,$option,'shadow');
			
		 
	 
	 if(!empty($item)){
		return $css; 
	 }else{
	 return $output ;
	 }
 }
 } ?>