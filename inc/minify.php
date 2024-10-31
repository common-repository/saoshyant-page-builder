<?php sao_builder_mergfile();
// sao_builder_jqurey_mergfile();

function sao_builder_mergfile() {
 	$style_right='';
	 
	foreach(sao_builder_style_array() as $key => $value){
		$style_right_file =   SAOPAGE_FILE.'/assets/css/'.$key.'-rtl.css';
		if (file_exists($style_right_file)) {
			$style_right.=file_get_contents($style_right_file);
		}
	}	
	$style_right_write = fopen(SAOPAGE_FILE.'/assets/css/sao-style-rtl.min.css', "w") or die("Unable to open file!");
 	fwrite($style_right_write,$style_right);
 	fclose($style_right_write);
	
 
  
 	$scripts='';
	foreach(sao_builder_scripts_array() as $key => $value){
   	$scripts.='';
		$scripts_file =   SAOPAGE_FILE.'/assets/js/'.$key.'.js';
 		if (file_exists($scripts_file)) {
			$scripts.=file_get_contents($scripts_file);
		}
	}	
	$scripts_write = fopen(SAOPAGE_FILE.'/assets/js/sao-scripts.min.js', "w") or die("Unable to open file!");
 	fwrite($scripts_write,$scripts);
 	fclose($scripts_write);
	
 
 
	$scripts='';
	foreach(sao_builder_admin_scripts_array() as $key => $value){
   	$scripts.='';
		$scripts_file =   SAOPAGE_FILE.'/assets/js/'.$key.'.js';
		if (file_exists($scripts_file)) {
			$scripts.=file_get_contents($scripts_file);
		}
	}	
	$scripts_write = fopen(SAOPAGE_FILE.'/assets/js/sao-admin-scripts.min.js', "w") or die("Unable to open file!");
 	fwrite($scripts_write,$scripts);
 	fclose($scripts_write);
  
       
}  

 function sao_builder_style_array() {
	return array(
		'fonticon'							=> 'Fonticon' , 
		'lib/style'							=> 'Style' , 
 		'lib/icon'							=> 'Icon' , 
		'lib/image'							=> 'Image' , 
		'lib/tabs'							=> 'Tabs' , 
		'lib/counter'						=> 'Counter' , 
		'lib/mini'							=> 'Mini' , 
		'lib/imagehover'					=> 'ImageHover' , 
		'lib/button'						=> 'Button' , 
		'lib/aos'							=> 'AOS' , 
		'lib/lightbox'						=> 'Lightbox' , 
		'lib/multi'							=> 'Multi' , 
		'lib/boxed'							=> 'Boxed' ,  
	);
 }

 function sao_builder_scripts_array() {
	return array(
		'lib/zoom'							=> 'Zoom' , 
		'lib/tabs'							=> 'Tabs' , 
 		'lib/slide'							=> 'Icon' , 
  		'lib/boxed'							=> 'Boxed' , 
 		'lib/script'						=> 'Script' , 
		
		  
	);
 }

 function sao_builder_admin_scripts_array() {
	return array(
 		'lib/hexagon.min'					=> 'Hexagon' , 
 		'lib/circle.min'					=> 'Circle' , 
 		'lib/lightslider.min'				=> 'Lightslider' , 
		'lib/zoom'							=> 'Zoom' , 
		'lib/tabs'							=> 'Tabs' , 
		'lib/sticky'						=> 'Sticky' , 
		'lib/slide'							=> 'Slide' , 
  		'lib/lightbox'						=> 'Lightbox' , 
 		'lib/counter'						=> 'Counter' , 
 		'lib/boxed'							=> 'Boxed' , 
 		  
	);
 }

?>