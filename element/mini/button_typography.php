<?php
 	/********************************************************************
	Typography
	*********************************************************************/	

 	$option[]= array( 
		"name"			=>	esc_html__('Button Typography','saoshyant-page-builder'),
 		"id"			=> "button_typography_start", 
   		"group"			=>  __('Typography','saoshyant-page-builder'),
  		"type"			=>  "according-start",						
   	); 
	
	
		
$option[]= array( 
		"name"			=> __('Button Font Size','saoshyant-page-builder'),
 		"id"			=> "button_font_size",
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
		"name"			=> __('Button Font Weight','saoshyant-page-builder'),
 		"id"			=> "button_font_weight",
  		"group"			=>  __('Typography','saoshyant-page-builder'),
		"type"			=> "select",
 		"options"		=>  array( 
			""		=> __('Default','saoshyant-page-builder'),
 			"300"			=> __('Light','saoshyant-page-builder'),
			"normal"		=> __('Normal','saoshyant-page-builder'),
			"500"			=> __('Medium','saoshyant-page-builder'),
			"bold"			=> __('Bold','saoshyant-page-builder'),
			"900"			=> __('Extra-Bold','saoshyant-page-builder'),
			) ,
		
  	);		
	 
	$option[]= array( 
		"name"			=> __('Button Font Style','saoshyant-page-builder'),
 		"id"			=> "button_font_style",
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
		"name"			=>	esc_html__('Button Typography','saoshyant-page-builder'),
 		"id"			=> "button_typography_end", 
		"group"			=>  __('Typography','saoshyant-page-builder'),
   		"type"			=>  "according-end",						
   	); 			