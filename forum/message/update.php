<?php
	$ROOT = '../..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$FORUMFUNC);
	
	session_start();
	
	$header="Location: ".$ROOT."/forum/index.php?".$_SERVER["QUERY_STRING"];
	if (isset($_SESSION["USER"])){
		$params=array();
		array_push($params,"t_id","c_id","t_tag","c_tag");
		if(verifygetvars($params,$_GET)){
			$tid=$_GET["t_id"];
			$cid=$_GET["c_id"];
			$msgid= $_POST["msgid"];
			$ttag= stripslashes($_GET["t_tag"]);
			$ctag= stripslashes($_GET["c_tag"]);
			$msg= stripslashes($_POST["message"]);
			$update=UpdateMessage($cid,$ctag,$tid,$ttag,$msgid,$msg,$_SESSION["USER"]);			
			$rename= "";
			if(isset($_POST["rename"]) && strlen($_POST["rename"]) > 0) {
				$rename= stripslashes($_POST["rename"]);
				$re= UpdateThread($cid,$ctag,$tid,$ttag,$_SESSION["USER"],$rename);
				$ctagURL= urlencode($ctag);
				$ttagURL= urlencode($rename);
				$header= "Location: ".$ROOT."/forum/index.php?c_id={$cid}&c_tag={$ctagURL}&t_id={$tid}&t_tag={$ttagURL}";
			}
			if($update) {
				$header.= "#forum-thread-message-{$msgid}";
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
			<h1>Forum Post Processing...</h1>
			<?php	
				echo "msgid:".$_POST["msgid"]."<br>";
				echo "update:".$update."<br>";
				if(strlen($rename) > 0) {
					echo "rename:".$rename."<br>";
				}else{
					echo "rename: NONE<br>";
				}
				echo "message:--start--".$_POST["message"]."--end--";
			 ?>
		</div>
	</div>
</body>
</html>
