<?php
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Image Size
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	  
 if ( !function_exists ( "sao_all_image_sizes" )){
function sao_all_image_sizes() {
    global $_wp_additional_image_sizes;

    $default_image_sizes = get_intermediate_image_sizes();

    foreach ( $default_image_sizes as $size ) {
        $image_sizes[ $size ][ 'width' ] = intval( get_option( "{$size}_size_w" ) );
        $image_sizes[ $size ][ 'height' ] = intval( get_option( "{$size}_size_h" ) );
        $image_sizes[ $size ][ 'crop' ] = get_option( "{$size}_crop" ) ? get_option( "{$size}_crop" ) : false;
    }

    if ( isset( $_wp_additional_image_sizes ) && count( $_wp_additional_image_sizes ) ) {
        $image_sizes = array_merge( $image_sizes, $_wp_additional_image_sizes );
    }

 	
	 
 	$image = array();
  	foreach ($image_sizes as $key => $value) {
     	$image[esc_html($key)] = esc_html($key).' '.$value['width'].' x '.$value['height'];
	}	
 	$image['full'] = esc_html__('Full','saoshyant-page-builder');
	 
	return $image;	
	
	
}
 }
 if ( !function_exists ( "sao_elementor_default_padding" )){
function sao_elementor_default_padding() {

		if(has_filter('sao_builder_element_padding')) {
			$sao_elementor_element_padding = apply_filters('sao_elementor_element_padding','padding');
		}else{
			$sao_elementor_element_padding = '20px';
		}
 
	return $sao_elementor_element_padding;	
}
 }  

