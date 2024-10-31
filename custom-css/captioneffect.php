<?php

 
 
/*****************************************************************************************************************************************************
******************************************************************************************************************************************************
 
																  Caption Effect
 
*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ( !function_exists ( "sao_caption_effect" )){

function sao_caption_effect($option =false) {
	$css='';
 
	 global $sao_caption_effect;
	$caption_effect = !empty($option["caption_effect"])?$option["caption_effect"]:'';
 	/*--------------------------------------------------------------------------*/
	/* Image Slider Up
	/*--------------------------------------------------------------------------*/
	if( $caption_effect=='imghvr-slide-up'){
		$sao_caption_effect['imghvr-slide-up']=true;
 	 
	}elseif( $caption_effect=='imghvr-slide-down'){
		$sao_caption_effect['imghvr-slide-down']=true;
 
	}elseif( $caption_effect=='imghvr-slide-left'){
		$sao_caption_effect['imghvr-slide-left']=true;
 	 
	}elseif( $caption_effect=='imghvr-slide-right'){
		$sao_caption_effect['imghvr-slide-right']=true;
	 
	}elseif( $caption_effect=='imghvr-flip-horiz'){
		$sao_caption_effect['imghvr-flip-horiz']=true;
	}elseif( $caption_effect=='imghvr-flip-vert'){
		$sao_caption_effect['imghvr-flip-vert']=true;
	 
	}elseif( $caption_effect=='imghvr-slide-right'){
		$sao_caption_effect['imghvr-flip-diag-1']=true;
	 
	}elseif( $caption_effect=='imghvr-flip-diag-2'){
		$sao_caption_effect['imghvr-flip-diag-2']=true;
	 
	}elseif( $caption_effect=='imghvr-zoom-in'){
		$sao_caption_effect['imghvr-zoom-in']=true;
 
	}elseif( $caption_effect=='imghvr-zoom-out'){
		$sao_caption_effect['imghvr-zoom-out']=true;
		 
	}elseif( $caption_effect=='imghvr-layla'){
		$sao_caption_effect['imghvr-layla']=true;
		 
	}elseif( $caption_effect=='imghvr-oscar'){
		$sao_caption_effect['imghvr-oscar']=true;
 		 
	}elseif( $caption_effect=='imghvr-bubba'){
		$sao_caption_effect['imghvr-bubba']=true;
	 
	}elseif( $caption_effect=='imghvr-chico'){
		$sao_caption_effect['imghvr-chico']=true;
 	}elseif(  $caption_effect=='imghvr-selena'){
		$sao_caption_effect['imghvr-selena']=true;
	 
	}elseif( $caption_effect=='imghvr-ming'){
		$sao_caption_effect['imghvr-ming']=true;
	}
 
 }
