<?php
add_filter('sao_element_item', 'sao_element_item_notification_box');
function sao_element_item_notification_box( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	__('Notfifcation Box','saoshyant-page-builder'),
 		'id'			=> 'notification_box',
		'img'			=>  SAOPAGE_DIR.'assets/image/notification.jpg'
  	); 

 
	return $element;
} 

add_filter('sao_element_options_notification_box', 'sao_notification_box_options');
function sao_notification_box_options( $option ) {
	 


	$option[]= array( 
		"name"			=> __('Icon','saoshyant-page-builder'),
 		"id"			=> "icon",
  		"default"		=> "fa-check-circle",
 		"type"			=> "icon",
 	);	
	$option[]= array( 
		"name"			=> __('Content','saoshyant-page-builder'),
  		"id"			=> "content",
  		"default"		=> 	__('<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>'),
		"type"			=> "editor", 
	);  
	 

	$option[]= array( 
		"name"			=> __('Space Between Icon And Content','saoshyant-page-builder'),
 		"id"			=> "space_icon_details",
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
 			)		
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
		"name"			=> __('Padding in Boxed','saoshyant-page-builder'),
 		"id"			=> "padding_boxed",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"default"		=>  array( 
			"top"			=> '20',
			"left"			=> '20',
			"bottom"		=> '20',
			"right"			=> '20',
 			), 
 		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('margin'),						
 	);
 
	$option[]= array( 
		"name"			=> __('Boxed Background Color','saoshyant-page-builder'),
 		"id"			=> "boxed_background_color",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
   		"type"			=> "color_rgba",
 	); 	

	$option[]= array( 
		"name"			=> __('Boxed Border','saoshyant-page-builder'),
 		"id"			=> "boxed_border",
 
		"default"		=>  array( 
			"size"			=> '1', 
  		), 
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('border_2'),						
	); 	
	
	
	$option[]= array( 
		"name"			=> __('Boxed Shadow','saoshyant-page-builder'),
 		"id"			=> "boxed_shadow",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('shadow_mini'),						
 	); 
 
	 	
 	$option[]= array( 
		"name"			=> __('Border Radius','saoshyant-page-builder'),
 		"id"			=> "boxed_radius",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"type"			=> "multi_options",
  		"options"		=>  sao_multi_array_options('radius_mini'),						
	 
	); 	 
  
	/*----------------------------------------------------------------
	 icon
	 -------------------------------------------------------------*/
	 $option[]= array( 
		"name"			=> __('Icon Alignment','saoshyant-page-builder'),
 		"id"			=> "icon_alignment",
 		"group"			=>  __('Icon','saoshyant-page-builder'),
  		"type"			=> "select",
  		"default"		=> 'left',
		"options"		=> sao_array_options('align_mini')				
		 
	);	
	$option[]= array( 
		"name"			=> __('Icon Vertical align in middle','saoshyant-page-builder'),
 		"id"			=> "icon_vertical",
 		"group"			=>  __('Icon','saoshyant-page-builder'),
  		"type"			=> "checkbox",
	 			
	);
 
	
	$option[]= array( 
		"name"			=> __('Icon Layout','saoshyant-page-builder'),
 		"id"			=> "icon_layout",
 		"group"			=>  __('Icon','saoshyant-page-builder'),
  		"default"		=> '',
		"type"			=> "select",
		"options"		=>   array( 
 			""					=> __('None','saoshyant-page-builder'),
 			"boxed-rounded"		=> __('Boxed Rounded','saoshyant-page-builder'),
  			"boxed-square"		=> __('Boxed Square','saoshyant-page-builder'),
 			"boxed-diamond"		=> __('Boxed Diamond','saoshyant-page-builder'),
 			"boxed-hexagon"		=> __('Boxed Hexagon','saoshyant-page-builder'),	
 		), 						
				  
	); 
	
	$option[]= array( 
		"name"			=> __('Icon Boxed Size','saoshyant-page-builder'),
 		"id"			=> "icon_boxed_size",
 		"group"			=>  __('Icon','saoshyant-page-builder'),
  		"default"		=> '',
		"fold"			=>	array( 
			"boxed-rounded" => "icon_layout",
			"boxed-square" => "icon_layout",
			"boxed-diamond" => "icon_layout",
			"boxed-hexagon" => "icon_layout",
 		), 		
		
  		"default"		=> '',	
		"type"			=> "select",
		"options"		=>   array( 
 			""				=> __('Default','saoshyant-page-builder'),
 			"10px"			=> __('10px','saoshyant-page-builder'),
 			"15px"			=> __('15px','saoshyant-page-builder'),
			"20px"			=> __('20px','saoshyant-page-builder'),
			"25px"			=> __('25px','saoshyant-page-builder'),
 			"30px"			=> __('30px','saoshyant-page-builder'),
 			"40px"			=> __('40px','saoshyant-page-builder'),
 			"50px"			=> __('50px','saoshyant-page-builder'),
 			"60px"			=> __('60px','saoshyant-page-builder'),
 			"70px"			=> __('70px','saoshyant-page-builder'),
 			"80px"			=> __('80px','saoshyant-page-builder'),
 			"90px"			=> __('90px','saoshyant-page-builder'),
  
   		), 						
				  
	); 	 	
	$option[]= array( 
		"name"			=> __('Icon Style','saoshyant-page-builder'),
 		"id"			=> "icon_style_start", 
 		"group"			=>  __('Icon','saoshyant-page-builder'),
  		"type"			=>  "according-start",						
   	); 		 
 		
	$option[]= array(
		"name"		=>  __('Icon Color','saoshyant-page-builder'),
		"id"		=> "icon_color",
 		"group"			=>  __('Icon','saoshyant-page-builder'),
		"type"		=> "color_rgba",
	);
 
 
	$option[] = array(
		"name"		=>  __('Icon Background','saoshyant-page-builder'),
		"id"		=> "icon_background",
		"type"		=> "multi_options",
		"desc" 			=> __('You can see the background by changing the opacity color' , 'saoshyant-page-builder'),
		"fold"			=>	array( 
			"boxed-rounded" => "icon_layout",
			"boxed-square" => "icon_layout",
			"boxed-diamond" => "icon_layout",
			"boxed-hexagon" => "icon_layout",
 		), 		
 		"group"			=>  __('Icon','saoshyant-page-builder'),
		"options"		=>  sao_multi_array_options('background2'),						
	);
			
	$option[] =array(
		"name"		=>  __('Icon Border','saoshyant-page-builder'),
		"id"		=> "icon_border",
		"type"		=> "multi_options",
 		"fold"			=>	array( 
			"boxed-rounded" => "icon_layout",
			"boxed-square" => "icon_layout",
			"boxed-diamond" => "icon_layout",
			"boxed-hexagon" => "icon_layout",
 		), 	
 		"group"			=>  __('Icon','saoshyant-page-builder'),
		"options"	=>  sao_multi_array_options('border_mini'),						
	);
	
	$option[]= array( 
		"name"			=> __('Icon Border Radius','saoshyant-page-builder'),
 		"id"			=> "icon_radius",
		"fold"			=>	array( 
 			"boxed-square" => "icon_layout",
			"boxed-diamond" => "icon_layout",
  		), 			
 		"group"			=>  __('Icon','saoshyant-page-builder'),
 		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('radius_mini'),						
	 
	); 		
	 
	$option[]= array( 
		"name"			=> __('Icon Style','saoshyant-page-builder'),
 		"id"			=> "icon_style_end", 
 		"group"			=>  __('Icon','saoshyant-page-builder'),
  		"type"			=>  "according-end",						
   	);  
	
	/*----------------------------------------------------------------
	 Details Style
	 -------------------------------------------------------------*/		
	 
	
	$option[]= array( 
		"name"			=> __('Content Alignment','saoshyant-page-builder'),
 		"id"			=> "details_alignment",
		
  		"group"			=>  __('Content','saoshyant-page-builder'),
		"default"		=>  'left',
 		"type"			=> "select",
		"options"		=> sao_array_options('align_mini'),				
		 
	); 
	 	
	$option[]= array( 
		"name"			=> __('Content Vertical align in middle','saoshyant-page-builder'),
 		"id"			=> "details_vertical",
  		"group"			=>  __('Content','saoshyant-page-builder'),
  		"type"			=> "checkbox",
	 			
	);		
	$option[]= array( 
		"name"			=> __('Content Color','saoshyant-page-builder'),
 		"id"			=> "details_color", 
  		"group"			=>  __('Content','saoshyant-page-builder'),
 		"type"			=> "color_rgba", 
		
  	); 		 	
	$option[]= array( 
		"name"			=> __('Icon','saoshyant-page-builder'),
 		"id"			=> "icon_typo_heading",
  		"group"			=>  __('Typography','saoshyant-page-builder'),
		"type"			=> "heading", 	 	
 	);  
	  	
 	$option[]= array( 
		"name"			=> __('Icon Size','saoshyant-page-builder'),
 		"id"			=> "icon_font_size",
					
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
  	include SAOPAGE_PATH . 'element/mini/details_typography.php';

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
	 
 
    return $option;
} 