if ( !function_exists ( "sao_elementor_default_border_radius" )){
function sao_elementor_default_border_radius() {
	 

	if(has_filter('sao_elementor_border_radius')) {
			$sao_elementor_border_radius = apply_filters('sao_elementor_border_radius','radius');
		}else{
			$sao_elementor_border_radius =  '0';
	}
	return $sao_elementor_border_radius;	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Default Padding
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
if ( !function_exists ( "sao_builder_default_padding" )){
function sao_builder_default_padding() {

	if(has_filter('sao_builder_element_padding')) {
			$sao_builder_element_padding = apply_filters('sao_builder_element_padding','padding');
		}else{
			$sao_builder_element_padding =array( 
			"top"			=> '20',
			"left"			=> '20',
			"bottom"		=> '20',
			"right"			=> '20',
 			);
	}
	return $sao_builder_element_padding;	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Border Radius
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
 if ( !function_exists ( "sao_builder_default_border_radius" )){

function sao_builder_default_border_radius() {
	 

	if(has_filter('sao_builder_border_radius')) {
			$sao_builder_border_radius = apply_filters('sao_builder_border_radius','radius');
		}else{
			$sao_builder_border_radius =array( 
			"size"			=> '0',
			""			=> '',
  			);
	}
	return $sao_builder_border_radius;	
}
 }
 
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Array Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
if ( !function_exists ( "sao_array_options" )){

function sao_array_options($value) {
	
  
	global $wp_registered_sidebars;
 	$sidebar_options = array();
  	$sidebar_options_obj = $wp_registered_sidebars;
  	if(!empty($sidebar_options_obj)){
		foreach ($sidebar_options_obj as $side) {
			$sidebar_options[$side['id']] = $side['name'];
		}
	}
 
	$options['sidebars'] = $sidebar_options;

 	$options['post_type']= array(
		'posts'				=>	__('Posts','saoshyant-page-builder'),
 		'slides'			=>	__('Custom Slides','saoshyant-page-builder'),
	);	 
	 
	$options_sliders = array();
	$options_sliders_obj = get_categories('taxonomy=sao_sliders&type=sao_slides'); 
 	foreach ($options_sliders_obj as $slider) {
    	$options_sliders[$slider->cat_ID] = $slider->cat_name;
	}	 
	 
	$options['sliders'] = $options_sliders;
	  
 	$options['sidebar']= $sidebar_options;  
	$options_categories = array();
	$options_categories_obj = get_categories();
 	$options_categories['']=esc_html__('All Categories','saoshyant-page-builder');
	 	 
 	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	$options['cats']= $options_categories;
	$options['attachment']= array(
		'medium' ,	
		'url' ,	
		'title' ,		
		'caption' ,		
		'alt' ,		
		'description' ,		
		'width' ,		
		'height' ,		
		
	);
	
	$options['attachment_thumbnail']= array(
		'thumbnail' ,	
		'url' ,	
		'title' ,		
		'caption' ,		
		'alt' ,		
		'description' ,		
		'width' ,		
		'height' ,		
		
	);
 
  
 	$options['size1']= array(
 		'sao-img-medium'				=>	esc_html__('Medium','saoshyant-page-builder'), 
		'sao-img-large'				=>	esc_html__('Large','saoshyant-page-builder'), 
		
	);
	
	
	
 	$options['radius_position'] = array(
 			"round"							=>	esc_html__('All Round','saoshyant-page-builder'),  
			"top"							=>	esc_html__('Top','saoshyant-page-builder'),  
			"bottom"						=>	esc_html__('Bottom','saoshyant-page-builder'),  
			"top-right-bottom-left"			=> is_rtl() ? esc_html__('Top Left & Bottom Right','saoshyant-page-builder') :esc_html__('Top Right & Bottom Left','saoshyant-page-builder'),
			"top-left-bottom-right"			=> is_rtl() ? esc_html__('Top Right & Bottom Left','saoshyant-page-builder') :esc_html__('Top Left & Bottom Right','saoshyant-page-builder'),
			
  	); 		
 
 	$options['size2']= array(
		'sao-img-small'				=>	esc_html__('Small','saoshyant-page-builder'),
		'sao-img-medium'				=>	esc_html__('Medium','saoshyant-page-builder'), 
		'sao-img-large'				=>	esc_html__('Large','saoshyant-page-builder'), 
		
	);		
	
 
 	$options['height']= array(
		'200'				=>	'200px',
		'300'				=>	'300px',
		'400'				=>	'400px',
		'500'				=>	'500px', 
		'600'				=>	'600px',
		'700'				=>	'700px',
		'800'				=>	'800px',
		
	);
		
 
 	$options['height_content']= array(
		'sao-300px'				=>	'300px',
		'sao-400px'				=>	'400px',
		'sao-500px'				=>	'500px', 
		'sao-600px'				=>	'600px',
		
	);	
 
	$options['orderby']= array(
 		''							=>	esc_html__('Recent Posts','saoshyant-page-builder'),
		'rand'						=>	esc_html__('Randam','saoshyant-page-builder'),
		'rand-day'					=>	esc_html__('Randam - 1 day ago','saoshyant-page-builder'),
		'rand-week'					=>	esc_html__('Randam - 1 week ago','saoshyant-page-builder'),
		'rand-month'				=>	esc_html__('Randam - 1 month ago','saoshyant-page-builder'),
		'rand-year'					=>	esc_html__('Randam - 1 year ago','saoshyant-page-builder'),
		'most-comment'				=>	esc_html__('Most Comments ','saoshyant-page-builder'),
		'most-comment-day'			=>	esc_html__('Most Comments 1 day ago','saoshyant-page-builder'),
		'most-comment-week'			=>	esc_html__('Most Comments 1 week ago','saoshyant-page-builder'),
		'most-comment-month'		=>	esc_html__('Most Comments 1 month ago','saoshyant-page-builder'),
		'most-comment-year'			=>	esc_html__('Most Comments 1 year ago','saoshyant-page-builder'), 
	); 

	$options['meta']= array(
		'comments'				=>	esc_html__('Comments','saoshyant-page-builder'), 
  		'view'					=>	esc_html__('Views','saoshyant-page-builder'),
 		'date'					=>	esc_html__('Date','saoshyant-page-builder'), 
  		'author'				=>	esc_html__('Author','saoshyant-page-builder'), 
 		
	); 
	$options['ratio1']= array(
		'sao-ratio40f'				=>	esc_html__('5:2','saoshyant-page-builder'),
		'sao-ratio60f'				=>	esc_html__('16:9','saoshyant-page-builder')  
		
	);
	
	$options['ratio2']= array(
		'sao-ratio60'				=>	esc_html__('16:9','saoshyant-page-builder'),
		'sao-ratio75'				=>	esc_html__('4:3','saoshyant-page-builder')  
		
	);
	
 	
	
	$options['ratio3']= array(
		'sao-ratio60'				=>	esc_html__('16:9','saoshyant-page-builder'),
		'sao-ratio75'				=>	esc_html__('4:3','saoshyant-page-builder'), 
		'sao-ratio100'				=>	esc_html__('1:1','saoshyant-page-builder') , 
		
		
	);

	$options['ratio4']= array(
 		''					=>	esc_html__('Default','saoshyant-page-builder'),
 		'sao-ratio60'				=>	esc_html__('16:9','saoshyant-page-builder'),
		'sao-ratio75'				=>	esc_html__('4:3','saoshyant-page-builder'), 
		'sao-ratio100'				=>	esc_html__('1:1','saoshyant-page-builder') ,
		'sao-ratio135'				=>	esc_html__('3:5','saoshyant-page-builder') ,
 	);
			
	$options['image_ratio']= array(
 		'sao-ratio-auto'			=>	esc_html__('Auto','saoshyant-page-builder'),
   		'sao-ratio60'				=>	esc_html__('16:9','saoshyant-page-builder'),
		'sao-ratio75'				=>	esc_html__('4:3','saoshyant-page-builder'), 
		'sao-ratio100'				=>	esc_html__('1:1','saoshyant-page-builder'),
		'sao-ratio135'				=>	esc_html__('3:5','saoshyant-page-builder'),
  	);
	
	
	$options['video_ratio']= array(
  		'sao-ratio60'				=>	esc_html__('16:9','saoshyant-page-builder'),
 		'sao-ratio75'				=>	esc_html__('4:3','saoshyant-page-builder'), 
   	);	
	
	$options['thumb_ratio']= array(
		'sao-thumb-ratio60'				=>	esc_html__('16:9','saoshyant-page-builder'),
		'sao-thumb-ratio75'				=>	esc_html__('4:3','saoshyant-page-builder'), 
		'sao-thumb-ratio100'				=>	esc_html__('1:1','saoshyant-page-builder'),
		'sao-thumb-ratio135'				=>	esc_html__('3:5','saoshyant-page-builder'),
  	);
		
		
				
	$options['effect']= array(

		'slide'					=>	esc_html__('Slide','saoshyant-page-builder'),
		'fade'					=>	esc_html__('Fade','saoshyant-page-builder'), 
	); 
 	$options['background_thumb']= array(
		'none'					=>	esc_html__('None','saoshyant-page-builder'),
		'light'					=>	esc_html__('Light','saoshyant-page-builder'), 
		'dark'					=>	esc_html__('Dark','saoshyant-page-builder'), 
	);

 	$options['unit']= array(
		'px'				=>	'px',
		'%'					=>	'%', 
		'em'				=>	'em',
 		
	);
	
	$options['width']= array(
		''						=>	esc_html__('Default','saoshyant-page-builder'), 
		'1000px'				=>	'1000px',
		'1100px'				=>	'1100px',
		'1200px'				=>	'1200px',
		'1300px'				=>	'1300px',
		'1400px'				=>	'1400px',
		'1500px'				=>	'1500px',
 		'1600px'				=>	'1600px',
 		'1700px'				=>	'1700px',
 		'1800px'				=>	'1800px',
 		'1920px'				=>	'1920px',
 		'100%'				=>	esc_html__('Full Width','saoshyant-page-builder'),
 		
	);	
	
	$options['heading']= array(
		''					=>esc_html__('Default','saoshyant-page-builder'), 
		'h1'				=> 'h1', 
		'h2'				=> 'h2', 
		'h3'				=> 'h3', 
		'h4'				=> 'h4', 
		'h5'				=> 'h5', 
		'h6'				=> 'h6', 
  		
	);	
	
	
	$options['gallery_col']= array(
 		'custom'		=> esc_html__('By Width and Height','saoshyant-page-builder'), 
 		'1'				=> '1', 
		'2'				=> '2', 
		'3'				=> '3', 
		'4'				=> '4', 
		'5'				=> '5', 
		'6'				=> '6', 
 		'7'				=> '7', 
		'8'				=> '8', 		
	);	
	
	
	$options['list_col']= array(
 		'1'				=> '1', 
		'2'				=> '2', 
		'3'				=> '3', 
		'4'				=> '4', 
		'5'				=> '5', 
		'6'				=> '6', 
 		'7'				=> '7', 
		'8'				=> '8', 		
	);	
	
	
	$options['col']= array(
		''				=>	esc_html__('Default','saoshyant-page-builder'), 
 		'1'				=> '1', 
		'2'				=> '2', 
		'3'				=> '3', 
		'4'				=> '4', 
		'5'				=> '5', 
		'6'				=> '6', 
 		'7'				=> '7', 
		'8'				=> '8', 
		'9'				=> '9', 
		'10'			=> '10', 
		'11'			=> '11', 
		'12'			=> '12', 		
	);
	
	$options['tablet_cols']= array(
		''						=>	esc_html__('Default','saoshyant-page-builder'), 
  		'1'				=> '1', 
		'2'				=> '2', 
		'3'				=> '3', 
		'4'				=> '4', 
		'5'				=> '5', 
		'6'				=> '6',  
	);
	
	
	$options['mobile_cols']= array(
		''				=>	esc_html__('Default','saoshyant-page-builder'), 
 		'1'				=> '1', 
		'2'				=> '2', 
		'3'				=> '3', 
	);
	
	$options['align']= array(
 		'left'				=> is_rtl() ? esc_html__('Right','saoshyant-page-builder'):esc_html__('Left','saoshyant-page-builder'),  
		'center'			=> esc_html__('Center','saoshyant-page-builder'), 
		'right'				=> is_rtl() ? esc_html__('Left','saoshyant-page-builder'):esc_html__('Right','saoshyant-page-builder'),  
   		
	);
	$options['align_mini']= array(
 		'left'				=> is_rtl() ? esc_html__('Right','saoshyant-page-builder'):esc_html__('Left','saoshyant-page-builder'),  
 		'right'				=> is_rtl() ? esc_html__('Left','saoshyant-page-builder'):esc_html__('Right','saoshyant-page-builder'),  
   		
	);	
			
	$options['font_weight']= array(
		''				=>esc_html__('Default','saoshyant-page-builder'), 
		'normal'		=> esc_html__('Normal','saoshyant-page-builder'), 
		'bold'			=> esc_html__('Bold','saoshyant-page-builder'), 
 	);	
		
	$options['font_style']= array(
		''				=>esc_html__('Default','saoshyant-page-builder'), 
		'normal'		=> esc_html__('Normal','saoshyant-page-builder'), 
		'italic'		=> esc_html__('Italic','saoshyant-page-builder'), 
		'oblique'		=> esc_html__('Oblique','saoshyant-page-builder'), 
		 
		
		
 	);	
	
	$options['border_style']= array(
	
		'solid'			=>esc_html__('Solid','saoshyant-page-builder'), 
		'dotted'		=> esc_html__('Dotted','saoshyant-page-builder'), 
		'dashed'		=> esc_html__('Dashed','saoshyant-page-builder'), 
		'double'		=> esc_html__('Double','saoshyant-page-builder'), 
		'groove'		=> esc_html__('Groove','saoshyant-page-builder'), 
		'ridge'			=> esc_html__('Ridge','saoshyant-page-builder'), 
		'inset'			=> esc_html__('Inset','saoshyant-page-builder'), 
		'outset'		=> esc_html__('Outset','saoshyant-page-builder'), 
		'none'			=> esc_html__('None','saoshyant-page-builder'), 
		'hidden'			=> esc_html__('hidden','saoshyant-page-builder'), 
 		 
		 
		
		
 	);	
	
	$options['columns']= array(
		''				=>esc_html__('Default','saoshyant-page-builder'), 
  		'1_1'				=> '1/1', 
 		'1_2'				=> '1/2', 
 		'1_3'				=> '1/3', 
 		'1_4'				=> '1/4', 
		'1_5'				=> '1/5', 
		'1_6'				=> '1/6', 
 		'2_3'				=> '2/3', 
		'3_4'				=> '3/4', 
		'2_5'				=> '2/5', 
		'3_5'				=> '3/5', 
		'4_5'				=> '4/5', 
		'5_6'				=> '5/6', 
 		'hide'				=> esc_html__('Hide','saoshyant-page-builder'), 
	);	
	
	
	$options['tablet']= array(
		''				=>esc_html__('Default','saoshyant-page-builder'), 
  		'1_1'				=> '1/1', 
 		'1_2'				=> '1/2', 
 		'1_3'				=> '1/3', 
 		'2_3'				=> '2/3', 
 		'1_4'				=> '1/4',  
		'3_4'				=> '3/4',  
 		'hide'				=> esc_html__('Hide','saoshyant-page-builder'), 
	);	
	
	$options['phone']= array(
		''				=>esc_html__('Default','saoshyant-page-builder'), 
  		'1_1'				=> '1/1', 
 		'1_2'				=> '1/2', 
		'hide'				=> esc_html__('Hide','saoshyant-page-builder'), 
	);	
 
	
	 
	 
	
	$options['post_column']= array(
   		'1'				=> '1', 
 		'2'				=> '2', 
 		'3'				=> '3', 
 		'4'				=> '4', 
		'5'				=> '5', 
		'6'				=> '6', 
 		'7'				=> '7', 
		'8'				=> '8', 
 
	);	
	$options['tablet_column']= array(
		''					=> __('Default','saoshyant-page-builder'), 
  		'1'				=> '1', 
 		'2'				=> '2', 
 		'3'				=> '2', 
 		'4'				=> '4', 
     	);
	
 	
	$options['mobile_column']= array(
		''					=> __('Default','saoshyant-page-builder'), 
  		'1'				=> '1', 
 		'2'				=> '2', 
 		'3'				=> '3', 
 		'4'				=> '4', 
 	);		
	
	$options['background_size']= array(
		''					=>esc_html__('Default','saoshyant-page-builder'), 
		'auto'				=> __('Auto','saoshyant-page-builder'), 
		'cover'				=> __('Cover','saoshyant-page-builder'), 
		'contain'			=> __('Contain','saoshyant-page-builder'),
		'custom'			=> __('Custom','saoshyant-page-builder'),
   		'5'					=> '5%', 
   		'10'				=> '10%', 
   		'15'				=> '15%', 
   		'20'				=> '20%', 
   		'25'				=> '25%', 
   		'30'				=> '30%', 
   		'33'				=> '33.33%', 
   		'35'				=> '35%', 
   		'40'				=> '40%', 
   		'45'				=> '45%',  
   		'50'				=> '50%',  
   		'55'				=> '55%',  
   		'60'				=> '60%',  
   		'65'				=> '65%',  
   		'66'				=> '66.66%',  
   		'70'				=> '70%',  
   		'75'				=> '75%',  
   		'80'				=> '80%',  
   		'85'				=> '85%',  
   		'90'				=> '90%',  
   		'95'				=> '95%',  
   		'100'				=> '100%',  
  
	);	
		
		 
	$options['imgsize']= array(
 		''		=> 'Default', 
 		'sao_mini'		=> 'sao Mini', 
 		'sao_small'		=> 'sao Small', 
 		'thumbnail'			=> 'sao Thumbnail', 
 		'sao_medium'		=> 'sao Medium', 
 		'medium'			=> 'Medium', 
		'sao_large'		=> 'sao Large', 
		'sao_big'		=> 'sao Big', 
		'large'				=> 'Main Large', 
 		'full'				=> 'Full', 
	);	
		

	$options['cssanime'] = array(
			'' 							=> __('None','saoshyant-page-builder'), 
			'fade' 						=> __('Fade','saoshyant-page-builder'), 
			'fade-up' 					=> __('Fade Up','saoshyant-page-builder'), 
			'fade-down'					=> __('Fade down','saoshyant-page-builder'), 
			'fade-left' 				=> is_rtl() ? __('Fade Right','saoshyant-page-builder'): __('Fade Left','saoshyant-page-builder'), 
			'fade-right' 				=> is_rtl() ? __('Fade Left','saoshyant-page-builder'):__('Fade Right','saoshyant-page-builder'), 
			'fade-up-right' 			=> is_rtl() ? __('Fade Up Left','saoshyant-page-builder'):__('Fade Up Right','saoshyant-page-builder'), 
			'fade-up-left' 				=> is_rtl() ? __('Fade Up Right','saoshyant-page-builder'):__('Fade Up Left','saoshyant-page-builder'), 
			'fade-down-right' 			=> is_rtl() ? __('Fade Down Left','saoshyant-page-builder'):__('Fade Down Right','saoshyant-page-builder'),
			'fade-down-left' 			=> is_rtl() ? __('Fade Down Right','saoshyant-page-builder'):__('Fade Down Left','saoshyant-page-builder'),
			'flip-up' 					=> __('Flip Up','saoshyant-page-builder'),
			'flip-down'					=> __('Flip Down','saoshyant-page-builder'),
			'flip-left'					=> is_rtl() ? __('Flip Right','saoshyant-page-builder'):__('Flip Left','saoshyant-page-builder'),
			'flip-right'				=> is_rtl() ? __('Flip Left','saoshyant-page-builder'):__('Flip Right','saoshyant-page-builder'),
			'slide-up' 					=> __('Slide Up','saoshyant-page-builder'),
			'slide-down'				=> __('Slide Down','saoshyant-page-builder'),
			'slide-left'				=> is_rtl() ? __('Slide Right','saoshyant-page-builder'):__('Slide Left','saoshyant-page-builder'),
			'slide-right'				=> is_rtl() ? __('Slide Left','saoshyant-page-builder'):__('Slide Right','saoshyant-page-builder'),	
			'zoom-in'					=> __('Zoom In','saoshyant-page-builder'),
			'zoom-in-up'				=> __('Zoom In Up','saoshyant-page-builder'),
			'zoom-in-down'				=> __('Zoom In Down','saoshyant-page-builder'),
			'zoom-in-left'				=> is_rtl() ? __('Zoom In Right','saoshyant-page-builder'): __('Zoom In Left','saoshyant-page-builder'),
			'zoom-in-right'				=> is_rtl() ? __('Zoom In Left','saoshyant-page-builder'):__('Zoom In Right','saoshyant-page-builder'), 
			'zoom-out'					=> __('Zoom Out','saoshyant-page-builder'),
			'zoom-out-up'				=> __('Zoom Out Up','saoshyant-page-builder'),
			'zoom-out-down'				=> __('Zoom Out Down','saoshyant-page-builder'),
			'zoom-out-left'				=> is_rtl() ? __('Zoom Out Right','saoshyant-page-builder'):__('Zoom Out Left','saoshyant-page-builder'),
			'zoom-out-right'			=> is_rtl() ? __('Zoom Out Left','saoshyant-page-builder'):__('Zoom Out Right','saoshyant-page-builder'), 
			
      			  
  		); 		

	$options['arrow_style'] = array(
 			'back-square'				=> esc_html__('Black Square','saoshyant-page-builder'),  
			'back-gray-square'			=> esc_html__('Black Gray Square','saoshyant-page-builder'),  
			'back-glass-square'			=> esc_html__('Black Glass Square','saoshyant-page-builder'),  
			'light-square'				=> esc_html__('Light Square','saoshyant-page-builder'),  
			'light-gray-square'			=> esc_html__('Light Gray Square','saoshyant-page-builder'),  
			'light-glass-square'		=> esc_html__('Light Glass Square','saoshyant-page-builder'),  
			'back-circle'				=> esc_html__('Black Circle','saoshyant-page-builder'),  
			'back-gray-circle'			=> esc_html__('Black Gray Circle','saoshyant-page-builder'),  
			'back-glass-circle'			=> esc_html__('Black Glass Circle','saoshyant-page-builder'),  
			'light-circle'				=> esc_html__('Light Circle','saoshyant-page-builder'),  
			'light-gray-circle'			=> esc_html__('Light Gray Circle','saoshyant-page-builder'),  
			'light-glass-circle'		=> esc_html__('Light Glass Circle','saoshyant-page-builder'),  
   		); 		
			
			
	$options['arrow_size'] = array(
 			'small'				=> esc_html__('Small','saoshyant-page-builder'),  
			'medium'			=> esc_html__('Medium','saoshyant-page-builder'),   
			'large'			=> esc_html__('Large','saoshyant-page-builder'),   
	); 		
			
	$args = array(
			'sort_order' => 'asc',
			'sort_column' => 'post_title',
			'hierarchical' => 1,
 			'child_of' => 0,
			'parent' => -1,
			'post_type' => 'page',
			'post_status' => 'publish'
		); 		
		
 
 
 
	$args = array(
			'sort_order' => 'asc',
			'sort_column' => 'post_title',
			'hierarchical' => 1,
 			'child_of' => 0,
			'parent' => -1,
			'post_type' => 'page',
			'post_status' => 'publish'
		); 		
		
	$options['item_col']= array(
  		'1'				=> '1', 
		'2'				=> '2', 
		'3'				=> '3', 
		'4'				=> '4', 
		'5'				=> '5', 
		'6'				=> '6', 
 		'7'				=> '7', 
		'8'				=> '8', 
		'9'				=> '9', 
		'10'			=> '10', 
		'11'			=> '11', 
		'12'			=> '12', 		
	); 	
 	
	$options['opacity']= array(
		''					=>esc_html__('Default','saoshyant-page-builder'), 
	
   		'0.1'				=> '0.1',  
   		'0.2'				=> '0.2',   
  		'0.3'				=> '0.3',  
   		'0.4'				=> '0.4',  
   		'0.5'				=> '0.5',  
   		'0.6'				=> '0.6',  
   		'0.7'				=> '0.7',  
   		'0.8'				=> '0.8',  
   		'0.9'				=> '0.9',  
   		'1.0'				=> '1.0',  
 	); 	
 		
	
	$options['item_slider']= array(
  		'1'				=> '1', 
		'2'				=> '2', 
		'3'				=> '3', 
		'4'				=> '4', 
		'5'				=> '5', 
		'6'				=> '6', 
 		'7'				=> '7', 
		'8'				=> '8',  
	); 	
 	$options['button'] = array(
 			'style-1'					=> esc_html__('Style 1','saoshyant-page-builder'),  
  			'style-2'					=> esc_html__('Style 2:Top Border inset','saoshyant-page-builder'),  
 			'style-3'					=> esc_html__('Style 3:Bottom Border inset','saoshyant-page-builder'),  
 			'style-4'					=> is_rtl()?  __('Style 5:Right Border inset','saoshyant-page-builder'): __('Style 4:Left Border inset','saoshyant-page-builder'),  
 			'style-5'					=> is_rtl()?   __('Style 4:Left Border inset','saoshyant-page-builder'): __('Style 5:Right Border inset','saoshyant-page-builder'),  
 			'style-6'					=> esc_html__('Style 6:Icon Background color','saoshyant-page-builder'),   
 			'style-7'					=> esc_html__('Style 7:none boxed','saoshyant-page-builder'),   
 	); 	
	
 	$options['button_style_2'] = array(
 			'style-1'					=> esc_html__('Style 1','saoshyant-page-builder'),  
  			'style-2'					=> esc_html__('Style 2:Top Border inset','saoshyant-page-builder'),  
 			'style-3'					=> esc_html__('Style 3:Bottom Border inset','saoshyant-page-builder'),  
 			'style-4'					=> is_rtl()?  __('Style 5:Right Border inset','saoshyant-page-builder'): __('Style 4:Left Border inset','saoshyant-page-builder'),  
 			'style-5'					=> is_rtl()?   __('Style 4:Left Border inset','saoshyant-page-builder'): __('Style 5:Right Border inset','saoshyant-page-builder'),  
  			'style-7'					=> esc_html__('Style 7:none boxed','saoshyant-page-builder'),   
 	); 	
	
 
  
		$options_post = array();
		$options_post_obj =get_pages($args); 
 
		foreach ($options_post_obj as $rezapost) {
			$options_post[$rezapost->ID] = $rezapost->post_title;
		}		
	$options['page'] = $options_post;
  	return $options[$value];
}	
 }
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Multi Array Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
 if ( !function_exists ( "sao_multi_array_options" )){
function sao_multi_array_options($value) {


	$options['margin_horizontal'] = array( 
			array( 
				"name"			=> esc_html__('Top','saoshyant-page-builder'),			
  				"id"			=> "top",
				"type"			=> "number",
 			), 
			array( 
				"name"			=> esc_html__('Bottom','saoshyant-page-builder'),
    				"id"			=> "bottom",
 				"type"			=> "number",
 			), 
			array( 
 				"name"			=> 	esc_html__('Unit','saoshyant-page-builder'),
 				"id"			=> "unit",
  				"type"			=> "select",
				"options"		=>  sao_array_options('unit'),
 			),
  	);
	
	$options['margin'] = array( 
			array( 
				"name"			=> esc_html__('Top','saoshyant-page-builder'),			
  				"id"			=> "top",
				"type"			=> "number",
 			),
			array( 
				"name"			=> is_rtl()? __('Left','saoshyant-page-builder'):__('Right','saoshyant-page-builder'),  
 				"id"			=> "right",
 				"type"			=> "number",
 			),	
			array( 
				"name"			=> esc_html__('Bottom','saoshyant-page-builder'),
				"id"			=> "bottom",
 				"type"			=> "number",
 			),
			array( 
				"name"			=> is_rtl()? __('Right','saoshyant-page-builder'): __('Left','saoshyant-page-builder'),
  				"id"			=> "left",
 				"type"			=> "number",
 			),	
			array( 
 				"name"			=> 	esc_html__('Unit','saoshyant-page-builder'),
 				"id"			=> "unit",
  				"type"			=> "select",
				"options"		=>  sao_array_options('unit'),
 			),
  	);
	
	
	$options['padding_mini'] = array( 
			array( 
				"name"			=> esc_html__('Top and Bottom','saoshyant-page-builder'),			
  				"id"			=> "top",
				"type"			=> "number",
 			),
			array( 
				"name"			=>  __('Left and Right','saoshyant-page-builder'),  
 				"id"			=> "right",
 				"type"			=> "number",
 			),	
						array( 
 				"name"			=> 	esc_html__('Unit','saoshyant-page-builder'),
 				"id"			=> "unit",
  				"type"			=> "select",
				"options"		=>  sao_array_options('unit'),
 			),
		 
  	);
		
	
 	$options['border_mini'] = array( 
	 
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
  		);
	
			 
	
 	$options['border_2'] = array( 
	 
			array( 
				"name"			=>  esc_html__('Size','saoshyant-page-builder'),  
  				"id"			=> "size",
 				"type"			=> "number",
 			),
			array( 
   				"id"			=> "position",
				"type"			=> "select",
				"options"		=> array(
 					"round"			=>	esc_html__('All Round','saoshyant-page-builder'),  
					"top"			=>	esc_html__('Top','saoshyant-page-builder'),  
					"right"			=>	is_rtl()?__('Right','saoshyant-page-builder'):__('Right','saoshyant-page-builder'),  
					"bottom"		=>	esc_html__('Bottom','saoshyant-page-builder'),  
					"left"			=>	is_rtl()?__('Right','saoshyant-page-builder'):__('Right','saoshyant-page-builder'),   
   					"top-bottom"	=>	esc_html__('Top And Bottom','saoshyant-page-builder'), 
 				),
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
  		); 	
	
	$options['border'] = array( 
			array( 
				"name"			=> esc_html__('Top','saoshyant-page-builder'),			
  				"id"			=> "top",
				"type"			=> "number",
 			),
			array( 
				"name"			=> is_rtl()?__('Left','saoshyant-page-builder'):__('Right','saoshyant-page-builder'),
 				"id"			=> "right",
 				"type"			=> "number",
 			),	
			array( 
				"name"			=> esc_html__('Bottom','saoshyant-page-builder'),
    				"id"			=> "bottom",
 				"type"			=> "number",
 			),
			array( 
				"name"			=> is_rtl()?__('Right','saoshyant-page-builder'):__('Left','saoshyant-page-builder'),
  				"id"			=> "left",
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
  		); 
		

		$options['background2'] =array(
			array(
						"name"		=>  esc_html__('First Color','saoshyant-page-builder'),
						"id"		=> "first",
						"type"		=> "color_rgba",
  					),
					array(
						"name"		=>  esc_html__('Second Color','saoshyant-page-builder'),
						"id"		=> "second",
						"type"		=> "color_rgba",
  					),	
					array(
						"name"		=>  esc_html__('Orientation','saoshyant-page-builder'),
						"id"		=> "orientation",
						"type"		=> "select",
						"options"	=> array(
							"horizontal"		=>  esc_html__('horizontal  →','saoshyant-page-builder'),
							"vertical"			=>  esc_html__('vertical  ↓','saoshyant-page-builder'),
							"diagonal"			=>  esc_html__('diagonal  ↘','saoshyant-page-builder'),
							"diagonal-bottom"	=>  esc_html__('diagonal  ↗','saoshyant-page-builder'),
							"radial"			=>  esc_html__('radial  ○','saoshyant-page-builder'),

  						),
				),
	);						
							
		$options['background_style'] = array( 
			array( 
				"name"			=> esc_html__('Backgroud Style','saoshyant-page-builder'),			
  				"id"			=> "style",
				"type"			=> "select",
				"options"			=> array(
							"style-1"	=>  esc_html__('Style 1','saoshyant-page-builder'),
							"style-2"	=>  esc_html__('Style 2','saoshyant-page-builder'),
							"style-3"	=>  esc_html__('Style 3','saoshyant-page-builder'),
							"style-4"	=>  esc_html__('Style 4','saoshyant-page-builder'),
							"style-5"	=>  esc_html__('Style 5','saoshyant-page-builder'),
							"style-6"	=>  esc_html__('Style 6','saoshyant-page-builder'),
							"style-7"	=>  esc_html__('Style 7','saoshyant-page-builder'),
							"style-8"	=>  esc_html__('Style 8','saoshyant-page-builder'),
							"style-9"	=>  esc_html__('Style 9','saoshyant-page-builder'),
							"style-10"	=>  esc_html__('Style 10','saoshyant-page-builder'),
							"style-11"	=>  esc_html__('Style 11','saoshyant-page-builder'),
							"style-12"	=>  esc_html__('Style 12','saoshyant-page-builder'),
							"style-13"	=>  esc_html__('Style 13','saoshyant-page-builder'),
							"style-14"	=>  esc_html__('Style 14','saoshyant-page-builder'),
							"style-15"	=>  esc_html__('Style 15','saoshyant-page-builder'),
							"style-16"	=>  esc_html__('Style 16','saoshyant-page-builder'),
							"style-17"	=>  esc_html__('Style 17','saoshyant-page-builder'),
							"style-18"	=>  esc_html__('Style 18','saoshyant-page-builder'),
							"style-19"	=>  esc_html__('Style 19','saoshyant-page-builder'),
							"style-20"	=>  esc_html__('Style 20','saoshyant-page-builder'),
					),
 			),

			array( 
				"name"			=> esc_html__('Backgroud Color','saoshyant-page-builder'),
 				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),			
			array( 
				"name"			=> esc_html__('Backgroud Height','saoshyant-page-builder'),
				"id"			=> "height",
 				"type"			=> "select",
				"options"		=> array(
					''			=> __('Default','saoshyant-page-builder'),
					"50" 			=> "50px",
					"100"			=> "100px",
					"150" 			=> "150px",
					"200" 			=> "200px",
					"250" 			=> "250px",
					"300" 			=> "300px",
 				),
			),
 		); 		
	
	$options['shadow_mini'] = array( 
 
			array( 
				"name"			=> esc_html__('Blur','saoshyant-page-builder'),
				"id"			=> "blur",
 				"type"			=> "number",
 			), 
				 
			array( 
				"name"			=>  esc_html__('Spread','saoshyant-page-builder'),
  				"id"			=> "spread",
 				"type"			=> "number",
 			),	
			array( 
   				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),				
			array( 
  				"id"			=> "position",
  				"type"			=> "select",
				"options"		=>  array( 
   					""			=> esc_html__('Outline','saoshyant-page-builder'),
 					"inset"		=> esc_html__('Inset','saoshyant-page-builder'),
 				),
 			),
	);	
	
	$options['shadow_outline'] = array( 
 
			array( 
				"name"			=> esc_html__('Blur','saoshyant-page-builder'),
				"id"			=> "blur",
 				"type"			=> "number",
 			), 
				 
			array( 
				"name"			=>  esc_html__('Spread','saoshyant-page-builder'),
  				"id"			=> "spread",
 				"type"			=> "number",
 			),	
			array( 
   				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),				
	 
	);
	
	$options['shadow_inset'] = array( 
 
			array( 
				"name"			=> esc_html__('Blur','saoshyant-page-builder'),
				"id"			=> "blur",
 				"type"			=> "number",
 			), 
				 
			array( 
				"name"			=>  esc_html__('Spread','saoshyant-page-builder'),
  				"id"			=> "spread",
 				"type"			=> "number",
 			),	
			array( 
   				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),				
	 
	);			
	$options['shadow'] = array( 
			array( 
				"name"			=> esc_html__('Horizontal','saoshyant-page-builder'),			
  				"id"			=> "horizontal",
				"type"			=> "number",
 			),
			array( 
				"name"			=> esc_html__('Vertical','saoshyant-page-builder'),
 				"id"			=> "vertical",
 				"type"			=> "number",
 			),	
			array( 
				"name"			=> esc_html__('Blur','saoshyant-page-builder'),
				"id"			=> "blur",
 				"type"			=> "number",
 			),
			array( 
				"name"			=>  esc_html__('Spread','saoshyant-page-builder'),
  				"id"			=> "spread",
 				"type"			=> "number",
 			),	
			array( 
 				"name"			=> 	esc_html__('Unit','saoshyant-page-builder'),
 				"id"			=> "unit",
  				"type"			=> "select",
				"options"		=>  sao_array_options('unit'),
 			),	
			array( 
   				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),				
			array( 
  				"id"			=> "position",
  				"type"			=> "select",
				"options"		=>  array( 
   					""			=> esc_html__('Outline','saoshyant-page-builder'),
 					"inset"		=> esc_html__('Inset','saoshyant-page-builder'),
 				),
 			),
			);
 
 		$options['text_shadow'] = array( 
			array( 
				"name"			=> esc_html__('Horizontal','saoshyant-page-builder'),			
  				"id"			=> "horizontal",
				"type"			=> "number",
 			),
			array( 
				"name"			=> esc_html__('Vertical','saoshyant-page-builder'),
 				"id"			=> "vertical",
 				"type"			=> "number",
 			),	
			array( 
				"name"			=> esc_html__('Blur','saoshyant-page-builder'),
				"id"			=> "blur",
 				"type"			=> "number",
 			),
 		 
			array( 
 				"name"			=> 	esc_html__('Unit','saoshyant-page-builder'),
 				"id"			=> "unit",
  				"type"			=> "select",
				"options"		=>  sao_array_options('unit'),
 			),	
			array( 
   				"id"			=> "color",
 				"type"			=> "color_rgba",
 			),				
			 
			);
 
 
 
 
		$options['radius'] = array( 
			array( 
				"name"			=> is_rtl()? esc_html__('Top Right','saoshyant-page-builder'): esc_html__('Top Left','saoshyant-page-builder'),			
  				"id"			=> "top_left",
				"type"			=> "number",
 			),
			array( 
				"name"			=>  is_rtl()?  esc_html__('Top Left','saoshyant-page-builder'): esc_html__('Top Right','saoshyant-page-builder'),
 				"id"			=> "top_right",
 				"type"			=> "number",
 			),	
			array( 
				"name"			=> is_rtl()?   esc_html__('Bottom Left','saoshyant-page-builder'):esc_html__('Bottom Right','saoshyant-page-builder'),
				"id"			=> "bottom_right",
 				"type"			=> "number",
 			),
			array( 
				"name"			=>  is_rtl()?  esc_html__('Bottom Right','saoshyant-page-builder'):esc_html__('Bottom Left','saoshyant-page-builder'),
  				"id"			=> "bottom_left",
 				"type"			=> "number",
 			),	
			array( 
 				"name"			=> 	esc_html__('Unit','saoshyant-page-builder'),
 				"id"			=> "unit",
  				"type"			=> "select",
				"options"		=>  sao_array_options('unit'),
 			),	
 
 		); 
 
  
 		$options['radius_mini'] =   array( 
			array( 
				"name"			=> __('Size','saoshyant-page-builder'),			
  				"id"			=> "size",
				"type"			=> "number",
 			),
			array( 
 				"name"			=> 	esc_html__('Unit','saoshyant-page-builder'),
 				"id"			=> "unit",
  				"type"			=> "select",
				"options"		=>  sao_array_options('unit'),
 			),	
			array( 
  				"id"			=> "position",
  				"type"			=> "select",
				"options"		=>  sao_array_options('radius_position'),
 			),	
	 
		); 	
	
 
		$options['meta'] = array( 
			array( 
				"name"			=> esc_html__('Category','saoshyant-page-builder'),			
  				"id"			=> "meta_category",
				"type"			=> "checkbox",
 			),
			array( 
				"name"			=> esc_html__('Author','saoshyant-page-builder'),
 				"id"			=> "meta_author",
 				"type"			=> "checkbox",
 			),	
			array( 
				"name"			=> esc_html__('Date','saoshyant-page-builder'),
				"id"			=> "meta_date",
 				"type"			=> "checkbox",
 			), 
			array( 
				"name"			=>  esc_html__('Comments','saoshyant-page-builder'),
  				"id"			=> "meta_comments",
 				"type"			=> "checkbox",
 			),	
			 
 		); 
		
		$options['typo'] = array( 
	 
			array( 
				"name"			=> esc_html__('Font Size','saoshyant-page-builder'),
 				"id"			=> "font_size",
 				"type"			=> "number",
 			),	
			array( 
				"name"			=> esc_html__('Font Weight','saoshyant-page-builder'),
				"id"			=> "font_weight",
 				"type"			=> "select",
				"options"		=>  array( 
					""				=> esc_html__('Default','saoshyant-page-builder'),
					"300"		=> esc_html__('Light','saoshyant-page-builder'),
					"normal"		=> esc_html__('Normal','saoshyant-page-builder'),
					"bold"			=> esc_html__('Bold','saoshyant-page-builder'),
					"900"			=> esc_html__('Extra-Bold','saoshyant-page-builder'),
					) ,
 			), 
			
 			array( 
				"name"			=> esc_html__('Transform','saoshyant-page-builder'),
				"id"			=> "text_transform",
 				"type"			=> "select",
				"options"		=>  array( 
						""					=> __('None','saoshyant-page-builder'),
 						"uppercase"			=> 	__('Uppercase','saoshyant-page-builder'),
 						"lowercase"			=> __('Lowercase','saoshyant-page-builder'),
  						"capitalize"			=> __('Capitalize','saoshyant-page-builder'),
 				) ,
 				) ,
 			);			
			
						
			$options['typo_1'] = array( 
				 
						array( 
							"name"			=> esc_html__('Size','saoshyant-page-builder'),
							"id"			=> "font_size",
							"type"			=> "number",
							"placeholder"			=> esc_html__('Pexel','saoshyant-page-builder')
							 
						),	
			 );
		 
			  
 	
return $options[$value];
}	
 }
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Image Hover
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 
 if ( !function_exists ( "sao_array_image_hover" )){
function sao_array_image_hover() {
	return array( 
 	'' 									=> __('Fade','saoshyant-page-builder'), 
 	'imghvr-slide-up'					=> __('Slide Up','saoshyant-page-builder'), 
	'imghvr-slide-down'					=> __('Slide Down','saoshyant-page-builder'), 
	'imghvr-slide-left'					=>	is_rtl()? __('Slide Right','saoshyant-page-builder'):__('Slide Left','saoshyant-page-builder'), 
	'imghvr-slide-right'				=> is_rtl()?__('Slide Left','saoshyant-page-builder'):__('Slide Right','saoshyant-page-builder'), 
	'imghvr-flip-vert'					=> __('Flip Vert','saoshyant-page-builder'),  	
 	'imghvr-flip-horiz'					=> __('Flip Horiz','saoshyant-page-builder'),  	
	'imghvr-flip-diag-1'				=> __('Flip Diag 1','saoshyant-page-builder'),  	
	'imghvr-flip-diag-2'				=> __('Flip Diag 2','saoshyant-page-builder'),  	 	 
	'imghvr-zoom-in'					=> __('Zoom in','saoshyant-page-builder'), 
	'imghvr-zoom-out'					=> __('Zoom out','saoshyant-page-builder'),  
 	'imghvr-layla'						=> __('Layla','saoshyant-page-builder'), 
	'imghvr-oscar'						=> __('Oscar','saoshyant-page-builder'), 
	'imghvr-bubba'						=> __('Bubba','saoshyant-page-builder'), 
	'imghvr-chico'						=> __('Chico','saoshyant-page-builder'), 
 	'imghvr-selena'						=> __('Selena','saoshyant-page-builder'), 
	'imghvr-ming'						=> __('Ming','saoshyant-page-builder'), 
	 
    	);
}
 }
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Array Icon Hover
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 

 if ( !function_exists ( "sao_array_icon_hover" )){
function sao_array_icon_hover() {
	return array( 
		'' 						=> __('Fade','saoshyant-page-builder'), 
	'iconhvr-slide-up'					=> __('Slide Up','saoshyant-page-builder'), 
	'iconhvr-slide-down'					=> __('Slide Down','saoshyant-page-builder'), 
	'iconhvr-slide-left'					=> is_rtl()?__('Slide Right','saoshyant-page-builder'):__('Slide Left','saoshyant-page-builder'), 
	'iconhvr-slide-right'					=> is_rtl()?__('Slide Left','saoshyant-page-builder'):__('Slide Right','saoshyant-page-builder'), 
	'iconhvr-flip-vert'					=> __('Flip Vert','saoshyant-page-builder'),  	
 	'iconhvr-flip-horiz'					=> __('Flip Horiz','saoshyant-page-builder'),  	
	'iconhvr-flip-diag-1'				=> __('Flip Diag 1','saoshyant-page-builder'),  	
	'iconhvr-flip-diag-2'				=> __('Flip Diag 2','saoshyant-page-builder'),  	  
	'iconhvr-zoom-in'					=> __('Zoom in','saoshyant-page-builder'), 
	'iconhvr-zoom-out'					=> __('Zoom out','saoshyant-page-builder'),   
 
  	);
}
 }
  if ( !function_exists ( "sao_array_button_hover" )){
function sao_array_button_hover() {
	return array(
	'btnhvr-fade' 						=> __('Fade','saoshyant-page-builder'), 
	'btnhvr-slide-up'					=> __('Slide Up','saoshyant-page-builder'), 
	'btnhvr-slide-down'					=> __('Slide Down','saoshyant-page-builder'), 
	'btnhvr-slide-left'					=> is_rtl()?__('Slide Right','saoshyant-page-builder'):__('Slide Left','saoshyant-page-builder'), 
	'btnhvr-slide-right'				=> is_rtl()?__('Slide Left','saoshyant-page-builder'):__('Slide Right','saoshyant-page-builder'), 
	'btnhvr-flip-vert'					=> __('Flip Vert','saoshyant-page-builder'),  	
 	'btnhvr-flip-horiz'					=> __('Flip Horiz','saoshyant-page-builder'),  	
	'btnhvr-flip-diag-1'				=> __('Flip Diag 1','saoshyant-page-builder'),  	
	'btnhvr-flip-diag-2'				=> __('Flip Diag 2','saoshyant-page-builder'),  	  
	'btnhvr-zoom-in'					=> __('Zoom in','saoshyant-page-builder'), 
	'btnhvr-zoom-out'					=> __('Zoom out','saoshyant-page-builder'),  
 
  	);
}
 }

?>