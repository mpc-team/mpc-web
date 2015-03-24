<?php 
function ForumNavbar($highlight,$root,$path){
	$home=$root."/forum/index.php";
	
	$chevron="<span class='glyphicon glyphicon-chevron-right'></span>";
	$generalstar="<span class='glyphicon glyphicon-star'></span>";
	
	$ACTIVE="class='active'";
	$result =<<<EOD
		<nav role="navigation" class="navbar navbar-default navbar-static-top">
			<ul class="nav navbar-nav">
EOD;
	$active=($highlight == "forum") ? $ACTIVE : "";
	$icon="<span class='glyphicon glyphicon-home'></span>";
	
	$navtip=(count($path) > 0) ? $chevron : "";
	$result.="<li {$active}><a href='{$home}'>{$icon} Home {$navtip}</a></li>";
	
	if (count($path) > 0){
		$highlighted=($highlight=="path");
		$active=($highlighted && count($path)==1) ? $ACTIVE : "";
		$path0=$path[0];
		$cid=$path0["id"];
		$ctag=urlencode($path0["name"]);
		$navtip=(count($path) > 1) ? $chevron : "";
		$general=($path0["name"]=="General") ? $generalstar : "";
		$result.=<<<EOD
					<li {$active}>
						<a href='{$home}?c_id={$cid}&c_tag={$ctag}'>
							{$general} {$path0["name"]}   {$navtip}
						</a>
					</li>
EOD;
		if(count($path) > 1){
			$active=($highlighted && count($path)==2) ? $ACTIVE : "";
			$path1=$path[1];
			$tid=$path1["id"];
			$ttag=urlencode($path1["name"]);
			$result.=<<<EOD
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
	return $result;
}
 ?>