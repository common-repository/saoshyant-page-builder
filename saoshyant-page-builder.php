<?php
/*
Plugin Name: Saoshyant Page Builder
Description: Drag and drop page builder for WordPress 
Author: Saoshyant.1994
Version: 3.8

*/ 
/*********************************************************************************************
Registers Custom Slider Post Type
*********************************************************************************************///
 
if( !defined('SAOPAGE_PATH') ){
	define( 'SAOPAGE_PATH', plugin_dir_path(__FILE__) );
}
if( !defined('SAOPAGE_DIR') ){
	define( 'SAOPAGE_DIR', plugin_dir_url(__FILE__) );
}	
if( !defined('SAOPAGE_FILE') ){
	define( 'SAOPAGE_FILE', dirname( __FILE__ ) );
}	
 if ( !function_exists ( "sao_global_script" )){
function sao_global_script()
{
	global $sao_aos_style,
		$sao_boxed_style,
		$sao_button_style,
		$sao_counter_style,
		$sao_fonticon_style,
		$sao_icon_style,
		$sao_image_style,
		$sao_imagehover_style,
		$sao_lightbox_style,
		$sao_lightslider_style,
		$sao_mini_style,
		$sao_tabs_style,
		$sao_multi_style,
		$sao_caption_effect;
		 
	
	
	
	
	global $sao_aos_script,
		$sao_boxed_script,
		$sao_counter_script,
		$sao_hexagon_script,
		$sao_circle_script,
		$sao_lightbox_script,
		$sao_lightslider_script,
		$sao_slide_script,
		$sao_parlx_script,
		$sao_sticky_script,
		$sao_zoom_script,
		$sao_tabs_script;

}
add_action( 'init', 'sao_global_script' );
}





 if ( !function_exists ( "sao_builder_post_lang" )){
add_action('init', 'sao_builder_post_lang');

function sao_builder_post_lang() {
    $path = dirname(plugin_basename( __FILE__ )) . '/languages/';
    $loaded = load_plugin_textdomain( 'saoshyant-page-builder', false, $path);
 
} 
}
 
global $pagenow;
if ( is_admin()  ) {
	include_once SAOPAGE_PATH . 'options/builder-options-section.php';
	include_once SAOPAGE_PATH . 'options/builder-options-column.php';
	 include_once SAOPAGE_PATH . 'framework/builder-section.php';
	include_once SAOPAGE_PATH . 'framework/builder-column.php';
	include_once SAOPAGE_PATH . 'framework/builder-template.php';
	include_once SAOPAGE_PATH . 'framework/builder-element.php'; 
	include_once SAOPAGE_PATH . 'framework/builder-options-functions.php';
	include_once SAOPAGE_PATH . 'options/builder-options-element.php';
	include_once SAOPAGE_PATH . 'framework/builder.php';
 	include_once SAOPAGE_PATH . 'options/fonts/fa-icon.php';
 	include_once SAOPAGE_PATH . 'options/fonts/flaticon.php';
 	include_once SAOPAGE_PATH . 'options/fonts/flaticon_thin.php';
 	include_once SAOPAGE_PATH . 'options/fonts/metrizeicon.php';
 	include_once SAOPAGE_PATH . 'options/fonts/typcn.php';
 
 } 	 
	include_once SAOPAGE_PATH. 'options/builder-array.php';
 
include_once SAOPAGE_PATH . 'framework/builder-code.php';
include_once SAOPAGE_PATH . 'inc/post-functions.php';

include_once SAOPAGE_PATH . 'inc/section-config.php';
include_once SAOPAGE_PATH . 'inc/column-config.php';
include_once SAOPAGE_PATH . 'inc/element-config.php';
 include_once SAOPAGE_PATH . 'custom-css/captioneffect.php';
include_once SAOPAGE_PATH . 'custom-css/element-css.php';
include_once SAOPAGE_PATH . 'custom-css/var-element-css.php';
 //include_once SAOPAGE_PATH . 'inc/minify.php';
  
//Element

include_once SAOPAGE_PATH . 'element/text.php';

include_once SAOPAGE_PATH . 'element/text_block.php';
include_once SAOPAGE_PATH . 'element/heading.php';
include_once SAOPAGE_PATH . 'element/space.php';
include_once SAOPAGE_PATH . 'element/divider.php';
include_once SAOPAGE_PATH . 'element/divider_vertical.php';

 include_once SAOPAGE_PATH . 'element/button.php';

