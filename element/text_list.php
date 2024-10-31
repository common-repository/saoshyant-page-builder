<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Text List
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_text_list" )){
add_filter('sao_element_item', 'sao_element_item_text_list');
function sao_element_item_text_list( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	__('List','saoshyant-page-builder'),
 		'id'			=> 'text_list',
		'img'			=>  SAOPAGE_DIR.'assets/image/text_list.jpg'
  	); 
   
 
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Text List Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_text_list_options" )){
add_filter('sao_element_options_text_list', 'sao_text_list_options');
 function sao_text_list_options( $option ) {
 
   
   
   
	$default=array(
		'a'.rand(100000000, 999999999)	=>  array( 
			'text' =>  __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
		 
			),
		'a'.rand(100000000, 999999999)	=> array( 
			'text' =>  __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
 			),
		'a'.rand(100000000, 999999999)	=> array( 
			'text' =>  __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
 			), 		 
		 
		 
		);

 
 	$option[]= array( 
		"name"			=> __('List','saoshyant-page-builder'),
 		"id"			=> "list",
 		"default"		=> $default,
  		"desc"			=>  __('Add List','saoshyant-page-builder'),
		"type"			=> "list",
 		"options"		=>  array(
			 array(
  				"name"		=>  __('Text','saoshyant-page-builder'),
  				"id"		=> "text",
 				"type"		=> "textarea",
 			),
 			array(
  				"name"		=>  __('Custom Icon','saoshyant-page-builder'),
  				"id"		=> "icon",
 				"type"		=> "icon",
				
 			),	
			
 			array(
  				"name"		=>  __('Link','saoshyant-page-builder'),
  				"id"		=> "link",
 				"type"		=> "text",
				
 			),	
			 array(
  				"name"		=>  __('Open in new window','saoshyant-page-builder'),
  				"id"		=> "widows",
 				"type"		=> "checkbox",
				
 			),						
 			array(
  				"name"		=>  __('Icon Color','saoshyant-page-builder'),
  				"id"		=> "icon_color",
 				"type"		=> "color_rgba",
 				 
			),
			array(
  				"name"		=>  __('Icon Background Color','saoshyant-page-builder'),
  				"id"		=> "icon_background",
 				"type"		=> "multi_options",
 				"options"		=>  sao_multi_array_options('background2'),						
 				 
			),			
			array(
  				"name"		=>  __('Icon Border','saoshyant-page-builder'),
  				"id"		=> "icon_border",
 				"type"		=> "multi_options",
 				"options"		=>  sao_multi_array_options('border_mini'),						
 			),
			     
  		),
	);
 
  
	$option[]= array( 
		"name"			=> __('Icon For all','saoshyant-page-builder'),
 		"id"			=> "icon",
 		"default"		=> "fa-angle-". sao_builder_rtl_right(),
  		"type"			=> "icon",
 		  
	);	 
	
	  
	 
	$option[]= array( 
		"name"			=> __('Space Between List','saoshyant-page-builder'),
 		"id"			=> "space_list",
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
		"name"			=> __('Space Between Icon and Text','saoshyant-page-builder'),
 		"id"			=> "space_icon_text",
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
		
 
	$option[]= array( 
		"name"			=> __('Icon Vertical align in middle','saoshyant-page-builder'),
 		"id"			=> "icon_vertical",
 		"group"			=>  __('Icon','saoshyant-page-builder'),
  		"type"			=> "checkbox",
	 			
	);
 
		 
	include SAOPAGE_PATH . 'element/mini/icon.php';
	
	
	$option[]= array( 
		"name"			=> __('Text Alignment','saoshyant-page-builder'),
 		"id"			=> "text_alignment",
 		"group"			=>  __('Text','saoshyant-page-builder'),
		"default"		=>  'left',
 		"type"			=> "select",
		"options"		=>  sao_array_options('align_mini')	
		 
	); 
	 	
	$option[]= array( 
		"name"			=> __('Text Vertical align in middle','saoshyant-page-builder'),
 		"id"			=> "text_vertical",
 		"group"			=>  __('Text','saoshyant-page-builder'),
  		"type"			=> "checkbox",
	 			
	);					
			
	$option[]= array( 
		"name"			=> __('Text Color','saoshyant-page-builder'),
 		"id"			=> "text_color",
 		"group"			=>  __('Text','saoshyant-page-builder'),
		"type"			=> "color_rgba", 
		
  	);  
	
	
	$option[]= array( 
		"name"			=> __('Hover Text Color','saoshyant-page-builder'),
 		"id"			=> "hover_text_color",
 		"group"			=>  __('Text','saoshyant-page-builder'),
		"type"			=> "color_rgba", 
		
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
 		"options"		=>  array( 
			""		=> __('Default','saoshyant-page-builder'),		
			"300"		=> __('Light','saoshyant-page-builder'),
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
 
																   Text List Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_text_list_config" )){
add_filter('sao_builder_text_list', 'sao_text_list_config');
function sao_text_list_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css =''; 
	ob_start(); 
	if(sao_element_show($option)=='show'){
		
 	global $sao_icon_style;
	$sao_icon_style++;	
	$option['text']=true;

 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
 	 
  	$icon_alignment = !empty($option['text_alignment']) ? $option['text_alignment']: '';
 	$icon_alignment = $icon_alignment == 'right' ? 'sao-icon-'.sao_builder_rtl_right():'';
	$icon = !empty($option['icon']) ? $option['icon'] : '';
	$icon_layout = !empty($option['icon_layout']) ?' sao-icon-'.sao_icon_layout($option) : ' ';

	 
	
	
	$classes=array(
		'sao-el-'.esc_attr($key),
		sao_element_show($option,true),
		$custom_class,
		'sao-text-list',
  		'sao-aw',
		$icon_layout,
		$icon_alignment
	);
	
	
	$icon_layout = !empty($option['icon_layout']) ? $option['icon_layout'] : '';
 	?>
 	 <aside  <?php sao_el_id($option);?>  class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php sao_el_cssanime($option);?> >
  
  <?php
 	/*************************************Foreach*******************************/
	if(!empty($option['list'])):
	foreach($option['list'] as $keys => $value):

		$widows = !empty($value['widows']) ?' target="_blank" ' : '';
 	
 		$list_not_icon= empty($icon) ? (empty($value['icon'])? 'sao-not-icon':''):'';
 
		$value_option = $option;
 		$value_option = sao_icon_list_hexagon($value_option,$value);
		
		if(!empty($value['icon'])){
				$value_option['icon']= $value['icon'];
		}
  		?>
	
		

 		 <li class="sao-list-item-<?php echo esc_attr($keys).' '.esc_attr($list_not_icon);?>"> 
	
 
			<?php if(!empty($value_option['icon'])){?>
            	<div class="sao-icon-warp">
				 <?php sao_el_icon($value_option);?>
				</div>
                <?php }?>
         
		 
			 <p class="sao-excerpt"><?php 
			 if(!empty($value['link'])){?><a href="<?php echo esc_url($value['link']);?>" ><?php 
			 } 
			 echo wp_kses_post($value['text']);
			 
			 if(!empty($value['link'])){?></a><?php }
			 ?></p> 
   		  
          
		 </li>
         <?php
						  
 		$list_css = sao_var('icn-cr',$value,'icon_color'); 

 		if($icon_layout=='boxed-rounded' || $icon_layout=='boxed-square' || $icon_layout=='boxed-diamond'){ 	
			$list_css.= sao_var_gradient_background_color('icn',$value,'icon_background');
			$list_css.= sao_var_border_mini('icn',$value,'icon_border');
  			
		 }	  
   		$css.=sao_item_css($list_css,'.sao-el-'.$key.' .sao-list-item-'.$keys);
	  
	endforeach;
	endif;
					   
	   
 	echo '</aside>'; 

 	$item = '.sao-el-'.$key.''; 
   
	$item_css='';
  	$item_css.= sao_var_size('gp',$option,'space_list','size');	 
 	$item_css.= sao_var_size('ex-pd-rt',$option,'space_icon_text','size');	 
 	if( !empty($option['icon_vertical'])) {
			$item_css.='--sao-icn-ver:auto;';
	}	
 	if( !empty($option['text_vertical'])) {
			$item_css.='--sao-ex-ver:auto;';
	}			
  	$item_css.= sao_icon_css($option); 
  	$item_css.= sao_text_css($option); 

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