<?php 

function PrintSidebar ($highlight, $root_path) {	
	$ACTIVE = "class='active'";
	$SIGNOUT = $root_path . '/login/signout.php';
	echo <<<EOD
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav"> 
EOD;
	$class = ($highlight == "overview") ? $ACTIVE : "";
	echo ("<li {$class}><a href='#'>Overview</a></li>");
	if (isset($_SESSION["USER"])) {
		$class = ($highlight == "signout") ? $ACTIVE : "";
		echo '<li style="padding: 20px 0px;"></li>';
		echo ("<li {$class}><a href='{$SIGNOUT}'>Sign Out</a></li>");	
	}
	echo ("</ul></div>");
	
}

 ?>