function sao_caption_effect_hover_css($option =false,$not_return=false) {
	$css='';
 
	 global $sao_caption_effect;
	 if(!empty($sao_caption_effect)){
 	/*--------------------------------------------------------------------------*/
	/* Image Slider Up
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-slide-up'])){
  		$css.=" 
				.imghvr-slide-up  figcaption {
					transform: translateY(100%);
				}
				.imghvr-slide-up figure:hover figcaption {
					transform: translate(0, 0);
				}";
	}
 	/*--------------------------------------------------------------------------*/
	/* Image Slider Down
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-slide-down'])){
 
		$css.="	
				.imghvr-slide-down figcaption {
					transform: translateY(-100%);
				}
				.imghvr-slide-down figure:hover figcaption {
						transform: translate(0, 0);
				}";	
	}
 
 	/*--------------------------------------------------------------------------*/
	/* Image Slider Left
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-slide-left'])){
  		$css.="
				.imghvr-slide-left figure:hover figcaption {
					transform: translate(0, 0);
				}
				.imghvr-slide-left figcaption {
					transform: translateX(100%);
				}";
	}
 	/*--------------------------------------------------------------------------*/
	/* Image Slider Right
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-slide-right'])){
 		$css.="
				.imghvr-slide-right figcaption {
					transform: translateX(-100%);
				}
				.imghvr-slide-right figure:hover figcaption {
					transform: translate(0, 0);
				}";
	}
 

 
 	/*--------------------------------------------------------------------------*/
	/* Image Flip Horiz
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-flip-horiz'])){
 		$css.="
				.imghvr-flip-horiz figcaption {
					transform: rotateX(90deg);
					transform-origin: 0% 50%;
				}
			 	.imghvr-flip-horiz figure:hover figcaption {
					transform: rotateX(0deg);
				}";
		}
 	/*--------------------------------------------------------------------------*/
	/* Image Flip Vert
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-flip-vert'])){
 		$css.="
				.imghvr-flip-vert figcaption {
					transform: rotateY(90deg);
					transform-origin: 50% 0%;
				} 
  
				.imghvr-flip-vert figure:hover figcaption {
					transform: rotateY(0deg);
				}";
	}
 	/*--------------------------------------------------------------------------*/
	/* Image Flip Diag 1
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-flip-diag-1'])){
 		$css.="
				.imghvr-flip-diag-1 figcaption {
					opacity:0;
					transform: rotate3d(1, -1, 0, 100deg);
				}
				.imghvr-flip-diag-1 figure:hover figcaption {
					opacity:1;
				 transform: rotate3d(0, 0, 0, 0deg);
				}";
	}
 	/*--------------------------------------------------------------------------*/
	/* Image Flip Diag 2
	/*--------------------------------------------------------------------------*/
 
	if(!empty($sao_caption_effect['imghvr-flip-diag-2'])){
 		$css.="
				.imghvr-flip-diag-2 figcaption {
					opacity:0;
					transform: rotate3d(1, 1, 0, 100deg);
				}
				.imghvr-flip-diag-2 figure:hover figcaption {
					opacity:1;
					transform: rotate3d(0, 0, 0, 0deg);
				}";
	}
 	/*--------------------------------------------------------------------------*/
	/* Image Zoom in
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-flip-zoom-in'])){
 		$css.="
				.imghvr-zoom-in figcaption {
					transform: scale(0.5);
					opacity: 0;
 				}
			
				.imghvr-zoom-in figure:hover figcaption {
					transform: scale(1);
					opacity: 1;
				}";
	}
 	/*--------------------------------------------------------------------------*/
	/* Image Zoom Out
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-flip-zoom-out'])){
 		$css.="
				.imghvr-zoom-out figcaption {
					transform: scale(2.0);
						transform-origin: 50% 50%;
						opacity: 0;
					}
 					.imghvr-zoom-out figure:hover figcaption {
						transform: scale(1);
						opacity: 1;
					}";
	}
 
 	/*--------------------------------------------------------------------------*/
	/* Image Layla
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-layla'])){
 			$css.="
					.imghvr-layla figcaption{
						opacity:0;
					
					}
					.imghvr-layla figure:hover figcaption{
						opacity:1;
					
					}
					.imghvr-layla figcaption{
						   padding:40px;
					}
					 
					 .imghvr-layla figcaption::before,
					 .imghvr-layla figcaption::after {
						position: absolute;
						content: '';
						opacity: 0;
					}
					
					 .imghvr-layla figcaption::before {
						top: 40px;
						right: 20px;
						bottom: 40px;
						left: 20px;
						border-top: 1px solid #fff;
						border-bottom: 1px solid #fff;
						transform: scale(0,1);
						transform-origin: 0 0;
					}
					
					 .imghvr-layla figcaption::after {
						top: 20px;
						right: 40px;
						bottom: 20px;
						left: 40px;
						border-right: 1px solid #fff;
						border-left: 1px solid #fff;
						-webkit-transform: scale(1,0);
						transform: scale(1,0);
						transform-origin: 100% 0;
					}
					
					 
					 
					 .imghvr-layla figure:hover figcaption::before,
					 .imghvr-layla figure:hover figcaption::after {
						opacity: 1;
						transform: scale(1);
					}
					 
					 .imghvr-layla:hover figcaption::after  {
						transition-delay: 0.15s;
					}
			";
	}
 	/*--------------------------------------------------------------------------*/
	/* Image Layla
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-oscar'])){
   
		 $css.="
					 .imghvr-oscar figcaption{
										opacity:0;
					}
					.imghvr-oscar:hover figcaption{
						opacity:1;
					
					}
					.imghvr-oscar figcaption{
						padding: 30px;
					 }
					
					.imghvr-oscar figcaption::before {
						position: absolute;
						left:0px;
						right:0px;
						top:0px;
						bottom:0px;
						border: 1px solid #fff;
						content: '';
						opacity: 0;
						transform: scale(0.0);
						z-index:1;
						pointer-events: none;
						transition:   0.5s ;
					  }
					 
					.imghvr-oscar figure:hover figcaption::before {
						opacity: 1;
						border: 1px solid #fff;
						left: 30px;
						bottom: 30px;
						top: 30px;
						transform: scale(1.0);
						right: 30px;
					}";
	}
 	/*--------------------------------------------------------------------------*/
	/* Image Layla
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-bubba'])){
 		$css.="
				.imghvr-bubba figcaption{
					opacity:0;
					padding:30px
				
				}
				.imghvr-bubba figure:hover figcaption{
					opacity:1;
				
				}  
				.imghvr-bubba figcaption::before,
				.imghvr-bubba figcaption::after {
					position: absolute;
					top: 30px;
					right: 30px;
					bottom: 30px;
					left: 30px;
					content: '';
					opacity: 0;
					transition: opacity 0.35s, transform 0.35s;
				}
				
				.imghvr-bubba figcaption::before {
					border-top: 1px solid #fff;
					border-bottom: 1px solid #fff;
					transform: scale(0,1);
				}
				
				.imghvr-bubba figcaption::after {
					border-right: 1px solid #fff;
					border-left: 1px solid #fff;
					transform: scale(1,0);
				}
				 
				.imghvr-bubba figure:hover figcaption::before,
				.imghvr-bubba:hover figcaption::after {
					opacity: 1;
					transform: scale(1);
				}
				";
	}
 	/*--------------------------------------------------------------------------*/
	/* Image Chico
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-chico'])){
  		$css.="
				.imghvr-chico figcaption{
					opacity:0;
				
				}
				.imghvr-chico figure:hover figcaption{
					opacity:1;
				
				}
				.imghvr-chico figcaption{
					padding: 30px;
					-webkit-transition:  0.5s;
					transition: 0.5s;
				}
				
				.imghvr-chico figcaption::before {
					position: absolute;
					left:0px;
					right:0px;
					top:0px;
					bottom:0px;
					border: 1px solid #fff;
					content: '';
					opacity: 0;
					transform: scale(1.1);
					z-index:1;
					pointer-events: none;
					-webkit-transition:   0.5s ;
					transition:   0.5s ;
				  }
				 
				.imghvr-chico figure:hover figcaption::before {
					opacity: 1;
				  
					border: 1px solid #fff;
					left: 30px;
					bottom: 30px;
					top: 30px;
					transform: scale(1.0);
					right: 30px;
				}";
	}
		 

 	/*--------------------------------------------------------------------------*/
	/* Image Selena
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-selena']) ){
		$css.="
				.imghvr-selena figcaption{
					opacity:0;
				}
				.imghvr-selena figure:hover figcaption{
					opacity:1;
				}
				.imghvr-selena figcaption{
					padding: 30px;
					transition: 0.5s;
				}
				.imghvr-selena figcaption::before {
					position: absolute;
					left:0px;
					right:0px;
					top:0px;
					bottom:0px;
					border: 0px solid #fff;
					content: '';
					opacity: 0;
					transform: scale(1.1);
					z-index:1;
					pointer-events: none;
					transition:   0.5s ;
				}
				.imghvr-selena figure:hover figcaption::before {
					opacity: 1;
					border: 15px solid #fff;
					left: 0;
					bottom: 0;
					top: 0;
					transform: scale(1.0);
					right: 0;
				}";
	}
 	/*--------------------------------------------------------------------------*/
	/* Image Layla
	/*--------------------------------------------------------------------------*/
	if(!empty($sao_caption_effect['imghvr-ming']) ){
  			 $css.="
			 .imghvr-ming figcaption{
				opacity:0;
			
			}
			.imghvr-ming figure:hover figcaption{
				opacity:1;
			
			}
			.imghvr-ming figcaption{
				padding: 30px;
			
				transition: 0.5s;
			}
			
			.imghvr-ming figcaption::before {
				position: absolute;
				left:0px;
				right:0px;
				top:0px;
				bottom:0px;
				border: 0px solid #fff;
				content: '';
				opacity: 0;
			
				transform: scale(1.1);
				z-index:1;
				pointer-events: none;
			
				transition:   0.5s ;
			  }
			 .imghvr-ming figcaption::after {
				position: absolute;
				left:0px;
				right:0px;
				top:0px;
				bottom:0px;
				border: 2px solid #fff;
				content: '';
				opacity: 0;
			
				transform: scale(1.1);
				z-index:1;
				pointer-events: none;
			
				transition:   0.5s ;
			  }
			 
			.imghvr-ming figure:hover figcaption::before {
				opacity: 1;
			  
				border: 30px solid #fff;
				opacity:.3;
				left: 0;
				bottom: 0;
				top: 0;
			
				transform: scale(1.0);
				right: 0;
			}    
			
			 
			.imghvr-ming figure:hover figcaption::after {
				opacity: 1;
			  
				opacity:1;
				left: 30px;
				bottom: 30px;
				top: 30px;
			
				transform: scale(1.0);
				right: 30px;
			}"; 
	}
 	echo '<style>'.$css.'</style>';
 }
}
}
 ?>