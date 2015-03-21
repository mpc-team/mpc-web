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
	
	if (count($path) > 0){
		$highlighted=($highlight=="path");
		$active=($highlighted && count($path)==1) ? $ACTIVE : "";
		$path0=$path[0];
		$cid=$path0["id"];
		$ctag=$path0["name"];
		echo <<<EOD
					<li {$active}>
						<a href='{$home}?cid={$cid}&ctag={$ctag}'>
							{$ctag}
						</a>
					</li>
EOD;
		if(count($path) > 1){
			$active=($highlighted && count($path)==2) ? $ACTIVE : "";
			$path1=$path[1];
			$tid=$path1["id"];
			$ttag=$path1["name"];
			echo <<<EOD
						<li {$active}>
							<a href='{$home}?cid={$cid}&ctag={$ctag}&tid={$tid}&ttag={$ttag}'>
								{$ttag}
							</a>
						</li>
					</ul>
				</nav>
EOD;
		}
	}
}
 ?>