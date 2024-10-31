<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Tabs
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_tabs" )){

add_filter('sao_element_item', 'sao_element_item_tabs');
function sao_element_item_tabs( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	__('Tabs','saoshyant-page-builder'),
 		'id'			=> 'tabs',
		'img'			=>  SAOPAGE_DIR.'assets/image/tabs.jpg'
  	); 
   
 	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Tabs Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_tabs_options" )){
add_filter('sao_element_options_tabs', 'sao_tabs_options');
function sao_tabs_options( $option ) {
 	 
   
 	$default=array(
		'a'.rand(100000000, 999999999)	=>  array( 
			'title' =>  __('Tabs 1','saoshyant-page-builder'),
			'content' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
		 
			),
		'a'.rand(100000000, 999999999)	=> array( 
			'title' =>  __('Tabs 2','saoshyant-page-builder'),
			'content' =>  __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
 			),
		'a'.rand(100000000, 999999999)	=> array( 
			'title' =>  __('Tabs 3','saoshyant-page-builder'),
			'content' =>  __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
 			), 		 
		 
		 
		);

 	$option[]= array( 
		"name"			=> __('tabs','saoshyant-page-builder'),
 		"id"			=> "tabs",
  		"desc"			=>  __('Add tabs','saoshyant-page-builder'),
		"type"			=> "list",
		"default"		=> $default,
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
		"default"		=>  array( 
 			"background"		=> '#ffffff',
			"text"				=> '#666666',
			), 	
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
		"name"			=> __('Active Heading Color','saoshyant-page-builder'),
 		"id"			=> "heading_active_color",
 		"group"			=>  __('Design','saoshyant-page-builder'),
		"default"		=>  array( 
 			"background"		=> '#ffffff',
			"text"				=> '#111111',
			), 	
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
		"name"			=> __('Content Color','saoshyant-page-builder'),
 		"id"			=> "content_color",
 		"group"			=>  __('Design','saoshyant-page-builder'),
		"default"		=>  array( 
 			"background"		=> '#ffffff',
			"text"				=> '#666666',
			), 			
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
 
																   Tabs Config
 
*///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
if ( !function_exists ( "sao_tabs_config" )){
add_filter('sao_builder_tabs', 'sao_tabs_config');
function sao_tabs_config( $args ) {
 
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
	
		$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
		'sao-tabs',
  		'sao-aw', 
	);	 
 ?>
      	 <aside <?php  sao_el_id($option);?> class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php  sao_el_cssanime($option);?>  >

  		<?php



 			$count = 0;
			$count_2 = 0;
  			if(!empty($option['tabs'])){?>
            
 				 <div class="sao-tabs-title-warp">
  			
					<?php
                    foreach($option['tabs'] as $keys => $value) {
    
                        $count++;
                        $tabs_active = $count==1 ? 'sao-tabs-active' : '';
     
                        if(!empty($value['title'])) {?>
                             <a data-key="<?php echo esc_attr($keys);?>" class="sao-tabs-title  <?php echo esc_attr($tabs_active)?>" ><?php echo esc_html($value['title']);?></a>
                            
                            <?php 
                        }
                        
                    }?>
				 </div>

			 	<div class="sao-tabs-content-warp" >
 				
                	<?php
					foreach($option['tabs'] as $keys => $value) {
					$count_2++;
					$tabs_content_active = $count_2==1 ? 'sao-tabs-content-active' : ' ';

 					if(!empty($value['title'])) {
					 
						if(!empty($value['content'])){
						?>
	
						 <div class="sao-tabs-content  <?php echo esc_attr($tabs_content_active);?>" data-key="<?php echo esc_attr($keys);?>"><?php echo  wp_kses_post($value['content']);?></div>
						
                        <?php
                        }
  					}
					
					}
					?>
		 		</div> 
				
			<?php } ?>
				 
 
  		 </aside>
         <?php

 	$item = '.sao-el-'.$key.' '; 

 $item_css='';
 

//Headeing  Css
	$item_css='';
	
	
	
	$item_css.= sao_var_2( 'tl-bg',$option,'heading_color','background'  );
	$item_css.= sao_var_2( 'tl-cr',$option,'heading_color','text'  );
 	
	$item_css.= sao_var_2( 'tl-atv-bg',$option,'heading_active_color','background'  );
	$item_css.= sao_var_2( 'tl-atv-cr',$option,'heading_active_color','text'  );
 	
	$item_css.= sao_var_2( 'cn-bg',$option,'content_color','background'  );
	$item_css.= sao_var_2( 'cn-cr',$option,'content_color','text'  );
 	
	$item_css.= sao_var_size( 'tb-rd',$option,'radius','size' );
	
 	 $item_css.= sao_var_border_mini_2( 'tb',$option,'border'  );
	
	
 
	
	
 	$item_css.= sao_var_size('tl-fn-sz',$option,'title_font_size','size') ;
	$item_css.= sao_var_font_weight('tl',$option,'normal') ;
 	$item_css.= sao_var('tl-fn-st',$option,'title_font_style') ;
	
	
	 
	$item_css.= sao_var_size('cn-fn-sz',$option,'content_font_size','size') ;
	$item_css.= sao_var_font_weight('cn',$option,'content_font_weight','normal') ;
	
 	$item_css.= sao_var('cn-fn-st',$option,'content_font_style') ;
	$item_css.= sao_var_size('cn-li-ht',$option,'content_line_height','size') ;
	
	
	 
	$item_css.= sao_element_padding($option);


   	$css.=sao_item_css($item_css,$item);
 	
   	$return['output']=  ob_get_clean();
  	$return['css']= $css;
  	$return['emptybefore']= true;
  	$return['emptyafter']= true;
	return $return;	
}}
}
 ?>