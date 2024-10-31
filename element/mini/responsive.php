<?php 
 	/*----------------------------------------------------------------
	 Image Style
	 -------------------------------------------------------------*/
	 
	$option[]= array( 
		"name"			=> __('Hide in Desktop','saoshyant-page-builder'),
 		"id"			=> "hide_desktop",
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
 		"type"			=> "checkbox",			 
	); 		
/**********************  Tablet *******************************************/
	
	$option[]= array( 
		"name"			=>	esc_html__('Responsive in Tablet','saoshyant-page-builder'),
 		"id"			=> "tablet_responsive", 
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"type"			=>  "according-start",						
   	); 
 
 
		
	$option[]= array( 
		"name"			=> __('Hide in Tablet','saoshyant-page-builder'),
 		"id"			=> "hide_table",
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
 		"type"			=> "checkbox",			 
	); 		
	
	
 
	
	
	$option[]= array( 
		"name"			=> __('Padding','saoshyant-page-builder'),
 		"id"			=> "tablet_padding",
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"desc"			=>  __('Padding around the entire row,Default "0"','saoshyant-page-builder'),
		"type"			=> "multi_options",
		"options"		=>  sao_multi_array_options('margin'),						
		 
	);
	
	
	
	 
 
	
	$option[]= array( 
		"name"			=>	esc_html__('Responsive in Tablet','saoshyant-page-builder'),
 		"id"			=> "tablet_responsive", 
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"type"			=>  "according-end",						
   	); 
	
	/**********************  Phone *******************************************/
	
 
		
	
	$option[]= array( 
		"name"			=>	esc_html__('Responsive in Mobile','saoshyant-page-builder'),
 		"id"			=> "mobile_responsive", 
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"type"			=>  "according-start",						
   	); 
 	$option[]= array( 
		"name"			=> __('Hide in Mobile','saoshyant-page-builder'),
 		"id"			=> "hide_mobile",
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
 		"type"			=> "checkbox",			 
	); 		
 
	
	$option[]= array( 
		"name"			=> __('Padding','saoshyant-page-builder'),
 		"id"			=> "mobile_padding",
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"desc"			=>  __('Padding around the entire row,Default "0"','saoshyant-page-builder'),
		"type"			=> "multi_options",
		"options"		=>  sao_multi_array_options('margin'),						
		 
	);	
	$option[]= array( 
		"name"			=>	esc_html__('Responsive in Mobile','saoshyant-page-builder'),
 		"id"			=> "mobile_responsive", 
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"type"			=>  "according-end",						
   	); 
 
	
	
				
	?>