<?php 
/*********************************************************************************************
Builder Metabox
*********************************************************************************************/
if ( !function_exists ( "sao_builder_metabox" )){
add_action('add_meta_boxes', 'sao_builder_metabox');
function sao_builder_metabox($post_type) {
    $types = array('page','post' );

    if (in_array($post_type, $types)) {
      add_meta_box(
        'sao_builder_metabox',
        esc_html__('Page Builder','saoshyant-page-builder'),
        'sao_builder_metapanel',
        $post_type,
        'normal',
        'high'
      );
    }
}
}
if ( !function_exists ( "sao_builder_metapanel" )){
 function sao_builder_metapanel($post) {
    wp_nonce_field( basename(__FILE__), 'sao_builder_meta_nonce' );
	$sao_show_page_builder = get_post_meta($post->ID, 'sao_show_page_builder', true);
	$section_json = get_post_meta($post->ID, 'sao_section', true);
  	$section= sao_options_array_row($section_json);
    $column_json = get_post_meta($post->ID, 'sao_column', true);
  	$column= sao_options_array_row($column_json);
    $element_json = get_post_meta($post->ID, 'sao_element', true);
  	$element= sao_options_array_row($element_json);
 
 	global  $post;
			global $product,$post;
 
	
	
 	$sao_show_page_builder = get_post_meta($post->ID, 'sao_show_page_builder', true);
	
	$sao = !empty($sao_show_page_builder) ? 'sao_page_builder':'sao_default_editor';
	
    echo '<div  class="add_sao_page_builder '.esc_attr($sao) .'">';
    echo '<a   class="button  button-primary  switch_sao_page_builder">'.__('Switch to Sao Page Builder','saoshyant-page-builder').'</a>';
    echo '<a  class="button  button-primary  switch_sao_default_editor">'.__('Switch to Default Editor','saoshyant-page-builder').'</a>';
    echo '</div>'; 
	
	
	
	echo '<div  id="sao_buidler_perview"  class="sao_builder sao_builder_main">';
		echo '<a class="sao_full_template_full sao_full_screen_page_builder ">'.esc_html__('Full Screen','saoshyant-page-builder').'</a>';
		echo '<a class="sao_full_template_full_close sao_full_screen_close ">'.esc_html__('Close Full Screen','saoshyant-page-builder').'</a>';
 		echo '<a class="sao_full_template_save sao_template_save" data-row="full"  data-name="'.esc_html__('FulL','saoshyant-page-builder').'" >'.esc_html__('Save Full Template to the library','saoshyant-page-builder').'</a>';
		echo '<a class="sao_full_template_add sao_template_add"  data-row="full"  data-name="'.esc_html__('FulL','saoshyant-page-builder').'"  >'.esc_html__('Add Full Template From Library','saoshyant-page-builder').'</a>';

		echo '<ul class="sao_builder_list sao_section_list">';
         
			if (!empty($section)) :
            foreach($section as $section_key => $section_value):
			
               sao_builder_section($section_key,$section_value);
			   
            endforeach;
            endif;
             
   		echo '</ul>';
        
		echo '<a class="sao_add_section sao_add_row" >'.esc_html__('Add New Section','saoshyant-page-builder').'</a>';
		echo '<a class="sao_section_template_add sao_template_add" data-row="section"></a>';
		sao_model_column();
		sao_model_element();
        
 	echo '</div>';
    
	
	$section_json_textarea = !empty( $section_json ) ? $section_json : '';
	echo '<textarea  type="hidden" style="display:none;" name="sao_section" id="sao_section">'.esc_html($section_json_textarea).'</textarea>';
	
	$column_json_textarea = !empty( $column_json ) ? $column_json : '';
	echo '<textarea type="hidden" style="display:none;"   name="sao_column" id="sao_column">'.esc_html($column_json_textarea).'</textarea>';
	
	$element_json_textarea = !empty( $element_json ) ? $element_json : '';
    echo '<textarea type="hidden" style="display:none;"   name="sao_element" id="sao_element">'.esc_html($element_json).'</textarea>';
	
	$sao_show_page_builder_value = !empty( $sao_show_page_builder ) ? $sao_show_page_builder : '';
    echo '<input type="hidden" style="display:none;"   name="sao_show_page_builder" id="sao_show_page_builder" value="'.esc_attr($sao_show_page_builder_value).'" >';
     
 	
 	ob_start();
	wp_editor( '', 'initialize');
	$editor = ob_get_clean();
}    
}
if ( !function_exists ( "sao_builder_section_list" )){
 add_action('wp_ajax_nopriv_sao_builder_section_list', 'sao_builder_section_list');
add_action('wp_ajax_sao_builder_section_list', 'sao_builder_section_list'); 
function sao_builder_section_list() {
	$template =	get_option( 'sao_'.$_REQUEST['row_id'].'_template');
  	$section = sao_options_array_row(urldecode($template[$_REQUEST['template_id']]['section']));
  		
		if (!empty($section)) :
           foreach($section as $section_key => $section_value) : 
                 sao_builder_section($section_key,$section_value);
         endforeach;
         endif;
 
	die('');
}}
 if ( !function_exists ( "sao_builder_meta_save" )){
add_action('save_post', 'sao_builder_meta_save'); 
function sao_builder_meta_save($post_id) {
    if (!isset($_POST['sao_builder_meta_nonce']) || !wp_verify_nonce($_POST['sao_builder_meta_nonce'], basename(__FILE__))) return;

    if (!current_user_can('edit_post', $post_id)) return;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

  if (defined('DOING_AJAX') ) {
	return $post_id;
   }
  
   	if(!empty($_POST['sao_show_page_builder'])) {
		$sao_show_page_builder = wp_kses_post($_POST['sao_show_page_builder']);
       	update_post_meta($post_id, 'sao_show_page_builder', $sao_show_page_builder);
    } else {
     	 delete_post_meta($post_id, 'sao_show_page_builder');
    }
	
  
  	if(!empty($_POST['sao_section'])) {
		$sao_section = wp_kses_post($_POST['sao_section']);
       	update_post_meta($post_id, 'sao_section', $sao_section);
    } else {
     	 delete_post_meta($post_id, 'sao_section');
    }
	
	 
  	if(!empty($_POST['sao_column'])) {
		$sao_column = wp_kses_post($_POST['sao_column']);
      	update_post_meta($post_id, 'sao_column', $sao_column);
    } else {
     	 delete_post_meta($post_id, 'sao_column');
    }	 
 	
  	if(!empty($_POST['sao_element'])) {
		$sao_element = wp_kses_post($_POST['sao_element']);
      	update_post_meta($post_id, 'sao_element', $sao_element);
    } else {
     	 delete_post_meta($post_id, 'sao_element');
    }	 

	  
	
}

 }?>