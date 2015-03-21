<?php 
function PrintSidebar ($highlight, $root) {	
	$MAINPAGE = $root . '/forum/index.php';
	$ACTIVE = "class='active'";
	echo <<<EOD
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav"> 
EOD;
	echo("</ul></div>");
}
 ?>