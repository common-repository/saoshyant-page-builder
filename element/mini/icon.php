<?php

	/*----------------------------------------------------------------
	 Icon Style
	 -------------------------------------------------------------*/		  	
 	$option[]= array( 
		"name"			=> __('Icon Layout','saoshyant-page-builder'),
 		"id"			=> "icon_layout",
 		"group"			=>  __('Icon','saoshyant-page-builder'),
  		"default"		=> '',
		"type"			=> "select",
		"options"		=>   array( 
 			""					=> __('Default','saoshyant-page-builder'),
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
 			""				=> esc_html__('Default','saoshyant-page-builder'),
 			"10px"			=> esc_html('10px','saoshyant-page-builder'),
 			"15px"			=> esc_html('15px','saoshyant-page-builder'),
 			"20px"			=> esc_html('20px','saoshyant-page-builder'),
 			"25px"			=> esc_html('25px','saoshyant-page-builder'),
 			"30px"			=> esc_html('30px','saoshyant-page-builder'),
 			"40px"			=> esc_html('40px','saoshyant-page-builder'),
 			"50px"			=> esc_html('50px','saoshyant-page-builder'),
 			"60px"			=> esc_html('60px','saoshyant-page-builder'),
 			"70px"			=> esc_html('70px','saoshyant-page-builder'),
 			"80px"			=> esc_html('80px','saoshyant-page-builder'),
 			"90px"			=> esc_html('90px','saoshyant-page-builder'),
  
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
	$option[]= array( 
		"name"			=> __('on Hover','saoshyant-page-builder'),
 		"id"			=> "icon_style_start", 
 		"group"			=>  __('Icon','saoshyant-page-builder'),
  		"type"			=>  "according-start",						
   	); 	
 	
	$option[]=array( 
		"name"			=> __('Hover Icon Effects','saoshyant-page-builder'),
		"id"			=> "hover_icon_effect",
		"type"			=> "select",
 		"fold"			=>	array( 
			"boxed-rounded" => "icon_layout",
			"boxed-square" => "icon_layout",
			"boxed-diamond" => "icon_layout",
			"boxed-hexagon" => "icon_layout",
 		), 
 		"group"			=>  __('Icon','saoshyant-page-builder'),
		"options"		=>   sao_array_icon_hover(),		
	);
 	
	$option[]= array(
		"name"		=>  __('Hover Icon Color','saoshyant-page-builder'),
		"id"		=> "hover_color", 		
 		"group"		=>  __('Icon','saoshyant-page-builder'),
		"type"		=> "color_rgba",
	);		
	
 
	$option[] = array(
		"name"		=>  __('Hover Icon Background ','saoshyant-page-builder'),
		"id"		=> "hover_icon_background",
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
		"name"		=>  __('Hover Icon Border','saoshyant-page-builder'),
		"id"		=> "hover_icon_border",
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
		"name"			=> __('on Hover','saoshyant-page-builder'),
 		"id"			=> "hover_icon_style_start", 
 		"group"			=>  __('Icon','saoshyant-page-builder'),
  		"type"			=>  "according-end",						
   	); 	
	
	
	
?>