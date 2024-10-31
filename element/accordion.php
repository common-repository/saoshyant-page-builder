<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Element Accordion
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_accordion" )){
add_filter('sao_element_item', 'sao_element_item_accordion');
function sao_element_item_accordion( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	__('Accordion','saoshyant-page-builder'),
 		'id'			=> 'accordion',
		'img'			=>  SAOPAGE_DIR .'assets/image/accordion.jpg'
  	); 
   
	return $element;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Accordion Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_accordion_options" )){
add_filter('sao_element_options_accordion', 'sao_accordion_options');
function sao_accordion_options( $option ) {
 	
 
 	$default=array(
		'a'.rand(100000000, 999999999)	=>  array( 
			'title' => __('Accordion 1','saoshyant-page-builder'),
			'content' =>  __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
		 
			),
		'a'.rand(100000000, 999999999)	=> array( 
			'title' =>  __('Accordion 2','saoshyant-page-builder'),
			'content' =>  __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
 			),
		'a'.rand(100000000, 999999999)	=> array( 
			'title' =>  __('Accordion 3','saoshyant-page-builder'),
			'content' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
 			), 		 
		 
		 
		);

 
 	$option[]= array( 
		"name"			=> __('Accordion','saoshyant-page-builder'),
 		"id"			=> "accordion",
		"default"		=> $default,

		"type"			=> "list",
 		"options"		=>  array(
			 array(
  				"name"		=>  __('Title','saoshyant-page-builder'),
  				"id"		=> "title",
 				"type"		=> "text",
 			),
			 array(
  				"name"		=>  __('Content','saoshyant-page-builder'),
  				"id"		=> "content",
 				"type"		=> "editor",
 			),
			 array(
  				"name"		=>  __('Active','saoshyant-page-builder'),
  				"id"		=> "active",
 				"type"		=> "checkbox",
 			),	 
 			 					 
 			 		
 		),
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
		"name"			=> __('Style Layout','saoshyant-page-builder'),
 		"id"			=> "style_layout",
 		"group"			=>  __('Layout','saoshyant-page-builder'),
  		"default"		=> '',
		"type"			=> "select",
		"options"		=>   array( 
			"style-1"		=> esc_html__('Style 1','saoshyant-page-builder'),
			"style-2"		=> esc_html__('Style 2','saoshyant-page-builder'),
			"style-3"		=> esc_html__('Style 3','saoshyant-page-builder'),
			"style-4"		=> esc_html__('Style 4','saoshyant-page-builder'),
			"style-5"		=> esc_html__('Style 5','saoshyant-page-builder'),
			"style-6"		=> esc_html__('Style 6','saoshyant-page-builder'),
			"style-7"		=> esc_html__('Style 7','saoshyant-page-builder'),
			"style-8"		=> esc_html__('Style 8','saoshyant-page-builder'),
		), 						
				  
	); 	 
		
	$option[]= array( 
		"name"			=> __('Icon Alignment','saoshyant-page-builder'),
 		"id"			=> "icon_alignment",
 		"group"			=>  __('Layout','saoshyant-page-builder'),
  		"type"			=> "select",
   		"default"		=>  'right',
		"options"		=>  sao_array_options('align_mini')				
		 
	);	 
   
  	$option[]= array( 
		"name"			=> __('Space Between Accordion','saoshyant-page-builder'),
 		"id"			=> "space_accordion",
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
		"name"			=> __('Border','saoshyant-page-builder'),
		"id"			=> "border",
 		"default"		=> array( 'size'=>'1'),
		
 		"group"			=>  __('Design','saoshyant-page-builder'),
 		"type"			=> "multi_options",
		"options"		=>  array(
					array( 
						"name"			=>  __('Size','saoshyant-page-builder'),
						"id"			=> "size",
						"type"			=> "number",
					),	
					array( 
						"name"			=> 	__('Unit','saoshyant-page-builder'),
						"id"			=> "unit",
						"type"			=> "select",
						"options"		=>  sao_array_options('unit'),
					),	
					array( 
						"name"			=> 	__('Style','saoshyant-page-builder'),
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
	

 	$option[]= array( 
		"name"			=> __('Border Radius','saoshyant-page-builder'),
 		"id"			=> "radius",
 		"group"			=>  __('Design','saoshyant-page-builder'),
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
		"name"			=> __('Heading Color','saoshyant-page-builder'),
 		"id"			=> "heading_color",
 		"group"			=>  __('Design','saoshyant-page-builder'),
  		"type"			=> "multi_options",
		"options"		=> array(
		
			array( 
 				"name"			=> 	__('Background','saoshyant-page-builder'),
 				"id"			=> "background",
  				"type"			=> "color_rgba",
  			),
			array( 
				"name"			=> __('Text','saoshyant-page-builder'),			
  				"id"			=> "text",
				"type"			=> "color_rgba",
 			),
 	 
		 
			),		
		
  	);  
 
	$option[]= array( 
		"name"			=> __('Icon Color','saoshyant-page-builder'),
 		"id"			=> "icon_color",
 		"group"			=>  __('Design','saoshyant-page-builder'),
 		"fold"			=>  array(
			"style-2"			=> "style_layout",
			"style-4"			=> "style_layout",
			"style-6"			=> "style_layout",
			"style-8"			=> "style_layout",
 		),
   		"type"			=> "multi_options",
		"options"		=> array(
		
			array( 
 				"name"			=> 	__('Background','saoshyant-page-builder'),
 				"id"			=> "background",
  				"type"			=> "color_rgba",
  			),
			array( 
				"name"			=> __('Icon','saoshyant-page-builder'),			
  				"id"			=> "icon",
				"type"			=> "color_rgba",
 			),
 	 
		 
			),		
		
  	);  
	

 
	
	
	
	$option[]= array( 
		"name"			=> __('Content Color','saoshyant-page-builder'),
 		"id"			=> "content_color",
 		"group"			=>  __('Design','saoshyant-page-builder'),
  		"type"			=> "multi_options",
		"options"		=> array(
			array( 
 				"name"			=> 	__('Background','saoshyant-page-builder'),
 				"id"			=> "background",
  				"type"			=> "color_rgba",
  			),			
			
			 array( 
				"name"			=> __('Text','saoshyant-page-builder'),			
  				"id"			=> "text",
				"type"			=> "color_rgba",
 			),
 	 
			 
			),		
		
  	);  		
		
	$option[]= array( 
		"name"			=> __('Active Color','saoshyant-page-builder'),
 		"id"			=> "active_color",
 		"group"			=>  __('Design','saoshyant-page-builder'),
  		"type"			=> "heading",
	);  
		
	$option[]= array( 
		"name"			=> __('Active Heading Color','saoshyant-page-builder'),
 		"id"			=> "heading_active_color",
 		"group"			=>  __('Design','saoshyant-page-builder'),
  		"type"			=> "multi_options",
		"options"		=> array(
			array( 
 				"name"			=> 	__('Background','saoshyant-page-builder'),
 				"id"			=> "background",
  				"type"			=> "color_rgba",
  			),		
		
			 array( 
				"name"			=> __('Text','saoshyant-page-builder'),			
  				"id"			=> "text",
				"type"			=> "color_rgba",
 			),
 	 
 
			),		
		
  	);  

	$option[]= array( 
		"name"			=> __('Active icon Color','saoshyant-page-builder'),
 		"id"			=> "icon_active_color",
 		"group"			=>  __('Design','saoshyant-page-builder'),
  		"type"			=> "multi_options",
		"options"		=> array(
			array( 
 				"name"			=> 	__('Background','saoshyant-page-builder'),
 				"id"			=> "background",
  				"type"			=> "color_rgba",
  			),		
		
			 array( 
				"name"			=> __('Icon','saoshyant-page-builder'),			
  				"id"			=> "icon",
				"type"			=> "color_rgba",
 			),
 	 
 
			),		
		
  	);  	

	$option[]= array( 
		"name"			=> __('Title','saoshyant-page-builder'),
 		"id"			=> "title_type_heading",
  		"group"			=>  __('Typography','saoshyant-page-builder'),
		"type"			=> "heading", 	 	
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
	

	$option[]= array( 
		"name"			=> __('Content','saoshyant-page-builder'),
 		"id"			=> "content_type_heading",
  		"group"			=>  __('Typography','saoshyant-page-builder'),
		"type"			=> "heading", 	 	
 	);  		
	$option[]= array( 
		"name"			=> __('Content Font Size','saoshyant-page-builder'),
 		"id"			=> "content_font_size",
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
		"name"			=> __('Content Font Weight','saoshyant-page-builder'),
 		"id"			=> "content_font_weight",
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
		"name"			=> __('Content Line Height','saoshyant-page-builder'),
 		"id"			=> "content_line_height",
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
		"name"			=> __('Content Font Style','saoshyant-page-builder'),
 		"id"			=> "content_font_style",
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
 
																   accordion Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_accordion_config" )){
add_filter('sao_builder_accordion', 'sao_accordion_config');
function sao_accordion_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css ='';
  	
	if(sao_element_show($option)=='show'){
	global $sao_tabs_style,$sao_tabs_script;		
	$sao_tabs_style++;	
	$sao_tabs_script++;	
		
	ob_start(); 
 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
  	
	$icon_alignment = !empty($option['icon_alignment']) ? $option['icon_alignment']: '';
 	$icon_alignment = $icon_alignment == 'left' ? 'sao-icon-'.sao_builder_rtl_left():'';  
	
	$style = !empty($option['style_layout']) ? $option['style_layout'] : 'style-1';
	if($style == 'style-2' || $style == 'style-4' || $style == 'style-6'||$style == 'style-8'){
	 $class_style="sao-ac-icon-boxed";	
	}else{
	 $class_style="";	
	}
	
	$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
		'sao-ac',
  		'sao-aw',
		'sao-ac-'.$style,
		$icon_alignment,
		$class_style
	);
	 
 	
	
	?>
    
     	 <aside <?php  sao_el_id($option);?> class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php  sao_el_cssanime($option);?>  >

  		<?php
 
   			if(!empty($option['accordion'])){
 				foreach($option['accordion'] as $keys => $value) {
  
					if(!empty($value['title'])) {
					$active = !empty($value['active']) ? 'sao-active':'';
					
 					
			 
					?>
					
					 <div class="sao-ac-item <?php echo esc_attr($active);?> ">
						 <?php
                        if(!empty($value['title'])){
                            $heading = !empty($option['heading']) ?$option['heading'] : 'h3';
                            echo '<'.$heading.' class="sao-ac-title">'.wp_kses_post($value['title']). '</'.$heading.'>'; 
                        }
                        ?>
                     
                      <?php if(!empty($value['content'])){?>
						 <div class="sao-ac-content"><?php echo wp_kses_post($value['content']);?></div>
						<?php } ?>
  					 </div>
 	 				
					<?php
					}
					
				}
			}
		  ?>
	 </aside> 
   
   <?php

 	$item = '.sao-el-'.$key.' '; 
  	 $item_css='';

 	$item_css.= sao_var_border_mini( 'ac',$option,'border'  );
	
	
	$item_css.= sao_var_2( 'tl-bg',$option,'heading_color','background'  );
	$item_css.= sao_var_2( 'tl-cr',$option,'heading_color','text'  );

	$item_css.= sao_var_2( 'cn-bg',$option,'content_color','background'  );
	$item_css.= sao_var_2( 'cn-cr',$option,'content_color','text'  );

	$item_css.= sao_var_2( 'tl-atv-bg',$option,'heading_active_color','background'  );
	$item_css.= sao_var_2( 'tl-atv-cr',$option,'heading_active_color','text'  );
	
	
	if($style == 'style-2' || $style == 'style-4' || $style == 'style-6'||$style == 'style-8'){
 	$item_css.= sao_var_2( 'icn-bg',$option,'icon_color','background'  );
	$item_css.= sao_var_2( 'icn-cr',$option,'icon_color','icon'  );
  	$item_css.= sao_var_2( 'icn-atv-bg',$option,'icon_active_color','background'  );
	$item_css.= sao_var_2( 'icn-atv-cr',$option,'icon_active_color','icon'  );
	
	}
	$item_css.= sao_var_size( 'ac-gp',$option,'space_accordion' ,'size'  );
	 
	$item_css.= sao_var_size( 'ac-rd',$option,'radius','size'  );


 	$item_css.= sao_var_size('tl-fn-sz',$option,'title_font_size','size') ;
	$item_css.= sao_var_font_weight('tl',$option,'title_font_weight','normal') ;
 	$item_css.= sao_var('tl-fn-st',$option,'title_font_style') ;
	
	
	 
	$item_css.= sao_var_size('cn-fn-sz',$option,'content_font_size','size') ;
	$item_css.= sao_var('cn-fn-wt',$option,'content_font_weight') ;
 	$item_css.= sao_var('cn-fn-st',$option,'content_font_style') ;
	$item_css.= sao_var_size('cn-li-ht',$option,'content_line_height','size') ;
	
	
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