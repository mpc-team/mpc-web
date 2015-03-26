<?php
	$ROOT = '../..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$FORUMFUNC);
	
	$title=$_POST["title"];
	session_start();
	
	$header="Location: ".$ROOT."/forum/index.php?".$_SERVER["QUERY_STRING"];
	if(isset($_SESSION["USER"])){
		$params=array();
		array_push($params,"c_id","c_tag");
		if(verifygetvars($params,$_GET)){
			$cid=$_GET["c_id"];
			$ctag=$_GET["c_tag"];
			$user=$_SESSION["USER"];
			$tid=CreateThread($cid,$ctag,$title,$_SESSION["USER"]);
			if($tid > 0) {
				$msg=CreateMessage($cid,$ctag,$tid,$title,$_POST["content"],$user);
				if($msg > 0){
					$title=urlencode($title);
					$header=$_SERVER["QUERY_STRING"]."&t_id={$tid}&t_tag={$title}";
					$header="Location: ".$ROOT."/forum/index.php?{$header}";
				}else{
					$del=DeleteThread($cid,$ctag,$tid,$title,$user);
				}
			}
		}	
	}
	header($header);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Multi-Player Clan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
<?php
	echo JavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	echo JavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	echo StyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
</head>
<body>
	<div class="container">
		<div class="page-header text-center">
			<h1>Create Thread Processing...</h1>
			<?php
				echo $tid . '<br>';
				echo $msg;
			 ?>
		</div>
	</div>
</body>
</html>
