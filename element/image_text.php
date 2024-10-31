<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Image Text
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_image_text" )){
add_filter('sao_element_item', 'sao_element_item_image_text');
function sao_element_item_image_text( $element ) {
 	
 	$element[]= array(
 		'name'			=> 	__('Image & Text','saoshyant-page-builder'),
 		'id'			=> 'image_text',
		'img'			=>  SAOPAGE_DIR.'assets/image/image_text.jpg'
  	); 
	
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Image Text Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_image_text_options" )){
add_filter('sao_element_options_image_text', 'sao_image_text_options');
function sao_image_text_options( $option ) {
	 
   
	
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
		"name"			=> __('Image On click Action','saoshyant-page-builder'),
 		"id"			=> "onlink",
 		"default"		=>  'custom',
 		"type"			=> "select",
		"options"		=>  array( 
 			"custom"		=> __('Custom link','saoshyant-page-builder'),
			"image"			=> __('Link To Full Image','saoshyant-page-builder'),
			"prettyphoto"	=> __('Open PrettyPhoto','saoshyant-page-builder'),
			"zoom"			=> __('Zoom','saoshyant-page-builder'),
			"none"			=>  __('None','saoshyant-page-builder'),
			
  		),					
		 
	);
	$option[]= array( 
		"name"			=> __('Title','saoshyant-page-builder'),
 		"default"		=> __('Lorem ipsum dolor sit amet','saoshyant-page-builder'),
 		"id"			=> "title",
 		"type"			=> "text",
 		  
	);
	$option[]= array( 
		"name"			=> __('Element tag','saoshyant-page-builder'),
 		"id"			=> "heading",
  		"default"		=> 'h3',
 		"type"			=> "select",
		"options"		=>  array( 
			''		=>	 esc_html__('Default','saoshyant-page-builder'),				
			'h1'	=> 'h1',						
			'h2' 	=> 'h2',						
			'h3' 	=> 'h3',						
			'h4' 	=> 'h4',						
			'h5' 	=> 'h5',						
			'h6' 	=> 'h6',						
			'p'		=> 'p',						
			'div'	=> 'div',						
			'span'	=> 'span',						
		),
 	);	
	
	
	$option[]= array( 
		"name"			=> __('The Details','saoshyant-page-builder'),
 		"id"			=> "details",
  		"default"		=> __('sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud','saoshyant-page-builder'),
 		"type"			=> "textarea",
 		  
	);
 
     
	$option[]= array( 
		"name"			=> __('Button Text','saoshyant-page-builder'),
 		"id"			=> "button",
  		"desc"			=>  __('input text to show button','saoshyant-page-builder'),
  		"type"			=>  'text',
	 
	);
	
	$option[]= array( 
		"name"			=> __('Link','saoshyant-page-builder'),
 		"id"			=> "link",
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
 			 
		),			
   	);	 	
	 
	$option[]= array( 
		"name"			=> __('Space Between Image And Details','saoshyant-page-builder'),
 		"id"			=> "space_image_details",
  		"group"			=>  __('Layout','saoshyant-page-builder'),
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
		"name"			=> __('Space Between Title And Details','saoshyant-page-builder'),
 		"id"			=> "space_title_details",
  		"group"			=>  __('Layout','saoshyant-page-builder'),
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
		"name"			=> __('Button Margin Top','saoshyant-page-builder'),
 		"id"			=> "button_margin_top",
  		"group"			=>  __('Layout','saoshyant-page-builder'),
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
	
	/*----------------------------------------------------------------
	 Box Style
	 -------------------------------------------------------------*/
 	$option[]= array( 
		"name"			=> __('Box Layout','saoshyant-page-builder'),
 		"id"			=> "box_layout",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
  		"default"		=> '',
		"type"			=> "select",
		"options"		=>   array( 
 			""		=> __('None','saoshyant-page-builder'),
			"boxed"		=> __('Boxed','saoshyant-page-builder'),
			"boxed-2"	=> __('Boxed 2','saoshyant-page-builder'),
		), 						
				  
	); 	 	
	
	$boxed_fold = array( 
			"boxed" => "box_layout",
			"boxed-2" => "box_layout"
		);
	 
	include SAOPAGE_PATH . 'element/mini/boxed.php';
	
	
	
	$option[]= array( 
		"name"			=> __('Image Width','saoshyant-page-builder'),
 		"id"			=> "width",
 		"group"			=>  __('Image','saoshyant-page-builder'),
  		"default"		=>  '',
		"type"			=> "select",
   		"options"		=>  array(
			"" 		=>	 __('Default','saoshyant-page-builder'),
			"5" 	=>	"5%",
			"7.5" 	=>	"7.5%",
			"10" 	=>	"10%",
			"12.5" 	=>	"12.5%",
			"15" 	=>	"15%",
			"17.5" 	=>	"17.5%",
			"20" 	=>	"20%",
			"22.5" 	=>	"22.5%",
			"25" 	=>	"25%",
			"27.5" 	=>	"27.5%",
			"30" 	=>	"30%",
			"35" 	=>	"35%",
			"40" 	=>	"40%",
			"45" 	=>	"45%",
			"50" 	=>	"50%",
 		)					
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
		"name"			=> __('Image Alignment','saoshyant-page-builder'),
 		"id"			=> "image_alignment",
		"default"		=> 'left',
		
 		"group"			=>  __('Image','saoshyant-page-builder'),
  		"type"			=> "select",
		"options"		=>  sao_array_options('align_mini')			
		 
	);	
 
	$option[]= array( 
		"name"			=> __('Image Vertical align in middle','saoshyant-page-builder'),
 		"id"			=> "image_vertical",
 		"group"			=>  __('Image','saoshyant-page-builder'),
  		"type"			=> "checkbox",
	 			
	);
	 

	
	include SAOPAGE_PATH . 'element/mini/image.php';  


	/*----------------------------------------------------------------
	 Details Style
	 -------------------------------------------------------------*/		  	

	$option[]= array( 
		"name"			=> __('Details Alignment','saoshyant-page-builder'),
 		"id"			=> "details_alignment",
 		"group"			=>  __('Details','saoshyant-page-builder'),
		"default"		=>  'left',
 		"type"			=> "select",
		"options"		=>  sao_array_options('align_mini')			
		 
	); 
	 	
	$option[]= array( 
		"name"			=> __('Details Vertical align in middle','saoshyant-page-builder'),
 		"id"			=> "details_vertical",
 		"group"			=>  __('Details','saoshyant-page-builder'),
  		"type"			=> "checkbox",
	 			
	);		
 	include SAOPAGE_PATH . 'element/mini/details.php';
 	
	/*----------------------------------------------------------------
	 Button Style
	 -------------------------------------------------------------*/			
 	include SAOPAGE_PATH . 'element/mini/button.php';
 	include SAOPAGE_PATH . 'element/mini/details_type.php';
	 

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
 
																   Image Text Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ( !function_exists ( "sao_image_text_config" )){
add_filter('sao_builder_image_text', 'sao_image_text_config');
function sao_image_text_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];

	if(sao_element_show($option)=='show'){
 
 	ob_start(); 
	
	$output='';
	$css =''; 

	 
	
 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
  	$image_alignment = !empty($option['image_alignment']) ? $option['image_alignment']: '';
 	$image_alignment = $image_alignment == 'right' ? 'sao-image-'.sao_builder_rtl_right():'';
	
	$image_effect =!empty( $option['hover_image_effect']) && $option['hover_image_effect']!=='none' ? 'sao-hover-'.$option['hover_image_effect']:''; 
 	$caption_effect =!empty( $option['caption_effect']) ? sao_builder_rtl_has($option['caption_effect']):''; 
	$image_hover =!empty( $option['image_hover']) ? $option['image_hover']:''; 
	$crop = sao_image_ratio($option);
	
	
	$box_layout = sao_el_box_layout($option);
   	$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
		'sao-image-one',
		$box_layout,
  		$image_alignment,
 		$crop,
		$caption_effect,
		$image_effect,
		sao_image_click($option),
		'sao-aw'
 	);
	
   
	?>
 	 <aside <?php  sao_el_id($option);?> class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php  sao_el_cssanime($option);?>  >
	
		<?php if($box_layout=='sao-boxed-item-2') { ?>
             <div class="sao-bg"></div>
        <?php } ?>
 
         
             <?php sao_el_image($option, $crop);?>
            
              <div class="sao-details">
               
            		<?php 
					if(!empty($option['title'])) sao_el_title($option);
				   
					sao_el_line($option);
				  
				   if(!empty($option['details'])) sao_el_excerpt($option);
				   if(!empty($option['button'])) sao_el_button($option);
 					?>
                
 			</div>
 	
    </aside>
 	   
	<?php
 	$item = '.sao-el-'.$key.'';
	$item_css='';
   	$item_css.= sao_var_size('dt-pd-rt',$option,'space_image_details','size'); 
  	$item_css.= sao_var_size('ex-mg-tp',$option,'space_title_details','size');
  	$item_css.= sao_var_size('btn-mg-tp',$option,'button_margin_top','size');

 
   if(!empty($option['image_vertical'])) {
		$item_css.='--sao-img-ver:auto;';
 	}
   if(!empty($option['details_vertical'])) {
		$item_css.='--sao-dt-ver:auto;';
 	}
 	$item_css.= sao_var_align('ag',$option,'details_alignment','left') ;
 

  	$item_css.= sao_boxed_css($option); 
  	
	 	$item_css.= sao_var_unit('img-wt',$option,'width','%') ;
 
	$item_css.= sao_image_css($option); 
	
	
 	 
	
  	$item_css.= sao_title_css($option); 
  	$item_css.= sao_line_css($option); 
  	$item_css.= sao_excerpt_css($option); 
  	$item_css.= sao_button_css($option); 
    
	$item_css.= sao_element_padding($option);
	$css.=sao_item_css($item_css,$item);
	
   	$return['output']=  ob_get_clean();
  	$return['css']= $css;
  	$return['emptybefore']= true;
  	$return['emptyafter']= true;
	return $return;	
}
	}
	 
}
?>