<?php 


function svgImage($name, $svgWidth = "449") {
	echo '<div class="icon icon-'.$name.'"><svg width="'.$svgWidth.'" height="20" viewBox="0 0 449 20"><use xlink:href="#icon-'.$name.'"></use></svg></svg><img class="icon-fallback" src="'.get_template_directory_uri().'/images/png/'.$name.'.png" alt="'.$name.'" ></div>';
}