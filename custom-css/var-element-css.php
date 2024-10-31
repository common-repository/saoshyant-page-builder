<?php

/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Element Item
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_item_css" )){
function sao_item_css($id=false,$item=false ) {
	$css="";
	if(!empty($id)){
		$css= $item .'{'.$id.'}';
	}
 	return $css;	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Var
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var" )){
function sao_var( $name=false,$option=false,$id =false) {
	$css=""; 
 
 	if(!empty($option[$id])){
		
		$css.= '--sao-'.$name.':'.esc_html($option[$id]).';';
	}
 	return $css;	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Var
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_2" )){
function sao_var_2( $name=false,$option=false,$id=false,$id_2=false  ) {
	$css=""; 
 
 	if(!empty($option[$id][$id_2])){
		
		$css.= '--sao-'.$name.':'.esc_html($option[$id][$id_2]).';';
	}
 	return $css;	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Unit
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_unit" )){
function sao_var_unit( $name=false,$option=false,$id=false,$amount='px'  ) {
	$css=""; 
  	if(!empty($option[$id])){
		$css.= '--sao-'.$name.':'.esc_html($option[$id]).$amount.';';
	}
 	return $css;	
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Size
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_size" )){
function sao_var_size( $name=false,$option=false,$id=false,$id_2 =false ) {
	$css="";
  	if(isset($option[$id][$id_2])){
		$text_font_size_unit = !empty($option[$id]['unit']) ? $option[$id]['unit'] : 'px';
		$css.= intval($option[$id][$id_2]) ? ' --sao-'.$name.':'.esc_html($option[$id][$id_2]).$text_font_size_unit.' ;': '';
	}
	return $css;	
}
}

/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Font Weight
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_font_weight" )){
function sao_var_font_weight( $name=false,$option=false,$id=false,$font_weight=false  ) {
	$css=""; 
   	if(!empty($option[$id])  ){
		if( $option[$id]!== $font_weight){
 		$css.= '--sao-'.$name.'-fn-wt:'.esc_html($option[$id]).';';
		}
	}
 	return $css;	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Align
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_align" )){
function sao_var_align( $name=false,$option=false,$id=false,$default='center') {
	$css="";
 	if(!empty($option[$id])){
		if($option[$id] !==$default){
			if($option[$id] =='right'){
				$css.=  ' --sao-'.$name.': '.sao_builder_rtl_right().' ;';
			}elseif($option[$id] =='left'){
				$css.=  '  --sao-'.$name.': '.sao_builder_rtl_left().';';
			}elseif($option[$id] =='center'){
				$css.=  '--sao-'.$name.':center ;';
			}
		}
			
	} 
	return $css;	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Border
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_border" )){
function sao_var_border($name=false,$option=false,$id=false) {

		$css="";
		if(!empty($option[$id]['top'])|| !empty($option[$id]['left']) || !empty($option[$id]['bottom']) || !empty($option[$id]['right'])){
			$border_unit = !empty($option[$id]['unit']) ?$option[$id]['unit'] : 'px';
			$border_top = intval(isset($option[$id]['top'])) ? $option[$id]['top'].$border_unit: '0';
			$border_left = intval(isset($option[$id]['left'])) ? $option[$id]['left'].$border_unit.'' : '0';
			$border_bottom = intval(isset($option[$id]['bottom'])) ? $option[$id]['bottom'].$border_unit.'' : '0';
			$border_right = intval(isset($option[$id]['right'])) ? $option[$id]['right'].$border_unit.'' : '0';	
			if(is_rtl()){
			
				$css.='--sao-'.$name.'-br-wt:'.$border_top.' '.$border_left.' '.$border_top.' '.$border_right.';';
			}else{
				$css.='--sao-'.$name.'-br-wt:'.$border_top.' '.$border_right.' '.$border_top.' '.$border_left.';';
			}
				
 			
			$css.=isset($option[$id]['style']) ? '--sao-'.$name.'-br-st:'.$option[$id]['style'].';' : '';		
			$css.=isset($option[$id]['color']) ? '--sao-'.$name.'-br-cr:'.$option[$id]['color'].';' : '';	
 			
		 
		} 
 
	return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Border 2
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_border_2" )){
function sao_var_border_2( $name=false,$option=false,$id=false,$inset= false) {
	$css="";
 

		if(!empty($option[$id]['size'])){
			 
 			$position = !empty($option[$id]['position'])?sao_builder_rtl_has($option[$id]['position']):'round';
 				if($position == 'top'){
					$border_width = intval(isset($option[$id]['size'])) ? '  --sao-'.$name.'-br-wt:'.$option[$id]['size'].'px 0 0;' : '';		
				}
				elseif($position == 'bottom'){
					$border_width = intval(isset($option[$id]['size'])) ? '  --sao-'.$name.'-br-wt: 0 0  '.$option[$id]['size'].'px ;' : '';		
				}	
				elseif($position == 'left'){
  					$border_width = intval(isset($option[$id]['size'])) ? ' --sao-'.$name.'-br-wt: 0 '.$option[$id]['size'].'px 0 0;' : '';	

 				}
				elseif($position == 'right'){
  					$border_width = intval(isset($option[$id]['size'])) ? '  --sao-'.$name.'-br-wt: 0 0 0 '.$option[$id]['size'].'px;' : '';	
 				}	
				elseif($position == 'top-bottom'){
					$border_width = intval(isset($option[$id]['size'])) ? '  --sao-'.$name.'-br-wt:'.$option[$id]['size'].'px 0 ;' : '';		
				}else{
					$border_width = intval(isset($option[$id]['size'])) ? ' --sao-'.$name.'-br-wt:'.$option[$id]['size'].'px;' : '';		
				}
				
				$border_style =  isset($option[$id]['style']) ? '--sao-'.$name.'-br-st: '.$option[$id]['style'].';' : '';		
				$border_color =  isset($option[$id]['color']) ? '--sao-'.$name.'-br-cr:'.$option[$id]['color'].';' : '';	
			
	 
 			$css.= ''.$border_width.$border_style.$border_color.';';
 		} 
		 
	
	return $css;	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Border Mini
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_border_mini" )){
function sao_var_border_mini( $name=false,$option=false,$id=false,$inset= false) {
	$css="";
 

		if(!empty($option[$id]['size'])){
			$border_width = intval(isset($option[$id]['size'])) ? $option[$id]['size'].'px ' : '';		
			$border_style =  isset($option[$id]['style']) ?  $option[$id]['style'].' ' : 'solid ';		
			$border_color =  isset($option[$id]['color']) ?  $option[$id]['color'] : 'var(--sao-br-cr)';	
  			$css.= '--sao-'.$name.'-br:'.$border_width.$border_style.$border_color.';';
 		} 
		 
	
	return $css;	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Border Mini 2
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_border_mini_2" )){
function sao_var_border_mini_2($name=false,$option=false,$id=false) {

		$css="";
		if(!empty($option[$id]['size'])){
		 
 			 
			$css.= intval(isset($option[$id]['size'])) ? ' --sao-'.$name.'-br-wt:'.$option[$id]['size'].'px;' : '';		
		 
 			$css.=isset($option[$id]['style']) ? '--sao-'.$name.'-br-st:'.$option[$id]['style'].';' : '';		
			$css.=isset($option[$id]['color']) ? '--sao-'.$name.'-br-cr:'.$option[$id]['color'].';' : '';	
 			
		 
		} 
 
	return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Shdaow
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_shadow" )){
function sao_var_shadow($name=false, $option=false,$id=false,$inset= false) {
		$css="";

		if(!empty($option[$id]['horizontal']) || !empty($option[$id]['vertical']) || !empty($option[$id]['blur']) || !empty($option[$id]['spread'])){
			$shadow_unit = !empty($option[$id]['unit']) ?$option[$id]['unit'] : 'px';
			$shadow_horizontal = intval(isset($option[$id]['horizontal'])) ? $option[$id]['horizontal'].$shadow_unit.' ': '0 ';
			$shadow_vertical = intval(isset($option[$id]['vertical'])) ?  $option[$id]['vertical'].$shadow_unit.' ' : '0 ';
			$shadow_blur = intval(isset($option[$id]['blur'])) ?  $option[$id]['blur'].$shadow_unit.' ' : '0 ';
			$shadow_spread = intval(isset($option[$id]['spread'])) ?  $option[$id]['spread'].$shadow_unit.' ' : '0 ';		
			$shadow_color = !empty($option[$id]['color']) ? $option[$id]['color'].' ' : '';		
			if($inset ==true ){
				$shadow_position = !empty($option[$id]['position']) ? $option[$id]['position'] : '';
				$position_inset = !empty($shadow_position) ? '-inset ' :'' ;		
			}else{
			$shadow_position = !empty($option[$id]['position']) ? $option[$id]['position'] : '';
			$position_inset =  '';
  			}
			$css.=  ' --sao-'.$name.'-sd'.$position_inset.':'.$shadow_horizontal.$shadow_vertical.$shadow_blur.$shadow_spread.$shadow_color.$shadow_position.';';
		}
	return $css;	
		
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Shdaow Mini
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_shadow_mini" )){
function sao_var_shadow_mini($name=false, $option=false,$id=false,$inset= false) {
		$css="";

		if(  !empty($option[$id]['blur']) || !empty($option[$id]['spread'])){
			$shadow_unit =  'px';
		 
			$shadow_blur = intval(isset($option[$id]['blur'])) ?  $option[$id]['blur'].$shadow_unit.' ' : '0 ';
			$shadow_spread = intval(isset($option[$id]['spread'])) ?  $option[$id]['spread'].$shadow_unit.' ' : '0 ';		
			$shadow_color = !empty($option[$id]['color']) ? $option[$id]['color'].' ' : '';		
		 
			$css.=  ' --sao-'.$name.'-sd:0 0 '.$shadow_blur.$shadow_spread.$shadow_color.';';
		}
	return $css;	
		
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Radius 
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 if ( !function_exists ( "sao_var_radius" )){
function sao_var_radius($name=false,$option=false,$id=false) {
	 
$css ='';
 		if(!empty($option[$id]['top_left'])|| !empty($option[$id]['top_right']) || !empty($option[$id]['bottom_right']) || !empty($option[$id]['bottom_left'])){
			$radius_unit = !empty($option[$id]['unit']) ?$option[$id]['unit'] : 'px';
			$top_left = intval(isset($option[$id]['top_left'])) ? $option[$id]['top_left'].$radius_unit.' ': '0 ';
			$top_right = intval(isset($option[$id]['top_right'])) ? $option[$id]['top_right'].$radius_unit.' ' : '0 ';
			$bottom_right = intval(isset($option[$id]['bottom_right'])) ? $option[$id]['bottom_right'].$radius_unit.' ' : '0 ';
			$bottom_left = intval(isset($option[$id]['bottom_left'])) ? $option[$id]['bottom_left'].$radius_unit.' ' : '0 ';		
			if(is_rtl()){
				$css.='--sao-'.$name.'-rd:'.$top_right.$top_left.$bottom_left.$bottom_right.';';
			}else{
				$css.='--sao-'.$name.'-rd:'.$top_left.$top_right.$bottom_right.$bottom_left.';';
			}
		}

	return $css;
 }
 }
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Radius Mini
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ( !function_exists ( "sao_var_radius_mini" )){
function sao_var_radius_mini( $name=false,$option=false,$id=false ) {
		$css="";
		if(!empty($option[$id]['size'])){
				$radius_unit = !empty($option[$id]['unit']) ?$option[$id]['unit'] : 'px';
   				$radius_size = intval(isset($option[$id]['size'])) ? $option[$id]['size'].$radius_unit.' ' : '0 ';
			
				$position =!empty($option[$id]['position'])? $option[$id]['position']:'round';
 				 
				if($position == 'top'){
					$raduis =  $radius_size.$radius_size .' 0px 0px ';		
				
				}elseif($position == 'bottom'){
					$raduis =  '0px 0px '.$radius_size.$radius_size .' ';
				 
				}elseif($position == 'top-left-bottom-right'){
					if(is_rtl()){
					$raduis =  '  0px '.$radius_size.' 0px '.$radius_size.'  ';
 					}else{
						$raduis = $radius_size.' 0px '.$radius_size.' 0px ';
 					}
					
 				}	
				elseif($position == 'top-right-bottom-left'){
					if(is_rtl()){
						$raduis = $radius_size.' 0px '.$radius_size.' 0px ';
 					}else{
						$raduis =  '  0px '.$radius_size.' 0px '.$radius_size.'  ';
 					}
 				}else{
					$raduis = $radius_size;		
				} 
	  
			$css.=' --sao-'.$name.'-rd:'.$raduis.';';
		}
	return $css;	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Padding
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ( !function_exists ( "sao_var_padding" )){
function sao_var_padding( $name=false,$option=false,$id=false) {
	$css="";
	if(!empty($option[$id]['top']) || !empty($option[$id]['left']) || !empty($option[$id]['bottom']) || !empty($option[$id]['right']) ){
		$padding_unit = !empty($option[$id]['unit']) ?$option[$id]['unit'] : 'px';
		$padding_top = intval(isset($option[$id]['top'])) ?  $option[$id]['top'].$padding_unit : '0';
		$padding_left = intval(isset($option[$id]['left'])) ? $option[$id]['left'].$padding_unit : '0';
		$padding_bottom = intval(isset($option[$id]['bottom'])) ? $option[$id]['bottom'].$padding_unit  : '0';
		$padding_right = intval(isset($option[$id]['right'])) ? $option[$id]['right'].$padding_unit : '0';	
		if(is_rtl()){
 		$css.='--sao-'.$name.':'.$padding_top.' '.$padding_left.' '.$padding_bottom.' '.$padding_right.';';
		}else{
 		$css.='--sao-'.$name.':'.$padding_top.' '.$padding_right.' '.$padding_bottom.' '.$padding_left.';';
		}
	
	}
	return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Padding Mini
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_padding_mini" )){
function sao_var_padding_mini( $name=false,$option=false,$id=false) {
	$css="";
	if(!empty($option[$id]['top']) || !empty($option[$id]['left'])    ){
		$padding_unit = !empty($option[$id]['unit']) ?$option[$id]['unit'] : 'px';
		$padding_top = intval(isset($option[$id]['top'])) ?  $option[$id]['top'].$padding_unit : '0';
		$padding_right = intval(isset($option[$id]['right'])) ? $option[$id]['right'].$padding_unit : '0';
 		if(is_rtl()){
 		$css.='--sao-'.$name.'-pd:'.$padding_top.' '.$padding_right.';';
		}else{
 		$css.='--sao-'.$name.'-pd:'.$padding_top.' '.$padding_right.';';
		}
	
	}
	return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Margin Mini
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_margin_mini" )){
 function sao_var_margin_mini($name=false,$option=false,$id=false) {
	$css="";
	if(!empty($option[$id]['top']) ||  !empty($option[$id]['bottom'] ) ){
		$margin_unit = !empty($option[$id]['unit']) ?$option[$id]['unit'] : 'px';
		$margin_top = intval(isset($option[$id]['top'])) ? $option[$id]['top'].$margin_unit: '0';
		$margin_bottom = intval(isset($option[$id]['bottom'])) ? $option[$id]['bottom'].$margin_unit: '0';
		
 		$css.='--sao-'.$name.':'.$margin_top.' auto '.$margin_bottom.';';
 	
	}
 
	return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Gradient Background Color
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_gradient_background_color" )){
function sao_var_gradient_background_color( $name=false,$option=false,$id=false ) {
	$css='';
		
	 
		$background_color = !empty($option[$id])?$option[$id]:'';

	if(isset($background_color['first'])){
			$orientation = !empty($background_color['orientation'])? $background_color['orientation']:'horizontal';
			
		if($orientation == "horizontal"){
					$type = 'linear';
					$moz = sao_builder_rtl_left();
					$liner = 'to '.sao_builder_rtl_right().'';
				}elseif($orientation == "vertical"){
					$type = 'linear';
					$moz = 'top';
					$liner = 'to bottom';
					
				}elseif($orientation == "diagonal"){
					$type = 'linear';
					$moz = '-45deg';
					$liner = '135deg';
				}elseif($orientation == "diagonal-bottom"){
					$type = 'linear';
					$moz = '45deg';
					$liner = '45deg';
				}elseif($orientation == "radial"){
					$type = 'radial';
					$moz = 'center, ellipse cover';
					$liner = 'ellipse at center';
				}else{
					$type = 'linear';
					$moz = '45deg';
					$liner = '45deg';						
				}
					
 			$css = '--sao-'.$name.'-bg: '.esc_html($background_color['first']).';';
				
			if(!empty($background_color['second'])){
				
				if(!empty($background_color['third'])){
  					$css = ' --sao-'.$name.'-bg: '.$type.'-gradient('.$liner.', '.$background_color['first'].' 0%,'.$background_color['second'].' 50%,'.$background_color['third'].' 100%) ;';
					
				} else{
					
  					$css = ' --sao-'.$name.'-bg: '.$type.'-gradient('.$liner.', '.$background_color['first'].' 0%,'.$background_color['second'].' 100%) ;';
				}
				 
			}else{
				
			}
	}
		
	return $css;
 
}
}
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Button Style
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_button_style" )){
function sao_var_button_style($option=false) {
	$style =  !empty($option['style'])  ?  $option['style'] : 'style-1';
	$css='';		
	if( $style=='style-2'){
    $css = ' --sao-btn-sd: 0 3px 0px 0px rgba(0, 0, 0, 0.2) inset';
 		
	}elseif( $style=='style-3'){
   $css	= ' --sao-btn-sd: 0 -3px 0px 0px rgba(0, 0, 0, 0.2) inset';
		
	}elseif( $style=='style-4'){
   $css	= ' --sao-btn-sd: -3px 0px 0px 0px rgba(0, 0, 0, 0.2) inset ';
		
	}elseif( $style=='style-5'){
	$css = '  --sao-btn-sd: 3px 0px 0px 0px rgba(0, 0, 0, 0.2) inset ';
	}
	return $css;
}
}
if ( !function_exists ( "sao_var_button_icon_padding" )){
function sao_var_button_icon_padding( $option=false,$id=false,$icon='left') {
	$css="";
	 
	$top= intval(isset($option[$id]['top']))?$option[$id]['top']:'1';
	$right= intval(isset($option[$id]['right']))?$option[$id]['right']:'2.5';
	$unit = !empty($option[$id]['unit']) ?$option[$id]['unit'] : 'em';
	
	if(!empty($top) ){
		$padding_unit = !empty($unit) ?$unit : 'px';
		$padding = intval(isset($top)) ? ' --sao-btn-icn-pd:'.$top.$padding_unit.';': '';
  		if($icon=='right'){
			$margin = intval(isset($right)) ? ' --sao-btn-icn-mg:0 '.$right.$padding_unit.' 0 0;' : '';		
		}else{
			$margin = intval(isset($right)) ? ' --sao-btn-icn-mg: 0  0 0 '.$right.$padding_unit.'   ;' : '';		
		}
		$css.=' '.$padding.$margin.' ';
	}
	return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Button Padding Style 6
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_button_padding_style_6" )){
function sao_var_button_padding_style_6( $option=false,$id=false,$icon='left') {
	$css="";
		$top= intval(isset($option[$id]['top']))?$option[$id]['top']:'1';
	$right= intval(isset($option[$id]['right']))?$option[$id]['right']:'2.5';
	$unit = !empty($option[$id]['unit']) ?$option[$id]['unit'] : 'em';
	
	
	if(!empty($top) || !empty($right) ){
		$padding_unit = !empty($unit ) ?$unit  : 'px';
		$padding_top = intval(isset($top)) ?  ' '.$top.$padding_unit: ' 0 ';
  		 
 		if($icon=='right'){
		$padding_right = ' 0 ';
 		$padding_left = intval(isset($right)) ? ' '.$right.$padding_unit.'' : '';		
		}else{
		$padding_left =' 0 ';
 		$padding_right = intval(isset($right)) ? ' '.$right.$padding_unit.'' : '';				
		}
		
		if(is_rtl()){
 		$css.='  --sao-btn-pd:'.$padding_top.$padding_left.$padding_top.$padding_right.'; ';
		}else{
 		$css.='  --sao-btn-pd:'.$padding_top.$padding_right.$padding_top.$padding_left.'; ';
		}
 	
	}
	return $css;
}
}
 /*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																Float
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_float" )){
function sao_var_float( $name =false, $option =false,$id=false,$default='center') {
	$css="";
 	if(!empty($option[$id])){
		if($option[$id] !==$default){
		if($option[$id] =='right'){
 			$css.=  ' --sao-'.$name.':'.sao_builder_rtl_right().'  ; ';
		}elseif($option[$id] =='left'){
 			$css.=  ' --sao-'.$name.':'.sao_builder_rtl_left().'; ';
		}elseif($option[$id] =='center'){
 			$css.=  ' --sao-'.$name.':none ;';
		}
		}
			
	} 
	return $css;	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Icon Hover
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_icon_hover" )){
function sao_icon_hover( $option =false) {
	$css='';
	$icon_hover = !empty($option['hover_icon_effect']) ? $option['hover_icon_effect'] : '';
	if($icon_hover =='iconhvr-slide-up'){
		$css='--sao-icn-tr:translateY(100%); ';
	}elseif($icon_hover =='iconhvr-slide-down'){
		$css='--sao-icn-tr:translateY(-100%); ';

	}elseif($icon_hover =='iconhvr-slide-left'){
		$css='--sao-icn-tr:translateX(100%); ';

	}elseif($icon_hover =='iconhvr-slide-right'){
		$css='--sao-icn-tr:translateX(-100%); ';
		
	}elseif($icon_hover =='iconhvr-flip-vert'){
		$css='--sao-icn-tr:rotateY(90deg);--sao-icn-tr-og:50% 0; ';
		
 	}elseif($icon_hover =='iconhvr-flip-horiz'){
		$css='--sao-icn-tr:rotateX(90deg);--sao-icn-tr-og::0 50%; ';

	}elseif($icon_hover =='iconhvr-flip-diag-1'){
		$css='--sao-icn-tr:rotate3d(1,-1,0,100deg); ';
	}elseif($icon_hover =='iconhvr-flip-diag-2'){	 
		$css='--sao-icn-tr:rotate3d(1,1,0,100deg); ';
 
	}elseif($icon_hover =='iconhvr-zoom-in'){
		$css='--sao-icn-tr:scale(0.5); ';

	}elseif($icon_hover =='iconhvr-zoom-out'){
		$css='--sao-icn-tr:scale(0.5);--sao-icn-tr-og:50% 50%; ';

	}
	return $css;
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	Gradient Background Image
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_gradient_background_image" )){
function sao_var_gradient_background_image( $name =false, $option=false ) {
	$css='';

 
 
	$background_color = !empty($option['background_color'])?$option['background_color']:'';
 
	
	 
	if(isset($background_color['first'])){
			$orientation = !empty($background_color['orientation'])? $background_color['orientation']:'';
			
		if($orientation == "horizontal"){
					$type = 'linear'; 
					$liner = 'to '.sao_builder_rtl_right().'';
				}elseif($orientation == "vertical"){
					$type = 'linear';
		 
					$liner = 'to bottom';
					
				}elseif($orientation == "diagonal"){
					$type = 'linear';
 
					$liner = '135deg';
				}elseif($orientation == "diagonal-bottom"){
					$type = 'linear';
 
					$liner = '45deg';
				}elseif($orientation == "radial"){
					$type = 'radial'; 
					$liner = 'ellipse at center';
				}else{
					$type = 'linear';
 
					$liner = '45deg';						
				}
					
 				
			if(!empty($background_color['second'])){
				$gradient='';
 				if(!empty($background_color['third'])){
		 							
					$gradient = ' '.$type.'-gradient('.$liner.', '.$background_color['first'].' 0%,'.$background_color['second'].' 50%,'.$background_color['third'].' 100%) ';
					
				} else{
  					$gradient = '  '.$type.'-gradient('.$liner.', '.$background_color['first'].' 0%,'.$background_color['second'].' 100%)  ';
				}
				 
			}else{
 				$gradient='';
			}
			
			
			
 			$background_image_depth =  !empty($option['background_image_depth'])?$option['background_image_depth']: 'after-background-color';
			if($background_image_depth  == 'after-background-color'){
				if(empty($gradient)){
				$gradient='linear-gradient('.$background_color['first'].','.$background_color['first'].')';
				}
			}
			
 			$css.= '--sao-'.$name.'-bg-cr: '.esc_html($background_color['first']).';';
 			
	}
		 
 
 		
	if( !empty($option['background_image'])){
		$thumbnail = !empty($option['background_image'])? wp_get_attachment_image_src($option['background_image'], 'full'):'';
		$background_url = !empty($thumbnail[0])? $thumbnail[0]:'';
		$background_image =!empty($background_url)?' url("'.esc_url($background_url).'")':'';
		
		
		
		
			if(!empty($option['background_image_position'])){
				$css.='--sao-'.$name.'-bg-pos:'.sao_builder_background_image_position($option).'; ';	 
			}  		
			
			if(!empty($option['background_image_repeat'])){
				$css.= '--sao-'.$name.'-bg-rp:'.$option['background_image_repeat'].'; ';	 
			} 
			
			if(!empty($option['background_image_size'])){
				$pre = is_numeric($option['background_image_size'])? '%':'';
				$css.='--sao-'.$name.'-bg-sz:'.$option['background_image_size'].$pre.';';	 
			}  		
	   
				 
		  
			 		
		
		
		
		
 	}else{
		$background_image='';
 	}
 
	
	if(!empty($gradient) && empty($background_image)){
 			$css.= '--sao-'.$name.'-bg-img: '.$gradient.';';
 	}
 
	elseif( empty($gradient) && !empty($background_image)){
 			$css.= '--sao-'.$name.'-bg-img: '.$background_image.';';
 	}
	
	
	
	elseif(!empty($gradient) && !empty($background_image)){
		
			$background_image_depth =  !empty($option['background_image_depth'])?$option['background_image_depth']: 'after-background-color';
 			if($background_image_depth=='before-background-color'){
  				$css.= '--sao-'.$name.'-bg-img: '  .$background_image .','.$gradient.';';
 			}else{
 				$css.= '--sao-'.$name.'-bg-img:'.$gradient.','. $background_image .';';
 			} 
  	}
		
		 
 
		
	return $css;
 
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	 Background Svg
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_background_svg" )){
function sao_var_background_svg($style=false,$color=false) {
 
  	$css='';
if($style=="style-1"){
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M18655 1454 c-538 -43 -8576 -664 -14220 -1099 -2398 -184 -4378 -339 -4400 -344 -23 -5 4154 -9 9563 -10 l9602 -1 0 745 0 745 -62 -1 c-35 -1 -252 -17 -483 -35z'/%3E%3C/g%3E%3C/svg%3E";
		
	}elseif($style=="style-2"){
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M0 745 l0 -745 9603 1 c5382 1 9584 5 9562 10 -22 5 -398 36 -835 69 -698 53 -5598 431 -15355 1185 -1601 124 -2925 225 -2943 225 l-32 0 0 -745z'/%3E%3C/g%3E%3C/svg%3E";
 		
	}elseif($style=="style-3"){
		
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M5570 880 c-2181 -340 -4323 -673 -4760 -741 -437 -67 -799 -126 -804 -131 -6 -4 4312 -8 9595 -7 5645 0 9596 4 9584 9 -11 5 -445 75 -965 155 -816 126 -7477 1162 -8295 1290 -159 25 -312 44 -340 44 -27 -1 -1834 -279 -4015 -619z'/%3E%3C/g%3E%3C/svg%3E";
		
	}elseif($style=="style-4"){

		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M0 750 l0 -750 9600 0 9600 0 0 750 c0 691 -1 750 -17 750 -9 0 -2044 -315 -4522 -700 -2478 -386 -4631 -720 -4784 -744 l-279 -43 -991 154 c-1338 207 -7559 1175 -8122 1263 -247 38 -458 70 -467 70 -17 0 -18 -41 -18 -750z'/%3E%3C/g%3E%3C/svg%3E";
	
	
	}elseif($style=="style-5"){
	
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M19179 1454 c-26 -49 -103 -106 -224 -165 -1253 -615 -7134 -1105 -14870 -1239 -1101 -19 -2227 -30 -3157 -30 -612 0 -928 -3 -928 -10 0 -7 3207 -10 9600 -10 l9600 0 0 740 c0 407 -1 740 -3 740 -2 0 -10 -12 -18 -26z'/%3E%3C/g%3E%3C/svg%3E";
	
	}elseif($style=="style-6"){
	
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M0 742 l0 -742 9600 0 c6393 0 9600 3 9600 10 0 7 -316 10 -927 10 -1545 0 -3417 27 -5218 75 -6729 180 -11665 638 -12799 1189 -131 63 -185 101 -226 158 l-30 41 0 -741z'/%3E%3C/g%3E%3C/svg%3E";
		
	}elseif($style=="style-7"){
	
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M8175 1489 c-3880 -93 -7017 -543 -7919 -1137 -151 -100 -256 -230 -256 -319 l0 -33 9600 0 9600 0 0 33 c0 55 -54 149 -123 214 -696 651 -3910 1143 -8117 1243 -472 11 -2303 11 -2785 -1z'/%3E%3C/g%3E%3C/svg%3E";
	
	}elseif($style=="style-8"){
	
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M0 753 l0 -753 9600 0 9600 0 0 753 0 752 -35 -71 c-323 -663 -3337 -1207 -7510 -1354 -1205 -42 -2905 -42 -4110 0 -3400 120 -6078 504 -7106 1020 -217 110 -347 216 -404 334 l-35 71 0 -752z'/%3E%3C/g%3E%3C/svg%3E";
	
	 
	}elseif($style=="style-9"){
		
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M4570 1480 c-1095 -37 -2094 -196 -4110 -654 l-455 -103 -3 -361 -2 -362 9600 0 9600 0 0 368 0 368 -392 -88 c-1633 -365 -2566 -516 -3658 -590 -252 -17 -1243 -17 -1500 0 -703 47 -1316 125 -2100 268 -534 97 -1071 211 -2290 488 -1295 293 -1932 421 -2590 520 -842 126 -1449 169 -2100 146z'/%3E%3C/g%3E%3C/svg%3E";
	
	}elseif($style=="style-10"){
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M13970 1483 c-1103 -59 -1985 -206 -4030 -669 -1219 -277 -1756 -391 -2290 -488 -784 -143 -1397 -221 -2100 -268 -257 -17 -1248 -17 -1500 0 -1092 74 -2025 225 -3657 590 l-393 88 0 -368 0 -368 9600 0 9600 0 -2 362 -3 361 -455 103 c-1796 408 -2711 565 -3695 634 -305 21 -882 34 -1075 23z'/%3E%3C/g%3E%3C/svg%3E";
	
	}elseif($style=="style-11"){

		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M0 745 l0 -745 9600 0 c9318 0 9600 1 9600 18 0 18 -15 19 -212 25 -614 18 -1242 137 -2088 393 -225 69 -778 251 -1280 423 -1147 394 -1835 564 -2505 621 -66 5 -212 10 -325 10 -721 0 -1492 -172 -2830 -631 -1460 -500 -2042 -663 -2716 -758 -349 -50 -442 -56 -844 -56 -402 0 -495 6 -844 56 -674 95 -1256 258 -2716 758 -1006 345 -1652 516 -2230 591 -211 27 -374 40 -502 40 l-108 0 0 -745z'/%3E%3C/g%3E%3C/svg%3E";
	
	}elseif($style=="style-12"){
		
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M6070 1479 c-661 -58 -1354 -230 -2490 -620 -502 -172 -1055 -354 -1280 -423 -846 -256 -1474 -375 -2087 -393 -198 -6 -213 -7 -213 -25 0 -17 282 -18 9600 -18 l9600 0 0 745 0 745 -107 0 c-129 0 -292 -13 -503 -40 -578 -75 -1224 -246 -2230 -591 -1460 -500 -2042 -663 -2716 -758 -349 -50 -442 -56 -844 -56 -402 0 -495 6 -844 56 -674 95 -1256 258 -2716 758 -1147 394 -1835 564 -2505 621 -139 11 -527 11 -665 -1z'/%3E%3C/g%3E%3C/svg%3E";
	
	}elseif($style=="style-13"){
	
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M10 745 l0 -745 9595 0 9595 0 0 745 0 745 -67 0 c-233 0 -624 -80 -984 -200 -317 -105 -597 -221 -1224 -505 -847 -383 -1210 -523 -1633 -630 -500 -127 -947 -149 -1429 -69 -500 82 -947 242 -1958 699 -800 362 -1172 506 -1558 604 -531 135 -933 135 -1464 0 -386 -98 -758 -242 -1558 -604 -847 -383 -1210 -523 -1633 -630 -500 -127 -947 -149 -1429 -69 -500 82 -947 242 -1958 699 -627 284 -907 400 -1224 505 -366 122 -750 200 -993 200 l-78 0 0 -745z'/%3E%3C/g%3E%3C/svg%3E";
	
	}elseif($style=="style-14"){
	
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M4560 1479 c-344 -40 -727 -145 -1176 -322 -243 -96 -404 -166 -859 -372 -847 -383 -1210 -523 -1633 -630 -280 -71 -583 -115 -799 -115 -86 0 -93 -1 -93 -20 0 -20 7 -20 9600 -20 9593 0 9600 0 9600 20 0 18 -7 20 -77 20 -202 0 -513 46 -785 115 -423 107 -786 247 -1633 630 -800 362 -1172 506 -1558 604 -531 135 -933 135 -1464 0 -386 -98 -758 -242 -1558 -604 -847 -383 -1210 -523 -1633 -630 -500 -127 -947 -149 -1429 -69 -500 82 -947 242 -1958 699 -455 206 -616 276 -859 372 -458 181 -834 283 -1191 323 -106 12 -388 11 -495 -1z'/%3E%3C/g%3E%3C/svg%3E";
	
	}elseif($style=="style-15"){
	
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M4585 1473 c-123 -22 -335 -96 -490 -173 -201 -98 -376 -207 -835 -515 -223 -150 -475 -314 -560 -365 -294 -177 -582 -302 -814 -352 -146 -32 -446 -32 -592 0 -309 67 -662 240 -1131 553 l-163 109 0 -365 0 -365 6400 0 6400 0 0 339 0 339 -282 189 c-482 324 -730 461 -988 547 -303 101 -487 101 -790 0 -276 -92 -499 -218 -1110 -629 -223 -150 -475 -314 -560 -365 -294 -177 -582 -302 -814 -352 -146 -32 -446 -32 -592 0 -232 50 -520 175 -814 352 -85 51 -337 215 -560 365 -611 411 -834 537 -1110 629 -225 75 -408 93 -595 59z'/%3E%3C/g%3E%3C/svg%3E";
	
	
	}elseif($style=="style-16"){
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M2935 1465 c-310 -65 -606 -215 -1155 -584 -637 -427 -734 -489 -965 -606 -256 -131 -482 -204 -701 -227 -98 -11 -114 -15 -114 -30 0 -17 396 -18 9600 -18 9333 0 9600 1 9600 18 0 17 -12 20 -102 25 -274 15 -570 117 -920 316 -161 92 -311 188 -765 493 -524 351 -739 470 -1032 569 -425 144 -805 65 -1400 -293 -64 -39 -255 -163 -424 -276 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -169 113 -360 237 -424 276 -595 358 -975 437 -1400 293 -293 -99 -508 -218 -1032 -569 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -169 113 -360 237 -424 276 -525 315 -880 412 -1234 337z'/%3E%3C/g%3E%3C/svg%3E";
	
	}elseif($style=="style-17"){
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M0 745 l0 -745 9600 0 9600 0 0 745 0 745 -54 0 c-74 0 -243 -34 -347 -69 -293 -99 -508 -218 -1032 -569 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -524 351 -739 470 -1032 569 -425 144 -805 65 -1400 -293 -64 -39 -255 -163 -424 -276 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -169 113 -360 237 -424 276 -595 358 -975 437 -1400 293 -293 -99 -508 -218 -1032 -569 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -524 351 -739 470 -1032 569 -92 31 -271 69 -327 69 l-34 0 0 -745z'/%3E%3C/g%3E%3C/svg%3E";
	
	}elseif($style=="style-18"){
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M4775 1465 c-322 -69 -590 -206 -1198 -613 -454 -305 -604 -401 -765 -493 -261 -148 -493 -243 -713 -291 -151 -32 -447 -32 -598 0 -360 78 -663 234 -1328 684 l-173 116 0 -434 0 -434 9600 0 9600 0 0 425 0 426 -172 113 c-291 189 -504 311 -668 381 -442 189 -707 191 -1145 11 -205 -85 -427 -215 -858 -504 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -431 289 -653 419 -858 504 -430 177 -680 177 -1110 0 -205 -85 -427 -215 -858 -504 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -169 113 -360 237 -424 276 -523 314 -876 412 -1224 337z'/%3E%3C/g%3E%3C/svg%3E";
	
	}elseif($style=="style-19"){
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M4560 1479 c-344 -40 -727 -145 -1176 -322 -243 -96 -404 -166 -859 -372 -847 -383 -1210 -523 -1633 -630 -280 -71 -583 -115 -799 -115 -86 0 -93 -1 -93 -20 0 -20 7 -20 9600 -20 9593 0 9600 0 9600 20 0 18 -7 20 -77 20 -202 0 -513 46 -785 115 -423 107 -786 247 -1633 630 -800 362 -1172 506 -1558 604 -531 135 -933 135 -1464 0 -386 -98 -758 -242 -1558 -604 -847 -383 -1210 -523 -1633 -630 -500 -127 -947 -149 -1429 -69 -500 82 -947 242 -1958 699 -455 206 -616 276 -859 372 -458 181 -834 283 -1191 323 -106 12 -388 11 -495 -1z'/%3E%3C/g%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M10 745 l0 -745 9595 0 9595 0 0 745 0 745 -67 0 c-233 0 -624 -80 -984 -200 -317 -105 -597 -221 -1224 -505 -847 -383 -1210 -523 -1633 -630 -500 -127 -947 -149 -1429 -69 -500 82 -947 242 -1958 699 -800 362 -1172 506 -1558 604 -531 135 -933 135 -1464 0 -386 -98 -758 -242 -1558 -604 -847 -383 -1210 -523 -1633 -630 -500 -127 -947 -149 -1429 -69 -500 82 -947 242 -1958 699 -627 284 -907 400 -1224 505 -366 122 -750 200 -993 200 l-78 0 0 -745z'/%3E%3C/g%3E%3C/svg%3E";
		
		
	}elseif($style=="style-20"){
		$css.="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920.000000 150.000000' preserveAspectRatio='xMidYMid meet'%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M2935 1465 c-310 -65 -606 -215 -1155 -584 -637 -427 -734 -489 -965 -606 -256 -131 -482 -204 -701 -227 -98 -11 -114 -15 -114 -30 0 -17 396 -18 9600 -18 9333 0 9600 1 9600 18 0 17 -12 20 -102 25 -274 15 -570 117 -920 316 -161 92 -311 188 -765 493 -524 351 -739 470 -1032 569 -425 144 -805 65 -1400 -293 -64 -39 -255 -163 -424 -276 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -169 113 -360 237 -424 276 -595 358 -975 437 -1400 293 -293 -99 -508 -218 -1032 -569 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -169 113 -360 237 -424 276 -525 315 -880 412 -1234 337z'/%3E%3C/g%3E%3Cg transform='translate(0.000000,150.000000) scale(0.100000,-0.100000)' fill='".urlencode($color)."' stroke='none'%3E%3Cpath d='M0 745 l0 -745 9600 0 9600 0 0 745 0 745 -54 0 c-74 0 -243 -34 -347 -69 -293 -99 -508 -218 -1032 -569 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -524 351 -739 470 -1032 569 -425 144 -805 65 -1400 -293 -64 -39 -255 -163 -424 -276 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -169 113 -360 237 -424 276 -595 358 -975 437 -1400 293 -293 -99 -508 -218 -1032 -569 -739 -496 -962 -623 -1268 -726 -198 -66 -290 -80 -509 -80 -219 0 -311 14 -509 80 -306 103 -529 230 -1268 726 -524 351 -739 470 -1032 569 -92 31 -271 69 -327 69 l-34 0 0 -745z'/%3E%3C/g%3E%3C/svg%3E";

	} 


	return $css;
	
	
	
}
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	 Background Pattern Image
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_background_pattern_image" )){
function sao_var_background_pattern_image( $name=false,$option =false) {
	$style = !empty($option['background_color_style'])?$option['background_color_style']:'';
	$background_color = !empty($option['background_color'])?$option['background_color']:'';

 	$first=!empty($background_color['first'])?$background_color['first']:'#ffffff';
 	$second=!empty($background_color['second'])?$background_color['second']:'rgba(150,150,150,0.2)';
 	$third=!empty($background_color['third'])?$background_color['third']:'rgba(150,150,150,0.4)';
 	$css='';
	
	$css.= '--sao-'.$name.'-bg-cr: '.esc_html($first).';';
	$pattern='';
	$pattern_repect='';
	$pattern_attachment='';
  	$pattern_size='auto';	
	if($style=="formal"){
			$url="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='18' viewBox='0 0 100 18'%3E%3Cpath fill='".urlencode($second)."' fill-opacity='0.4' d='M61.82 18c3.47-1.45 6.86-3.78 11.3-7.34C78 6.76 80.34 5.1 83.87 3.42 88.56 1.16 93.75 0 100 0v6.16C98.76 6.05 97.43 6 96 6c-9.59 0-14.23 2.23-23.13 9.34-1.28 1.03-2.39 1.9-3.4 2.66h-7.65zm-23.64 0H22.52c-1-.76-2.1-1.63-3.4-2.66C11.57 9.3 7.08 6.78 0 6.16V0c6.25 0 11.44 1.16 16.14 3.42 3.53 1.7 5.87 3.35 10.73 7.24 4.45 3.56 7.84 5.9 11.31 7.34zM61.82 0h7.66a39.57 39.57 0 0 1-7.34 4.58C57.44 6.84 52.25 8 46 8S34.56 6.84 29.86 4.58A39.57 39.57 0 0 1 22.52 0h15.66C41.65 1.44 45.21 2 50 2c4.8 0 8.35-.56 11.82-2z'%3E%3C/path%3E%3C/svg%3E";
			
			
			$pattern ='url("'.$url.'")';	
			$pattern_repect='repeat';			
			
	}elseif($style=="texture"){
			$url="data:image/svg+xml,%3Csvg  xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='".urlencode($second)."' fill-opacity='0.4' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';	
		
	}elseif($style=="hexagons"){
		
			$url="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='".urlencode($second)."' fill-opacity='0.4' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E";
 
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';			
	}
	 
	elseif($style=="charlie-brown"){

			$url="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='charlie-brown' fill='".urlencode($second)."' fill-opacity='0.4'%3E%3Cpath d='M9.8 12L0 2.2V.8l10 10 10-10v1.4L10.2 12h-.4zm-4 0L0 6.2V4.8L7.2 12H5.8zm8.4 0L20 6.2V4.8L12.8 12h1.4zM9.8 0l.2.2.2-.2h-.4zm-4 0L10 4.2 14.2 0h-1.4L10 2.8 7.2 0H5.8z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';	
					
	}elseif($style=="overlapping-hexagons"){

			$url="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='40' viewBox='0 0 50 40'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='".urlencode($second)."' fill-opacity='0.4'%3E%3Cpath d='M40 10L36.67 0h-2.11l3.33 10H20l-2.28 6.84L12.11 0H10l6.67 20H10l-2.28 6.84L2.11 10 5.44 0h-2.1L0 10l6.67 20-3.34 10h2.11l2.28-6.84L10 40h20l2.28-6.84L34.56 40h2.1l-3.33-10H40l2.28-6.84L47.89 40H50l-6.67-20L50 0h-2.1l-5.62 16.84L40 10zm1.23 10l-2.28-6.84L34 28h4.56l2.67-8zm-10.67 8l-2-6h-9.12l2 6h9.12zm-12.84-4.84L12.77 38h15.79l2.67-8H20l-2.28-6.84zM18.77 20H30l2.28 6.84L37.23 12H21.44l-2.67 8zm-7.33 2H16l-4.95 14.84L8.77 30l2.67-8z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';	
			
					
	}elseif($style=="tiny-checkers"){
			$url="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Cg fill='".urlencode($second)."' fill-opacity='0.4'%3E%3Cpath fill-rule='evenodd' d='M0 0h4v4H0V0zm4 4h4v4H4V4z'/%3E%3C/g%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';	
			
					
	}elseif($style=="bubbles"){
		
			$url="data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='".urlencode($second)."' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E";
		
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';		
		
	}elseif($style=="wiggle"){
			$url="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='52' height='26' viewBox='0 0 52 26'  %3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='".urlencode($second)."' fill-opacity='0.4'%3E%3Cpath d='M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E";
			
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';	
	
	}elseif($style=="diagonal-stripes"){
	
			$url="data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='".urlencode($second)."' fill-opacity='0.4' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat=';	
			 
	}elseif($style=="rain"){
	
			$url="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='16' viewBox='0 0 12 16'  %3E%3Cpath d='M4 .99C4 .445 4.444 0 5 0c.552 0 1 .45 1 .99v4.02C6 5.555 5.556 6 5 6c-.552 0-1-.45-1-.99V.99zm6 8c0-.546.444-.99 1-.99.552 0 1 .45 1 .99v4.02c0 .546-.444.99-1 .99-.552 0-1-.45-1-.99V8.99z' fill='".urlencode($second)."' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';	
	
	}elseif($style=="stripes"){
			$url=" data:image/svg+xml,%3Csvg width='40' height='1' viewBox='0 0 40 1' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0h20v1H0z' fill='".urlencode($second)."' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E" ;
 			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';	
		
	}elseif($style=="bank-note"){
			$url="data:image/svg+xml,%3Csvg width='100' height='20' viewBox='0 0 100 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M21.184 20c.357-.13.72-.264 1.088-.402l1.768-.661C33.64 15.347 39.647 14 50 14c10.271 0 15.362 1.222 24.629 4.928.955.383 1.869.74 2.75 1.072h6.225c-2.51-.73-5.139-1.691-8.233-2.928C65.888 13.278 60.562 12 50 12c-10.626 0-16.855 1.397-26.66 5.063l-1.767.662c-2.475.923-4.66 1.674-6.724 2.275h6.335zm0-20C13.258 2.892 8.077 4 0 4V2c5.744 0 9.951-.574 14.85-2h6.334zM77.38 0C85.239 2.966 90.502 4 100 4V2c-6.842 0-11.386-.542-16.396-2h-6.225zM0 14c8.44 0 13.718-1.21 22.272-4.402l1.768-.661C33.64 5.347 39.647 4 50 4c10.271 0 15.362 1.222 24.629 4.928C84.112 12.722 89.438 14 100 14v-2c-10.271 0-15.362-1.222-24.629-4.928C65.888 3.278 60.562 2 50 2 39.374 2 33.145 3.397 23.34 7.063l-1.767.662C13.223 10.84 8.163 12 0 12v2z' fill='".urlencode($second)."' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';		
		
	}elseif($style=="diagonal-lines"){

			$url="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='6' height='6' viewBox='0 0 6 6' %3E%3Cg fill='".urlencode($second)."' fill-opacity='0.4' fill-rule='evenodd'%3E%3Cpath d='M5 0h1L0 6V5zM6 5v1H5z'/%3E%3C/g%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';			
		
	}elseif($style=="polka-dots"){
		
			$url="data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='".urlencode($second)."' fill-opacity='0.4' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='3'/%3E%3Ccircle cx='13' cy='13' r='3'/%3E%3C/g%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';			
		
	}elseif($style=="overlapping-diamonds"){

			$url="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='48' height='64' viewBox='0 0 48 64' %3E%3Cpath d='M48 28v-4L36 12 24 24 12 12 0 24v4l4 4-4 4v4l12 12 12-12 12 12 12-12v-4l-4-4 4-4zM8 32l-6-6 10-10 10 10-6 6 6 6-10 10L2 38l6-6zm12 0l4-4 4 4-4 4-4-4zm12 0l-6-6 10-10 10 10-6 6 6 6-10 10-10-10 6-6zM0 16L10 6 4 0h4l4 4 4-4h4l-6 6 10 10L34 6l-6-6h4l4 4 4-4h4l-6 6 10 10v4L36 8 24 20 12 8 0 20v-4zm0 32l10 10-6 6h4l4-4 4 4h4l-6-6 10-10 10 10-6 6h4l4-4 4 4h4l-6-6 10-10v-4L36 56 24 44 12 56 0 44v4z' fill='".urlencode($second)."' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';			
		
	 
	  
	} elseif($style=="wavey-fingerprint"){
		//2
		
 		 $url="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='250' height='30' viewBox='0 0 1000 120'%3E%3Cg fill='none' stroke='".urlencode($second)."' stroke-width='10' %3E%3Cpath d='M-500 75c0 0 125-30 250-30S0 75 0 75s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3Cpath d='M-500 45c0 0 125-30 250-30S0 45 0 45s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3Cpath d='M-500 105c0 0 125-30 250-30S0 105 0 105s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3Cpath d='M-500 15c0 0 125-30 250-30S0 15 0 15s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3Cpath d='M-500-15c0 0 125-30 250-30S0-15 0-15s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3Cpath d='M-500 135c0 0 125-30 250-30S0 135 0 135s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/%3E%3C/g%3E%3C/svg%3E";
	 
 
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';	
			
			
	} elseif($style=="endless-constellation"){
	//3
	  $url= "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400' viewBox='0 0 800 800'%3E%3Cg fill='none' stroke='".urlencode($second)."' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3Cg fill='".urlencode($third)."'%3E%3Ccircle cx='769' cy='229' r='5'/%3E%3Ccircle cx='539' cy='269' r='5'/%3E%3Ccircle cx='603' cy='493' r='5'/%3E%3Ccircle cx='731' cy='737' r='5'/%3E%3Ccircle cx='520' cy='660' r='5'/%3E%3Ccircle cx='309' cy='538' r='5'/%3E%3Ccircle cx='295' cy='764' r='5'/%3E%3Ccircle cx='40' cy='599' r='5'/%3E%3Ccircle cx='102' cy='382' r='5'/%3E%3Ccircle cx='127' cy='80' r='5'/%3E%3Ccircle cx='370' cy='105' r='5'/%3E%3Ccircle cx='578' cy='42' r='5'/%3E%3Ccircle cx='237' cy='261' r='5'/%3E%3Ccircle cx='390' cy='382' r='5'/%3E%3C/g%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';	
	
	
	} elseif($style=="zig-zag"){

 $url= "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cpolygon fill='".urlencode($second)."' fill-opacity='.4' points='120 0 120 60 90 30 60 0 0 0 0 0 60 60 0 120 60 120 90 90 120 60 120 0'/%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';	
	

 
	} elseif($style=="repeating-chevrons"){
		 $url= "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Cpolygon fill='".urlencode($second)."' points='120 120 60 120 90 90 120 60 120 0 120 0 60 60 0 0 0 60 30 90 60 120 120 120 '/%3E%3C/svg%3E";
			$pattern =' url("'.$url.'")';
			$pattern_repect='repeat';	
	
	
	
	} elseif($style=="sun-tornado"){
		//3
		 $url= "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'%3E%3Cdefs%3E%3CradialGradient id='a' gradientUnits='objectBoundingBox'%3E%3Cstop offset='0' stop-color='".urlencode($third)."'/%3E%3Cstop offset='1' stop-color='".urlencode($first)."'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='750' x2='1550' y2='750'%3E%3Cstop offset='0' stop-color='".urlencode($second)."'/%3E%3Cstop offset='1' stop-color='".urlencode($first)."'/%3E%3C/linearGradient%3E%3Cpath id='s' fill='url(%23b)' d='M1549.2 51.6c-5.4 99.1-20.2 197.6-44.2 293.6c-24.1 96-57.4 189.4-99.3 278.6c-41.9 89.2-92.4 174.1-150.3 253.3c-58 79.2-123.4 152.6-195.1 219c-71.7 66.4-149.6 125.8-232.2 177.2c-82.7 51.4-170.1 94.7-260.7 129.1c-90.6 34.4-184.4 60-279.5 76.3C192.6 1495 96.1 1502 0 1500c96.1-2.1 191.8-13.3 285.4-33.6c93.6-20.2 185-49.5 272.5-87.2c87.6-37.7 171.3-83.8 249.6-137.3c78.4-53.5 151.5-114.5 217.9-181.7c66.5-67.2 126.4-140.7 178.6-218.9c52.3-78.3 96.9-161.4 133-247.9c36.1-86.5 63.8-176.2 82.6-267.6c18.8-91.4 28.6-184.4 29.6-277.4c0.3-27.6 23.2-48.7 50.8-48.4s49.5 21.8 49.2 49.5c0 0.7 0 1.3-0.1 2L1549.2 51.6z'/%3E%3Cg id='g'%3E%3Cuse href='%23s' transform='scale(0.12) rotate(60)'/%3E%3Cuse href='%23s' transform='scale(0.2) rotate(10)'/%3E%3Cuse href='%23s' transform='scale(0.25) rotate(40)'/%3E%3Cuse href='%23s' transform='scale(0.3) rotate(-20)'/%3E%3Cuse href='%23s' transform='scale(0.4) rotate(-30)'/%3E%3Cuse href='%23s' transform='scale(0.5) rotate(20)'/%3E%3Cuse href='%23s' transform='scale(0.6) rotate(60)'/%3E%3Cuse href='%23s' transform='scale(0.7) rotate(10)'/%3E%3Cuse href='%23s' transform='scale(0.835) rotate(-40)'/%3E%3Cuse href='%23s' transform='scale(0.9) rotate(40)'/%3E%3Cuse href='%23s' transform='scale(1.05) rotate(25)'/%3E%3Cuse href='%23s' transform='scale(1.2) rotate(8)'/%3E%3Cuse href='%23s' transform='scale(1.333) rotate(-60)'/%3E%3Cuse href='%23s' transform='scale(1.45) rotate(-30)'/%3E%3Cuse href='%23s' transform='scale(1.6) rotate(10)'/%3E%3C/g%3E%3C/defs%3E%3Cg transform='rotate(0 0 0)'%3E%3Cg transform='rotate(0 0 0)'%3E%3Ccircle fill='url(%23a)' r='3000'/%3E%3Cg opacity='0.5'%3E%3Ccircle fill='url(%23a)' r='2000'/%3E%3Ccircle fill='url(%23a)' r='1800'/%3E%3Ccircle fill='url(%23a)' r='1700'/%3E%3Ccircle fill='url(%23a)' r='1651'/%3E%3Ccircle fill='url(%23a)' r='1450'/%3E%3Ccircle fill='url(%23a)' r='1250'/%3E%3Ccircle fill='url(%23a)' r='1175'/%3E%3Ccircle fill='url(%23a)' r='900'/%3E%3Ccircle fill='url(%23a)' r='750'/%3E%3Ccircle fill='url(%23a)' r='500'/%3E%3Ccircle fill='url(%23a)' r='380'/%3E%3Ccircle fill='url(%23a)' r='250'/%3E%3C/g%3E%3Cg transform='rotate(0 0 0)'%3E%3Cuse href='%23g' transform='rotate(10)'/%3E%3Cuse href='%23g' transform='rotate(120)'/%3E%3Cuse href='%23g' transform='rotate(240)'/%3E%3C/g%3E%3Ccircle fill-opacity='0.1' fill='url(%23a)' r='3000'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E";
 
	$pattern =' url("'.$url.'")';
	$pattern_repect='repeat;';	
 	$pattern_size='cover';	

	
	} elseif($style=="dalmatian-spots"){
	$url="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='900' height='600' viewBox='0 0 900 600'%3E%3Cg %3E%3Cpath fill='".urlencode($second)."' d='M306.9 210.2c-1.2-22.8-13.5-42.7-40.8-41.1c-18.3 1.1-35.9 3.6-47.5 20.1c-5.2 7.4-10.6 15.6-11.4 24.9c-0.5 5.8 0.2 12 1.2 17.7c9 49.6 85.3 46.7 96.4 0.2C306.6 224.9 307.3 217.4 306.9 210.2z'/%3E%3Cpath fill='".urlencode($second)."' d='M137.2 481.3c-13.2-9.9-31.2-13.3-48.5-3.2c-12.6 7.3-19.1 17.4-21.1 28.2c-0.7 2.4-1.2 4.7-1.5 7c-8.2 35.4 33.7 78.9 72.6 48.6C167.6 539.3 164.4 501.6 137.2 481.3z'/%3E%3Cg fill='".urlencode($second)."' %3E%3Cpath d='M547.9 588.3c-7.1-34.2-61.6-52.7-87.5-16.9c-11.2 11.3-12.7 26.3-7.6 39.7c1.8 7.5 5.5 13.9 10.4 19.1c19.4 20.3 53.4 26.2 72.8 1.9C545.9 619.7 553.9 604.2 547.9 588.3z'/%3E%3Cpath d='M547.9-11.7c-7.1-34.2-61.6-52.7-87.5-16.9c-11.2 11.3-12.7 26.3-7.6 39.7c1.8 7.5 5.5 13.9 10.4 19.1c19.4 20.3 53.4 26.2 72.8 1.9C545.9 19.7 553.9 4.2 547.9-11.7z'/%3E%3C/g%3E%3Cpath fill='".urlencode($second)."' d='M849.7 498c-22.3 1.3-43.2 7.5-52.7 29.5c-3.3 7.7-7.3 15.7-7 24.3c2 55.6 86.1 63.4 98.8 10.1C890.6 554.6 877.3 496.4 849.7 498z'/%3E%3Cpath fill='".urlencode($second)."' d='M762 291.1c-8.2-6.1-19.1-1.9-27.3 2.2c-7.4 3.7-14.4 8.2-21.6 12.1c-6.6 3.6-13.7 7-19.8 11.5c-18.3 13.5-2.5 45.1 10.6 56.4c17 14.6 41.6 15.9 59.6 2.1C794.1 351.8 790.7 312.4 762 291.1z'/%3E%3Cpath fill='".urlencode($second)."' d='M863.3 170.3c-4.5-15.7-17.9-28.8-33.4-34.4c-16.2-5.8-38.4-2.9-51.8 8.1c-14.9 12.2-14.5 31.7-11.4 49c9.6 53.9 84.3 47.7 97-1.3C865.6 184.4 865.3 177.1 863.3 170.3z'/%3E%3Cpath fill='".urlencode($second)."' d='M598.4 86.1c-10.2 15.5-9.3 34.2-0.9 50.4c2.6 5 6.2 9.5 10.4 13.2c14.2 12.6 35.5 17.1 53.2 9.5c14.3-6.1 23.9-19.8 26.7-34.7C707.4 75.6 629.7 38.5 598.4 86.1z'/%3E%3Cpath fill='".urlencode($second)."' d='M509.8 413.3c-17.3 22.6-11.8 59 17.5 75.3c22.6 12.6 52.2 1.7 63.8-20.9c21.4-42-9.2-85-56.5-71C523.8 399.9 515.6 405.8 509.8 413.3z'/%3E%3Cpath fill='".urlencode($second)."' d='M607.4 232.3c-0.5-0.4-1-0.8-1.4-1.2c-16.5-12.8-30.2-22.1-50.3-8.4c-15.5 10.6-29 30.3-31.4 49.1c-4.2 33.6 30.6 46.9 58.6 40.6C619.6 304.2 640.6 259.5 607.4 232.3z'/%3E%3Cpath fill='".urlencode($second)."' d='M410.6 95c-36.5 1.3-74.1 41.8-43.1 74.3c19.8 20.9 54.4 20.7 74.6 0.5c20.5-20.4 18.4-53.1-6.9-68.6C427.7 96.6 419.2 94.7 410.6 95z'/%3E%3Cpath fill='".urlencode($second)."' d='M291.3 23c-0.1-0.1-0.1-0.1-0.2-0.2c-14.2-16.9-38.3-25.6-61.4-12.3c-13.5 7.8-20.5 18.7-22.7 30.2c-5.7 18 1.5 34.2 14.2 44.8c15.4 16.8 40.3 24.1 64.2 5.5c9.6-7.4 15-16.3 17.2-25.4C308.6 48.8 302.7 33.6 291.3 23z'/%3E%3Cpath fill='".urlencode($second)."' d='M419.1 440.6c-16.9-14.5-41.8-21.5-61.7-9.5c-18.3 11.1-1 100.1 32.2 93.5c23.8-4.7 45.3-22.4 48.1-44.3C439.6 466.1 431.5 451.3 419.1 440.6z'/%3E%3Cpath fill='".urlencode($second)."' d='M127 227c-12-4.3-25.4-2.1-38.7 11.4C71 255.9 61.4 286.1 80.4 306c21.3 22.3 86.9 27.5 89.6-14.9c0.5-8.9-2.7-17.9-6.5-25.8C155.1 248.3 142.1 232.5 127 227z'/%3E%3Cpath fill='".urlencode($second)."' d='M281.5 407.6c-0.3-0.4-0.7-0.7-1-1c-19.3-17.6-59.1-0.6-78.1 10.3c-23.8 13.7-8.2 41.1 5.4 55.8c16.3 17.6 42.7 25.2 68 5.8C291.3 466.6 295.5 422.7 281.5 407.6z'/%3E%3Cpath fill='".urlencode($second)."' d='M137.9 110.2c-10.4-25.7-43.3-32.1-67-23.6C60.1 90.4 50 97.8 45.1 108.6c-21.2 47.3 44.9 81.1 78.5 51c9.5-8.5 17.3-18.9 17.4-32.4C141 120.8 139.9 115.1 137.9 110.2z'/%3E%3Cpath fill='".urlencode($second)."' d='M344.3 284.7c-10 14.9-9.2 34.1-0.9 49.5c3.4 6.3 8.6 13.8 16.1 15.8c7.1 1.9 15.1 0.7 22.1-0.6c15.7-3 45.6-10.5 52.3-26.8C453.5 274.4 375.6 237.9 344.3 284.7z'/%3E%3Cg fill='".urlencode($second)."' %3E%3Cpath d='M-29.2 431.8c23.4 12.4 54.1 1.7 66.1-20.6c9.6-17.8 10.4-40.4-3.3-56.5c-10.5-12.4-44.2-25.8-58.5-11.3c-3 3.1-5.1 7.1-6.9 10.9C-41.1 373.2-55 418.1-29.2 431.8z'/%3E%3Cpath d='M870.8 431.8c23.4 12.4 54.1 1.7 66.1-20.6c9.6-17.8 10.4-40.4-3.3-56.5c-10.5-12.4-44.2-25.8-58.5-11.3c-3 3.1-5.1 7.1-6.9 10.9C858.9 373.2 845 418.1 870.8 431.8z'/%3E%3C/g%3E%3Cpath fill='".urlencode($second)."' d='M671.4 460.5c-10.7 1.7-20.2 8.3-26.2 22.2c-21.5 49.5 45.4 84.9 79.4 53.3c16.3-15.2 24-31 6.5-48.1c-5.9-5.8-12.3-11-19.1-15.6C699.5 463.7 684.5 458.4 671.4 460.5z'/%3E%3C/g%3E%3C/svg%3E";
	$pattern =' url("'.$url.'")';
	$pattern_repect='repeat';	
  	}
 
	
	
	if( !empty($option['background_image'])){
		$thumbnail = !empty($option['background_image'])? wp_get_attachment_image_src($option['background_image'], 'full'):'';
		$background_url = !empty($thumbnail[0])? $thumbnail[0]:'';
		$background_image =!empty($background_url)?' url("'.esc_url($background_url).'")':'';
		
			
			if(!empty($option['background_image_position'])){
				$css.=' --sao-'.$name.'-bg-pos:'.sao_builder_background_image_position($option).'; ';	 
			}  			
		
		 
	  
 		 
		
		
		
		
 	}else{
		$background_image='';
 	}
	
	
	
	if(!empty($pattern) && empty($background_image)){
 			$css.=' --sao-'.$name.'-bg-img: '.$pattern.';';
			
			$css.=' --sao-'.$name.'-bg-rp: '.$pattern_repect.'; ';	 
				
 	}
	elseif( empty($pattern) &&  !empty($background_image)){
 			$css.=' --sao-'.$name.'-bg-img: '.$background_image.';';
 
			
			if(!empty($option['background_image_repeat'])){
				$css.=' --sao-'.$name.'-bg-rp: '.$option['background_image_repeat'].'; ';	 
			} 
			
 			if(!empty($option['background_image_size'])){
				$css.=' --sao-'.$name.'-bg-sz: '.$option['background_image_size'].';';	 
			}  		
			
			
 	}
	elseif(!empty($pattern) && !empty($background_image)){
		
			$background_depth =  !empty($option['background_image_depth'])?$option['background_image_depth']: 'after-background-color';
 			if($background_depth=='after-background-color'){
				
				
				 $css.= 'background-image:'.$background_image.', '.$pattern.';';
				if(!empty($option['background_image_repeat'])){
					 $css.=' --sao-'.$name.'-bg-rp: '.$option['background_image_repeat'].','.$pattern_repect.'; ';	 
				} 
				if(!empty($option['background_image_size'])){
					  $css.=' --sao-'.$name.'-bg-sz:'.$option['background_image_size'].','.$pattern_size.';';	 
				} 
			
			}else{
			 $css.= '--sao-'.$name.'-bg-img:'.$pattern.', '.$background_image.';';
				
				if(!empty($option['background_image_repeat'])){
					 $css.=' --sao-'.$name.'-bg-rp:'.$pattern_repect.','.$option['background_image_repeat'].'; ';	 
				} 
				if(!empty($option['background_image_size'])){
					 $css.=' --sao-'.$name.'-bg-sz:'.$pattern_size.','.$option['background_image_size'].';';	 
				} 		
			 
			
			} 
		
 			
 
			
  		
  
			
 	}
			
	
	
	
	
	return $css;
	
	
} 
}
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																	 Background SVG Height
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_var_background_svg_height" )){
function sao_var_background_svg_height($height=false,$position=false) {
	$css='';
	if($height=='50' && $position=='top')	{
	$css='--sao-tp-tf: scale(1,-0.331);--sao-tp-fa: -51px;';
	}
	if($height=='100' && $position=='top')	{
	$css='--sao-tp-tf: scale(1,-0.661);--sao-tp-fa: -26px;';
	}	
	if($height=='200' && $position=='top')	{
	$css='--sao-tp-tf: scale(1,-1.331) ;--sao-tp-fa: 24px;';
	}	
	if($height=='250' && $position=='top')	{
	$css='--sao-tp-tf: scale(1,-1.661) ;--sao-tp-fa: 49px;';
	}
	if($height=='300' && $position=='top')	{
	$css='--sao-tp-tf: scale(1,-1.2) ;--sao-tp-fa: 74px;';
	}	
	
			
	
	
	if($height=='50' && $position=='bottom')	{
	$css='--sao-bm-tf: scale(1,0.331);--sao-bm-fa: -51px;';
	}
	if($height=='100' && $position=='bottom')	{
	$css='--sao-bm-tf: scale(1,0.661) ;--sao-bm-fa: -26px ;';
	}	
	if($height=='200' && $position=='bottom')	{
	$css='--sao-bm-tf: scale(1,1.331) ;--sao-bm-fa: 24px ;';
	}	
	if($height=='250' && $position=='bottom')	{
	$css='--sao-bm-tf: scale(1,1.661) ;--sao-bm-fa: 49px;';
	}	
	if($height=='300' && $position=='bottom')	{
	$css='--sao-bm-tf: scale(1,1.2) ;--sao-bm-fa: 74px;';
	}		
	
 
	return $css;
}
}
	if ( !function_exists ( "sao_builder_background_image_position" )){
function sao_builder_background_image_position($option) {
	$css ="";
	
	
	if(!empty($option['background_image_position'])){
		$position = $option['background_image_position'];
		
		$unit = !empty($option['background_location']['unit']) ?$option['background_location']['unit'] : 'px';
		$top = intval(isset($option['background_location']['top'])) ? $option['background_location']['top'].$unit.'': '';
		$left = intval(isset($option['background_location']['left'])) ? $option['background_location']['left'].$unit.'' : '';
		$bottom = intval(isset($option['background_location']['bottom'])) ? $option['background_location']['bottom'].$unit.'' : '';
		$right = intval(isset($option['background_location']['right'])) ? $option['background_location']['right'].$unit.'' : '';
 	 
 		
		if($position=='center'){
			$css="center";		
				
		}elseif($position=='left'){
			
			$css=sao_builder_rtl_left() .' '.$left.' center';
			
		}elseif($position=='left-top'){
			
			$css=sao_builder_rtl_left()." ".$left." top ".$top." ";
			
		}elseif($position=='left-bottom'){
			
			$css=sao_builder_rtl_left()." ".$left." bottom  ".$bottom." "  ;
 			
		}elseif($position=='left-center'){
			
			$css=sao_builder_rtl_left()." ".$left." center";

 		}elseif($position=='right'){
			
			$css=sao_builder_rtl_right()." ".$right." center" ;
 
		}elseif($position=='right-top'){

			$css=sao_builder_rtl_right()." top ".$top." center";
 			
		}elseif($position=='top'){
			
			$css="top ".$top." center";
			
		}elseif($position=='top-center'){
			
			$css="top ".$top." center";

			
		}elseif($position=='bottom'){
			
			$css="bottom  ".$bottom." center ";
		}elseif($position=='bottom-center'){
			
			$css="bottom  ".$bottom." center ";
 
		}
		
	}
	return $css;
}
	}
?>