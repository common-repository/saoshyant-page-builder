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
	
	if(empty($boxed_hover_off)){
	$option[]= array( 
		"name"			=> __('on Hover Boxed Style','saoshyant-page-builder'),
 		"id"			=> "hover_boxed_style_start", 
  		"group"			=>  __('Box Layout','saoshyant-page-builder'),
 		"fold"			=>	$boxed_fold,
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
		"type"			=>  "according-end",						
   	);
	}
	?>