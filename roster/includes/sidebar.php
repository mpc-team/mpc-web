<?php 

function PrintSidebar ($highlight, $root) {	
	$MAINPAGE = $root . '/roster/index.php';
	$ACTIVE = "class='active'";
	echo <<<EOD
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav"> 
EOD;
	$class = ($highlight == "members") ? $ACTIVE : "";
	echo ("<li {$class}><a href='{$MAINPAGE}'>Members</a></li> </ul></div>");
}

 ?>