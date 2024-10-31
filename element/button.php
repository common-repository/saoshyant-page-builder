<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Button
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_button" )){
add_filter('sao_element_item', 'sao_element_item_button');
function sao_element_item_button( $element ) {
 	
 	$element[] = array(
 		'name'			=> 	__('Button','saoshyant-page-builder'),
 		'id'			=> 'button',
		'img'			=>  SAOPAGE_DIR.'assets/image/button.jpg',
  	); 
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Button Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_button_options" )){
add_filter('sao_element_options_button', 'sao_button_options');
function sao_button_options( $option ) {
 
	
	
	$default=array(
		'a'.rand(100000000, 999999999)	=>  array( 
			'text' => __('Button 1','saoshyant-page-builder'),
			'link' => "#",
			'style' => "style-1",
			'text_color' =>  array( 
				'main' => "#ffffff",
				'icon' => "#ffffff",
 			),
			'background' =>  array( 
				'first' => "#0894e3",
 			),
			'border' =>  array( 
				'size' => "0",
				'style' => "",
 				'color' => "",
 			)
			),
		'a'.rand(100000000, 999999999)	=> array( 
			'text' => __('Button 2','saoshyant-page-builder'),
 			'link' => "#",
			'style' => "style-1",
			'text_color' =>  array( 
				'main' => "#0894e3",
				'icon' => "#0894e3",
 			),
 
			'border' =>  array( 
				'size' => "2",
 				'style' => "solid",
 				'color' => "#0894e3",
				'
				' => "#3cc1bf",
 			)
			),
 		 
		 
		 
		);

	$option[]= array( 
		"name"			=> __('Button','saoshyant-page-builder'),
 		"id"			=> "button",
  		"desc"			=>  __('Add Button','saoshyant-page-builder'),
		"type"			=> "list",
		"default"		=> $default,
 		"options"		=>  array(
			 array(
  				"name"		=>  __('Text','saoshyant-page-builder'),
  				"id"		=> "text",
 				"type"		=> "text",
 			),
			array(
  				"name"		=>  __('Link','saoshyant-page-builder'),
  				"id"		=> "link",
 				"type"		=> "text",
 			),
			
			array(
  				"name"		=>  __('Icon','saoshyant-page-builder'),
  				"id"		=> "icon",
 				"type"		=> "icon",
				
 			),	
			
			array(
  				"name"		=>  __('Open in new window','saoshyant-page-builder'),
  				"id"		=> "widows",
 				"type"		=> "checkbox",
				
 			),			
			
			array(
  				"name"		=>  __('Style Button','saoshyant-page-builder'),
  				"id"		=> "style_start",
 				"type"		=> "according-start",
				
 			),
			array(
  				"name"		=>  __('Style Button','saoshyant-page-builder'),
  				"id"		=> "style",
 				"type"		=> "select",
				"options"		=>  sao_array_options('button'),						
 			),	
 	
			array(
  				"name"		=>  __('Text Color','saoshyant-page-builder'),
  				"id"		=> "text_color",
 				"type"		=> "multi_options",
 				"options"		=>	array(
					array(
						"name"		=>  __('Main Text Color','saoshyant-page-builder'),
						"id"		=> "main",
						"type"		=> "color_rgba",
  					),array(
						"name"		=>  __('Icon Color','saoshyant-page-builder'),
						"id"		=> "icon",
						"type"		=> "color_rgba",
  					),	
				
 				),
			),
			
			array(
  				"name"		=>  __('Background Color','saoshyant-page-builder'),
  				"id"		=> "background",
 				"type"		=> "multi_options",
 				"options"		=>  sao_multi_array_options('background2'),						
 			),
			array(
  				"name"		=>  __('Border','saoshyant-page-builder'),
  				"id"		=> "border",
 				"type"		=> "multi_options",
 				"options"		=>  sao_multi_array_options('border_mini'),						
 			),
			array(
  				"name"		=>  __('Style Button','saoshyant-page-builder'),
  				"id"		=> "style_end",
 				"type"		=> "according-end",
				
 			),			
			array(
  				"name"		=>  __('Style Button in Hover','saoshyant-page-builder'),
  				"id"		=> "style_hover_start",
 				"type"		=> "according-start",
 			),			
			array(
  				"name"		=>  __('Hover Text Color','saoshyant-page-builder'),
  				"id"		=> "hover_text_color",
 				"type"		=> "multi_options",
 				"options"		=>	array(
					array(
						"name"		=>  __('Main Text Color','saoshyant-page-builder'),
						"id"		=> "main",
						"type"		=> "color_rgba",
  					),array(
						"name"		=>  __('Icon Color','saoshyant-page-builder'),
						"id"		=> "icon",
						"type"		=> "color_rgba",
  					),	
				
 				),
			),
			
			array(
  				"name"		=>  __('Hover Background Color','saoshyant-page-builder'),
  				"id"		=> "hover_background",
 				"type"		=> "multi_options",
 				"options"		=>  sao_multi_array_options('background2'),						
 			),

			array(
  				"name"		=>  __('Hover Border','saoshyant-page-builder'),
  				"id"		=> "hover_border",
 				"type"		=> "multi_options",
 				"options"		=>  sao_multi_array_options('border_mini'),						
 			),
			array(
  				"name"		=>  __('Style Button in Hover','saoshyant-page-builder'),
  				"id"		=> "style_hover_end",
 				"type"		=> "according-end",
				
 			),						
 
	 		array( 
			"name"			=> esc_html__('CSS Animation','saoshyant-page-builder'),
 			"id"			=> "cssanime",
			"desc"			=>  esc_html__('Select type of animation if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.','saoshyant-page-builder'),
 			"type"			=> "select",
 			"options"		=>  sao_array_options('cssanime'),						
 		),
		
 		),
	);


	$option[]= array( 
		"name"			=> __('Icon Alignment','saoshyant-page-builder'),
 		"id"			=> "icon_alignment",
 		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>  'left',
   		"type"			=> "select",
		"options"		=> sao_array_options('align_mini')				
		 
	);	
 	 
	
	$option[]= array( 
		"name"			=> __('Alignment','saoshyant-page-builder'),
 		"id"			=> "alignment",
 		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>  'center',
 		"type"			=> "select",
		"options"		=> sao_array_options('align')				
				
		 
	);	
 
 	$option[]= array( 
		"name"			=> __('Gutter','saoshyant-page-builder'),
 		"id"			=> "gutter",
		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>  array( 
 			"between"		=> '20',
			"unit"			=> 'px',
			), 
		
 		"desc"			=>  __('Amount of space between Column,Default "0" ','saoshyant-page-builder'),
		"type"			=> "multi_options",
		"options"		=> array( 
			array( 
				"name"			=> __('Between','saoshyant-page-builder'),			
  				"id"			=> "between",
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
		"name"			=> esc_html__('All CSS Animation','saoshyant-page-builder'),
 		"id"			=> "cssanime",
		"desc"			=>  esc_html__('Select type of animation if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.','saoshyant-page-builder'),
 		"group"			=>  esc_html__('Layout','saoshyant-page-builder'),
		"type"			=> "select",
 		"options"		=>  sao_array_options('cssanime'),						
 	);
 
	$option[]= array( 
		"name"			=> __('Button Padding','saoshyant-page-builder'),
 		"id"			=> "button_padding",
  		"group"			=>  __('Button','saoshyant-page-builder'),		
		"type"			=> "multi_options",
 		"options"		=>  sao_multi_array_options('padding_mini'),						
 	);
	$option[]= array( 
		"name"			=> __('Border Radius','saoshyant-page-builder'),
 		"id"			=> "radius",
  		"group"			=>  __('Button','saoshyant-page-builder'),
 		"type"			=> "multi_options",
		"default"		=>  array( 
 			"size"		=> '5',
			"unit"			=> 'px',
			),
		"options"		=>  sao_multi_array_options('radius_mini'),	 		
	 
	); 	
 
	 	
 
	$option[]= array( 
		"name"			=> __('Font Size','saoshyant-page-builder'),
 		"id"			=> "font_size",
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
		"name"			=> __('Font Weight','saoshyant-page-builder'),
 		"id"			=> "font_weight",
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
		"name"			=> __('Font Style','saoshyant-page-builder'),
 		"id"			=> "font_style",
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
 
																   Button Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_button_config" )){
add_filter('sao_builder_button', 'sao_button_config');
function sao_button_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	if(sao_element_show($option)=='show'){
 
  	ob_start();  
	
	$output='';
	$css ='';
 
 	$element_id = !empty( $option['element_id']) ?  ' id=" '.$option['element_id'].' " ' : '';
	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
 		
	
 	$output ='';
  	 
	$icon_alignment =!empty($option['icon_alignment'])?$option['icon_alignment']:'';
	if($icon_alignment=='right'){
		$class_icon_alignment=' sao-all-btn-icon-'.sao_builder_rtl_right();
	}else{
		$class_icon_alignment ='';
	}
	
  	$classes=array(
		'sao-el-'.$key,
		sao_element_show($option,true),
		$custom_class,
		'sao-all-btn',
		 $class_icon_alignment,
   
	);
	
  	//*********************************************************************START****************************************************/
	?>
	<article <?php  sao_el_id($option); ?> class="<?php echo esc_attr(join( ' ', $classes ));?>" <?php  sao_el_cssanime($option);?> >
  
 	
   		<?php
		$count=0;
		$style_6=false;
		
		 $button_conut= !empty($option['button'])? count($option['button']):'';  


			if(!empty($option['button'])){
			foreach($option['button'] as $keys => $value) :
				if($button_conut >1){
				$class_button = 'sao-btn-'.$keys; 
				}else{
				$class_button = 'sao-btn'; 
				}
				$count++;
				$link =  !empty($value['link'])  ? $value['link'] : '';		
				$widows = !empty($value['widows']) ?' target="_blank" ' : '';
						
				if(!empty($value['icon'])){
	 
					 sao_icon_fontfamily($value['icon']);
	
					$class_button.=' '.$value['icon'].' ';
			 
				} 
				
				 
				$style =  !empty($value['style'])  ? $value['style'] : '';		
				 
		 
				//*********************************************************************START Buttom****************************************************/
				if(!empty($value['text'])){
 					?>
   					 <a class="<?php echo esc_attr($class_button);?>" href="<?php echo esc_url($link );?>"  <?php  sao_el_cssanime($value); echo wp_kses_post($widows);?> ><?php echo esc_html($value['text']);?></a>
					<?php
                 }
                 
                 
			 
                //*********************************************************************END Buttom****************************************************/
                if($button_conut > 1){
                $item_button = '.sao-el-'.$key.' .sao-btn-'.$keys; 
                }else{
                $item_button = '.sao-el-'.$key.''; 
                }
                
                $button_css='';
                if(!empty($value['text'])) {
                $button_css.= sao_var_2('btn-cr',$value ,'text_color','main');
                $button_css.= sao_var_2('hv-btn-cr',$value ,'hover_text_color','main');
                }
                
         
                if( !empty($value['icon'])){
                    $button_css.= sao_var_2('btn-icn-cr',$value ,'text_color','icon');
                    $button_css.= sao_var_2('hv-btn-icn-cr',$value ,'hover_text_color','icon');
                }
                 
         
                 
                if($style=='style-6'){
                     
                    $button_css.=  sao_var_button_icon_padding($option,'button_padding',$icon_alignment);
                    $button_css.=  sao_var_button_padding_style_6($option,'button_padding',$icon_alignment);
         
           
                    $button_css.= sao_var_2('btn-bg',$value ,'background','first');
                    $button_css.= sao_var_2('btn-bg-sn',$value ,'background','second');
                    
                    $button_css.= sao_var_2('hv-btn-bg',$value ,'hover_background','first');
                    $button_css.= sao_var_2('hv-btn-bg-sn',$value ,'hover_background','second');
                 
                 
                    
                }elseif($style=='style-7'){
                    $button_css.= '--sao-btn-pd:0px ; '; 
                 
                }else{
                    $button_css.=  sao_var_padding_mini('btn',$option,'button_padding');
                    
                     $button_css.= sao_var_gradient_background_color('btn',$value,'background');
                     $button_css.= sao_var_gradient_background_color('hv-btn',$value,'hover_background');
                     
                     $button_css.= sao_var_border_mini('btn',$value,'border');
                     $button_css.= sao_var_border_mini('hv-btn',$value,'hover_border');
                      
                     $button_css.=sao_var_button_style($value);
                }
                if($button_conut > 1){
        
                    $css.=sao_item_css($button_css,$item_button);
        
                        }
          
          
            endforeach;
            }
             ?>
             
             
             
             
             
 	 </aside>





	
  	<?php 
	
	//*********************************************************************END****************************************************/


 	 
	$item = '.sao-el-'.$key.' '; 
	$item_css='';
	if($button_conut == 1){
		$item_css.= $button_css;
		}
 	$item_css.=sao_var_align('ag',$option,'alignment');	
	$item_css.= sao_var_radius_mini('btn',$option,'radius'); 
	 
	 
	if(isset($option['gutter']['between'])&& $count > 1){
		$item_css.= sao_var_size('btn-gt',$option,'gutter','between');
  	}   
	 
 	$item_css.= sao_var_size('btn-fn-sz',$option,'font_size','size') ;
	$item_css.= sao_var_font_weight('btn',$option,'font_weight','500') ;
	$item_css.= sao_var('btn-fn-st',$option,'font_style') ;
   
 
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