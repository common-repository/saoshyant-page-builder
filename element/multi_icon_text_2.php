<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Multi Icon Text 2
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_multi_icon_text_2" )){
add_filter('sao_element_item', 'sao_element_item_multi_icon_text_2');
function sao_element_item_multi_icon_text_2( $element ) {
 	
 	$element[]=array(
 		'name'			=> 	__('Multi Icon & Text 2','saoshyant-page-builder'),
 		'id'			=> 'multi_icon_text_2',
		'img'			=>  SAOPAGE_DIR.'assets/image/multi_icon_text_2.jpg'
  	); 
  
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Multi Icon Text 2 Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_multi_icon_text_2_options" )){
add_filter('sao_element_options_multi_icon_text_2', 'sao_multi_icon_text_2_options');
function sao_multi_icon_text_2_options( $option ) {
	$default=array(
		'a'.rand(100000000, 999999999)	=>  array( 
			"icon"		=> "fa-check-circle",
			'title' =>  __('Lorem ipsum dolor sit amet','saoshyant-page-builder'),
			'details' =>  __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
		 
			),
		'a'.rand(100000000, 999999999)	=> array( 
			"icon"		=> "fa-check-circle",
			'title' =>  __('Lorem ipsum dolor sit amet','saoshyant-page-builder'),
			'details' =>  __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
 			),
		'a'.rand(100000000, 999999999)	=> array( 
			"icon"		=> "fa-check-circle",
			'title' =>  __('Lorem ipsum dolor sit amet','saoshyant-page-builder'),
			'details' =>  __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa','saoshyant-page-builder'),
 			), 		 
		 
		 
		);

 
 	$option[]= array( 
		"name"			=> __('Box','saoshyant-page-builder'),
 		"id"			=> "list",
 		"default"		=> $default,
  		"desc"			=>  __('Add Box','saoshyant-page-builder'),
		"type"			=> "list",
 		"options"		=>  array(
			 array(
				"name"			=> __('Title','saoshyant-page-builder'),
 				"id"			=> "title",
				"type"			=> "text",
 			),
 			array(
  				"name"		=>  __('Custom Icon','saoshyant-page-builder'),
  				"id"		=> "icon",
 				"type"		=> "icon",
				
 			),	
 			array(
				"name"			=> __('The Details','saoshyant-page-builder'),
				"id"			=> "details",
				"type"			=> "textarea",
  			),
			array( 
				"name"			=> __('Button Text','saoshyant-page-builder'),
				"id"			=> "button",
				"desc"			=>  __('input text to show button','saoshyant-page-builder'),
				"type"			=>  'text',
			 
			),
 			array(
  				"name"		=>  __('Link','saoshyant-page-builder'),
  				"id"		=> "link",
 				"type"		=> "text",
				
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
	$option[]=array(
  				"name"		=>  __('Open in new window','saoshyant-page-builder'),
  				"id"		=> "widows",
 				"type"		=> "checkbox",
				
	);
			
 
	 
	$option[]= array( 
		"name"			=> __('Column','saoshyant-page-builder'),
 		"id"			=> "column",
		"default"		=>  '3',
  		"group"			=>  __('Layout','saoshyant-page-builder'),
		"type"			=> "select",
 		"options"		=>  sao_array_options('post_column'),
		 
  	); 	 	
	
	$option[]= array( 
		"name"			=> __('Space Between Item','saoshyant-page-builder'),
 		"id"			=> "space_item",
  		"group"			=>  __('Layout','saoshyant-page-builder'),
		"type"			=> "multi_options",
		"default"		=> array( 
  								"size"			=> "40",
							),
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
 
 
	$option[]= array( 
		"name"			=> __('Button Margin Top','saoshyant-page-builder'),
 		"id"			=> "button_margin_top",
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
 			"none"		=> esc_html__('None','saoshyant-page-builder'),
			"boxed"		=> esc_html__('Boxed All','saoshyant-page-builder'),
			"boxed-item"	=> esc_html__('Boxed Item','saoshyant-page-builder'),
			"boxed-item-2"	=> esc_html__('Boxed Item 2','saoshyant-page-builder'),
			"boxed-item-3"	=> esc_html__('Boxed Item 3','saoshyant-page-builder'),
			"boxed-item-4"	=> esc_html__('Boxed Item 4','saoshyant-page-builder'),
		
		), 						
				  
	); 	 	
	
$boxed_fold = array( 
			"boxed" => "box_layout",
			"boxed-item" => "box_layout",
			"boxed-item-2" => "box_layout",
			"boxed-item-3" => "box_layout",
			"boxed-item-4" => "box_layout",
	);
	$boxed_item = array( 
			"boxed-item" => "box_layout",
			"boxed-item-2" => "box_layout",
			"boxed-item-3" => "box_layout",
			"boxed-item-4" => "box_layout",
		);	 
	 
	include SAOPAGE_PATH . 'element/mini/multi_boxed_item.php';
	include SAOPAGE_PATH . 'element/mini/icon.php';
 
	/*----------------------------------------------------------------
	 Details Style
	 -------------------------------------------------------------*/		  	
  
 	include SAOPAGE_PATH . 'element/mini/details.php';
 	
	/*----------------------------------------------------------------
	 Button Style
	 -------------------------------------------------------------*/	
	 

	
	 
 
 	include SAOPAGE_PATH . 'element/mini/button.php';
	
	/*----------------------------------------------------------------
	 Typography Style
	 -------------------------------------------------------------*/
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
 
 	include SAOPAGE_PATH . 'element/mini/details_type.php';
	 

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
 	 
	  	include SAOPAGE_PATH . 'element/mini/column_responsive.php';
 
    return $option;
} 
}
}
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Multi Icon Text 2 Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ( !function_exists ( "sao_multi_icon_text_2_config" )){
add_filter('sao_builder_multi_icon_text_2', 'sao_multi_icon_text_2_config');
function sao_multi_icon_text_2_config( $args ) {
 
		$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css =''; 
 
	if(sao_element_show($option)=='show'){
			
 	global $sao_icon_style,$sao_multi_style;
	$sao_icon_style++;
	$sao_multi_style++;	
  	ob_start(); 

 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
 	 
 	$box_layout =sao_el_box_layout_multi($option);
  	$icon_layout = !empty($option['icon_layout']) ?' sao-icon-'.sao_icon_layout($option) : ' ';
  	
	$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
		'sao-icon-two-multi',
		$box_layout,
		$icon_layout,
  		'sao-aw',
  
	);
	
	
	?>
    
 	<aside <?php sao_el_id($option);?> class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php sao_el_cssanime($option);?>  >
   
	<div class="sao-flex <?php  sao_multi_column($option);?>"> 

 	 
		<?php
        /*************************************Foreach*******************************/
		if(!empty($option['list'])):
        foreach($option['list'] as $keys => $value):
        
			$value['widows'] = !empty($option['widows']) ?$option['widows'] : '';
            $value['heading'] = !empty($option['heading']) ? $option['heading'] : 'h3';
        ?>
            <div class="sao-item"> 
                
                    <?php if($box_layout=='sao-boxed-multi-2' || $box_layout=='sao-boxed-multi-3'||$box_layout=='sao-boxed-multi-4') {?>
                     <div class="sao-bg"></div> 
                    <?php }?>
             
                    <?php 
                    if(!empty($value['icon'])){sao_el_icon($value,$option);$option['icon']=true;}
                    if(!empty($value['title'])){sao_el_title($value);$option['title']=true;}
                    sao_el_line($option);
                    if(!empty($value['details'])){sao_el_excerpt($value);$option['details']=true;}
                    if(!empty($value['button'])){sao_el_button($value);$option['button']=true;}	
                    
                    ?>
                    
             </div>
                                       
        <?php
        endforeach;
		endif;
        ?>		   
	   
	 </div> 
	</aside>

	<?php	    
	
 	$item = '.sao-el-'.$key.''; 
 
  
	$item_css='';
  	$item_css.= sao_var_size('gp',$option,'space_item','size');	 
	if( $box_layout=='sao-boxed-multi-1' ||  $box_layout =='sao-boxed-multi-2' || $box_layout =='sao-boxed-multi-3' || $box_layout =='sao-boxed-multi-4' ) {
 		$item_css.= sao_boxed_css($option,true); 
	}else{
		$item_css.= sao_multi_border_css($option);	 
		$item_css.= sao_boxed_css($option,false); 
 	}
 
  
  	$item_css.= sao_var_size('dt-mg-tp',$option,'space_icon_details','size'); 
  	$item_css.= sao_var_size('ex-mg-tp',$option,'space_title_details','size');
  	$item_css.= sao_var_size('btn-mg-tp',$option,'button_margin_top','size');

  
 	$item_css.= sao_var_align('ag',$option,'alignment','center') ;
 
  	$item_css.= sao_boxed_css($option); 
  	$item_css.= sao_icon_css($option); 
  	$item_css.= sao_title_css($option); 
  	$item_css.= sao_line_css($option); 
  	$item_css.= sao_excerpt_css($option); 
  	$item_css.= sao_button_css($option); 
    
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