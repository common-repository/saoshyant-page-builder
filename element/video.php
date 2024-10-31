<?php
if(is_admin()){
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Element Video
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_element_item_video" )){
add_filter('sao_element_item', 'sao_element_item_video');
function sao_element_item_video( $element ) {
 	
 	$element[]= array(
 		'name'			=> 	__('Video','saoshyant-page-builder'),
 		'id'			=> 'video',
		'img'			=>  SAOPAGE_DIR.'assets/image/video.jpg'
  	); 
  
	return $element;
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																   Video Options
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_video_options" )){
add_filter('sao_element_options_video', 'sao_video_options');
function sao_video_options( $option ) {
 $video=array();
 	$video['mp4']= __('Mp4','saoshyant-page-builder');
 	$video['youtube']= __('YouTube','saoshyant-page-builder');
 	if(is_rtl()){
 	$video['aparat']= __('Aparat','saoshyant-page-builder');
	}
 
	$option[]= array( 
		"name"			=> __('Video Type','saoshyant-page-builder'),
 		"id"			=> "video_type",
  		"type"			=> "select",
		"options"		=> $video   				
		 
	);
   
	 
	$option[]= array( 
		"name"			=> __('Video Url','saoshyant-page-builder'),
 		"id"			=> "video_url",
 		"type"			=> "text",
  	);		


 	
	$option[]= array( 
		"name"			=> __('Video Width','saoshyant-page-builder'),
 		"id"			=> "width",
 		"group"			=>  __('Layout','saoshyant-page-builder'),
  		"default"		=>  '',
		"type"			=> "select",
   		"options"		=>  array(
   			"100" 	=>	"100%",
			"90" 	=>	"90%", 
			"80" 	=>	"80%", 
			"70" 	=>	"70%", 
			"60" 	=>	"60%", 
			"50" 	=>	"50%", 
			"40" 	=>	"40%", 
			"30" 	=>	"30%", 
			"20" 	=>	"20%", 
			"10" 	=>	"10%", 
 		)					
   	); 	 
  
  
  
	$option[]= array( 
		"name"			=> __('Video Ratio','saoshyant-page-builder'),
 		"id"			=> "ratio",
 		"group"			=>  __('Layout','saoshyant-page-builder'),
  		"default"		=>  'sao-ratio-auto',
 		"type"			=> "select",
   		"options"		=>  sao_array_options('video_ratio'),						
 		
  	); 	   
	
 
	$option[]= array( 
		"name"			=> __('Alignment','saoshyant-page-builder'),
 		"id"			=> "alignment",
 		"group"			=>  __('Layout','saoshyant-page-builder'),
		"default"		=>  'center',
		"desc"			=>  __('Default "Center"','saoshyant-page-builder'),
		"type"			=> "select",
		"options"		=>  sao_array_options('align')				
		 
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
 
																   Video Config
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_video_config" )){
add_filter('sao_builder_video', 'sao_video_config');
function sao_video_config( $args ) {
 
	$option = $args['option'];
	$key = $args['key'];
	$output='';
	$css ='';
	if(sao_element_show($option)=='show'){
 	global $sao_image_style;
	$sao_image_style++;	
	ob_start(); 
	
 	$custom_class = !empty( $option['custom_class']) ? $option['custom_class'] : '';			 
   
	$crop = sao_image_ratio($option);
  	$classes=array(
		'sao-el-'.esc_attr($key), 
		sao_element_show($option,true),
		$custom_class,
		'sao-video',
		$crop,
  		'sao-aw',
  
	);
	
		
	$video_type = !empty( $option[ 'video_type'] ) ? $option[ 'video_type']: 'youtube';
	$video_url = !empty( $option[ 'video_url'] ) ? $option[ 'video_url']  : '';
  
	
	$class_attr = array();
	?>
 
   	 <aside  <?php sao_el_id($option);?>  class="<?php echo esc_attr(join( ' ', $classes ));?>"  <?php sao_el_cssanime($option);?> >
   
     <div class="sao-video-warp">
  
  
    
  	<?php
    if( $video_type == 'aparat'){
  	 	$id = sao_get_aparat_id($video_url);
 		?>
	     <div class="sao-image-crop sao-video-apart">
		 <iframe src="https://www.aparat.com/video/video/embed/videohash/<?php echo esc_attr($id);?>/vt/frame" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
		 </div>
		<?php
	} 
	elseif( $video_type == 'youtube'){
  	 	$id = sao_get_youtube_id($video_url);
		?>
	    <div class="sao-image-crop sao-video-youtube">
		 <iframe width="640" height="360" src="https://www.youtube.com/embed/<?php echo esc_attr($id);?>"   allowfullscreen></iframe>
		 </div>
	<?php
    }else{?>
	    <div class="sao-image-crop sao-video-mp4">
		 <video width="640" height="360"  controls>
		 <source src="<?php echo esc_url($video_url);?>" type="video/mp4" title="mp4">
		 </video>
		 </div>
		 
	<?php } ?>
	 
 
 	</div>
	</aside>
 	
  
  
	<?php
	$item = '.sao-el-'.$key.''; 
	$item_css='';
 	$item_css.= sao_var_align('ag',$option,'alignment','center') ;
 
 	$item_css.= sao_var_unit('vid-wt',$option,'width','%');	 

 //	$item_css.= sao_element_padding($option);
	
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