include_once SAOPAGE_PATH . 'element/icon.php';
include_once SAOPAGE_PATH . 'element/icon_text.php'; 
include_once SAOPAGE_PATH . 'element/icon_text_2.php';
 include_once SAOPAGE_PATH . 'element/icon_text_3.php';
 
include_once SAOPAGE_PATH . 'element/multi_icon_text.php';
include_once SAOPAGE_PATH . 'element/multi_icon_text_2.php';
include_once SAOPAGE_PATH . 'element/multi_icon_text_3.php';

include_once SAOPAGE_PATH . 'element/text_list.php';
include_once SAOPAGE_PATH . 'element/accordion.php';
include_once SAOPAGE_PATH . 'element/tabs.php';
 
include_once SAOPAGE_PATH . 'element/image.php';
include_once SAOPAGE_PATH . 'element/image_text.php';
include_once SAOPAGE_PATH . 'element/image_text_2.php';
include_once SAOPAGE_PATH . 'element/multi_image_text.php';
include_once SAOPAGE_PATH . 'element/multi_image_text_2.php';
include_once SAOPAGE_PATH . 'element/video.php';

include_once SAOPAGE_PATH . 'element/image_gallery.php';
include_once SAOPAGE_PATH . 'element/image_gallery_slider.php';
include_once SAOPAGE_PATH . 'element/image_gallery_carousel.php';

 include_once SAOPAGE_PATH . 'element/progress_bar.php';
include_once SAOPAGE_PATH . 'element/pie_chart.php';
include_once SAOPAGE_PATH . 'element/count_to.php';
 

 
include_once SAOPAGE_PATH . 'element/widgets.php';
include_once SAOPAGE_PATH . 'element/html.php';
include_once SAOPAGE_PATH . 'element/shortcodes.php';
 
if ( !function_exists ( "sao_builder_meta" )){
function sao_builder_meta(){}
}
 
 /********************************************************************
Page Builder Config
*********************************************************************/


function sao_head_before() {
	global $sao_page_builder;
	$sao_page_builder='not_page';
	
}
add_action('wp_head', 'sao_head_before',1);

function sao_head_after() {
	global $sao_page_builder;
	$sao_page_builder='has_page';
	
}
add_action('wp_head', 'sao_head_after',999999999999999);
 

if ( !function_exists ( "sao_page_builder_config" )){
add_filter('the_content','sao_page_builder_config');
function sao_page_builder_config($content){
	global $post,$sao_page_builder;
	$sao_show_page_builder = get_post_meta($post->ID, 'sao_show_page_builder',false);
 	if(!empty($sao_show_page_builder) && $sao_page_builder=='has_page'){
		return  sao_builder_config(1);
	}else{
		return $content;
	}

}
}

/********************************************************************
Sao Builder Config
*********************************************************************/
if ( !function_exists ( "sao_builder_config" )){
 function sao_builder_config($out = false) {
	if( is_singular()) {
 
	global $post;
 
	$section = sao_section_config($post->ID);
  	$output= !empty($section['output'])?$section['output']:'';
	$output.= !empty($section['css'])?'<style>'.$section['css'].'</style>':'';
	 return $output;
	}
}
}