add_filter('sao_builder_notification_box', 'sao_notification_box_config');
function sao_notification_box_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css ='';
	$icon  =!empty($option['icon'])? ' has-post-thumbnail ':'';
	
	
 $icon_alignment = !empty($option['icon_alignment']) ?sao_builder_rtl_has($option['icon_alignment']) : sao_builder_rtl_left();
	$icon_vertical = !empty($option['icon_vertical']) ? ' sao-icon-vertical-middle ': '';	
	$icon  =!empty($option['icon'])? ' has-post-thumbnail ':'';
	
 	
	$icon_layout = !empty($option['icon_layout']) ?' sao-icon-boxed sao-icon-'.$option['icon_layout'] : ' sao-icon-default ';
 	$icon_boxed_size = !empty($option['icon_boxed_size']) ?' sao-icon-'.$option['icon_boxed_size'] : ' sao-icon-40px ';
  	$details_alignment = !empty($option['details_alignment']) ?' sao_alignment_'.sao_builder_rtl_has($option['details_alignment']) : 'sao_alignment_'.sao_builder_rtl_left();
 	$details_vertical = !empty($option['details_vertical']) ? ' sao-details-vertical-middle ': '';
	
 

	$output.='<div class="sao-notification-box   sao-color-border  sao-icon-text   '.esc_attr($icon).' sao_icon_'.esc_attr($icon_alignment).'  sao_style_boxed sao-all-padding sao-style-boxed '.esc_attr($icon_vertical.$details_vertical.' '.$details_alignment).' sao-post sao-auto-width-warp sao-auto-width-post ">'; 
     $output.='<div class="sao-color-border sao-box-background"></div>'; 
	
	$output.='<div class="sao-post-warp">'; 
     
		if(!empty($option['icon'])) { 
 		
 		$output.= '<div class="sao-icon-warp" >';
		 
		$output.= '<div class="sao-icon   sao-icon-mini sao-icon-size  '.esc_attr($icon_layout).' '.esc_attr($icon_boxed_size).'" >';
 			$output.= '<div class="sao-color-border sao-icon-background" '.sao_icon_hexagon($option).' ><div class="sao-color-border  sao-icon-background-hover"></div></div>';
		
		  $output.= '<i class="sao-color-span '.esc_attr($option['icon']).'"></i>'; 
		$output.= '</div>';
 		
		 
		$output.='</div>';
	}  
        
        
	$output.='<div class="sao-details-warp  sao-padding-'.esc_attr($icon_alignment).'">';
	$output.='<div class="sao-details sao-auto-width-item ">';
	 
		if(!empty($option['content'])){ 
			$output.='<div class="sao-excerpt sao-color-text sao-color-item  sao_text_block sao-font-medium">'.wp_kses_post($option['content']) .'</div>';
       	}
		
      $output.='</div>';
      $output.='</div>';
      $output.='</div>';
    $output.='</div>';

 	$item = '.sao-element-'.$key.' ';
	
	
	
	
	
	
//Icon Css 	
 
	//Layout Css
	$icon_alignment = !empty($option['icon_alignment']) ?sao_builder_rtl_has($option['icon_alignment']) : sao_builder_rtl_left();
	$all_details_css ='';
	if($icon_alignment == 'left'){
		$all_details_css.= sao_builder_padding_left($option,'space_icon_content'); 
	}else{
		$all_details_css.= sao_builder_padding_right($option,'space_icon_content'); 
	}
	$css.= sao_builder_item_css($all_details_css,$item.' .sao-details');
 		
	 
	
	$css.= sao_style_boxed_css($option,$item);
 
	//Icon Css 	
 	$css.= sao_style_icon_css($option,$item.' .sao-notification-box');
 		
	//Content Css
   	$css.= sao_style_details_css($option,$item.' .sao-notification-box');
	
	
  
 
  	$css.=sao_element_padding( $key,$option); 
   	$return['output']= $output;
  	$return['css']= $css;
	
	return $return;	
}
 
?>