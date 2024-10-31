<?php


	$option[]= array( 
		"name"			=> __('Padding in Boxed','saoshyant-page-builder'),
 		"id"			=> "padding_boxed",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"fold"			=>	$boxed_fold,
 
 		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('margin'),						
 	);
 
	$option[]= array( 
		"name"			=>	esc_html__('Boxed Style','saoshyant-page-builder'),
 		"id"			=> "boxed_style_start", 
  		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"fold"			=>	$boxed_fold,
  		"type"			=>  "according-start",						
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
			"color"			=> '#eeeeee',
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
	 
	$option[]= array( 
		"name"			=> __('Boxed Style','saoshyant-page-builder'),
 		"id"			=> "boxed_style_end", 
   		"fold"			=>	$boxed_fold,
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
  		"type"			=>  "according-end",						
   	); 	
		 
	 
	 
	 
$option[]= array( 
		"name"			=> __('on Hover Boxed Style','saoshyant-page-builder'),
 		"id"			=> "hover_boxed_style_start", 
  		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"fold"			=>	$boxed_item,
  		"type"			=>  "according-start",						
   	); 
	
	$option[]= array( 
		"name"			=> __('Hover Boxed Background Color','saoshyant-page-builder'),
 		"id"			=> "hover_boxed_background_color",
  		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"type"			=> "color_rgba",
 	); 	

	$option[]= array( 
		"name"			=> __('Hover Boxed Border','saoshyant-page-builder'),
 		"id"			=> "hover_boxed_border",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('border_2'),						
	); 	
	
	
	$option[]= array( 
		"name"			=> __('Hover Boxed Shadow','saoshyant-page-builder'),
 		"id"			=> "hover_boxed_shadow",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"type"			=> "multi_options",
   		"options"		=>  sao_multi_array_options('shadow_mini'),						
 	); 
	$option[]= array( 
		"name"			=> __('on Hover Boxed Style','saoshyant-page-builder'),
 		"id"			=> "hover_boxed_style_end", 
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
  		"fold"			=>	$boxed_item,
   		"type"			=>  "according-end",						
   	);	 
	 
 
 	 $option[]= array( 
		"name"			=> __('Border Between item','saoshyant-page-builder'),
 		"id"			=> "border_between_item", 
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"fold"			=>	array( 
								"none" => "box_layout",
								"boxed" => "box_layout",
							),
 		"type"			=> "multi_options",
 		"options"		=>  array( 
   			array( 
				"name"			=>  esc_html__('Size','saoshyant-page-builder'),  
  				"id"			=> "size",
 				"type"			=> "number",
 			),		
			array( 
 				"name"			=> 	esc_html__('Style','saoshyant-page-builder'),
 				"id"			=> "style",
  				"type"			=> "select",
				"options"		=>  sao_array_options('border_style'),
 			),					
			array( 
   				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),	
		),	
	); 		 
	?>