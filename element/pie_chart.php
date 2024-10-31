<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Pie Chart
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_pie_chart" )){
add_filter('sao_element_item', 'sao_element_item_pie_chart');
function sao_element_item_pie_chart( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	__('Pie Chart','saoshyant-page-builder'),
 		'id'			=> 'pie_chart',
		'img'			=>  SAOPAGE_DIR.'assets/image/pie_chart.jpg'
  	); 
 
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Pie Chart Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_pie_chart_options" )){
add_filter('sao_element_options_pie_chart', 'sao_pie_chart_options');
 function sao_pie_chart_options( $option ) {
 
	
	
	$option[]= array( 
   				"name"		=>  __('Percentage','saoshyant-page-builder'),
  				"id"		=> "percentage",
	   		"default"		=> '80',	
			
		  		"desc"			=>  __('Enter the percentage ( example: 80 )','saoshyant-page-builder'),
  				"type"		=> "number",
  	);	
	$option[]= array( 
		"name"			=> __('End Percentage','saoshyant-page-builder'),
 		"default"		=>  __('eample "%"','saoshyant-page-builder'),
 		"id"			=> "endpercentage",
 		"default"		=> "%",
  		"type"			=> "number",
 		  
	);  	
	$option[]= array( 
		"name"			=> __('Title','saoshyant-page-builder'),
 		"default"		=>  __('Lorem ipsum dolor sit amet','saoshyant-page-builder'),
 		"id"			=> "title",
 		"type"			=> "text",
 		  
	);
	
$option[]= array( 
		"name"			=> __('Element tag','saoshyant-page-builder'),
 		"id"			=> "heading",
  		"default"		=> 'h3',
 		"type"			=> "select",
		"options"		=>  array( 
			''		=>	 esc_html__('Default','saoshyant-page-builder'),				
			'h1'	=> 'h1',						
			'h2' 	=> 'h2',						
			'h3' 	=> 'h3',						
			'h4' 	=> 'h4',						
			'h5' 	=> 'h5',						
			'h6' 	=> 'h6',						
			'p'		=> 'p',						
			'div'	=> 'div',						
			'span'	=> 'span',						
		),
 	);
  			
	$option[]= array( 
		"name"			=> __('The Details','saoshyant-page-builder'),
 		"id"			=> "details",
  		"default"		=>  __('sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud','saoshyant-page-builder'),
 		"type"			=> "textarea",
 		  
	);
   
	$option[]= array(
		"name"		=>  __('Duration','saoshyant-page-builder'),
		"id"		=> "bar_duration",
		"default"	=> '2000',
  		"group"			=>  __('Pie Chart','saoshyant-page-builder'),
		"type"		=> "number",
		 
	);		 
 			
	$option[]= array( 
		"name"			=> __('Space Between Chart And Details','saoshyant-page-builder'),
 		"id"			=> "space_chart_details",
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
		"name"			=> __('Space Between Title And Details','saoshyant-page-builder'),
 		"id"			=> "space_title_details",
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
 			""				=> esc_html__('None','saoshyant-page-builder'),
			"boxed"			=> esc_html__('Boxed','saoshyant-page-builder'),
			"boxed-2"		=> esc_html__('Boxed 2','saoshyant-page-builder'),
 		), 						
				  
	); 	 	
	
	$boxed_fold = array( 
			"boxed" => "box_layout",
			"boxed-2" => "box_layout", 
		);
		
	$boxed_hover_off = true;	
 	include SAOPAGE_PATH . 'element/mini/boxed.php';
 
 
	/*----------------------------------------------------------------
	 chart
	 -------------------------------------------------------------*/  
	  
	 
 
	$option[]= array( 
		"name"			=> __('Percent Color','saoshyant-page-builder'),
 		"id"			=> "percent_color",
  		"group"			=>  __('Pie Chart','saoshyant-page-builder'),
 		"type"			=> "color_rgba",
   	);

	$option[]= array( 
		"name"			=> __('Pie Chart Size','saoshyant-page-builder'),
 		"id"			=> "chart_size",
  		"group"			=>  __('Pie Chart','saoshyant-page-builder'),
   		"default"		=> '',	
		"type"			=> "select",
		"options"		=>   array( 
 			""				=> __('Default','saoshyant-page-builder'),
 			"50"			=> __('50px','saoshyant-page-builder'),
 			"75"			=> __('75px','saoshyant-page-builder'),
 			"100"			=> __('100px','saoshyant-page-builder'),
 			"125"			=> __('125px','saoshyant-page-builder'),
 			"150"			=> __('150px','saoshyant-page-builder'),
 			"175"			=> __('175px','saoshyant-page-builder'),
 			"200"			=> __('200px','saoshyant-page-builder'),
 			"225"			=> __('225px','saoshyant-page-builder'),
 			"250"			=> __('250px','saoshyant-page-builder'),
 			"275"			=> __('275px','saoshyant-page-builder'),
 			"300"			=> __('300px','saoshyant-page-builder'),
   
   		), 						
				  
	); 	 	 
	$option[]= array( 
		"name"			=> __('Bar Size','saoshyant-page-builder'),
 		"id"			=> "bar_size",
		"default"	=> '5',
		
  		"group"			=>  __('Pie Chart','saoshyant-page-builder'),
 		"type"			=> "number",
		"desc"			=>  __('Enter the percentage ( example: 30 )','saoshyant-page-builder'),
		
  	);
	
 	$option[]= array(
		"name"		=>  __('Bar Color','saoshyant-page-builder'),
		"id"		=> "bar_color",
		"type"		=> "multi_options",
  		"group"			=>  __('Pie Chart','saoshyant-page-builder'),
		"options"	=>	array(
			array(
				"name"		=>  __('First Color','saoshyant-page-builder'),
				"id"		=> "first",
				"type"		=> "color_rgba",
			),array(
				"name"		=>  __('Second Color','saoshyant-page-builder'),
				"id"		=> "second",
				"type"		=> "color_rgba",
			),	
 		),
	);

	$option[]= array(
		"name"		=>  __('Track Color','saoshyant-page-builder'),
		"id"		=> "track_color",
		"type"		=> "color_rgba",
  		"group"			=>  __('Pie Chart','saoshyant-page-builder'),
	 
	); 


 

 
	
	$option[] = array(
		"name"		=>  __('Pie Chart Background','saoshyant-page-builder'),
		"id"		=> "chart_background",
		"type"		=> "multi_options",
		"desc" 			=> __('You can see the background by changing the opacity color' , 'saoshyant-page-builder'),
  		"group"			=>  __('Pie Chart','saoshyant-page-builder'),
		"options"		=>  sao_multi_array_options('background2'),						
	);
	 
	$option[] =array(
		"name"		=>  __('Pie Chart Border','saoshyant-page-builder'),
		"id"		=> "chart_border",
   		"default"		=> array('style'=>'solid','size'=>'10','color'=>'transparent'),	
 		"type"		=> "multi_options",
  		"group"			=>  __('Pie Chart','saoshyant-page-builder'),
		"options"	=>  sao_multi_array_options('border_mini'),						
	); 
 
 
 	$option[] =array(
		"name"		=>  __('Pie Chart Shadow OutLine','saoshyant-page-builder'),
		"id"		=> "chart_shadow_outline",
		"type"		=> "multi_options",
   		"default"		=> array('spread'=>'1','color'=>'rgba(128,128,128,0.1)'),	
		
  		"group"			=>  __('Pie Chart','saoshyant-page-builder'),
		"options"	=>  sao_multi_array_options('shadow_outline'),						
	); 
 
 
 	$option[] =array(
		"name"		=>  __('Pie Chart Shadow inset','saoshyant-page-builder'),
		"id"		=> "chart_shadow_inset",
		"type"		=> "multi_options",
  		"group"			=>  __('Pie Chart','saoshyant-page-builder'),
		"options"	=>  sao_multi_array_options('shadow_inset'),						
	); 
 
 
	/*----------------------------------------------------------------
	 Details Style
	 -------------------------------------------------------------*/		  	
  	$details_hover_off = true;	
  	include SAOPAGE_PATH . 'element/mini/details.php';
 	 
	
 
 /*----------------------------------------------------------------
	Typo
	----------------------------------------------------------------*/
	$option[]= array( 
		"name"			=> __('Percent Typography','saoshyant-page-builder'),
 		"id"			=> "percent_typography_heading",
  		"group"			=>  __('Typography','saoshyant-page-builder'),
  		"type"			=>  "heading",
	);	 
	 
	$option[]= array( 
		"name"			=> __('Percent Font Size','saoshyant-page-builder'),
 		"id"			=> "percent_font_size",
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
		"name"			=> __('Percent Font Weight','saoshyant-page-builder'),
 		"id"			=> "percent_font_weight",
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
		"name"			=> __('Percent Font Style','saoshyant-page-builder'),
 		"id"			=> "percent_font_style",
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
  	include SAOPAGE_PATH . 'element/mini/details_typography.php';
 	 
	 
	 

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
	 	include SAOPAGE_PATH . 'element/mini/responsive.php';

	
} 
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Pie Chart Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_pie_chart_config" )){
add_filter('sao_builder_pie_chart', 'sao_pie_chart_config');
function sao_pie_chart_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css =''; 
 	if(sao_element_show($option)=='show'){
	global $sao_icon_style,$sao_counter_style,$sao_counter_script,$sao_circle_script;	
 $sao_icon_style++;
 $sao_counter_style++;		
 $sao_counter_script++;	
 $sao_circle_script++;	
 	ob_start(); 

 	
	
 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
 	
  
   	$box_layout = sao_el_box_layout($option);
	
	
	$json=array();
	if(!empty($option['percentage'])){
		$json['percent']= $option['percentage'];
	}
	if(!empty($option['bar_duration'])){
		$json['duration']= $option['bar_duration'];
	}	
	
	if(!empty($option['endpercentage'])){
		$json['endpercentage']= $option['endpercentage'];
	}	
	
	if(!empty($option['chart_size'])){
		$json['chart_size']= $option['chart_size'];
	}		
	
	if(!empty($option['bar_color']['first'])){
		$json['bar_first']= $option['bar_color']['first'];
	}		
		
	if(!empty($option['bar_color']['second'])){
		$json['bar_second']= $option['bar_color']['second'];
	}		
	
	if(!empty($option['bar_size'])){
		$json['bar_size']= $option['bar_size'];
	}			
	if(!empty($option['track_color'])){
		$json['track_color']= $option['track_color'];
	}
	 
		$box_layout = sao_el_box_layout($option);

	   	$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
		'sao-icon-two',
		$box_layout,
   		'sao-aw',
  
	);
   
	?>
 	 <aside <?php  sao_el_id($option);?> class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php  sao_el_cssanime($option);?>  >
 	
		<?php if($box_layout=='sao-boxed-item-2' ) {?>
			 <div class="sao-bg"></div>
		<?php }?>
	 
 
	 
 		<?php if(!empty($option['percentage'])) { ?>
			 <div class="sao-chart"><div class="sao-chart-percent"></div><div class="sao-json"><?php echo json_encode($json);?></div></div>
		<?php }  
 
 
			if(!empty($option['title']))	sao_el_title($option);
			sao_el_line( $option );
          	if(!empty($option['details'])) sao_el_excerpt( $option );
  		 
		?>
	 </aside> 
     <?php
 	   
	   
	$item = '.sao-el-'.$key.''; 

	  

	$item_css='';
 
 
 	
	 
	
 	$item_css.=sao_var_gradient_background_color('cht',$option,'chart_background'); 
 	$item_css.=sao_var_border_mini('cht',$option,'chart_border'); 	
 	$item_css.=sao_var_shadow_mini('cht-out',$option,'chart_shadow_outline'); 	
 	$item_css.=sao_var_shadow_mini('cht-ins',$option,'chart_shadow_inset'); 	
 	$item_css.=sao_var('pr-cr',$option,'percent_color'); 	
 	$item_css.=sao_var_unit('bar-sz',$option,'bar_size','px'); 	
  	  
 	$item_css.= sao_var_size('pr-fn-sz',$option,'percent_font_size','size') ;
	$item_css.= sao_var('pr-fn-wt',$option,'percent_font_weight') ;
 	$item_css.= sao_var('pr-fn-st',$option,'percent_font_style') ;
 
 
   	$item_css.= sao_var_size('dt-mg-tp',$option,'space_chart_details','size'); 
  	$item_css.= sao_var_size('ex-mg-tp',$option,'space_title_details','size');
 
  
 	$item_css.= sao_var_align('ag',$option,'alignment','center') ;
  	$item_css.= sao_boxed_css($option,false); 
   	$item_css.= sao_title_css($option,false); 
  	$item_css.= sao_line_css($option); 
  	$item_css.= sao_excerpt_css($option,false); 

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