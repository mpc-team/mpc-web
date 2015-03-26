<?php 
/*
 * 	Forum Navigation Section
 * 	------------------------
 *
 *	This code is extremely hacked together. Needs to be changed in
 *	case there are modifications to the Forum system that allow
 *	more than 3 levels of nesting.
 *
 */
function ForumNavbar($highlight,$root,$path){
	$home=$root."/forum/index.php";
	
	$CHEVRON_RIGHT="<span class='glyphicon glyphicon-chevron-right'></span>";
	
	$ACTIVE="class='active'";
	
	$result =<<<EOD
		<nav role="navigation" class="navbar navbar-default navbar-static-top">
			<ul class="nav navbar-nav">
EOD;

	$active=($highlight == "forum") ? $ACTIVE : "";
	$icon="<span class='glyphicon glyphicon-th-list'></span>";
	
	$navtip=(count($path) > 0) ? $CHEVRON_RIGHT : "";
	$result.="<li {$active}><a href='{$home}'>{$icon} Home {$navtip}</a></li>";
	
	if (count($path) > 0){
		$highlighted=($highlight=="path");
		$active=($highlighted && count($path)==1) ? $ACTIVE : "";
		$path0=$path[0];
		$cid=$path0["id"];
		$ctag=urlencode($path0["name"]);
		$navtip=(count($path) > 1) ? $CHEVRON_RIGHT : "";
		$result.=<<<EOD
			<li {$active}>
				<a href='{$home}?c_id={$cid}&c_tag={$ctag}'>
					{$path0["name"]}   {$navtip}
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