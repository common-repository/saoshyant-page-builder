<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Icon
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_icon" )){
add_filter('sao_element_item', 'sao_element_item_icon');
function sao_element_item_icon( $element ) {
 	
 	$element[] =  array(
 		'name'			=> 	__('Icon','saoshyant-page-builder'),
 		'id'			=> 'icon',
		'img'			=>  SAOPAGE_DIR.'assets/image/icon.jpg'
  	); 
  
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Icon Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_icon_options" )){
add_filter('sao_element_options_icon', 'sao_icon_options');
 function sao_icon_options( $option ) {
 	
 	 
 
	$option[]= array( 
		"name"			=> __('Icon','saoshyant-page-builder'),
  		"id"			=> "icon",
  		"default"		=> "fa-check-circle",
 		"type"			=> "icon", 
	);  

 	
 
  
	$option[]= array( 
		"name"			=> __('Alignment','saoshyant-page-builder'),
 		"id"			=> "alignment",
		"default"		=>  'center',
 		"group"			=>  __('Layout','saoshyant-page-builder'),
		"desc"			=>  __('Default "Center"','saoshyant-page-builder'),
		"type"			=> "select",
		"options"		=>  sao_array_options('align'),				
		 
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
	

	$option[]= array( 
		"name"			=> __('Icon Layout','saoshyant-page-builder'),
 		"id"			=> "icon_layout",
 		"group"			=>  __('Icon','saoshyant-page-builder'),
  		"default"		=> '',
		"type"			=> "select",
		"options"		=>   array( 
 			""					=> __('None','saoshyant-page-builder'),
 			"boxed-rounded"			=> __('Boxed Rounded','saoshyant-page-builder'),
  			"boxed-square"		=> __('Boxed Square','saoshyant-page-builder'),
 			"boxed-diamond"		=> __('Boxed Diamond','saoshyant-page-builder'),
 			"boxed-hexagon"			=> __('Boxed Hexagon','saoshyant-page-builder'),	
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
 			"5px"			=> esc_html('5px','saoshyant-page-builder'),
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
 			"100px"			=> esc_html('100px','saoshyant-page-builder'),
  
   		), 						
				  
	); 	 	
			
 	$option[]= array( 
		"name"			=>	esc_html__('Icon Style','saoshyant-page-builder'),
 		"id"			=> "icon_style_start", 
   		"group"		=>  __('Icon','saoshyant-page-builder'),
  		"type"			=>  "according-start",						
   	); 
  	 					
			
 		
	$option[]= array(
		"name"		=>  __('Icon Color','saoshyant-page-builder'),
		"id"		=> "color",
  		"group"		=>  __('Icon','saoshyant-page-builder'),
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
  		"group"		=>  __('Icon','saoshyant-page-builder'),
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
  		"group"		=>  __('Icon','saoshyant-page-builder'),
		"options"	=>  sao_multi_array_options('border_mini'),						
	);
	
	$option[]= array( 
		"name"			=> __('Border Radius','saoshyant-page-builder'),
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
		"name"			=>	esc_html__('Icon Style','saoshyant-page-builder'),
 		"id"			=> "icon_style_end", 
   		"group"		=>  __('Icon','saoshyant-page-builder'),
  		"type"			=>  "according-end",						
   	); 
	$option[]= array( 
		"name"			=>	esc_html__('Icon Hover Style','saoshyant-page-builder'),
 		"id"			=> "icon_hover_style_start", 
   		"group"		=>  __('Icon','saoshyant-page-builder'),
  		"type"			=>  "according-start",						
   	); 
	
	$option[]=array( 
		"name"			=> __('on Hover Effects','saoshyant-page-builder'),
		"id"			=> "hover_icon_effect",
		"type"			=> "select",
		"fold"			=>	array( 
			"boxed-rounded" => "icon_layout",
			"boxed-square" => "icon_layout",
			"boxed-diamond" => "icon_layout",
			"boxed-hexagon" => "icon_layout",
 		), 		
  		"group"		=>  __('Icon','saoshyant-page-builder'),
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
  		"group"		=>  __('Icon','saoshyant-page-builder'),
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
  		"group"		=>  __('Icon','saoshyant-page-builder'),
 		"options"	=>  sao_multi_array_options('border_mini'),						
	);
	
	$option[]= array( 
		"name"			=>	esc_html__('Icon Style','saoshyant-page-builder'),
 		"id"			=> "icon_hover_style_end", 
   		"group"		=>  __('Icon','saoshyant-page-builder'),
  		"type"			=>  "according-end",						
   	); 


	$option[]= array( 
		"name"			=> __('Icon Size','saoshyant-page-builder'),
 		"id"			=> "icon_size",
  		"group"			=>  __('Typography','saoshyant-page-builder'),
		"default"		=>  array( 
 			"size"		=> '80',
			"unit"			=> 'px',
		), 
		
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
 
																   Icon Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_icon_config" )){
add_filter('sao_builder_icon', 'sao_icon_config');
function sao_icon_config( $args ) {
 
 
	$option = $args['option'];
	$key = $args['key'];
	if(sao_element_show($option)=='show'){
		
 	global $sao_icon_style;
	$sao_icon_style++;		
	ob_start(); 
 	$css =''; 
	
	
 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
   	$icon_layout = !empty($option['icon_layout']) ?' sao-icon-'.sao_icon_layout($option) : ' ';
 
  	$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
		$icon_layout,
		'sao-icon-warp',
		sao_el_box_layout($option),
 		'sao-aw',
  
	);?>
  

	 <aside <?php  sao_el_id($option); ?>  class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php sao_el_cssanime($option);?> >
	
    	<?php if(!empty($option['icon'])) sao_el_icon($option);?>
 
    </aside>
  
  
 
	<?php
	//Css
	$item = ' .sao-el-'.$key.' '; 
	$item_css =''; 
	 
 	$item_css.= sao_var_size('icn-sz',$option,'icon_size','size'); 
 	$item_css.= sao_var('icn-cr',$option,'color'); 
 	$item_css.= sao_var('hv-icn-cr',$option,'hover_color'); 
 	
 
 

 	$icon_layout = !empty($option['icon_layout']) ? $option['icon_layout'] : ' ';
	$icon_hover = sao_icon_background_hover( $option);
	$icon_hover = !empty($icon_hover)? 'ef' : 'hv';
 		
 	  

	if(!empty($icon_layout)){
 
		  if($icon_layout=='boxed-rounded' || $icon_layout=='boxed-square' || $icon_layout=='boxed-diamond'){ 	
			 $item_css.= sao_var_gradient_background_color('icn',$option,'icon_background');
 			 $item_css.= sao_var_border_mini('icn',$option,'icon_border');
 			
 			
			$item_css.= sao_var_gradient_background_color($icon_hover.'-icn',$option,'hover_icon_background');
 			 $item_css.= sao_var_border_mini($icon_hover.'-icn',$option,'hover_icon_border');
			
		 }	 

  			
			 
			if($icon_layout=='boxed-diamond' || $icon_layout=='boxed-square'){
				$item_css.= sao_var_radius_mini('icn',$option,'icon_radius'); 
 			}
			 
		$item_css.=sao_icon_hover( $option);
		$item_css.=sao_var('icn-pd',$option,'icon_boxed_size');

	}
  
	$item_css.= sao_element_padding($option);
	$css.=sao_item_css($item_css,$item);
   	$return['output']= ob_get_clean();
  	$return['css']= $css;
  	$return['emptybefore']= true;
  	$return['emptyafter']= true;
	return $return;	
	}
} 
}
?>