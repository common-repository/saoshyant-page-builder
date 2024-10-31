<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Count To 
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_count_to" )){
add_filter('sao_element_item', 'sao_element_item_count_to');
function sao_element_item_count_to( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	__('Count To','saoshyant-page-builder'),
 		'id'			=> 'count_to',
		'img'			=>  SAOPAGE_DIR.'assets/image/count_to.jpg'
  	); 
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Count To Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_count_to_options" )){
add_filter('sao_element_options_count_to', 'sao_count_to_options');
function sao_count_to_options( $option ) {
 	
 	
	
	$option[]= array( 
		"name"			=> __('Icon','saoshyant-page-builder'),
 		"id"			=> "icon",
  		"default"		=> "fa-check-circle",
 		"type"			=> "icon",
 	);	
	
	 
	
	$option[]= array( 
		"name"			=> __('Number','saoshyant-page-builder'),
 		"default"		=>  __('Select type of animation if you want this element to be animated when it enters into the browsers viewport','saoshyant-page-builder'),
 		"id"			=> "number",
 		"default"		=> "1250",
  		"type"			=> "number",
 		  
	);  
	
	$option[]= array( 
		"name"			=> __('End Number','saoshyant-page-builder'),
 		"default"		=>  __('eample "K"','saoshyant-page-builder'),
 		"id"			=> "endnumber",
 		"default"		=> "",
  		"type"			=> "number",
 		  
	);  
 		
	
	$option[]= array( 
		"name"			=> __('Title','saoshyant-page-builder'),
 		"default"		=>  __('Lorem ipsum dolor sit amet','saoshyant-page-builder'),
 		"id"			=> "title",
 		"type"			=> "text",
 		  
	);  
 
	
 	$option[]= array(
		"name"		=>  __('Duration Number','saoshyant-page-builder'),
		"id"		=> "duration",
		"default"	=> '2000',
 		"type"		=> "number",
		 
	);			
				
	$option[]= array( 
		"name"			=> __('Space Between Icon And Details','saoshyant-page-builder'),
 		"id"			=> "space_icon_details",
  		"group"			=>  __('Layout','saoshyant-page-builder'),
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
 			)		
		),	
		
  	);  
	


	$option[]= array( 
		"name"			=> __('Space Between Number And Title','saoshyant-page-builder'),
 		"id"			=> "space_number_title",
  		"group"			=>  __('Layout','saoshyant-page-builder'),
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
 
  
	///*Layout	
 	$option[]= array( 
		"name"			=> __('Alignment','saoshyant-page-builder'),
 		"id"			=> "alignment",
 		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>  'center',
		"desc"			=>  __('Default "Center"','saoshyant-page-builder'),
		"type"			=> "select",
		"options"		=> sao_array_options('align')				
		 
	); 	
	$option[]= array( 
		"name"			=> __('Padding','saoshyant-page-builder'),
 		"id"			=> "padding",
  		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>   sao_builder_default_padding(),
 		
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
	
	
	/*----------------------------------------------------------------
	 Box Style
	 -------------------------------------------------------------*/
 	$option[]= array( 
		"name"			=> __('Box Layout','saoshyant-page-builder'),
 		"id"			=> "box_layout",
 		"group"			=>  __('Box Layout','saoshyant-page-builder'),
  		"default"		=> '',
		"type"			=> "select",
		"options"		=>   array( 
 			""		=> esc_html__('None','saoshyant-page-builder'),
			"boxed"		=> esc_html__('Boxed','saoshyant-page-builder'),
			"boxed-2"	=> esc_html__('Boxed 2','saoshyant-page-builder'),
	 
		), 						
				  
	); 	 	
	
	$boxed_fold = array( 
			"boxed" => "box_layout",
			"boxed-2" => "box_layout", 
		);
	$boxed_hover_off =true;
	include SAOPAGE_PATH . 'element/mini/boxed.php';
	include SAOPAGE_PATH . 'element/mini/icon.php';
 
	/*----------------------------------------------------------------
	 Typography Style
	 -------------------------------------------------------------*/


 
	
 
 	$option[]= array( 
		"name"			=> __('Number Color','saoshyant-page-builder'),
 		"id"			=> "number_color",
 		"group"			=>  __('Details','saoshyant-page-builder'),
		"type"			=> "color_rgba", 
		
  	);  
 	$option[]= array( 
		"name"			=> __('Title Color','saoshyant-page-builder'),
 		"id"			=> "title_color",
 		"group"			=>  __('Details','saoshyant-page-builder'),
		"type"			=> "color_rgba", 
		
  	); 	 
	
	 $option[]= array( 
		"name"			=> __('Number Line Bottom','saoshyant-page-builder'),
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
 /*----------------------------------------------------------------
	Typo
	----------------------------------------------------------------*/
  		$option[]= array( 
		"name"			=> __('Icon','saoshyant-page-builder'),
 		"id"			=> "icon_typo_heading",
  		"group"			=>  __('Typography','saoshyant-page-builder'),
		"type"			=> "heading", 	 	
 	);  
	 
 	$option[]= array( 
		"name"			=> __('Icon Size','saoshyant-page-builder'),
 		"id"			=> "icon_font_size",
					
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
		"name"			=> __('Number Typography','saoshyant-page-builder'),
 		"id"			=> "number_typography_heading",
  		"group"			=>  __('Typography','saoshyant-page-builder'),
  		"type"			=>  "heading",
	);	 
	 
	$option[]= array( 
		"name"			=> __('Number Font Size','saoshyant-page-builder'),
 		"id"			=> "number_font_size",
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
		"name"			=> __('Number Font Weight','saoshyant-page-builder'),
 		"id"			=> "number_font_weight",
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
		"name"			=> __('Number Font Style','saoshyant-page-builder'),
 		"id"			=> "number_font_style",
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
 	
 
  	include SAOPAGE_PATH . 'element/mini/title_typography.php';

	$option[]= array( 
		"name"			=> esc_html__('Element ID','saoshyant-page-builder'),
 		"id"			=> "element_id",
 		"group"			=>  esc_html__('Attribute','saoshyant-page-builder'),
		"desc"			=>  esc_html__('Enter Column ID ,','saoshyant-page-builder').'<a href="https://www.w3schools.com/tags/att_global_id.asp">'.esc_html__('Learn more','saoshyant-page-builder').'</a>',
		"type"			=> "text",
		 
	);
	
	$option[]= array( 
		"name"			=> esc_html__('Element Custom Class','saoshyant-page-builder'),
 		"id"			=> "custom_class",
 		"group"			=>  esc_html__('Attribute','saoshyant-page-builder'),
		"desc"			=>  esc_html__('Enter Class ,','saoshyant-page-builder'),
		"type"		=> "text",
 	); 	
 
    return $option;
} 
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Count To Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_count_to_config" )){
add_filter('sao_builder_count_to', 'sao_count_to_config');
function sao_count_to_config( $args ) {
 

	$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css =''; 
 	if(sao_element_show($option)=='show'){
		global $sao_icon_style, $sao_counter_script,$sao_counter_style;	
		 $sao_icon_style++;
		 $sao_counter_style++;		
		 $sao_counter_script++;		
		
 	ob_start(); 
	
	$output='';
	$css =''; 

 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
  	$icon_layout = !empty($option['icon_layout']) ?' sao-icon-'.sao_icon_layout($option) : ' ';
	$number = !empty($option['number']) ? $option['number'] : '0';
	$endnumber = isset($option['endnumber']) ? $option['endnumber'] : '';
 	$duration =!empty($option['duration']) ? $option['duration']: 2000;	
   	
 	
	$box_layout = sao_el_box_layout($option);
   	$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
		'sao-icon-two',
		'sao-count',
		$box_layout,
		$icon_layout,
  		'sao-aw',
  
	);
   
	?>
 	 <aside <?php  sao_el_id($option);?> class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php  sao_el_cssanime($option);?>  >
	
			<?php if($box_layout=='sao-boxed-item-2' || $box_layout=='sao-boxed-item-3' || $box_layout=='sao-boxed-item-4') { ?>
                 <div class="sao-bg"></div>
            <?php } ?> 
 
			<?php 
			if(!empty($option['icon'])) sao_el_icon($option); ?>
			
             <div class="sao-count-number" number="<?php echo esc_attr($number);?>"  end="<?php echo esc_attr($endnumber);?>" duration="<?php echo esc_attr($duration);?>"></div>

            
            
            <?php
					sao_el_line( $option );
	
            if(!empty($option['title']))	sao_el_title($option);
         
             ?>
            
  	</aside>
 	   
	<?php
 	$item = '.sao-el-'.$key.'';
	$item_css='';
   	$item_css.= sao_var_size('dt-mg-tp',$option,'space_icon_details','size'); 
  	$item_css.= sao_var_size('tl-mg-tp',$option,'space_number_title','size');
 
  
 	$item_css.= sao_var_align('ag',$option,'alignment','center') ;
 
  	$item_css.= sao_boxed_css($option,true); 
  	$item_css.= sao_icon_css($option); 
  	$item_css.= sao_title_css($option,true); 
  	$item_css.= sao_line_css($option); 
 
 	$item_css.=sao_var('num-cr',$option,'number_color'); 	
	   	  
  	$item_css.= sao_var_size('num-fn-sz',$option,'number_font_size','size') ;
	$item_css.= sao_var_font_weight('num',$option,'number_font_weight','700') ;
 	$item_css.= sao_var('num-fn-st',$option,'number_font_style') ;
 	  

	 
	$item_css.= sao_element_padding($option);
	$css.=sao_item_css($item_css,$item);
	
   	$return['output']=  ob_get_clean();
  	$return['css']= $css;
  	$return['emptybefore']= true;
  	$return['emptyafter']= true;
	return $return;	
	}
}
}
 
?>