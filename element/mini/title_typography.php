<?php

 	$option[]= array( 
		"name"			=>	esc_html__('Title Typography','saoshyant-page-builder'),
 		"id"			=> "title_typography_start", 
   		"group"			=>  __('Typography','saoshyant-page-builder'),
  		"type"			=>  "according-start",						
   	); 
  
	$option[]= array( 
		"name"			=> __('Title Font Size','saoshyant-page-builder'),
 		"id"			=> "title_font_size",
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
		"name"			=> __('Title Font Weight','saoshyant-page-builder'),
 		"id"			=> "title_font_weight",
  		"group"			=>  __('Typography','saoshyant-page-builder'),
		"type"			=> "select",
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
		"name"			=> __('Title Line Height','saoshyant-page-builder'),
 		"id"			=> "title_line_height",
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
		"name"			=> __('Title Font Style','saoshyant-page-builder'),
 		"id"			=> "title_font_style",
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
		"name"			=>	esc_html__('Title Typography','reza'),
 		"id"			=> "title_typography_start", 
		"group"			=>  __('Typography','saoshyant-page-builder'),
   		"type"			=>  "according-end",						
   	); 		
?>