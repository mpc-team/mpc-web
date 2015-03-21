<?php 
function PrintSidebar ($highlight, $root, $mode) {	
	switch($mode){
		case "threads":
			echo("<div id='sidebar-wrapper'>");
			echo("<ul class='sidebar-nav'>");
			echo("<li><a href='#'>New Thread</a></li>");
			break;
		case "messages":
			echo("<div id='sidebar-wrapper'>");
			echo("<ul class='sidebar-nav'>");
			echo("<li><a href='#'>Reply</a></li>");
			break;
	}
	echo("</ul></div>");
}
 ?>