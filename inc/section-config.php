<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Section Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ( !function_exists ( "sao_section_config" )){
function sao_section_config($post_id=false, $out=false) {
 	
 
 	$output='';
	$css='';
	$script='';
	$section_json = get_post_meta($post_id, 'sao_section', true);
  	$section= sao_options_array_row($section_json);
	
	if(has_filter('sao_builder_section_width')) {
		$css.='.sao-builder-warp{--sao-sc-wt:'.apply_filters('sao_builder_section_width','width').'}';
	} 
	 
	
	ob_start(); 
	?>
 	<div class="sao-builder-warp" >
	
	<?php
 	if(!empty($section)):
  	foreach($section as $section_key=> $section_value):
	 
	$section_option = sao_options_decode(urldecode($section_value['option']));
		
  	if(sao_element_show($section_option) == 'show'){
		$section_id = !empty($section_option['section_id']) ? ' id="'.esc_attr($section_option['section_id']).' " ':' ';
 		$custom_class = !empty($section_option['custom_class']) ? $section_option['custom_class']:'';
		
		$section_class='';
		
		if(!empty($section_option['sticky_columns'])){
			global $sao_sticky_script;
			$sao_sticky_script++;
			$section_class.= 'sao-sc-sticky ';
		} 
			
 		$section_class.= !empty($section_option['boxed']) ? 'sao-sc-boxed ':'';
		#
		
		
		$classes=array(
			'sao-sc-w'.esc_attr($section_key),
			$section_class,
			$custom_class 
 	  
		);
 		?>
		
  		 <div   <?php echo $section_id;?>  class="<?php echo esc_attr(join( ' ', $classes ));?>">
 
			<?php  echo sao_section_cover($section_option);?>
           <?php  $has_cover = sao_section_cover($section_option,1);?>
             
            <?php if(!empty($has_cover) && empty($section_option['boxed'])){?>
                 <div class="sao-sc-inner">
            <?php }?>
            
            <?php if(!empty( $section_option['gutter']['between'])){?>
                 <div class="sao-sc-gap">
            <?php }?>
            
			<?php
			$columnss=sao_column_config($post_id,$section_key,$section_option); 		 	  			
			echo !empty($columnss['output']) ? $columnss['output']:'';
			$css.=!empty($columnss['css']) ? $columnss['css']:'';
 			?>
			<?php if(!empty($section_option['gutter']['between'])){?>
				 </div>	 	  			
			<?php } ?>
		
			<?php if(!empty($has_cover) && empty($section_option['boxed'])){?>
			 </div>
			<?php }?>
 		
			</div>		 	  			
		  

		<?php
			 

 		$inner =!empty($has_cover)&& empty($section_option['boxed'])? '-in':'';

		//Syle
		$item = '.sao-sc-w'.esc_html($section_key);
		$section_css='';
		if(!empty($section_option['width'])){
			$section_css.='--sao-sc-wt:'.$section_option['width'].';';
		}
		if(!empty($has_cover) && empty($section_option['boxed'])){
			 $section_css.='--sao-sc-mx-wt:100%;';
 		}
		
		
		if(!empty( $section_option['gutter']['between'])){
			 $section_css.='--sao-sc-gp:'.$section_option['gutter']['between'].'px;';
		}
		
		
		
 
		$section_css.= sao_var_margin_mini('sc-mg',$section_option,'margin');
 		
		$section_css.= sao_var_margin_mini('sc-tab-mg',$section_option,'tablet_margin');
		$section_css.= sao_var_margin_mini('sc-mob-mg',$section_option,'phone_margin');
 		
		
		
		$section_css.= sao_var_padding('sc'.$inner.'-pd',$section_option,'padding');
 		
		 if(sao_isphone()){
			$section_css.= sao_var_padding('sc'.$inner.'-tab-pd',$section_option,'tablet_padding');
			$section_css.= sao_var_padding('sc'.$inner.'-mob-pd',$section_option,'phone_padding');
 		}
		
	 
		
	 
 
		$section_css.=sao_section_cover($section_option,true);
 		
 	 
 		$css.=sao_item_css($section_css,$item);
	
	
	}
	
	endforeach;			
	endif; 

	wp_reset_query(); ?>
    
    </div>
 
	<?php
	$var='3.1';

 	sao_icon_enqueue($var);
   	$min ='.min';
	global $sao_image_style,
	$sao_imagehover_style,
 	$sao_lightslider_style;	
	if(!empty($sao_image_style)){sao_caption_effect_hover_css();}  
	if(!empty($sao_lightslider_style)) wp_enqueue_style('sao_lightslider_style',SAOPAGE_DIR. 'assets/css/lib/lightslider-rtl'.$min.'.css','',$var);  
	
	global $sao_aos_script,
 	$sao_counter_script,
	$sao_hexagon_script,
	$sao_circle_script,
	$sao_lightbox_script,
	$sao_lightslider_script,
 	$sao_parlx_script,
	$sao_sticky_script;
	
	if(!empty($sao_aos_script)) wp_enqueue_script('sao_aos_script',SAOPAGE_DIR. 'assets/js/lib/aos'.$min.'.js','',$var); 
	if(!empty($sao_circle_script)) wp_enqueue_script('sao_circle_script',SAOPAGE_DIR. 'assets/js/lib/circle'.$min.'.js','',$var);   
	if(!empty($sao_hexagon_script)) wp_enqueue_script('sao_hexagon_script',SAOPAGE_DIR. 'assets/js/lib/hexagon'.$min.'.js','',$var);   
   	if(!empty($sao_lightbox_script)) wp_enqueue_script('sao_lightbox_script',SAOPAGE_DIR. 'assets/js/lib/lightbox'.$min.'.js','',$var);   
	if(!empty($sao_lightslider_script)) wp_enqueue_script('sao_lightslider_script',SAOPAGE_DIR. 'assets/js/lib/lightslider'.$min.'.js','',$var);   
	if(!empty($sao_parlx_script))wp_enqueue_script('sao_parlx_script',SAOPAGE_DIR. 'assets/js/lib/parlx'.$min.'.js','',$var);   
   	if(!empty($sao_counter_script)) wp_enqueue_script('sao_counter_script',SAOPAGE_DIR. 'assets/js/lib/counter'.$min.'.js','',$var);    
  	if(!empty($sao_sticky_script)) wp_enqueue_script('sao_sticky_script',SAOPAGE_DIR. 'assets/js/lib/sticky'.$min.'.js','',$var);


	$return['css'] = $css;
	$return['output']= ob_get_clean();
  
 	if($out == 'output'){
		return $return['output'];
	}elseif($out == 'css'){
		return $return['css'];
	}else{
		return $return;
	}
}  
 }
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Section Cover
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_section_cover" )){
function sao_section_cover($option=false,$item=false) {
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
	 
  			$output.='<div class="sao-sc-cover sao-bg-'.esc_attr($background_parallax).'"><div class="parlx-children"></div></div>';
			
 		} 
	 } 
	   
  	  
		 
 
	   
	
	//Background Color
 	
   
	if($background_color_style =='gradient'){
		
		$css.=sao_var_gradient_background_image('sc'.$has_parls_children,$option);
	}else{
		$css.=sao_var_background_pattern_image('sc'.$has_parls_children,$option);
		
	}
 
 		if($background_parallax=='parallax' && (!empty($option['background_color']['first'])  || !empty($option['background_image'])) ){
		 	$css.=' --sao-sc-bg-ac:fixed ;';
		
		} 
	 
	 
	 
	 
	  
	 

		//Border
		$css.=sao_var_border('sc'.$has_parls,$option,'border');
		$css.=sao_var_radius('sc'.$has_parls,$option,'radius');
		$css.=sao_var_shadow('sc'.$has_parls,$option,'shadow');
		
  
	
		//Background/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
		
 
		
		
		 
		 
 
 
  
 
		if(!empty($option['background_top'])){
			$background_top_style = !empty($option['background_top_style']['style'] ) ?  $option['background_top_style']['style']  :'style-1';
			$background_top_color = !empty($option['background_top_style']['color'] ) ?  $option['background_top_style']['color']  :'#ffffff';
			$background_top_height = !empty($option['background_top_style']['height'] ) ?  $option['background_top_style']['height']  :'150px';
  			 $css.= '--sao-tp-bg-img: url("'.sao_var_background_svg($background_top_style,$background_top_color).'");--sao-tp-cnt:"";';
			$css.= sao_var_background_svg_height($background_top_height,'top');
		}
		
		if(!empty($option['background_bottom'])){
			$background_bottom_style = !empty($option['background_bottom_style']['style'] ) ?  $option['background_bottom_style']['style']  :'style-1';
			$background_bottom_color = !empty($option['background_bottom_style']['color'] ) ?  $option['background_bottom_style']['color']  :'#ffffff';
			$background_bottom_height = !empty($option['background_bottom_style']['height'] ) ?  $option['background_bottom_style']['height']  :'150px';
  	 $css.= '--sao-bm-bg-img: url("'.sao_var_background_svg($background_bottom_style,$background_bottom_color).'");--sao-bm-cnt:"";';
			$css.= sao_var_background_svg_height($background_bottom_height,'bottom');
 		}			 
	  
	 
	 
	  
		 
	 
	 if(!empty($item)){
		return $css; 
	 }else{
		 return $output ;
	 }
 }  
}
  
 ?>