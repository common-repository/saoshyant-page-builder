<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Progress Bar
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_progress_bar" )){
add_filter('sao_element_item', 'sao_element_item_progress_bar');
function sao_element_item_progress_bar( $element ) {
 	
 	$element[] =  array(
 		'name'			=> 	__('Progress Bar','saoshyant-page-builder'),
 		'id'			=> 'progress_bar',
		'img'			=>  SAOPAGE_DIR.'assets/image/progress_bar.jpg',
  	); 
   
 
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Progress Bar Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_progress_bar_options" )){
add_filter('sao_element_options_progress_bar', 'sao_progress_bar_options');
function sao_progress_bar_options( $option ) {
 
     
	
	$default=array(
		'a'.rand(100000000, 999999999)	=>  array( 
			'title' => __('Item 1','saoshyant-page-builder'),
 			'percentage' => "50", 
		),
			
		'a'.rand(100000000, 999999999)	=>  array( 
			'title' => __('Item 2','saoshyant-page-builder'),
 			'percentage' => "70",
 		),
		'a'.rand(100000000, 999999999)	=> array( 
			'title' => __('Item 3','saoshyant-page-builder'),
 			'percentage' => "90", 
		),
 		 
		 
		 
	);
	$option[]= array( 
		"name"			=> __('Style','saoshyant-page-builder'),
 		"id"			=> "style",
  		"type"			=> "select",
 		"options"		=>  array( 
			"style-1"			=> __('Style 1','saoshyant-page-builder'),
			"style-2"			=> __('Style 2','saoshyant-page-builder'),
 			"style-3"			=> __('Style 3','saoshyant-page-builder'),
			"style-4"			=> __('Style 4','saoshyant-page-builder'),
		), 
  	);
 	
	

	$option[]= array( 
		"name"			=> __('Progress Bar','saoshyant-page-builder'),
 		"id"			=> "progress_bar",
  		"desc"			=>  __('Add Progress Bar','saoshyant-page-builder'),
		"type"			=> "list",
		"default"		=> $default,
 		"options"		=>  array(
			 array(
  				"name"		=>  __('Progress bar title','saoshyant-page-builder'),
  				"id"		=> "title",
 				"type"		=> "text",
 			),
			array(
  				"name"		=>  __('Percentage','saoshyant-page-builder'),
  				"id"		=> "percentage",
		  		"desc"			=>  __('Enter the percentage ( example: 80 )','saoshyant-page-builder'),
  				"type"		=> "number",
 			),
			
			array(
  				"name"		=>  __('Title Color','saoshyant-page-builder'),
  				"id"		=> "title_color",
 				"type"		=> "color_rgba",
				
 			),	
			array(
  				"name"		=>  __('Percent Color','saoshyant-page-builder'),
  				"id"		=> "percent_color",
 				"type"		=> "color_rgba",
				
 			),				
			
			array(
  				"name"		=>  __('Progress bar Color','saoshyant-page-builder'),
  				"id"		=> "progress_bar_color",
 				"type"		=> "multi_options",
 				"options"		=>	array(
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
			),
 
			
			array(
  				"name"		=>  __('Progress bar Container color','saoshyant-page-builder'),
  				"id"		=> "progress_bar_container_color",
 				"type"		=> "color_rgba",
  			),
			array(
				"name"		=>  __('Progress bar Container Border','saoshyant-page-builder'),
				"id"		=> "progress_bar_container_border",
				"type"		=> "multi_options",
 				"options"		=>  sao_multi_array_options('border_mini'),						
			),
  		),
	);
 	$option[]= array(
		"name"		=>  __('Duration','saoshyant-page-builder'),
		"id"		=> "progress_bar_duration",
		"default"	=> '2000', 
		"type"		=> "number",
		 
	);	
 
	$option[]= array( 
		"name"			=> __('Space Between Item','saoshyant-page-builder'),
 		"id"			=> "space_item",
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
	 Progress Bar
	 -------------------------------------------------------------*/  
	$option[]= array( 
		"name"			=> __('Height','saoshyant-page-builder'),
 		"id"			=> "progress_bar_height",
  		"group"			=>  __('Progress Bar','saoshyant-page-builder'),
 		"type"			=> "number",
		"desc"			=>  __('Enter the percentage ( example: 30 )','saoshyant-page-builder'),
		
  	);
	
	$option[]= array( 
		"name"			=> __('Progress Bar','saoshyant-page-builder'),
 		"id"			=> "progress_bar_heading",
  		"group"			=>  __('Progress Bar','saoshyant-page-builder'),
  		"type"			=>  "heading",
	);	  
	$option[]= array(
		"name"		=>  __('Progress bar Stripes','saoshyant-page-builder'),
		"id"		=> "progress_bar_stripes",
  		"group"			=>  __('Progress Bar','saoshyant-page-builder'),
		"type"		=> "checkbox",
 	);
	$option[]= array(
		"name"		=>  __('Progress bar Stripes Animete','saoshyant-page-builder'),
		"id"		=> "progress_bar_animete",
  		"group"			=>  __('Progress Bar','saoshyant-page-builder'),
 		"fold"			=>  array(
			"1"			=> "progress_bar_stripes",
  		),
 		"type"		=> "checkbox",
 	);

	$option[]= array(
		"name"		=>  __('Progress bar Color','saoshyant-page-builder'),
		"id"		=> "progress_bar_color",
		"type"		=> "multi_options",
  		"group"			=>  __('Progress Bar','saoshyant-page-builder'),
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
		"name"			=> __('Progress bar Radius','saoshyant-page-builder'),
 		"id"			=> "progress_bar_radius",
  		"group"			=>  __('Progress Bar','saoshyant-page-builder'),
	"desc"			=>  __('Enter the percentage ( example: 15 )','saoshyant-page-builder'),
	
 		"type"			=> "number",
  	); 	

	
		
	$option[]= array( 
		"name"			=> __('Progress Bar Container','saoshyant-page-builder'),
 		"id"			=> "progress_bar_heading",
  		"group"			=>  __('Progress Bar','saoshyant-page-builder'),
  		"type"			=>  "heading",
	);	
	
	
	$option[]= array(
		"name"		=>  __('Progress bar Container color','saoshyant-page-builder'),
		"id"		=> "progress_bar_container",
		"group"			=>  __('Progress Bar','saoshyant-page-builder'),
		"type"		=> "color_rgba",
	);
				
	$option[]= array(
		"name"		=>  __('Progress bar Container Border','saoshyant-page-builder'),
		"id"		=> "progress_bar_container_border",
		"type"		=> "multi_options",
		"group"			=>  __('Progress Bar','saoshyant-page-builder'),
		"options"		=>  sao_multi_array_options('border_mini'),						
	);
	
	$option[]= array( 
		"name"			=> __('Progress bar Container Radius','saoshyant-page-builder'),
		"id"			=> "progress_bar_container_radius",
		"group"			=>  __('Progress Bar','saoshyant-page-builder'),
	"desc"			=>  __('Enter the percentage ( example: 15 )','saoshyant-page-builder'),
		
		"type"			=> "number",
  	); 	
	 
	
	 
	/*----------------------------------------------------------------
	Details
	----------------------------------------------------------------*/

	$option[]= array( 
		"name"			=> __('Title Color','saoshyant-page-builder'),
 		"id"			=> "title_color",
 		"group"			=>  __('Details','saoshyant-page-builder'),
		"type"			=> "color_rgba", 
   	); 
	$option[]= array( 
		"name"			=> __('Percent Color','saoshyant-page-builder'),
 		"id"			=> "percent_color",
 		"group"			=>  __('Details','saoshyant-page-builder'),
		"type"			=> "color_rgba", 
   	); 
	
	/*----------------------------------------------------------------
	Typo
	----------------------------------------------------------------*/
	$option[]= array( 
		"name"			=> __('Title Typography','saoshyant-page-builder'),
 		"id"			=> "title_typography_heading",
  		"group"			=>  __('Typography','saoshyant-page-builder'),
  		"type"			=>  "heading",
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
 			""		=> __('Default','saoshyant-page-builder'),				
			"300"			=> __('Light','saoshyant-page-builder'),
			"normal"		=> __('Normal','saoshyant-page-builder'),
			"500"			=> __('Medium','saoshyant-page-builder'),
			"bold"			=> __('Bold','saoshyant-page-builder'),
			"900"			=> __('Extra-Bold','saoshyant-page-builder'),
			) ,
		
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
			 
 	include SAOPAGE_PATH . 'element/mini/responsive.php';
    return $option;
} 
}
}

/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Progress Bar Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_progress_bar_config" )){
add_filter('sao_builder_progress_bar', 'sao_progress_bar_config');
function sao_progress_bar_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css ='';
	if(sao_element_show($option)=='show'){
		global $sao_counter_script,$sao_counter_style;	
 $sao_counter_style++;
 $sao_counter_script++;
  	ob_start(); 

 	
	
 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
 	
 	$output ='';
	$ltr=is_rtl()?'rtl':'ltr';
 	$stripes = !empty($option['progress_bar_stripes']) ? ' sao-bar-candy' : '';
 	$animete = !empty($option['progress_bar_stripes'])?(!empty($option['progress_bar_animete']) ? ' sao-bar-candy-'.$ltr.' '  : ''):'';
 	$duration = !empty($option['progress_bar_duration']) ? $option['progress_bar_duration'] : '2000';
 	$style = !empty($option['style']) ? $option['style'] : 'style-1';
	
   	$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
 		'sao-progress-bar-'.$style,
  		'sao-aw',
  
	);
	
	
	?>   

	<aside <?php  sao_el_id($option);?> class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php  sao_el_cssanime($option);?>  >
 
 	<?php
   	$count=0;
	/*************************************************************************************************
											Foreach
	***************************************************************************************************/
	$css='';
 	if(!empty($option['progress_bar'])){
 	foreach($option['progress_bar'] as $keys => $value) :
		$count++; 
		?>
	 
   		 <div class="sao-progress-item-<?php echo esc_attr($count);?>"  >
			
            <?php
			$title = !empty( $value['title']) ? $value['title'] : '';
			$percentage = !empty( $value['percentage']) ? $value['percentage'] : '';
			 ?>
			 
			 <?php if($style=='style-1'){?>
						 <div class="sao-progress-title-warp">
						 <h3 class="sao-progress-title"><?php echo esc_html($title);?></h3>
							 <div class="sao-progress-percent"></div>
						 </div>
			<?php } ?>
	 
			 <div class="sao-bar-warp">
			 <div class="sao-bar <?php echo esc_attr($stripes.' '.$animete);?>" data-bar-percent="<?php echo esc_attr($percentage);?>"  data-bar-duration="<?php echo esc_attr($duration);?>"   >
  			</div> 
            
			<?php if($style=='style-2' || $style=='style-3'||$style=='style-4'){?>
						<div class="sao-progress-title-warp">
							<h3 class="sao-progress-title"><?php echo esc_html($title);?></h3>
							<?php if($style!=='style-3'){ ?>
							<div class="sao-progress-percent"></div> 
							<?php } ?>
						</div>
			 <?php } ?>
			
			
			
			
			</div>
				
		 
 
		

		</div>


		<?php
		
		$progress_bar_css='';
 		$progress_bar_css.=sao_var('tl-cr',$value,'title_color'); 
		$progress_bar_css.=sao_var('pr-cr',$value,'percent_color');
		$progress_bar_css.= sao_var_unit('pr',$value,'percentage','%'); 
 		$progress_bar_css.=sao_var_gradient_background_color('bar',$value,'progress_bar_color'); 
		$progress_bar_css.=sao_var('bar-wp-bg',$value,'progress_bar_container_color'); 
		$progress_bar_css.=sao_var_border_mini('bar-wp',$value,'progress_bar_container_border'); 
 		 
   		$css.=sao_item_css($progress_bar_css,' .sao-el-'.$key.' .sao-progress-item-'.$count);
	endforeach;
	}?>
  
	</aside>
    
    <?php
	
 	$item = '.sao-el-'.$key.''; 

	
	$item_css='';
	$item_css.= sao_var_unit('dr',$option,'progress_bar_duration','ms'); 
	$item_css.=sao_var_gradient_background_color('bar',$option,'progress_bar_color'); 
 	$item_css.=sao_var_unit('bar-rd',$option,'progress_bar_radius','px'); 
 

 	$item_css.=sao_var('bar-wp-bg',$option,'progress_bar_container'); 
	$item_css.=sao_var_unit('bar-wp-rd',$option,'progress_bar_container_radius','px'); 
 	$item_css.=sao_var_border_mini('bar-wp',$option,'progress_bar_container_border'); 
  
  
 	$item_css.=sao_var('tl-cr',$option,'title_color'); 
 	$item_css.=sao_var('pr-cr',$option,'percent_color'); 

	$item_css.= sao_var_size( 'pg-gp',$option,'space_item' ,'size'  );
	 
	$item_css.= sao_var_size('tl-fn-sz',$option,'title_font_size','size') ;
	$item_css.= sao_var_font_weight('tl',$option,'title_font_weight','bold') ;
 	$item_css.= sao_var('tl-fn-st',$option,'title_font_style') ;
	
	
	 
	$item_css.= sao_var_size('pr-fn-sz',$option,'percent_font_size','size') ;
	$item_css.= sao_var_font_weight('pr',$option,'percent_font_weight','bold') ;
 	$item_css.= sao_var('pr-fn-st',$option,'percent_font_style') ;
 	
	 
	
	 $item_css.= sao_var_unit('bar-ht',$option,'progress_bar_height','px'); 
   
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