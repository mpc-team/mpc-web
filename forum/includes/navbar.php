<?php 
function PrintForumNavbar($highlight,$root,$path){
	$home=$root."/forum/index.php";
	$ACTIVE="class='active'";
	echo <<<EOD
		<nav role="navigation" class="navbar navbar-default navbar-static-top navbar-fixed-top">
			<ul class="nav navbar-nav">
EOD;
	$active=($highlight == "forum") ? $ACTIVE : "";
	echo "<li {$active}><a href='{$home}'>MPC</a></li>";
	$len=count($path);
	for($i=0; $i < $len; $i++){
		$highlighted=($highlight == "path");
		$lastelement=($i == ($len-1));
		$active=($highlighted and $lastelement) ? $ACTIVE : "";
		$thispath=$path[$i];
		echo "<li {$active}><a href='{$home}?param'>{$thispath["name"]}</a></li>";
	}	
	echo <<<EOD
			</ul>
		</nav>
EOD;
}
 ?>