<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element  Image Gallery
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_image_gallery" )){
add_filter('sao_element_item', 'sao_element_item_image_gallery');
function sao_element_item_image_gallery( $element ) {
 	
 	$element[]= array(
 		'name'			=> 	esc_html__('Image Gallery','saoshyant-page-builder'),
 		'id'			=> 'image_gallery',
		'img'			=>  SAOPAGE_DIR.'assets/image/image_gallery.jpg'
  	); 
   
  
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																    Image Gallery Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_gallery_options" )){
add_filter('sao_element_options_image_gallery', 'sao_image_gallery_options');
 function sao_image_gallery_options( $option ) {
 	
 	  
	$option[]= array( 
		"name"			=> __('Upload Image','saoshyant-page-builder'),
 		"id"			=> "image",
 		"type"			=> "gallery",
		"desc"			=>  __('You can hold the control button "Ctrl" for Multi select image','saoshyant-page-builder'),
	);
	
	$option[]= array( 
		"name"			=> __('On click Action','saoshyant-page-builder'),
 		"id"			=> "onlink",
 		"default"		=>  'custom',
 		"type"			=> "select",
		"options"		=>  array( 
			"image"			=> __('Link To Full Image','saoshyant-page-builder'),
			"prettyphoto"	=> __('Open PrettyPhoto','saoshyant-page-builder'),
			"zoom"			=> __('Zoom','saoshyant-page-builder'),
			"none"			=>  __('None','saoshyant-page-builder'),
 		),					
		 
	);
	
	$option[] = array(
  				"name"		=>  __('Open in new window','saoshyant-page-builder'),
  				"id"		=> "widows",
				"fold"		=>	array( 
 					"image" 		=> "onlink",	
 				), 
 				"type"		=> "checkbox",
				
 	);		

 	
	$option[]= array( 
		"name"			=> __('on Hover Image','saoshyant-page-builder'),
 		"id"			=> "image_hover",
  		"type"			=> "select",
		"options"		=>  array( 
			""			=>  __('None','saoshyant-page-builder'),
			"background"		=>  __('Background','saoshyant-page-builder'),
			
			"play"		=>  __('Play Icon','saoshyant-page-builder'),
 			"zoom"		=> __('Zoom Icon','saoshyant-page-builder'),						
 			 
		),			
   	);	 	
	$option[]= array( 
		"name"			=> __('Column','saoshyant-page-builder'),
 		"id"			=> "column",
 		"group"			=>  __('Layout','saoshyant-page-builder'),
 		"type"			=> 'select',
 		"default"		=> 'custom',
 		"options"		=>  sao_array_options('gallery_col'),						
				  
	);
 
	
	$option[]= array( 
		"name"			=> __('Space Between Image','saoshyant-page-builder'),
 		"id"			=> "between",
 		"type"			=> "number",
		"default"		=>  '1',

 		"group"			=>  __('Layout','saoshyant-page-builder'),		
		"desc"			=>  __('by "pexel"','saoshyant-page-builder'),
		
   	);	 
   
   
	$option[]= array( 
		"name"			=> __('Alignment','saoshyant-page-builder'),
 		"id"			=> "alignment",
		"fold"			=>	array( 
 			"1" => "custom", 
 		), 	
 		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>  'center',
		"desc"			=>  __('Default "Center"','saoshyant-page-builder'),
		"type"			=> "select",
		"options"		=> sao_array_options('align')					
		 
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
	
	$option[]= array( 
		"name"			=> __('Image Ratio','saoshyant-page-builder'),
 		"id"			=> "ratio",
 		"group"			=>  __('Image','saoshyant-page-builder'),
  		"default"		=>  'sao-ratio-auto',
		"fold"			=>	array( 
 			"1" => "column", 
 			"2" => "column", 
 			"3" => "column", 
 			"4" => "column", 
 			"5" => "column", 
 			"6" => "column", 
 			"7" => "column", 
 			"8" => "column", 
		), 		
		"type"			=> "select",
   		"options"		=>  sao_array_options('image_ratio'),						
 		
  	); 	 
 
	
	$option[]= array( 
		"name"			=> __('Width','saoshyant-page-builder'),
 		"id"			=> "width",
 		"fold"			=>	array( 
 			"custom" => "column", 
		), 
		"default"		=>  array( 'size'=> '150'),
		
  		"group"			=>  __('Image','saoshyant-page-builder'),
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
		"name"			=> __('Height','saoshyant-page-builder'),
 		"id"			=> "height",
 		"group"			=>  __('Image','saoshyant-page-builder'),
 		"fold"			=>	array( 
 			"custom" => "column", 
			
		), 
		
		"default"		=>  array( 'size'=> '150'),
				
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
		"name"			=> __('Image Thumb','saoshyant-page-builder'),
 		"id"			=> "image_thumb",
 		"group"			=>  __('Image','saoshyant-page-builder'),
		"type"			=> "select",
		"options" 		=>	sao_all_image_sizes(),
 		 
  	); 	 	
	
	include SAOPAGE_PATH . 'element/mini/image.php';  

	  
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
   	include SAOPAGE_PATH . 'element/mini/column_responsive.php';
    return $option;
} 
}
}
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Image Gallery Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_gallery_config" )){
add_filter('sao_builder_image_gallery', 'sao_image_gallery_config');
function sao_image_gallery_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css ='';
	if(sao_element_show($option)=='show'){
 
	ob_start(); 
 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';	
	$onlink = !empty($option['onlink']) ? $option['onlink'] : 'custom';
 	$widows = !empty($option['widows']) ?' target="_blank" ' : '';
	$image_effect =!empty( $option['hover_image_effect']) && $option['hover_image_effect']!=='none' ? 'sao-hover-'.$option['hover_image_effect']:''; 
 	$caption_effect =!empty( $option['caption_effect']) ? sao_builder_rtl_has($option['caption_effect']):''; 
	
 	$image_hover =!empty( $option['image_hover']) ? $option['image_hover']:''; 
	$image_thumb = !empty($option['image_thumb']) ? $option['image_thumb']: 'full';




 	$column =!empty( $option['column']) ? $option['column']:'custom'; 


 	$click =  sao_image_click($option);


	if($column == 'custom'){
 		if(!empty($option['width']['size']) && !empty($option['height']['size'])){
			$crop = 'sao-crop';	 
		}else{
			$crop ='';	 
		}			
  		 $class_responsive='  sao-image-list ';
 	}else{
 		$crop = sao_image_ratio($option);
		
		
			$main_column = !empty($option['column'])?$option['column']:'3'; 
			$tablet_column = !empty($option['tablet_column'])? $option['tablet_column'] : floor($main_column/2);
			$mobile_column = !empty($option['mobile_column'])? $option['mobile_column']:floor($main_column/2) ;
			$class_responsive='sao-flex ';
			if($main_column !== '1'){
				$class_responsive.= 'sao_col_1_'.$main_column;
			}
			if($tablet_column !== '1'){
				$class_responsive.= ' sao_tab_1_'.$tablet_column;
			}	
			if($mobile_column !== '1'){
				$class_responsive.= ' sao_mob_1_'.$mobile_column;
			}
		
		 
  
	}
	$classes=array(
		'sao-el-'.esc_attr($key),
		$custom_class,
		'sao-image-gallery',
		$caption_effect,
		$image_effect,
		$click,
		$crop
 	);
	?>
	<aside <?php  sao_el_id($option);?> class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php  sao_el_cssanime($option);?>  >
 
		 <div class="<?php echo esc_attr($class_responsive);?>"> 
			
            <?php
			if(!empty($option['image'])){
			foreach($option['image'] as $keys => $value) :
			
					$thumbnail = wp_get_attachment_image_src($value, $image_thumb);
  					$inline_style=sao_image_inline($crop,$thumbnail[0]);
					
					$full = wp_get_attachment_image_src($value, 'full');
			
 			?>
 
				 <figure class="sao-image">
                 	<?php
 					?>
					<?php sao_image_warp_before($full[0],$crop,$widows);?>

                     	<?php 
 					 
 						?>
						<img  src="<?php echo esc_url($thumbnail['0']);?>"  width="<?php echo esc_attr($thumbnail[1]);?>" height="<?php echo esc_attr($thumbnail[2]);?>" <?php echo $inline_style;?> >
   		 			
					
					<?php sao_image_warp_after($full[0],$crop);?>
						
                 	  <?php  if(!empty( $option['image_hover'])){ ?>
						<figcaption><?php sao_image_hover($option);?></figcaption>
						<?php } ?>
  				</figure> 
						 
			 
			<?php
 			endforeach;
			}
			?> 
  		</div>
		</aside>
        
        <?php
 	$item = '.sao-el-'.$key.''; 
	$item_css='';
	$item_css.= sao_var_unit('gp',$option,'between');	 
	if($column == 'custom'){
  	$item_css.= sao_var_size('img-wt',$option,'width','size') ;
 	$item_css.= sao_var_size('img-ht',$option,'height','size') ;
 	}
  
 	$item_css.= sao_image_css( $option);
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