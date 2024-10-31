<?php

 	$option[]= array( 
		"name"			=>	esc_html__('Text Typography','saoshyant-page-builder'),
 		"id"			=> "text_typography_start", 
   		"group"			=>  __('Typography','saoshyant-page-builder'),
  		"type"			=>  "according-start",						
   	); 
	
	
 
	$option[]= array( 
		"name"			=> __('Text Font Size','saoshyant-page-builder'),
 		"id"			=> "text_font_size",
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
		"name"			=> __('Text Font Weight','saoshyant-page-builder'),
 		"id"			=> "text_font_weight",
  		"group"			=>  __('Typography','saoshyant-page-builder'),
		"type"			=> "select",
		"default"		=>  '', 
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
		"name"			=> __('Text Line Height','saoshyant-page-builder'),
 		"id"			=> "text_line_height",
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
		"name"			=> __('Text Font Style','saoshyant-page-builder'),
 		"id"			=> "text_font_style",
		"group"			=>  __('Typography','saoshyant-page-builder'),
		"type"			=> "select", 	 	
		"options"		=>   
  			array( 
 				""					=> __('None','sao-slider'),
 				"normal"			=> 	__('Normal','sao-slider'),
 				"italic"			=> __('italic','sao-slider'),
  				"oblique"			=> __('oblique','sao-slider'),
  			),		
 		
  	);   
  	$option[]= array( 
		"name"			=>	esc_html__('Text Typography','reza'),
 		"id"			=> "text_typography_start", 
		"group"			=>  __('Typography','saoshyant-page-builder'),
   		"type"			=>  "according-end",						
   	); 		
?>