if ( !function_exists ( "sao_icon_enqueue" )){
function sao_icon_enqueue($var=false,$true=false) {
	global $sao_fonticon_style;
	
 	if(!empty($sao_fonticon_style['FontAwesome']) || !empty($true)) wp_enqueue_style('sao_fontawesome',SAOPAGE_DIR. 'assets/css/fonts/FontAwesome.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticonarrow'])  || !empty($true)) wp_enqueue_style('sao_flaticonarrow',SAOPAGE_DIR. 'assets/css/fonts/flaticonarrow.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticonmultimedia'])  || !empty($true) ) wp_enqueue_style('sao_flaticonmultimedia',SAOPAGE_DIR. 'assets/css/fonts/flaticonmultimedia.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticonbusiness'])  || !empty($true)) wp_enqueue_style('sao_flaticonbusiness',SAOPAGE_DIR. 'assets/css/fonts/flaticonbusiness.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticonoffice'])  || !empty($true)) wp_enqueue_style('sao_flaticonoffice',SAOPAGE_DIR. 'assets/css/fonts/flaticonoffice.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticoninterface'])  || !empty($true) ) wp_enqueue_style('sao_flaticoninterface',SAOPAGE_DIR. 'assets/css/fonts/flaticoninterface.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticonessentialset']) || !empty($true)) wp_enqueue_style('sao_flaticonessentialset',SAOPAGE_DIR. 'assets/css/fonts/flaticonessentialset.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticontechsupport']) || !empty($true)) wp_enqueue_style('sao_flaticontechsupport',SAOPAGE_DIR. 'assets/css/fonts/flaticontechsupport.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticontech'])  || !empty($true)) wp_enqueue_style('sao_flaticontech',SAOPAGE_DIR. 'assets/css/fonts/flaticontech.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticonstrategy'])  || !empty($true)) wp_enqueue_style('sao_flaticonstrategy',SAOPAGE_DIR. 'assets/css/fonts/flaticonstrategy.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticonhipster'])  || !empty($true) ) wp_enqueue_style('sao_flaticonhipster',SAOPAGE_DIR. 'assets/css/fonts/flaticonhipster.css','',$var);
  	if(!empty($sao_fonticon_style['flaticonfashion']) || !empty($true) ) wp_enqueue_style('sao_flaticonfashion',SAOPAGE_DIR. 'assets/css/fonts/flaticonfashion.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticonwebdesign']) || !empty($true) ) wp_enqueue_style('sao_flaticonwebdesign',SAOPAGE_DIR. 'assets/css/fonts/flaticonwebdesign.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticontravel']) || !empty($true) ) wp_enqueue_style('sao_flaticontravel',SAOPAGE_DIR. 'assets/css/fonts/flaticontravel.css','',$var);  
 	if(!empty($sao_fonticon_style['flaticonnetwork']) || !empty($true)) wp_enqueue_style('sao_flaticonnetwork',SAOPAGE_DIR. 'assets/css/fonts/flaticonnetwork.css','',$var);  
 	if(!empty($sao_fonticon_style['metrizeicon']) || !empty($true)) wp_enqueue_style('sao_metrizeicon',SAOPAGE_DIR. 'assets/css/fonts/metrizeicon.css','',$var);  
 	if(!empty($sao_fonticon_style['typcn']) || !empty($true)) wp_enqueue_style('sao_typcn',SAOPAGE_DIR. 'assets/css/fonts/typcn.css','',$var);   
}
}
 
  /********************************************************************
Style Footer
*********************************************************************/
if ( !function_exists ( "sao_enqueue" )){
	add_action('wp_enqueue_scripts', 'sao_enqueue');
 
function sao_enqueue($has_enqueue=false) {
 	$var='3.5';
	$min ='.min';
	  
 	wp_enqueue_style('sao-style',SAOPAGE_DIR. 'assets/css/sao-style-rtl.min.css',array(),$var);  
    wp_enqueue_script('sao-script',SAOPAGE_DIR .'assets/js/sao-scripts.min.js', array( 'jquery'),$var);
 	
	}
 }

