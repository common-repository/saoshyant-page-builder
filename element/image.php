<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Image
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_image" )){
add_filter('sao_element_item', 'sao_element_item_image');
function sao_element_item_image( $element ) {
 	
 	$element[]= array(
 		'name'			=> 	__('Image','saoshyant-page-builder'),
 		'id'			=> 'image',
		'img'			=>  SAOPAGE_DIR.'assets/image/image.jpg'
  	); 
  
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Image Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_options" )){
add_filter('sao_element_options_image', 'sao_image_options');
function sao_image_options( $option ) {
 
	$option[]= array( 
		"name"			=> __('Image source','saoshyant-page-builder'),
 		"id"			=> "source",
 		"default"		=>  'media',
 		"type"			=> "select",
		"options"		=>  array( 
			"media"			=> __('Media Library','saoshyant-page-builder'),
			"external"		=>  __('External link','saoshyant-page-builder'),
 		),					
		 
	);
  
	$option[]= array( 
		"name"			=> __('Upload Image','saoshyant-page-builder'),
 		"id"			=> "image",
 		"fold"			=>	array( "media" => "source"), 
 		"type"			=> "image",
  	);	
	$option[]= array( 
		"name"			=> __('External link Image','saoshyant-page-builder'),
 		"id"			=> "external",
 		"fold"			=>	array( "external" => "source"), 
 		"type"			=> "text",
  	);		

	$option[]= array( 
		"name"			=> __('On click Action','saoshyant-page-builder'),
 		"id"			=> "onlink",
 		"default"		=>  'custom',
 		"type"			=> "select",
		"options"		=>  array( 
 			"custom"		=> __('Open custom link','saoshyant-page-builder'),
			"image"			=> __('Link To Full Image','saoshyant-page-builder'),
			"prettyphoto"	=> __('Open PrettyPhoto','saoshyant-page-builder'),
			"zoom"			=> __('Zoom','saoshyant-page-builder'),
				"none"			=>  __('None','saoshyant-page-builder'),
		
  		),					
		 
	);	
 	
 	$option[]= array( 
		"name"			=> __('Link','saoshyant-page-builder'),
 		"id"			=> "link",
 		"fold"			=>	array( "custom" => "onlink"), 
 		"type"			=> "text",
 		  
	);
	$option[] = array(
		"name"		=>  __('Open in new window','saoshyant-page-builder'),
  		"id"		=> "widows",
		"fold"		=>	array( 
					"custom"		=> "onlink",
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
 			"caption"		=> __('Caption','saoshyant-page-builder'),						
			 
		),			
   	);	 	
			
	$option[]= array( 
		"name"			=> __('Caption','saoshyant-page-builder'),
 		"id"			=> "caption",
		"fold"		=>	array( 
					"caption"		=> "image_hover",
  			), 		
  		"type"			=> "textarea",
   	);	 	
		
 
	
 
	$option[]= array( 
		"name"			=> __('Alignment','saoshyant-page-builder'),
 		"id"			=> "alignment",
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
		"name"			=> __('Width','saoshyant-page-builder'),
 		"id"			=> "width",
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
		"name"			=> __('Image Crop','saoshyant-page-builder'),
 		"id"			=> "image_crop",
 		"group"			=>  __('Image','saoshyant-page-builder'),
		"type"			=> "select", 	 	
 		"options"		=>  array( 
			"height"		=> __('Crop with height','saoshyant-page-builder'),
			"ratio"			=> __('Crop with Ratio','saoshyant-page-builder'),
 			) ,
		
  	);	
	
	
 
 
	$option[]= array( 
		"name"			=> __('Height','saoshyant-page-builder'),
 		"id"			=> "height",
 		"group"			=>  __('Image','saoshyant-page-builder'),
		"type"			=> "multi_options",
		
		"fold"			=>	array( 
			"height" => 	"image_crop", 
		), 		
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
		"name"			=> __('Image Ratio','saoshyant-page-builder'),
 		"id"			=> "ratio",
 		"group"			=>  __('Image','saoshyant-page-builder'),
		"fold"			=>	array( 
			"ratio" => "image_crop", 
		), 		
 		"group"			=>  __('Image','saoshyant-page-builder'),
  		"default"		=>  'sao-ratio-auto',
		"type"			=> "select",
   		"options"		=>  sao_array_options('image_ratio'),						
   	); 	  
 	 
	 
	 
  
	include SAOPAGE_PATH . 'element/mini/image.php';  
 
	 
 	
 
	$option[]= array( 
		"name"			=> __('Caption Font Size','saoshyant-page-builder'),
 		"id"			=> "caption_font_size",
		"fold"			=>	array( 
			"caption" => "image_hover", 
		),
		"group"			=>  __('Typography','saoshyant-page-builder'),
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
		"name"			=> __('Caption Font Weight','saoshyant-page-builder'),
 		"id"			=> "caption_font_weight",
		"fold"			=>	array( 
			"caption" => "image_hover", 
		), 		
  		"group"			=>  __('Typography','saoshyant-page-builder'),
		"type"			=> "select",
		"default"		=>  'bold', 
		"options"		=>  array( 
			""				=> __('Default','saoshyant-page-builder'),
			"300"			=> __('Light','saoshyant-page-builder'),
			"normal"		=> __('Normal','saoshyant-page-builder'),
			"500"			=> __('Medium','saoshyant-page-builder'),
			"bold"			=> __('Bold','saoshyant-page-builder'),
			"900"			=> __('Extra-Bold','saoshyant-page-builder'),
			) ,
		
  	);	
	
	
 	
	$option[]= array( 
		"name"			=> __('Caption Line Height','saoshyant-page-builder'),
 		"id"			=> "caption_line_height",
		"fold"			=>	array( 
			"caption" => "image_hover", 
		),
		"group"			=>  __('Typography','saoshyant-page-builder'),
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
		"name"			=> __('Caption Font Style','saoshyant-page-builder'),
 		"id"			=> "caption_font_style",
		"fold"			=>	array( 
			"caption" => "image_hover", 
		), 
		"group"			=>  __('Typography','saoshyant-page-builder'),
		"type"			=> "select", 	 	
		"options"		=>   
  			array( 
 				""					=> __('None','saoshyant-page-builder'),
 				"normal"			=> 	__('Normal','saoshyant-page-builder'),
 				"italic"			=> __('italic','saoshyant-page-builder'),
  				"oblique"			=> __('oblique','saoshyant-page-builder'),
  			),		
 		
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
 
																   Image Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_config" )){
add_filter('sao_builder_image', 'sao_image_config');
function sao_image_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css ='';
	
	if(sao_element_show($option)=='show'){
	ob_start(); 
 		
 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';	
  	$source =!empty( $option['source'])?$option['source']:'media';
  			 
 
 	if($source =='media'){
		$thumbnail = !empty($option['image'])? wp_get_attachment_image_src($option['image'], 'full'):'';
  		$thumbnail_alt =!empty($option['image'])? get_post_meta( $option['image'], '_wp_attachment_image_alt', true ):'';
  		$image_src = !empty($thumbnail)? $thumbnail[0]:'';
		$width = !empty($thumbnail)? $thumbnail[1]:'';
		$height = !empty($thumbnail)? $thumbnail[2]:'';
 		$alt = !empty($thumbnail_alt)? $thumbnail_alt:'';
 	}else{
		$image_src = !empty($option['external'])? $option['external']:'';
		$width = '';
		$height = '';
		$alt = '';
 	}

	
 		$link =  sao_image_link($image_src,$option);
 		$click =  sao_image_click($option);
		
 
	$image_crop =!empty( $option['image_crop']) ? $option['image_crop']:'height'; 
	$crop='';
	
	if(!empty($option['width']['size'])){
 		if($image_crop =='ratio'){
	 		$crop=sao_image_ratio($option);
		}else{
			if(!empty($option['height']['size'])){
				$crop='sao-crop';
			} 	
		}
	}
	  
		 	
	
	$widows = !empty($option['widows']) ?' target="_blank" ' : '';
  	$image_alignment = !empty($option['image_alignment']) ? $option['image_alignment']: '';
 	$image_alignment = $image_alignment == 'right' ? 'sao-image-'.sao_builder_rtl_right():'';
	$image_effect =!empty( $option['hover_image_effect']) && $option['hover_image_effect']!=='none' ? 'sao-hover-'.$option['hover_image_effect']:''; 
 	$caption_effect =!empty( $option['caption_effect']) ? sao_builder_rtl_has($option['caption_effect']):''; 
	$image_hover =!empty( $option['image_hover']) ? $option['image_hover']:''; 
 	 
	$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
		'sao-image-single',
		$caption_effect,
		$image_effect,
		 $crop,
 		$click,
 		'sao-aw',
  
	);
   
	?>
 	 <aside <?php  sao_el_id($option);?> class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php  sao_el_cssanime($option);?>  >
	
  	
     <figure class="sao-image"> 
  		
        	<?php sao_image_warp_before($link,$crop,$widows);?>
                
                 <?php $inline_style=sao_image_inline($crop,$image_src); ?>
                
                <img src="<?php echo esc_url($image_src);?>" width="<?php echo esc_attr($width);?>" height="<?php echo esc_attr($height);?>" alt="<?php echo esc_attr($alt);?>" <?php echo $inline_style;?> > 
                    
                 <?php if(!empty( $option['image_hover'])){?>
                 <figcaption><?php sao_image_hover($option);?></figcaption>
                <?php } ?>
            
   		 	<?php sao_image_warp_after($link,$crop);?>
 
 
  	</figure>
  
	 </aside>
		
     <?php
		
 	$item = '.sao-el-'.$key.''; 
	
	$item_css = ''; 
  	$item_css.= sao_var_size('img-wt',$option,'width','size') ;
	if($image_crop !=='ratio'){
  	$item_css.= sao_var_size('img-ht',$option,'height','size') ;
	 }
 	$item_css.= sao_image_css( $option);
 		
 
  	if($image_hover=='caption') {
		$item_css.= sao_var_size('cap-fn-sz',$option,'caption_font_size','size') ;
		$item_css.= sao_var_font_weight('cap',$option,'caption_font_weight','bold') ;
		$item_css.= sao_var_size('cap-li-ht',$option,'caption_line_height') ;
		$item_css.= sao_var('cap-fn-st',$option,'caption_font_style') ;
	}
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