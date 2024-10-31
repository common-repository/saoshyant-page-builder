<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Options Column
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
 if ( !function_exists ( "sao_options_column" )){

function sao_options_column() { 
	global $sao_options_column;
 
	$column=array();
	// Carousel Slider 1 Column
 	if(has_filter('sao_options_column')) {
		$sao_options_column = apply_filters('sao_options_column', $column);
	}
  				 
 
}
add_action('init','sao_options_column');
 }
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Options Column
 
*///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
 if ( !function_exists ( "sao_options_column_1" )){

add_filter('sao_options_column', 'sao_options_column_1');
function sao_options_column_1( $column ) {
 	
 $option= array();
  
 
	$option[]= array( 
		"name"			=> esc_html__('Padding','saoshyant-page-builder'),
 		"id"			=> "padding",
		"desc"			=>  esc_html__('Padding around the entire row,Default "0"','saoshyant-page-builder'),
 		"group"			=>  esc_html__('Layout','saoshyant-page-builder'),
		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('margin'),						
 	);
	  
	$option[]= array( 
		"name"			=> esc_html__('CSS Animation','saoshyant-page-builder'),
 		"id"			=> "cssanime",
		"desc"			=>  esc_html__('Select type of animation if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.','saoshyant-page-builder'),
 		"group"			=>  esc_html__('Layout','saoshyant-page-builder'),
		"type"			=> "select",
 		"options"		=>  sao_array_options('cssanime'),						
 	);
	   
	  
	
	// ** Background Image***************************************************************/
 	 
	$option[]= array( 
		"name"			=> __('Background Parallax','saoshyant-page-builder'),
 		"id"			=> "background_parallax",
 		"group"			=>  __('Background','saoshyant-page-builder'),
  		"type"			=> "select",
		
 		"options"		=> array(
			"none" =>__('None','saoshyant-page-builder'),
			"parallax" 			=>__('Parallax','saoshyant-page-builder'),
			"parallax-top" 		=>__('Parallax in Top','saoshyant-page-builder'),
			"parallax-bottom"	=>__('Parallax in Bottom','saoshyant-page-builder'),
			"parallax-left" 	=>is_rtl()?__('Parallax in Right','saoshyant-page-builder'):__('Parallax in Left','saoshyant-page-builder'),
			"parallax-right" 	=>is_rtl()?__('Parallax in Left','saoshyant-page-builder'):__('Parallax in Right','saoshyant-page-builder')
			
		)
 	);		 

// ** Background Image***************************************************************/
	
	$option[]= array( 
		"name"			=> __('Background Color Style','saoshyant-page-builder'),
 		"id"			=> "background_color_style",
 		"group"			=>  __('Background','saoshyant-page-builder'),
		"type"			=> "select",
		"options"		=> array(
			"gradient" 			 	=>  __('Gradient','saoshyant-page-builder'),
			"formal"  				=>  __('Formal Invitation','saoshyant-page-builder'),
			"texture"  				=>  __('Texture','saoshyant-page-builder'),
			"hexagons"  			=>  __('Hexagons','saoshyant-page-builder'),
			"charlie-brown"  		=>  __('Charlie Brown','saoshyant-page-builder'),
			"overlapping-hexagons"  =>  __('Overlapping Hexagons','saoshyant-page-builder'),
			"tiny-checkers"  		=>  __('Tiny Checkers','saoshyant-page-builder'),
			"bubbles"  				=>  __('Bubbles','saoshyant-page-builder'),
			"wiggle"  				=>  __('Wiggle','saoshyant-page-builder'),
			"diagonal-stripes"  	=>  __('Diagonal Stripes','saoshyant-page-builder'),
			"rain"  				=>  __('Rain','saoshyant-page-builder'),
			"stripes"  				=>  __('Stripes','saoshyant-page-builder'),
			"bank-note"  			=>  __('Bank Note','saoshyant-page-builder'),
			"diagonal-lines"  		=>  __('Diagonal Lines','saoshyant-page-builder'),
			"polka-dots"  			=>  __('Polka Dots','saoshyant-page-builder'),
			"overlapping-diamonds"  =>  __('Overlapping Diamonds','saoshyant-page-builder'),
			"wavey-fingerprint"  	=>  __('Wavey Fingerprint','saoshyant-page-builder'),
			"endless-constellation" =>  __('Endless Constellation','saoshyant-page-builder'),
			"zig-zag"  				=>  __('Zig Zag','saoshyant-page-builder'),
 			"repeating-chevrons"  	=>  __('Repeating Chevrons','saoshyant-page-builder'),
			"sun-tornado"  			=>  __('Sun Tornado','saoshyant-page-builder'),
			"dalmatian-spots"  		=>  __('Dalmatian Spots','saoshyant-page-builder'),
  
 
		)
	);
		
		
	$option[]= array( 
		"name"			=> __('Background Color','saoshyant-page-builder'),
 		"id"			=> "background_color",
 		"group"			=>  __('Background','saoshyant-page-builder'),
		"type"			=> "multi_options",
		"options"		=> array(
			array(
				"name"		=>  __('First','saoshyant-page-builder'),
				"id"		=> "first",
				"type"		=> "color_rgba",
			),
			array(
				"name"		=>  __('Second','saoshyant-page-builder'),
				"id"		=> "second",
				"type"		=> "color_rgba",
			),
			array(
				"name"		=>  __('Third','saoshyant-page-builder'),
				"id"		=> "third",
				"type"		=> "color_rgba",
				"fold"			=>	array( 	
  					"gradient"				=> "background_color_style",
  					"endless-constellation"				=> "background_color_style",
  					"sun-tornado"				=> "background_color_style",
					
    				), 				
			),	
			array(
				"name"		=>  __('Orientation','saoshyant-page-builder'),
				"id"		=> "orientation",
				"fold"			=>	array( 	
  					"gradient"				=> "background_color_style",
   				), 
				"type"		=> "select",
				"options"	=> array(
					"horizontal"		=>  __('horizontal  →','saoshyant-page-builder'),
					"vertical"			=>  __('vertical  ↓','saoshyant-page-builder'),
					"diagonal"			=>  __('diagonal  ↘','saoshyant-page-builder'),
					"diagonal-bottom"	=>  __('diagonal  ↗','saoshyant-page-builder'),
					"radial"			=>  __('radial  ○','saoshyant-page-builder'),
				),
			),						
	
		),
 	);		
	
	 
	$option[]= array( 
		"name"			=> __('Background Image','saoshyant-page-builder'),
 		"id"			=> "background_image",
 		"group"			=>  __('Background','saoshyant-page-builder'),
  		"type"			=> "image",
 	);	
	
   
	$option[]= array( 
		"name"			=> __('Background Image Position','saoshyant-page-builder'),
 		"id"			=> "background_image_position",
 		"group"			=>  __('Background','saoshyant-page-builder'),
		"type"			=> "select",
 		"options"		=> array(
								''			=> __('Default','saoshyant-page-builder'),
								'center'			=> __('Center','saoshyant-page-builder'),
								'left'				=> is_rtl()?__('Right','saoshyant-page-builder'):__('Left','saoshyant-page-builder'), 
								'left-top'			=> is_rtl()?__('Right Top','saoshyant-page-builder'): __('Left Top','saoshyant-page-builder'), 
								'left-bottom'		=> is_rtl()?__('Right Bottom','saoshyant-page-builder'):__('Left Bottom','saoshyant-page-builder'), 
								'left-center'		=> is_rtl()?__('Right Center','saoshyant-page-builder'): __('Left Center','saoshyant-page-builder'), 
								'right' 			=> is_rtl()? __('Left','saoshyant-page-builder'):__('Right','saoshyant-page-builder'), 
								'right-top'			=> is_rtl()? __('Left Top','saoshyant-page-builder'): __('Right Top','saoshyant-page-builder'), 
								'right-bottom'		=> is_rtl()? __('Left Bottom','saoshyant-page-builder'): __('Right Bottom','saoshyant-page-builder'), 
								'right-center'		=> is_rtl()? __('Left Center','saoshyant-page-builder'): __('Right Center','saoshyant-page-builder'),
								'top'				=> __('Top','saoshyant-page-builder'),
								'top-center'		=> __('Top Center','saoshyant-page-builder'),
								'bottom'			=> __('Bottom','saoshyant-page-builder'),
								'bottom-center'		=> __('Bottom Center','saoshyant-page-builder'),
							),
 			
		);
		
	$option[]= array( 
		"name"			=> __('Background Location','saoshyant-page-builder'),
 		"id"			=> "background_location",
 		"group"			=>  __('Background','saoshyant-page-builder'),
		"type"			=> "multi_options",
		"fold"			=>	  array(
								'left'				=> "background_image_position",
								'left-top'			=> "background_image_position",
								'left-bottom'		=>	"background_image_position",
								'left-center'		=> "background_image_position",
								'right' 			=> "background_image_position",
								'right-top'			=> "background_image_position",
								'right-bottom'		=> "background_image_position",
								'right-center'		=> "background_image_position",
								'top'				=> "background_image_position",
								'top-center'		=> "background_image_position",
								'bottom'			=> "background_image_position",
								'bottom-center'		=> "background_image_position",
  						), 	
		
		
   		"options"		=>	array( 
								array( 
									"name"			=> esc_html__('Top','saoshyant-page-builder'),			
									"id"			=> "top",
									"type"			=> "number",
									"fold"			=>	array( 	
												"top"				=> "background_image_position",
												"top-center"		=> "background_image_position",
												"left-top"			=> "background_image_position",
												"right-top"			=> "background_image_position",
 							 
									), 		
									
									
								),
								array( 
									"name"			=> is_rtl()? __('Left','saoshyant-page-builder'):__('Right','saoshyant-page-builder'),  
									"id"			=> "right",
									"type"			=> "number",
									"fold"			=>	array( 	
												"right"				=> "background_image_position",
												"right-top"			=> "background_image_position",
												"right-bottom"		=> "background_image_position",
												"right-center"		=> "background_image_position",
 									), 	
									
								),	
								array( 
									"name"			=> esc_html__('Bottom','saoshyant-page-builder'),
									"id"			=> "bottom",
									"type"			=> "number",
									"fold"			=>	array( 	
												"left-bottom"				=> "background_image_position",
												"right-bottom"			=> "background_image_position",
												"bottom-center"		=> "background_image_position",
												"bottomr"		=> "background_image_position",
 									), 	
									
								),
								array( 
									"name"			=> is_rtl()? __('Right','saoshyant-page-builder'): __('Left','saoshyant-page-builder'),
									"id"			=> "left",
									"type"			=> "number",
									"fold"			=>	array( 	
													"left"				=> "background_image_position",
													"left-top"			=> "background_image_position",
													"left-bottom"		=> "background_image_position",
													"left-center"		=> "background_image_position",
										), 	
								),	
								array( 
									"name"			=> 	esc_html__('Unit','saoshyant-page-builder'),
									"id"			=> "unit",
									"type"			=> "select",
									"options"		=>  sao_array_options('unit'),
								),
							),
 						);
		
		
	$option[]= array( 
		"name"			=> __('Background Image Repeat','saoshyant-page-builder'),
 		"id"			=> "background_image_repeat",
 		"group"			=>  __('Background','saoshyant-page-builder'),
		"type"			=> "select",
 		"options"		=> array(
						''			=> __('Default','saoshyant-page-builder'),
						'no-repeat'			=> __('No Repeat','saoshyant-page-builder'), 
						'repeat'		=> __('Repeat','saoshyant-page-builder'),
						'repeat-x'			=> __('Repeat X','saoshyant-page-builder'),
						'repeat-y'		=> __('Repeat Y','saoshyant-page-builder'),
					),
 			 
	);
	
	$option[]= array( 
		"name"			=> __('Background Image Size','saoshyant-page-builder'),
 		"id"			=> "background_image_size",
 		"group"			=>  __('Background','saoshyant-page-builder'),
		"type"			=> "select",
 		"options"		=> sao_array_options('background_size'),
 				 
			
			 
	);	
		 
		
	$option[]= array( 
		"name"			=> __('Background Image Depth','saoshyant-page-builder'),
 		"id"			=> "background_image_depth",
 		"group"			=>  __('Background','saoshyant-page-builder'),
		"type"			=> "select",
 		"options"		=> array(
						''								=> __('Default','saoshyant-page-builder'),
						'before-background-color'			=> __('Before the Background Color','saoshyant-page-builder'), 
						'after-background-color'		=> __('after The background Color','saoshyant-page-builder'), 
 					),
 	);
	 
	  	  
	$option[]= array( 
		"name"			=> __('Border','saoshyant-page-builder'),
 		"id"			=> "border",
 		"group"			=>  __('Border','saoshyant-page-builder'),
 		"type"			=> "multi_options",
		"options"		=>  sao_multi_array_options('border'),						
	); 	
			
		
	$option[]= array( 
		"name"			=> __('Box Shadow','saoshyant-page-builder'),
 		"id"			=> "shadow",
 		"group"			=>  __('Border','saoshyant-page-builder'),
 		"type"			=> "multi_options",
		"options"		=>  sao_multi_array_options('shadow'),						
			 
	); 	
	 	
	
	$option[]= array( 
		"name"			=> __('Border Radius','saoshyant-page-builder'),
 		"id"			=> "radius",
 		"group"			=>  __('Border','saoshyant-page-builder'),
 		"type"			=> "multi_options",
		"options"		=>  sao_multi_array_options('radius'),						
	 
	); 	 		
			
	  
 
	
 

		 
   
	$option[]= array( 
		"name"			=> esc_html__('Column ID','saoshyant-page-builder'),
 		"id"			=> "column_id",
 		"group"			=>  esc_html__('Attribute','saoshyant-page-builder'),
		"desc"			=>  esc_html__('Enter Column ID ,','saoshyant-page-builder').'<a href="https://www.w3schools.com/tags/att_global_id.asp">'.esc_html__('Learn more','saoshyant-page-builder').'</a>',
		"type"			=> "text",
		 
	);
	
	$option[]= array( 
		"name"			=> esc_html__('Column Custom Class','saoshyant-page-builder'),
 		"id"			=> "custom_class",
 		"group"			=>  esc_html__('Attribute','saoshyant-page-builder'),
		"desc"			=>  esc_html__('Enter Class ,','saoshyant-page-builder'),
		"type"		=> "text",

	);	
  
  
  
 	/**********************  DeskTop *******************************************/
	
	$option[]= array( 
		"name"			=>	esc_html__('Responsive in Desktop','saoshyant-page-builder'),
 		"id"			=> "desktop_responsive", 
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"type"			=>  "according-start",						
   	); 
  
		
	$option[]= array( 
		"name"			=> __('Hide in Desktop','saoshyant-page-builder'),
 		"id"			=> "main",
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
 		"type"			=> "checkbox",			 
	); 		
	
	$option[]= array( 
		"name"			=>	esc_html__('Responsive in Desktop','saoshyant-page-builder'),
 		"id"			=> "desktop_responsive", 
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"type"			=>  "according-end",						
   	); 
 
 
	
	/**********************  Tablet *******************************************/
	
	$option[]= array( 
		"name"			=>	esc_html__('Responsive in Tablet','saoshyant-page-builder'),
 		"id"			=> "tablet_responsive", 
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"type"			=>  "according-start",						
   	); 
 
  
	$option[]=  array( 
		"name"			=> esc_html__('Column in Tablet','saoshyant-page-builder'),
 		"id"			=> "tablet",
 		"desc"			=> esc_html__('You can select Column in Tabel Devices,Resolution max 991px and min 768px','saoshyant-page-builder'),
 		"group"			=> esc_html__('Responsive','saoshyant-page-builder'),
 		"type"			=> "select",
		"options"		=>  sao_array_options('tablet'),
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
		"name"			=>	esc_html__('Responsive in Phone','saoshyant-page-builder'),
 		"id"			=> "phone_responsive", 
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"type"			=>  "according-start",						
   	); 
		
	$option[]=  array( 
		"name"			=> esc_html__('Column in Phone','saoshyant-page-builder'),
 		"id"			=> "phone",
 		"desc"			=> esc_html__('You can select Column in Phone Devices,Resolution max 767px','saoshyant-page-builder'),
 		"group"			=> esc_html__('Responsive','saoshyant-page-builder'),
 		"type"			=> "select",
		"options"		=>  sao_array_options('phone'),
  	);	
  
	
	$option[]= array( 
		"name"			=> __('Padding','saoshyant-page-builder'),
 		"id"			=> "phone_padding",
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"desc"			=>  __('Padding around the entire row,Default "0"','saoshyant-page-builder'),
		"type"			=> "multi_options",
		"options"		=>  sao_multi_array_options('margin'),						
		 
	);	
	$option[]= array( 
		"name"			=>	esc_html__('Responsive in Phone','saoshyant-page-builder'),
 		"id"			=> "phone_responsive", 
 		"group"			=>  __('Responsive','saoshyant-page-builder'),
		"type"			=>  "according-end",						
   	); 
  
  
  
  
	$column[]=$option;
    return $column;
} 
 }

?>