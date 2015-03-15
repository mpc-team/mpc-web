<?php 

function PrintSidebar ($navbar_highlight, $root_path) {
	
	$active = "class='active'";
	$unactive = "";
	$signout = $root_path . '/login/signout.php';
	
	$print = <<<EOD
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav"> 
EOD;
	echo ($print);
	
	$class = ($navbar_highlight == "overview") ? $active : $unactive;
	$navig = "<li {$class}><a href='#'>Overview</a></li>";
	echo ($navig);
	
	echo '<li style="padding: 20px 0px;"></li>';
	
	$class = ($navbar_highlight == "signout") ? $active : $unactive;
	$navig = "<li {$class}><a href='{$signout}'>Sign Out</a></li>";
	echo ($navig);
				
	$print = '</ul></div>';
	echo ($print);
	
}

 ?>