if ( !function_exists ( "sao_enqueue_footer" )){
function sao_enqueue_footer($has_enqueue=false) {
	
	$var='3.1';
	$min ='.min';
	
	
	
	global $post;
	$post_id='';
	if(!empty($post->ID)){
		$post_id=$post->ID;
	}
	$sao_show_page_builder = get_post_meta($post_id, 'sao_show_page_builder',false);
	 
 if(!empty($sao_show_page_builder) || !empty($has_enqueue)){
	 
 	sao_icon_enqueue($var);
		
	global $sao_image_style,
	$sao_imagehover_style,
 	$sao_lightslider_style;	
	if(!empty($sao_image_style)){sao_caption_effect_hover_css();}  
	if(!empty($sao_lightslider_style)) wp_enqueue_style('sao_lightslider_style',SAOPAGE_DIR. 'assets/css/lib/lightslider-rtl'.$min.'.css','',$var);  
	
	global $sao_aos_script,
 	$sao_counter_script,
	$sao_hexagon_script,
	$sao_circle_script,
	$sao_lightbox_script,
	$sao_lightslider_script,
 	$sao_parlx_script,
	$sao_sticky_script;
   	$min ='.min';
	
	if(!empty($sao_aos_script)) wp_enqueue_script('sao_aos_script',SAOPAGE_DIR. 'assets/js/lib/aos'.$min.'.js','',$var); 
	if(!empty($sao_circle_script)) wp_enqueue_script('sao_circle_script',SAOPAGE_DIR. 'assets/js/lib/circle'.$min.'.js','',$var);   
	if(!empty($sao_hexagon_script)) wp_enqueue_script('sao_hexagon_script',SAOPAGE_DIR. 'assets/js/lib/hexagon'.$min.'.js','',$var);   
   	if(!empty($sao_lightbox_script)) wp_enqueue_script('sao_lightbox_script',SAOPAGE_DIR. 'assets/js/lib/lightbox'.$min.'.js','',$var);   
	if(!empty($sao_lightslider_script)) wp_enqueue_script('sao_lightslider_script',SAOPAGE_DIR. 'assets/js/lib/lightslider'.$min.'.js','',$var);   
	if(!empty($sao_parlx_script))wp_enqueue_script('sao_parlx_script',SAOPAGE_DIR. 'assets/js/lib/parlx'.$min.'.js','',$var);   
   	if(!empty($sao_counter_script)) wp_enqueue_script('sao_counter_script',SAOPAGE_DIR. 'assets/js/lib/counter'.$min.'.js','',$var);    
  	if(!empty($sao_sticky_script)) wp_enqueue_script('sao_sticky_script',SAOPAGE_DIR. 'assets/js/lib/sticky'.$min.'.js','',$var);
	}

 	  
} 
add_action('wp_footer', 'sao_enqueue_footer');
}
 
 /*
 
 
 /********************************************************************
Bulider RTL
*********************************************************************/
if ( !function_exists ( "sao_builder_rtl_has" )){
function sao_builder_rtl_has($element =false) {
 	 
 	if(is_rtl() && strpos($element,'left')!==false){
		return str_replace('left','right', $element);
		
	}elseif(is_rtl() && strpos($element,'right')!==false){
		
		return str_replace('right','left',$element);
		
	} else{
		return $element;
		
	}
}
}

if ( !function_exists ( "sao_builder_rtl_left" )){
function sao_builder_rtl_left() {
 	if(is_rtl()){
		return 'right';
	}else{
		return 'left';
	}
}
}
 
/********************************************************************
Builder RTL
*********************************************************************/
if ( !function_exists ( "sao_builder_rtl_right" )){
function sao_builder_rtl_right() {
 	if(is_rtl()){
		return 'left';
	}else{
		return 'right';
	}
}
}
if(is_admin()){
 if ( !function_exists ( "sao_builder_has_type" )){
function sao_builder_has_type() {
  global $post, $typenow, $current_screen;
  if ( $post && $post->post_type ) {
    return $post->post_type;
  }
  elseif ( $typenow ) {
    return $typenow;
  }
  elseif ( $current_screen && $current_screen->post_type ) {
    return $current_screen->post_type;
  }
  elseif ( isset( $_REQUEST['post_type'] ) ) {
    return sanitize_key( $_REQUEST['post_type'] );
  }
  elseif ( isset( $_REQUEST['post'] ) ) {
    return get_post_type( $_REQUEST['post'] );
  }
  return null;
}
 }
}

