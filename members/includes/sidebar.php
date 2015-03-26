<?php 
function PrintSidebar ($highlight, $root) {	
	$MAINPAGE = $root . '/members/index.php';
	$ACTIVE = "class='active'";
	echo <<<EOD
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav"> 
EOD;
	$class = ($highlight == "search") ? $ACTIVE : "";
	$searchglyph = "<span class='glyphicon glyphicon-search'></span>";
	echo ("<li {$class}><a href='{$MAINPAGE}'>{$searchglyph} Search</a></li>");
	echo("</ul></div>");
}
 ?>