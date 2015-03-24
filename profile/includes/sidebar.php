<?php 
function PrintSidebar ($highlight, $root) {	
	$ACTIVE = "class='active'";
	$SIGNOUT = $root . '/login/signout.php';
	$MAINPAGE = $root . '/profile/index.php';
	$UPDATE = $root . '/profile/update.php';
	echo <<<EOD
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav"> 
EOD;
	$class = ($highlight == "account") ? $ACTIVE : "";
	echo ("<li {$class}><a href='{$MAINPAGE}'>Account</a></li>");
	
	$class = ($highlight == "update") ? $ACTIVE : "";
	echo ("<li {$class}><a href='{$UPDATE}'>Edit Profile</a></li>");
	
	$class = ($highlight == "signout") ? $ACTIVE : "";
	echo '<li style="padding: 20px 0px;"></li>';
	$icon="<span class='glyphicon glyphicon-log-out'></span>";
	echo ("<li {$class}><a href='{$SIGNOUT}'>{$icon} Sign Out</a></li>");	
	
	echo ("</ul></div>");
}
 ?>