<?php 
function PrintSidebar ($highlight, $root) {	
	$MAINPAGE = $root . '/members/index.php';
	$ACTIVE = "class='active'";
	echo <<<EOD
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav"> 
EOD;
	$class = ($highlight == "search") ? $ACTIVE : "";
	echo ("<li {$class}><a href='{$MAINPAGE}'>Search</a></li> </ul></div>");
}
 ?>