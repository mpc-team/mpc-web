<?php 
function PrintForumNavbar($highlight,$root){
	$ACTIVE="class='active'";
	echo <<<EOD
		<nav role="navigation" class="navbar navbar-default navbar-static-top navbar-fixed-top">
			<ul class="nav navbar-nav">
EOD;
	$active=($highlight == "forum") ? $ACTIVE : "";
	echo "<li {$active}><a href='..'>Forum</a></li>";
	$active="";
	echo "<li {$active}><a href='#'>General Testing</a></li>";
	echo <<<EOD
			</ul>
		</nav>
EOD;
}
 ?>