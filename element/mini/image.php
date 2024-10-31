<?php 
 	/*----------------------------------------------------------------
	 Image Style
	 -------------------------------------------------------------*/
	$option[]= array( 
		"name"			=>	esc_html__('Image Style','saoshyant-page-builder'),
 		"id"			=> "image_style_start", 
  		"group"			=>  __('Image','saoshyant-page-builder'),
   		"type"			=>  "according-start",						
   	); 
	$option[]= array( 
		"name"			=> __('Image Border','saoshyant-page-builder'),
		"id"			=> "image_border",
 		"group"			=>  __('Image','saoshyant-page-builder'),
		"type"			=> "multi_options",
		"options"		=>  sao_multi_array_options('border_2'),						
 	); 	
		 		
			
	$option[]= array( 
		"name"			=> __('Image Box Shadow','saoshyant-page-builder'),
 		"id"			=> "image_shadow",
 		"group"			=>  __('Image','saoshyant-page-builder'),
 		"type"			=> "multi_options",
		"options"		=>  array( 
 
			array( 
				"name"			=> esc_html__('Blur','saoshyant-page-builder'),
				"id"			=> "blur",
 				"type"			=> "number",
 			), 
				 
			array( 
				"name"			=>  esc_html__('Spread','saoshyant-page-builder'),
  				"id"			=> "spread",
 				"type"			=> "number",
 			),	
			array( 
   				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),
			),				
			 
 					
 	); 	
	$option[]= array( 
		"name"			=> __('Image Border Radius','saoshyant-page-builder'),
 		"id"			=> "image_radius",
 		"group"			=>  __('Image','saoshyant-page-builder'),
 		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('radius_mini'),						
	 
	); 	
	$option[]= array( 
		"name"			=>	esc_html__('Image Style','saoshyant-page-builder'),
 		"id"			=> "image_style_end", 
  		"group"			=>  __('Image','saoshyant-page-builder'),
   		"type"			=>  "according-end",						
   	); 	
	$option[]= array( 
		"name"			=>	esc_html__('On Hover Image Style','saoshyant-page-builder'),
 		"id"			=> "hover_image_start", 
  		"group"			=>  __('Image','saoshyant-page-builder'),
   		"type"			=>  "according-start",						
   	); 		 

 	$option[]= array( 
		"name"			=> __('Hover Image effect','saoshyant-page-builder'),
 		"id"			=> "hover_image_effect",
 
   		"fold"			=>	array( 
			"custom" => "onlink",
 			"image" => "onlink",	
 			"prettyphoto" => "onlink",	
			"none" => "onlink"	
		), 
 		"group"			=>  __('Image','saoshyant-page-builder'),
		"type"			=> "select",
		"options"		=>  array( 
			"none"			=> __('None','saoshyant-page-builder'), 
			"reduce-opacity"	=> __('Reduce Opacity','saoshyant-page-builder'),
			"remove-opacity"	=> __('Remove Opacity','saoshyant-page-builder'),
			"add-color"			=> __('Add Color','saoshyant-page-builder'),
			"remove-color"		=> __('Remove Color','saoshyant-page-builder'),
			"grow"				=> __('Grow','saoshyant-page-builder'),
			"shrink"			=> __('Shrink','saoshyant-page-builder'),
			"sidepan"			=> __('Side Pan','saoshyant-page-builder'),
			"verticalpan"		=> __('Vertical Pan','saoshyant-page-builder'),
			"rotate"			=> __('Rotate','saoshyant-page-builder'),
 			"add-blur"			=> __('Add Blur','saoshyant-page-builder'),
 			"remove-blur"		=> __('Remove Blur','saoshyant-page-builder'),
			"add-brighten"		=> __('Add Brighten','saoshyant-page-builder'),
			"remove-brighten"	=> __('Remove Brighten','saoshyant-page-builder'),
			"add-darkness"		=> __('Add Darkness','saoshyant-page-builder'),
			"remove-darkness"	=> __('Remove Darkness','saoshyant-page-builder'),			
    		),		
			
 	);	  
	
	$option[]= array( 
		"name"			=> __('Hover Image Border','saoshyant-page-builder'),
		"id"			=> "hover_image_border",
 		"group"			=>  __('Image','saoshyant-page-builder'),
		"type"			=> "multi_options",
		"options"		=>  sao_multi_array_options('border_2'),						
 	); 	
		 		
			
	$option[]= array( 
		"name"			=> __('Hover Image Box Shadow','saoshyant-page-builder'),
 		"id"			=> "hover_image_shadow",
 		"group"			=>  __('Image','saoshyant-page-builder'),
 		"type"			=> "multi_options",
		"options"		=> array( 
 
			array( 
				"name"			=> esc_html__('Blur','saoshyant-page-builder'),
				"id"			=> "blur",
 				"type"			=> "number",
 			), 
				 
			array( 
				"name"			=>  esc_html__('Spread','saoshyant-page-builder'),
  				"id"			=> "spread",
 				"type"			=> "number",
 			),	
			array( 
   				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),
			),									
 	); 	
	
	$option[]= array( 
		"name"			=>	esc_html__('On Hover Image Style','saoshyant-page-builder'),
 		"id"			=> "hover_image_end", 
  		"group"			=>  __('Image','saoshyant-page-builder'),
   		"type"			=>  "according-end",						
   	); 	
	
	$option[]= array( 
		"name"			=> __('on Hover Style Icon','saoshyant-page-builder'),
 		"id"			=> "hover_style_icon",
 		"group"			=>  __('Image','saoshyant-page-builder'),
 		"fold"			=>	array( 
			"zoom" 	=> "image_hover",
			"play" 	=> "image_hover"
		), 
 		"type"			=> "select",
 		"options"		=>  array(
			'dark'			=>__('Dark','saoshyant-page-builder'), 						
			'light'			=>__('Light','saoshyant-page-builder')
		), 						
	);		
	
	
	
 	$option[]= array( 
		"name"			=> __('Image Hover Background Effect','saoshyant-page-builder'),
 		"id"			=> "caption_effect",
 		"group"			=>  __('Image','saoshyant-page-builder'),
 		"type"			=> "select",
 		"options"		=>   sao_array_image_hover(),		
  	);	 	
	
		
	
	$option[]= array( 
		"name"			=> __('Image Hover Background Color','saoshyant-page-builder'),
 		"id"			=> "caption_background_color",
 		"group"			=>  __('Image','saoshyant-page-builder'),
  		"type"			=> "color_rgba",
  	);	 	
	$option[]= array( 
		"name"			=> __('Image Hover Caption Color','saoshyant-page-builder'),
 		"id"			=> "caption_color",
  		"group"			=>  __('Image','saoshyant-page-builder'),
		"type"			=> "color_rgba",
  	);	 
			
				
	?>