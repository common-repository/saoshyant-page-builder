<?php
	$option[]= array( 
		"name"			=> __('Details Style','saoshyant-page-builder'),
 		"id"			=> "details_heading",
 		"group"			=>  __('Details','saoshyant-page-builder'),
		"type"			=> "heading", 
		
  	); 

	$option[]= array( 
		"name"			=> __('Title Color','saoshyant-page-builder'),
 		"id"			=> "title_color",
 		"group"			=>  __('Details','saoshyant-page-builder'),
		"type"			=> "color_rgba", 
		
  	); 
	
	$option[]= array( 
		"name"			=> __('Details Color','saoshyant-page-builder'),
 		"id"			=> "details_color", 
 		"group"			=>  __('Details','saoshyant-page-builder'),
 		"type"			=> "color_rgba", 
		
  	); 	
	
 	 $option[]= array( 
		"name"			=> __('Title Line Bottom','saoshyant-page-builder'),
 		"id"			=> "title_line_bottom", 
 		"group"			=>  __('Details','saoshyant-page-builder'),
 		"type"			=> "multi_options",
 		"options"		=>  array( 
 			array( 
				"name"			=>  esc_html__('Width','saoshyant-page-builder'),  
  				"id"			=> "width",
 				"type"			=> "select",
 				"options"		=> array(
					""				=>  esc_html__('Hide','saoshyant-page-builder'),  
					"100%"			=> "100%",
					"95%"			=> "95%",
					"90%"			=> "90%",
					"85%"			=> "85%",
					"80%"			=> "80%",
					"75%"			=> "75%",
					"70%"			=> "70%",
					"65%"			=> "65%",
					"60%"			=> "60%",
					"55%"			=> "55%",
					"50%"			=> "50%",
					"45%"			=> "45%",
					"40%"			=> "40%",
					"35%"			=> "35%",
					"30%"			=> "30%",
					"25%"			=> "25%",
					"20%"			=> "20%",
					"15%"			=> "15%",
					"10%"			=> "10%",
					"5%"			=> "5%",
 				),
			),		
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

	if(empty($details_hover_off)){

	$option[]= array( 
		"name"			=> __('Hover Details Style','saoshyant-page-builder'),
 		"id"			=> "hover_details_heading",
 		"group"			=>  __('Details','saoshyant-page-builder'),
		"type"			=> "heading", 
		
  	); 
	$option[]= array( 
		"name"			=> __('Hover Title Color','saoshyant-page-builder'),
 		"id"			=> "hover_title_color",
 		"group"			=>  __('Details','saoshyant-page-builder'),
		"type"			=> "color_rgba", 
		
  	); 
	
	$option[]= array( 
		"name"			=> __('Hover Details Color','saoshyant-page-builder'),
 		"id"			=> "hover_details_color", 
 		"group"			=>  __('Details','saoshyant-page-builder'),
 		"type"			=> "color_rgba", 
		
  	);
	}
	?>