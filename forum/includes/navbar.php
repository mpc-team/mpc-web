<?php 
function PrintForumNavbar($highlight,$root){
	$home=$root."/forum/";
	$ACTIVE="class='active'";
	echo <<<EOD
		<nav role="navigation" class="navbar navbar-default navbar-static-top navbar-fixed-top">
			<ul class="nav navbar-nav">
EOD;
	$active=($highlight == "forum") ? $ACTIVE : "";
	echo "<li {$active}><a href='{$home}'>Forum</a></li>";
	echo <<<EOD
			</ul>
		</nav>
EOD;
}
 ?>