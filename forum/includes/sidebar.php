<?php 
function PrintSidebar ($highlight, $root, $mode) {	
	echo("<div id='sidebar-wrapper'>");
	echo("<ul class='sidebar-nav'>");
	switch($mode){
		case "threads":
			echo("<li><a href='#'>New Thread</a></li>");
			break;
		case "messages":
			echo("<li><a href='#'>Reply</a></li>");
			break;
	}
	echo("</ul>");
	echo("</div>");
}
 ?>