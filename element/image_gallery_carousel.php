<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Imgage Gallery Carousel
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_image_gallery_carousel" )){
add_filter('sao_element_item', 'sao_element_item_image_gallery_carousel');
 function sao_element_item_image_gallery_carousel( $element ) {
 	
 	$element[]=  array(
 		'name'			=> 	__('Image Gallery Carousel','saoshyant-page-builder'),
 		'id'			=> 'image_gallery_carousel',
		'img'			=>  SAOPAGE_DIR.'assets/image/image_carousel.jpg'
  	); 
   
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Imgage Gallery Carousel Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_gallery_carousel_options" )){
add_filter('sao_element_options_image_gallery_carousel', 'sao_image_gallery_carousel_options');
 function sao_image_gallery_carousel_options( $option ) {
 	
  
	$option[]= array( 
		"name"			=> __('Upload Image','saoshyant-page-builder'),
 		"id"			=> "image",
		"desc"			=>  __('You can hold the control button "Ctrl" for Multi select image','saoshyant-page-builder'),
		
 		"type"			=> "gallery",
 		   
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
			"play"		=>  __('Play Icon','saoshyant-page-builder'),
 			"zoom"		=> __('Zoom Icon','saoshyant-page-builder'),						
 			 
		),			
   	);	 		
$option[]= array( 
		"name"			=> __('Arrows','saoshyant-page-builder'),
 		"id"			=> "arrows",
 		"group"			=>  __('Slider','saoshyant-page-builder'),
		"default"		=>  1,
 		"type"			=> "checkbox",
 	); 		
		

	$option[]= array( 
		"name"			=> esc_html__('Arrow Layout','saoshyant-page-builder'),
 		"id"			=> "arrow_layout", 
		"fold"			=>	array( 
			"1" => "arrows",
		),
   		"group"			=> esc_html__('Slider','saoshyant-page-builder'),
 		"type"			=> "multi_options",
		"options"		=>	array( 	
  				array( 
					"name"			=> __('Arrow Laction','saoshyant-page-builder'),
					"id"			=> "location",
					"type"			=> "select",
					"options"			=>	array( 	
						"" 				=>esc_html__('Default','saoshyant-page-builder'),
						"slider-1" 				=>esc_html__('Location 1','saoshyant-page-builder'),
						"slider-2" 				=>esc_html__('Location 2','saoshyant-page-builder'),
						"slider-3" 				=>esc_html__('Location 3','saoshyant-page-builder'), 	 
					),
				),	
 				array( 
					"name"			=> __('Layout','saoshyant-page-builder'),			
					"id"			=> "layout",
					"type"			=> "select",
					"options"			=>	array( 	
							""				=> __('Default','saoshyant-page-builder'),	
							"hover"			=> __('On Hover','saoshyant-page-builder'),		 
							"fixed"			=> __('Fixed','saoshyant-page-builder'),		 
						),
				),	
  				array( 
					"name"			=> __('Size','saoshyant-page-builder'),			
					"id"			=> "size",
					"type"			=> "select",
					"options"			=>	array( 	
							""				=> __('Default','saoshyant-page-builder'),	
							"small"			=> __('Small','saoshyant-page-builder'),		 
							"medium"		=> __('Medium','saoshyant-page-builder'),		 
							"large"			=> __('Large','saoshyant-page-builder'),		 
						),	
				),	
		 	 		
 		),	
		
  	); 	


	$option[]= array( 
		"name"			=> __('Arrow Color','saoshyant-page-builder'),
 		"id"			=> "arrow_color",
		"fold"			=>	array( 
			"1" => "arrows",
		),
  		"group"			=> esc_html__('Slider','saoshyant-page-builder'),
  		"type"			=> "multi_options",
		"options"			=>	array( 	
  			array( 
 				"name"			=> 	__('Background','saoshyant-page-builder'),
 				"id"			=> "background",
  				"type"			=> "color_rgba",
  			
 			), 	
			
			array( 
				"name"			=> __('Arrow','saoshyant-page-builder'),			
  				"id"			=> "text",
				"type"			=> "color_rgba",
 			),					
 		
		), 			
	 
	); 			
		
	$option[]= array( 
		"name"			=> __('Arrow Radius','saoshyant-page-builder'),
 		"id"			=> "arrow_radius",
		"fold"			=>	array( 
			"1" => "arrows",
		),
  		"group"			=> esc_html__('Slider','saoshyant-page-builder'),
		"type"		=> "number",
 		"desc"			=>  __('by "pexel" example: "15"','saoshyant-page-builder'),
	); 			
	
	$option[]= array( 
		"name"			=> __('Auto Play','saoshyant-page-builder'),
 		"id"			=> "auto",
 		"group"			=>  __('Slider','saoshyant-page-builder'),
  		"type"			=> "checkbox",
		"default"		=>  1,
	); 	 	  		 
	$option[]= array( 
		"name"			=> __('Loop','saoshyant-page-builder'),
 		"id"			=> "loop",
 		"group"			=>  __('Slider','saoshyant-page-builder'),
  		"type"			=> "checkbox",
		"default"		=>  1,
	);		 
	
	$option[]= array( 
		"name"			=> __('Animation Speed ,Default "5000"','saoshyant-page-builder'),
 		"id"			=> "speed",
 		"group"			=>  __('Slider','saoshyant-page-builder'),
		"default"		=>  '1000',
 		"type"			=> "number",
   		
  	); 	 
	
	
	
	$option[]= array( 
		"name"			=> __('Animation Pause Time','saoshyant-page-builder'),
 		"id"			=> "pause",
		"default"		=>  '5000',
 		"group"			=>  __('Slider','saoshyant-page-builder'),
 		"type"			=> "number",
   		
  	); 	  	
  
 
 	$option[]= array( 
		"name"			=> __('Item','saoshyant-page-builder'),
 		"id"			=> "thumb_item",
 		"default"		=>  5, 
 		"group"			=>  __('Layout','saoshyant-page-builder'),
		"type"			=> "select",
   		"options"		=>  sao_array_options('item_col'),						
  		 
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
 		"type"			=> "select",
   		"options"		=>  sao_array_options('image_ratio'),						
 		
  	); 	  
  
  
   
 

	$option[]= array( 
		"name"			=> __('Image Thumb','saoshyant-page-builder'),
 		"id"			=> "image_thumb",
		"default"		=>  'full',
 		"group"			=>  __('Image','saoshyant-page-builder'),
		"type"			=> "select",
		"options" =>		sao_all_image_sizes(),
 		 
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
 
																   Imgage Gallery Carousel Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_gallery_carousel_config" )){
add_filter('sao_builder_image_gallery_carousel', 'sao_image_gallery_carousel_config');
function sao_image_gallery_carousel_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css ='';
	if(sao_element_show($option)=='show'){
 				
	ob_start(); 
 	$element_id = !empty( $option['element_id']) ?  ' id=" '.$option['element_id'].' " ' : '';
	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';	
	$click =  sao_image_click($option);

	$sao_cssanime = sao_el_cssanime($option);
	$widows = !empty($option['widows']) ?' target="_blank" ' : '';
	$image_effect =!empty( $option['hover_image_effect']) ? 'sao-hover-'.$option['hover_image_effect']:''; 
	$caption_effect =!empty( $option['caption_effect']) ? sao_builder_rtl_has($option['caption_effect']):'imghvr-fade'; 
	$image_hover =!empty( $option['image_hover']) ? $option['image_hover']:''; 
	$image_thumb = !empty($option['image_thumb']) ? $option['image_thumb']: 'full';	
	
 		$crop = sao_image_ratio($option);
	$classes=array(
		'sao-el-'.esc_attr($key),
		$custom_class,
		'sao-image-gallery-carousel',
		$caption_effect,
		$image_effect,
		
		$click,	$crop

	);
	?>
    
   	<aside <?php  sao_el_id($option);?> class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php  sao_el_cssanime($option);?>  >
  
 
        <div class="sao-slider-list-warp" >
            <div class="sao-slider-list" >
             
                <?php
                if(!empty($option['image'])):
                foreach($option['image'] as $keys => $value) :
                
                
                    $full = wp_get_attachment_image_src($value, 'full');
                    $thumbnail = wp_get_attachment_image_src($value, $image_thumb);
                    $inline_style=sao_image_inline(true,$thumbnail[0]);	
                    ?>
                    <div class="sao-slider-item">
                        <figure class="sao-image">
                            <?php sao_image_warp_before(esc_url($full[0]),$crop,$widows);?>
                                
                                <img  src="<?php echo esc_url($thumbnail['0']);?>"  width="<?php echo esc_attr($thumbnail[1]);?>" height="<?php echo esc_attr($thumbnail[2]);?>" <?php echo $inline_style;?> >
                                
                                    <?php if(!empty( $option['image_hover'])){?>
                                        <figcaption><?php sao_image_hover($option);?></figcaption>
                                    <?php }?>
                                    
                              <?php sao_image_warp_after(esc_url($full[0]),$crop);?>
                         </figure> 
                     </div>
                    
                 <?php   
                endforeach;
                endif;
                ?>
            </div>
            
            
			<?php if(!empty($option['arrows'])){?>
				<div class="sao-arrow-warp"><a class="sao-arrow-prev"></a><a class="sao-arrow-next"></a></div>		
            <?php } ?>
            
            
		</div>
        
        
        
		<?php   
        $thumbItem = !empty($option['thumb_item']) ? $option['thumb_item'] : 4;
        $slider_options = array( 
            "responsive"		=>  array(  
                array( 
                    "breakpoint"		=> 990,
                    "settings"			=> 
                        array( 
                            "controls"		=> true,
                            "item"			=> sao_builder_responsive_item($option,$thumbItem ,990) ,
                        ),
                ),
                array( 
                    "breakpoint"		=> 767,
                    "settings"			=> 
                        array( 
                            "controls"		=> true,
                            "item"			=> sao_builder_responsive_item($option,$thumbItem ,767),
                        ),
                ) ,
                 ),
                
                
        ); 	 
        
        $slider_options['speed']=  !empty($option['speed']) ? $option['speed'] : '2000';
        $slider_options['pause']= !empty($option['pause']) ? $option['pause'] : '5000';
        $slider_options['between']= 0 ;	
        $slider_options['pager']= true;	
        $slider_options['timer']= false;	
		$slider_options['loop']=!empty($option['loop']) ? true : false;

        $slider_options['controls']=!empty($option['arrows']) ? $option['arrows'] : '';
        $slider_options['auto']=  !empty($option['auto']) ? $option['auto'] : '';
      
	    sao_lightslider($thumbItem,$slider_options);
        ?>

 


    </aside>
    
    <?php
 	
	$image_css='';
 
 	 $item = '.sao-el-'.$key.''; 
	$item_css='';
	$item_css.= sao_var_unit('gp',$option,'between','px');	 
	 
 	 
	$item_css.= sao_image_css( $option);
 	 
 	$item_css.= sao_arrow_layout_css($option); 
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