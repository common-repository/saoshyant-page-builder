<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El ID
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_el_id" )){
function sao_el_id($option =false) {
   if(!empty( $option['element_id'])){
 		echo ' id="'.esc_attr($option['element_id']).'"  ' ;
   }
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El Css Anime
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_el_cssanime" )){
function sao_el_cssanime($option =false) {
   if(!empty( $option['cssanime'])){
	   	global $sao_aos_script;
		$sao_aos_script++;
		echo ' data-aos="'.esc_attr(sao_builder_rtl_has($option['cssanime'])).'" ' ;
   }
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Icon Hexagon
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_icon_hexagon" )){
function sao_icon_hexagon( $option =false) {
 
	$attr='';
	$icon_layout = !empty($option['icon_layout']) ? $option['icon_layout'] : '';
	 if($icon_layout == 'boxed-hexagon'){
 	$attr.=!empty($option['icon_background']['first']) ? ' bgf="'.esc_attr($option['icon_background']['first']).'" ':'';
 	$attr.=!empty($option['icon_background']['second']) ? ' bgs="'.esc_attr($option['icon_background']['second']).'" ':'';
 	$attr.=!empty($option['icon_background']['orientation']) ? 'bgo="'.esc_attr($option['icon_background']['orientation']).'" ':'';
 	$attr.=!empty($option['icon_border']['size']) ? 'bos="'.esc_attr($option['icon_border']['size']).'" ':'';
 	$attr.=!empty($option['icon_border']['color']) ? 'boc="'.esc_attr($option['icon_border']['color']).'" ':'';
	
 	$attr.=!empty($option['hover_icon_background']['first']) ? ' hbgf="'.esc_attr($option['hover_icon_background']['first']).'" ':'';
 	$attr.=!empty($option['hover_icon_background']['second']) ? 'hbgs="'.esc_attr($option['hover_icon_background']['second']).'" ':'';
 	$attr.=!empty($option['hover_icon_background']['orientation']) ? ' hbgo="'.esc_attr($option['hover_icon_background']['orientation']).'" ':'';
 	$attr.=!empty($option['hover_icon_border']['size']) ? ' hbos="'.esc_attr($option['hover_icon_border']['size']).'" ':'';
 	$attr.=!empty($option['hover_icon_border']['color']) ? ' hboc="'.esc_attr($option['hover_icon_border']['color']).'" ':'';	
	 global $sao_hexagon_script;
	$sao_hexagon_script++;

	echo $attr;
	}
 	    
}
}
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El Title
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_el_title" )){
function sao_el_title( $option=false) {
		$widows = !empty($option['widows']) ?' target="_blank" ' : '';
		$heading = !empty($option['heading']) ?$option['heading'] : 'h3';
 		echo '<'.$heading.' class="sao-title">'; 
		
		if(!empty($option['link'])){ 
			echo '<a href="'.esc_url($option['link']).'" '.wp_kses_post($widows).' >';
		 } 
				
			echo wp_kses_post($option['title']); 
			
			
		if(!empty($option['link'])){ 
			echo '</a>';
		  } 
			  
			
		 
        echo '</'.$heading.'>';
 	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El heading
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_el_heading" )){
function sao_el_heading( $option=false) {
		$widows = !empty($option['widows']) ?' target="_blank" ' : '';
		$heading = !empty($option['heading']) ?$option['heading'] : 'h3';
 		echo '<'.$heading.' class="sao-title">'; 
		
		if(!empty($option['link'])){ 
			echo '<a href="'.esc_url($option['link']).'" '.wp_kses_post($widows).' >';
		 } 
				
			echo wp_kses_post($option['text']); 
			
			
		if(!empty($option['link'])){ 
			echo '</a>';
		  } 
			  
			
		 
        echo '</'.$heading.'>';
 	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El Line
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_el_line" )){
function sao_el_line( $option=false) {
 	
		if(!empty($option['title_line_bottom']['width']) && !empty($option['title_line_bottom']['size'])){ ?>
			 <div class="sao-line"></div> 
     <?php  	}
	
	
	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El Query
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_query" )){
function sao_query($option){

 
 
	$number = $option['number'];
	$sliders = $option['sliders'];
	$args['post_type'] = 'sao_slide';
	$args = array();
  		$args['posts_per_page']=$number;

 		
		$args['post_type'] = 'sao_slide';
 		$args['no_found_rows'] = 1;
		if(!empty($sliders)){
			$args['tax_query'] =  array(
				array(
					'taxonomy' => 'sao_sliders',
					'terms' => $sliders,
					'field' => 'slug',
				)
			);
		}
 	 
   
 	return  new WP_Query($args );
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El Excerpt
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_el_excerpt" )){
function sao_el_excerpt( $option=false) {?>
 	
 	 <p class="sao-excerpt"><?php echo wp_kses_post($option['details']);?></p>
      
<?php
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El Button
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_el_button" )){
function sao_el_button( $option=false) {
		$widows = !empty($option['widows']) ?' target="_blank" ' : '';
		$link = !empty($option['link']) ?$option['link'] : '';
 		if(!empty($option['button'])) {
		global	$sao_button_style;
		$sao_button_style++;
			?>
             <a class="sao-btn " href="<?php echo esc_url($link );?>" <?php echo wp_kses_post($widows);?> ><?php echo wp_kses_post($option['button']) ;?></a> 
		<?php
		} 
		
 

}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El Box Layout
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_el_box_layout" )){
function sao_el_box_layout( $option=false) {
	$box='';
  	$box_layout = !empty($option['box_layout']) ? $option['box_layout'] : '';
	if(!empty($box_layout)){
 		if( $box_layout=='boxed'){
 			$box = 'sao-boxed-item-1';
		}elseif( $box_layout=='boxed-2'){
 			$box = 'sao-boxed-item-2';
		}elseif( $box_layout=='boxed-3'){
 			$box = 'sao-boxed-item-3';
		}elseif( $box_layout=='boxed-4'){
 			$box = 'sao-boxed-item-4';
		
		}  
	}
	return $box;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El Layout Multi
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_el_box_layout_multi" )){
function sao_el_box_layout_multi( $option=false) {
  	$box_layout = !empty($option['box_layout']) ? $option['box_layout'] : '';
	if( $box_layout=='boxed'){
 
  		$box = 'sao-boxed-item-1';
	}elseif( $box_layout=='boxed-item'){
  	 	$box = 'sao-boxed-multi-1';
	}elseif( $box_layout=='boxed-item-2'){
 
   		$box = 'sao-boxed-multi-2';
	}elseif( $box_layout=='boxed-item-3'){
 
  		$box = 'sao-boxed-multi-3';
	}elseif( $box_layout=='boxed-item-4'){
 
  		$box = 'sao-boxed-multi-4';
	}else{
  		$box = '';
	}
	return $box;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El Icon
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_el_icon" )){
 function sao_el_icon( $value =false,$option =false) {
		sao_icon_fontfamily($value['icon']);
		$hexagon = !empty($option)?$option:$value;
	?>
  	
  		 <div class="sao-icon <?php echo esc_attr($value['icon']);?>" <?php sao_icon_hexagon($hexagon);?> > <?php echo sao_icon_background_hover($hexagon);?></div>
 
<?php
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El Icon
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_icon_font" )){
 function sao_icon_fontfamily($value =false) {
 	 	if(!empty($value)){
	 	global $sao_fonticon_style;
	 	if(strpos($value,'fa-')!==false){
			$sao_fonticon_style['FontAwesome']=true;
		}
	 	if(strpos($value,'flaticonarrow-')!==false){
			$sao_fonticon_style['flaticonarrow']=true;
		}
		if(strpos($value,'flaticonmultimedia-')!==false){
			$sao_fonticon_style['flaticonmultimedia']=true;
		} 
		
		if(strpos($value,'flaticonbusiness-')!==false){
			$sao_fonticon_style['flaticonbusiness']=true;
		} 
			
		if(strpos($value,'flaticonoffice-')!==false){
			$sao_fonticon_style['flaticonoffice']=true;
		} 
		if(strpos($value,'flaticoninterface-')!==false){
			$sao_fonticon_style['flaticoninterface']=true;
		} 
		
		if(strpos($value,'flaticonessentialset-')!==false){
			$sao_fonticon_style['flaticonessentialset']=true;
		} 
		if(strpos($value,'flaticontechsupport-')!==false){
			$sao_fonticon_style['flaticontechsupport']=true;
		} 
		if(strpos($value,'flaticontech-')!==false){
			$sao_fonticon_style['flaticontech']=true;
		} 
		if(strpos($value,'flaticonstrategy-')!==false){
			$sao_fonticon_style['flaticonstrategy']=true;
		} 
		if(strpos($value,'flaticonhipster-')!==false){
			$sao_fonticon_style['flaticonhipster']=true;
		} 
		if(strpos($value,'flaticonfashion-')!==false){
			$sao_fonticon_style['flaticonfashion']=true;
		} 
		if(strpos($value,'flaticonwebdesign-')!==false){
			$sao_fonticon_style['flaticonwebdesign']=true;
		} 
		if(strpos($value,'flaticontravel-')!==false){
			$sao_fonticon_style['flaticontravel']=true;
		} 
		if(strpos($value,'flaticonnetwork-')!==false){
			$sao_fonticon_style['flaticonnetwork']=true;
		} 
 		 
	 	if(strpos($value,'metrizeicon-')!==false){
			$sao_fonticon_style['metrizeicon']=true;
		}
 		if(strpos($value,'typcn-')!==false){
			$sao_fonticon_style['typcn']=true;
		} 
		}
	 
 }
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  El Image
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ( !function_exists ( "sao_el_image" )){
function sao_el_image($option =false,$crop=false) {
	 
  	$source =!empty( $option['source'])?$option['source']:'media';
	$widows = !empty($option['widows']) ?' target="_blank" ' : '';
	
 	if($source =='media'){
		$thumbnail = !empty($option['image'])? wp_get_attachment_image_src($option['image'], 'full'):'';
  		$thumbnail_alt =!empty($option['image'])? get_post_meta( $option['image'], '_wp_attachment_image_alt', true ):'';
  		$image_src = !empty($thumbnail)? $thumbnail[0]:'';
		$width = !empty( $thumbnail)? $thumbnail[1]:'';
		$height = !empty( $thumbnail)? $thumbnail[2]:'';
 		$alt = !empty($thumbnail_alt)? $thumbnail_alt:'';
 	}else{
		$image_src = !empty($option['external'])? $option['external']:'';
		$width = '';
		$height = '';
		$alt = '';
 	}
	 
 		$link =  sao_image_link($image_src,$option);

	 
      echo '<figure class="sao-image"  >'; 
  		// Media-----------------------------------------------------------------------------------
 
 		 	sao_image_warp_before($link,$crop,$widows);
			
			 $inline_style=sao_image_inline($crop,$image_src);
			
			echo '<img src="'.esc_url($image_src).'" width="'.esc_attr($width).'" height="'.esc_attr($height).'" alt="'.esc_attr($alt).'" '.$inline_style.'>'; 
				

  			
			if(!empty( $option['image_hover'])){
			echo'<figcaption>';
			sao_image_hover($option);
 			echo '</figcaption>';
			}
   		 	sao_image_warp_after($link,$crop);

 
  	echo '</figure>';
 
 }
 }
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Icon Layout
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ( !function_exists ( "sao_icon_layout" )){
function sao_icon_layout( $option =false) {
	$icon_layout = !empty($option['icon_layout']) ? $option['icon_layout'] : '';
 
	if($icon_layout == 'boxed-rounded'){
		return 'br';
	}elseif($icon_layout == 'boxed-square'){
		return 'bs';
		
	}elseif($icon_layout == 'boxed-diamond'){
		return 'bd';
		
	}elseif($icon_layout == 'boxed-hexagon'){
		return 'bh';
	}else{
		return '';
	}

}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Icon List Hexagon
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_icon_list_hexagon" )){
function sao_icon_list_hexagon($value_option =false, $value=false) {
 	$value_option['icon_layout'] = !empty($value_option['icon_layout']) ? $value_option['icon_layout'] : '';
 if($value_option['icon_layout'] == 'boxed-hexagon'){
		
		//First
 			if(!empty($value['icon_background']['first'])){
				$value_option['icon_background']['first']= $value['icon_background']['first'];
			}
 			if(!empty($value['icon_background']['second'])){
				$value_option['icon_background']['second']= $value['icon_background']['second'];
			}
 			if(!empty($value['icon_background']['orientation'])){
				$value_option['icon_background']['orientation']= $value['icon_background']['orientation'];
			}
 			if(!empty($value['icon_border']['size'])){
				$value_option['icon_border']['size']= $value['icon_border']['size'];
			}
			if(!empty($value['icon_border']['color'])){
				$value_option['icon_border']['color']= $value['icon_border']['color'];
			}		
			  
		  
 	 }
	return $value_option;

}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Icon Bcackground Hover
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_icon_background_hover" )){
function sao_icon_background_hover( $option =false) {
	$return='';
	if(!empty($option['icon_layout'])){
		
  		
 	  if(
  		(!empty($option['hover_icon_effect'])) || (!empty($option['icon_background']['second']) || !empty($option['hover_icon_background']['second'])) ){
 		  $return='<i></i>';
	  }
	}
	  
 	return $return;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Multi Column
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_multi_column" )){
function sao_multi_column( $option=false ) {
	$main_column = !empty($option['column'])?$option['column']:'3'; 
 	$tablet_column = !empty($option['tablet_column'])? $option['tablet_column'] : floor($main_column/2);
 	$mobile_column = !empty($option['mobile_column'])? $option['mobile_column']:'1';
	$class_responsive='';
	if($main_column !== '1'){
	 	$class_responsive.= 'sao_col_1_'.$main_column;
	}
	if($tablet_column !== '1'){
	 	$class_responsive.= ' sao_tab_1_'.$tablet_column;
	}	
	if($mobile_column !== '1'){
	 	$class_responsive.= ' sao_mob_1_'.$mobile_column;
	}	
	 
	echo esc_attr($class_responsive);
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																    Sidebar
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_sidebar" )){
function sao_sidebar(){ 

	global $sao_option_value;

 	$sidebar = !empty( $sao_option_value[ 'sidebar' ] ) ? $sao_option_value[ 'sidebar' ] : '';

     	if ( is_active_sidebar( $sidebar ) ) : 
			echo '<section class="sao-main-sidebar sao-sidebar  " >';
				dynamic_sidebar( sanitize_title($sidebar) ); 
			echo '</section>';

		endif;

 }
 }
 
 
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Lightslider
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_lightslider" )){
function sao_lightslider($item=false,$slider_options=false) {

 
  
 	$slider_options["item"] = (int)$item;
	$slider_options["slideMove"] = 1;
 	if(is_rtl()){
 	$slider_options["rtl"] = true;
	}
	global $sao_lightslider_style,$sao_lightslider_script,$sao_slide_script;
	$sao_lightslider_style++;
	$sao_lightslider_script++;
	$sao_slide_script++;
   
 	?>
 	<div class="sao-slider-options" ><?php echo wp_kses_post(json_encode($slider_options));?></div>
    <?php
	
  } 
 }
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Image Link
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_link" )){
function sao_image_link($image_src=false,$option =false) {
	$onlink = !empty($option['onlink']) ? $option['onlink'] : 'custom';

	if($onlink=='custom'  ){
		$link = !empty($option['link']) ?$option['link']:'';
		
 	}elseif($onlink=='image' || $onlink=='prettyphoto' ){
		$link = $image_src; 
 	}else{
		$link='';
	}
 
	return $link;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Image Click
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_click" )){
function sao_image_click($option =false) {
	$onlink = !empty($option['onlink']) ? $option['onlink'] : 'custom';

 	if( $onlink=='prettyphoto' ){
		 global $sao_lightbox_style,$sao_lightbox_script;
		$sao_lightbox_script++;
		$sao_lightbox_style++;
		$onlink_class = ' sao-prettyphoto ';
 	}elseif( $onlink=='zoom' ){
		global $sao_zoom_script;
		$sao_zoom_script++;
		$onlink_class = ' sao-zoom-image ';
 	}else{
		$onlink_class='';
	}

	return $onlink_class;
	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Image Hover
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
if ( !function_exists ( "sao_image_hover" )){
function sao_image_hover($option =false) {
	 	global $post;
		$output='';
 		$hover =!empty( $option['image_hover']) ? $option['image_hover']:''; 
		if($hover== 'zoom'){?>
   	  		<span class="sao-hover-icon-zoom"></span>
		 
		<?php }else if($hover== 'play'){?>
   	 
            <span class="sao-hover-icon-play"></span>

 	 
  		<?php }elseif($hover== 'caption' && !empty($option['caption'])){?>
				<div class="sao-hover-caption sao-aw"><?php esc_html($option['caption']);?></div>
		<?php }
 }
}
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Image Ratio
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ( !function_exists ( "sao_image_ratio" )){
function sao_image_ratio($option =false) {
	$ratio = !empty($option['ratio']) ? $option['ratio'] : '';
	if( $ratio=='sao-ratio60'){
  	$class = 'sao-crop-60';
	}elseif( $ratio=='sao-ratio75'){
  	$class = 'sao-crop-75';
	}elseif( $ratio=='sao-ratio100'){
  	$class = 'sao-crop-100';
	
	}elseif( $ratio=='sao-ratio135'){
		
  	$class = 'sao-crop-135';
	}else{
  	$class = '';
	}
	return $class;
 
 
 }
 }
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Thumbnail Ratio
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_thumbnail_ratio" )){
function sao_thumbnail_ratio($option =false) {
	$ratio = !empty($option['thumb_ratio']) ? $option['thumb_ratio'] : '100';
	if( $ratio=='sao-thumb-ratio60'){
  	$class = 'sao-thumbnail-crop-60';
	}elseif( $ratio=='sao-thumb-ratio75'){
  	$class = 'sao-thumbnail-crop-75';
	}elseif( $ratio=='sao-thumb-ratio100'){
  	$class = 'sao-thumbnail-crop-100';
 	}elseif( $ratio=='sao-thumb-ratio135'){
   	$class = 'sao-thumbnail-crop-135';
	}else{
  	$class = '';
	}
	return $class;
 
 
 
 }
 }
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Image Warp Before
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_warp_before" )){
function sao_image_warp_before($link =false,$crop=false,$window =false) {
			if(!empty($link) && !empty($crop) ){ 
				echo '<a class="sao-image-crop" href="'.esc_url($link).'" '.wp_kses_post($window).'>';
			}elseif(!empty($link) &&  empty($crop) ){ 
				echo '<a href="'.esc_url($link).'" '.wp_kses_post($window).'>';
			}elseif(!empty($crop) && empty($link)){ 
				echo '<span class="sao-image-crop"  >';
			} 
				
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Image Warp After
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_warp_after" )){
function sao_image_warp_after($link =false,$crop=false) {
			if(!empty($link) && !empty($crop) ){ 
				echo '</a>';
			}elseif(!empty($link) &&  empty($crop) ){ 
				echo '</a>';
			}elseif(!empty($crop) && empty($link)){ 
				echo '</span>';
			} 	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Image inline
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_inline" )){
function sao_image_inline($crop =false,$image_thumb =false) {

					 	if(!empty($crop)){
							$background_image="background-image:url('".esc_url($image_thumb)."');";
							$inline_style='style="'.$background_image.'"';
						}else{
							$inline_style='';
						}
 
	 return $inline_style;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Lightbox 
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		 
if ( !function_exists ( "sao_lightbox" )){

function sao_lightbox() {
	 global $sao_lightbox_script;

 if(!empty($sao_lightbox_script)){	 

 	?>
 <div class="sao-lightbox sao-lightbox-active">
			<div class="sao-lightbox-middle">
            
				<div class="sao-lightbox-outer"></div>
 				<div class="sao-lightbox-nextbig"></div>
    			<div class="sao-lightbox-prevbig"></div>
		
        		<div class="sao-lightbox-img">
 					<i class="sao-lightbox-close"></i>
    				<img src="#" class="sao-lightbox-targetimg" alt="#"/>
				</div>
                
   	 			<i class="sao-lightbox-loading"></i>
				<div class="sao-lightbox-bottom">
         	 		<div class="sao-lightbox-title"></div>
         			<div class="sao-lightbox-moreitems">
            			<div class="sao-lightbox-counter"></div>
         			</div>
         
     			</div>

			</div>
		</div>
  
	<?php 

 }
 } 
add_action( 'wp_footer', 'sao_lightbox' );
 }
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Show
 
*///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
if ( !function_exists ( "sao_element_show" )){

function sao_element_show($option,$clsas=false) {
	$display='show';
		if(sao_isphone() && !empty($option['tablet_hide']) && !empty($option['phone_hide'])){
			$display ='hide';
 		}else{
			$display ='show';
		}
 
		if(!empty($clsas)){
			$class_hide='';
			if(!empty($option['hide_desktop'])){
					$class_hide.= 'sao_col_hide ';
			}
			if(!empty($option['hide_tablet'])){
					$class_hide.= 'sao_tab_hide ';
			}
			if(!empty($option['hide_mobile'])){
					$class_hide.= 'sao_mob_hide';
			}
			return $class_hide;
		}else{
		return  $display;
		}
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Responsive Item Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_builder_responsive_item" )){

function sao_builder_responsive_item($option,$item  = 4 , $size = false ) {
	
	if($item == '12' || $item == '11' || $item == '10'|| $item == '9' || $item == '7' ){
 
		$item990 =  !empty($option['tablet_column'])? (int)$option['tablet_column']:5;
		$item767 = !empty($option['mobile_column'])? (int)$option['mobile_column']:4;
 	} elseif($item == '6'  ){
 
		$item990 = !empty($option['tablet_column'])? (int)$option['tablet_column']:4;
		$item767 = !empty($option['mobile_column'])? (int)$option['mobile_column']:3;
 	} elseif($item == '5'  ){
 
		$item990 = !empty($option['tablet_column'])? (int)$option['tablet_column']:3;
		$item767 = !empty($option['mobile_column'])? (int)$option['mobile_column']:3;
 
		
	}elseif($item == '4'  ){
		 
		$item990 = !empty($option['tablet_column'])? (int)$option['tablet_column']:2;
		$item767 = !empty($option['mobile_column'])? (int)$option['mobile_column']:2;
 
	} elseif($item == '3'  ){
 
		$item990 = !empty($option['tablet_column'])? (int)$option['tablet_column']:2;
		$item767 = !empty($option['mobile_column'])? (int)$option['mobile_column']:2;
 
	} elseif($item == '2'  ){
 
		$item990 = !empty($option['tablet_column'])? (int)$option['tablet_column']:2;
		$item767 = !empty($option['mobile_column'])? (int)$option['mobile_column']:2;
 
	}else{
 
		$item990 = !empty($option['tablet_column'])? (int)$option['tablet_column']:1;
		$item767 = !empty($option['mobile_column'])? (int)$option['mobile_column']:1;
 
		
	}

	if($size == '1199'){
		return $item1199;
		
 	}elseif($size == '990'){
		return $item990;
		
 	}elseif($size == '767'){
		return $item767;
 	}elseif($size == '499'){
		return $item499;
 	}

}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Youtube Id
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ( !function_exists ( "sao_get_youtube_id" )){
function sao_get_youtube_id($url) 
{
    $pattern = '#^(?:https?://)?';    # Optional URL scheme. Either http or https.
    $pattern .= '(?:www\.)?';         #  Optional www subdomain.
    $pattern .= '(?:';                #  Group host alternatives:
    $pattern .=   'youtu\.be/';       #    Either youtu.be,
    $pattern .=   '|youtube\.com';    #    or youtube.com
    $pattern .=   '(?:';              #    Group path alternatives:
    $pattern .=     '/embed/';        #      Either /embed/,
    $pattern .=     '|/v/';           #      or /v/,
    $pattern .=     '|/watch\?v=';    #      or /watch?v=,    
    $pattern .=     '|/watch\?.+&v='; #      or /watch?other_param&v=
    $pattern .=   ')';                #    End path alternatives.
    $pattern .= ')';                  #  End host alternatives.
    $pattern .= '([\w-]{11})';        # 11 characters (Length of Youtube video ids).
    $pattern .= '(?:.+)?$#x';         # Optional other ending URL parameters.
    preg_match($pattern, $url, $matches);
    return (isset($matches[1])) ? $matches[1] : false;
}
 }
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Aparat Id
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_get_aparat_id" )){
function sao_get_aparat_id($url) 
{
    $pattern = '#^(?:https?://)?';    # Optional URL scheme. Either http or https.
    $pattern .= '(?:www\.)?';         #  Optional www subdomain.
    $pattern .= '(?:';                #  Group host alternatives:
    $pattern .=   'aparat\.be/';       #    Either youtu.be,
    $pattern .=   '|aparat\.com';    #    or youtube.com
    $pattern .=   '(?:';              #    Group path alternatives:
    $pattern .=     '/embed/';        #      Either /embed/,
    $pattern .=     '|/v/';           #      or /v/,
 
    $pattern .=   ')';                #    End path alternatives.
    $pattern .= ')';                  #  End host alternatives.
    $pattern .= '([\w-]{5})';        # 11 characters (Length of Youtube video ids).
    $pattern .= '(?:.+)?$#x';         # Optional other ending URL parameters.
    preg_match($pattern, $url, $matches);
    return (isset($matches[1])) ? $matches[1] : false;
}
}
?>
