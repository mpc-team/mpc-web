<?php 

function PrintSidebar ($highlight, $root_path) {	
	$ACTIVE = "class='active'";
	echo <<<EOD
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav"> 
EOD;
	$class = ($highlight == "members") ? $ACTIVE : "";
	echo ("<li {$class}><a href='#'>Members</a></li> </ul></div>");
}

 ?>