<?php
 		$fold = array( 
 			"style-1" => "button_style",
 			"style-2" => "button_style",
 			"style-3" => "button_style",
 			"style-4" => "button_style",
 			"style-5" => "button_style",
     		); 			

 	/*----------------------------------------------------------------
	 Button Style
	 -------------------------------------------------------------*/			
	$option[] = array(
		"name"		=>  __('Style Button','saoshyant-page-builder'),
		"id"		=> "button_style",
		"type"		=> "select",
 		"group"		=>  __('Button','saoshyant-page-builder'),
		"options"	=>  sao_array_options('button_style_2'),						
	);	
 
 
 
	$option[]= array( 
		"name"			=> __('Button Padding','saoshyant-page-builder'),
 		"id"			=> "button_padding",
 		"fold"			=> $fold,
 		"group"		=>  __('Button','saoshyant-page-builder'),
	  
		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('padding_mini'),						
 	); 
	$option[]= array( 
		"name"				=> __('Button Style','saoshyant-page-builder'),
 		"id"				=> "button_start", 
 		"group"				=>  __('Button','saoshyant-page-builder'),
  		"type"				=>  "according-start",						
   	); 		 
	$option[] = array(
		"name"				=>  __('Button Text Color','saoshyant-page-builder'),
  		"id"				=> "button_color",
		"default"			=>  '#ffffff',
  		"type"				=> "color_rgba",
 		"group"				=>  __('Button','saoshyant-page-builder'),
 				 
	);
		 
	$option[]=array(
  				"name"		=>  __('Button Background Color','saoshyant-page-builder'),
  				"id"		=> "button_background",
 				"type"		=> "multi_options",
				"default"	=>  array('first'=> '#ff3300'),
  				"fold"			=> $fold,
 				"group"		=>  __('Button','saoshyant-page-builder'),
 				"options"		=>  sao_multi_array_options('background2'),						
	);
	
	$option[]= array(
  				"name"		=>  __('Button Border','saoshyant-page-builder'),
  				"id"		=> "button_border",
 				"type"		=> "multi_options",
 				"fold"			=> $fold,
 				"group"		=>  __('Button','saoshyant-page-builder'),
 				"options"		=>  sao_multi_array_options('border_mini'),						
	);
	
	$option[]= array( 
		"name"			=> __('Button Border Radius','saoshyant-page-builder'),
 		"id"			=> "button_radius",
 		"fold"			=> $fold,
 		"group"		=>  __('Button','saoshyant-page-builder'),
 		"type"			=> "multi_options",
		"default"		=>  array( 
 			"size"		=> '5',
			"unit"			=> 'px',
			),
		"options"		=>  sao_multi_array_options('radius_mini'),			
	 
	);
	 	
	$option[]= array( 
		"name"				=> __('Button Style','saoshyant-page-builder'),
 		"id"				=> "button_end", 
 		"group"				=>  __('Button','saoshyant-page-builder'),
  		"type"				=>  "according-end",						
   	); 		
		
	$option[]= array( 
		"name"			=> __('On Hover Style','saoshyant-page-builder'),
 		"id"			=> "hover_button_start", 
 		"group"			=>  __('Button','saoshyant-page-builder'),
  		"type"			=>  "according-start",						
   	); 		
	 
 
		
	$option[] = array(
  				"name"		=>  __('Hover Button Text Color','saoshyant-page-builder'),
  				"id"		=> "hover_button_color",
 				"type"		=> "color_rgba",
  				"group"		=>  __('Button','saoshyant-page-builder'),
  	);
			
	$option[]= array(
  				"name"		=>  __('Hover Button Background Color','saoshyant-page-builder'),
  				"id"		=> "hover_button_background",
 				"type"		=> "multi_options",
 			"fold"			=> $fold,
 				"group"		=>  __('Button','saoshyant-page-builder'),
 				"options"		=>  sao_multi_array_options('background2'),						
	);
	
	$option[]= array(
  				"name"		=>  __('Hover Button Border','saoshyant-page-builder'),
  				"id"		=> "hover_button_border",
 				"type"		=> "multi_options",
 				"fold"			=> $fold,
				"group"		=>  __('Button','saoshyant-page-builder'),
 				"options"		=>  sao_multi_array_options('border_mini'),						
	);
	$option[]= array( 
		"name"			=> __('On Hover Style','saoshyant-page-builder'),
 		"id"			=> "hover_button_end", 
 		"group"			=>  __('Button','saoshyant-page-builder'),
  		"type"			=>  "according-end",						
   	); 	?>