//global  
/********************************************************************
Admin Builder Enqueue
*********************************************************************/
if ( !function_exists ( "sao_builder_enqueue" )){
	
	
global $pagenow;

if ( is_admin() ) {
 
 
 add_action('admin_enqueue_scripts', 'sao_builder_enqueue');
 
function sao_builder_enqueue($hook) {
		global $pagenow,$post; 
	    wp_enqueue_editor();

	 if(in_array( $pagenow, array( 'post-new.php', 'post.php','admin-ajax.php' ) )&& (sao_builder_has_type() ==  'page' || sao_builder_has_type() ==  'post')){
 	$var='3.8';
	$min ='';
 	wp_enqueue_style('sao_lightslider_style',SAOPAGE_DIR. 'assets/css/lib/lightslider-rtl.css','',$var);  
	wp_enqueue_style('sao_FontAwesome',SAOPAGE_DIR. 'assets/css/fonts/FontAwesome.css','',$var);  
	wp_enqueue_style('sao-style', SAOPAGE_DIR .'assets/css/sao-style-rtl.min.css',array(),$var);	
	wp_enqueue_style('sao-coloris', SAOPAGE_DIR .'assets/css/coloris.css',array(),$var);	
		
		
		
	wp_enqueue_style( 'rang_coloris',SAOPAGE_DIR .'assets/css/coloris.css'); 
	wp_enqueue_script( 'rang_coloris', SAOPAGE_DIR .'assets/js/coloris.js'); 
	wp_localize_script('rang_coloris', 'rang_coloris',array('rtl'=>is_rtl()?'true':''));
		
		
		
		
	wp_enqueue_style('sao_builder', SAOPAGE_DIR .'assets/css/builder.css',array(),$var);
  	wp_enqueue_style('rtl_builder', SAOPAGE_DIR .'assets/css/rtl_builder.css',array(),$var);
 	 
	  
	 //Scripts/////////////////////////////////////////////////////////////////////////////////// 
  	wp_enqueue_script('sao-scripts',SAOPAGE_DIR. 'assets/js/sao-admin-scripts.min.js',array(),$var); 
	
  	wp_register_script('sao_builder', SAOPAGE_DIR .'assets/js/builder.js', array('jquery', 'jquery-ui-sortable','jquery-ui-droppable') ,$var, true );
  	
  	$array = array( 'ajaxurl' => admin_url( 'admin-ajax.php') );
	
 	wp_localize_script( 'sao_builder', 'builder_js', $array  );	
 	
 	wp_localize_script( 'sao_builder', 'rtl_js',array('is_rtl'=> is_rtl()?'true':false));		

 	wp_enqueue_media();
 
	wp_enqueue_script('jquery-ui-slider');
 	wp_enqueue_script( 'serializejson', SAOPAGE_DIR .'assets/js/jquery.serializejson.min.js' ); 
 
 	wp_localize_script('sao_builder', 'sao_text', array(
		'choose'				=>	esc_html__('Choose Image','saoshyant-page-builder'), 
 		'remove'				=>	esc_html__('Remove','saoshyant-page-builder'),
		'uploader_button'		=>	esc_html__('Use This Image','saoshyant-page-builder'), 
		'empty'				=>	esc_html__('Name is empty!','saoshyant-page-builder'), 
		'change_column'		=>	esc_html__('Change the Column','saoshyant-page-builder'), 
		'retry'				=>	esc_html__('Name already exist!','saoshyant-page-builder'), 
		'agree'				=>	esc_html__('Do you agree?','saoshyant-page-builder'), 
		'error'				=>	esc_html__('Error','saoshyant-page-builder'), 
		 
	));
 
   	wp_enqueue_script( 'sao_builder' );
	 
	}
 }
 }
}




/********************************************************************
Serialize Code
*********************************************************************/
if ( !function_exists ( "sao_serialize_code" )){
function sao_serialize_code($in,$code) { 
	preg_match_all('/\[('.$code.'_\d+)(_\d+)?(?: (attr_[^"]*)="([^"]*)")?\](.+(?=\[\/\1\2?\]))?/',$in,$out,PREG_SET_ORDER);
 	foreach($out as $sc){
		if(!empty($sc[1]) ){
        // store child data in parent's content array
        $shortcodes[$sc[1]]=array('name'=>$sc[1].$sc[2],'key'=>!empty($sc[4])? $sc[4]:'' ,'value'=> !empty($sc[5])? $sc[5]:'' );
    	}
	}
	$shortcod = !empty($shortcodes)? $shortcodes:'';
	return  $shortcod;
}
}
/********************************************************************
Serialize wpkses 
*********************************************************************/
if ( !function_exists ( "sao_wpkses_post_tags" )){
add_filter( 'wp_kses_allowed_html', 'sao_wpkses_post_tags', 10, 2 );

function sao_wpkses_post_tags( $tags, $context ) {

	if ( 'post' === $context ) {
		$tags['iframe'] = array(
			'src'             => true,
			'height'          => true,
			'width'           => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
		);
	}

	return $tags;
}

}
if ( !function_exists ( "sao_isphone" )){
function sao_isphone() {
 	return  wp_is_mobile();
 } 
}
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Caption Effect
 
*///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
function sao_element_show($option,$clsas=false) {
	$display='show';
		if(sao_isphone() && !empty($option['tablet_hide']) && !empty($option['phone_hide'])){
			$display ='hide';
 		}else{
			$display ='show';
		}
 
		if(!empty($clsas)){
			$class_hide='';
			if(!empty($option['hide_desktop'])){
					$class_hide.= 'sao_col_hide ';
			}
			if(!empty($option['hide_tablet'])){
					$class_hide.= 'sao_tab_hide ';
			}
			if(!empty($option['hide_mobile'])){
					$class_hide.= 'sao_mob_hide';
			}
			return $class_hide;
		}else{
		return  $display;
		}
}

?>