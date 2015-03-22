<?php 
function PrintForumNavbar($highlight,$root,$path){
	$home=$root."/forum/index.php";
	$ACTIVE="class='active'";
	echo <<<EOD
		<nav role="navigation" class="navbar navbar-default navbar-static-top navbar-fixed-top">
			<ul class="nav navbar-nav">
EOD;
	$active=($highlight == "forum") ? $ACTIVE : "";
	$icon="<span class='glyphicon glyphicon-home'></span>";
	echo "<li {$active}><a href='{$home}'>{$icon} </a></li>";
	
	if (count($path) > 0){
		echo "<li><span class='glyphicon glyphicon-chevron-right'></span></li>";
		$highlighted=($highlight=="path");
		$active=($highlighted && count($path)==1) ? $ACTIVE : "";
		$path0=$path[0];
		$cid=$path0["id"];
		$ctag=urlencode($path0["name"]);
		echo <<<EOD
					<li {$active}>
						<a href='{$home}?c_id={$cid}&c_tag={$ctag}'>
							{$path0["name"]}
						</a>
					</li>
EOD;
		if(count($path) > 1){
			echo "<li><span class='glyphicon glyphicon-chevron-right'></span></li>";
			$active=($highlighted && count($path)==2) ? $ACTIVE : "";
			$path1=$path[1];
			$tid=$path1["id"];
			$ttag=urlencode($path1["name"]);
			echo <<<EOD
						<li {$active}>
							<a href='{$home}?c_id={$cid}&c_tag={$ctag}&t_id={$tid}&t_tag={$ttag}'>
								{$path1["name"]}
							</a>
						</li>
					</ul>
				</nav>
EOD;
		}
	}
}
 ?>