<?php
	$ROOT = '../..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$FORUMFUNC);
	session_start();
	
	$header="Location: ".$ROOT."/forum/index.php?".$_SERVER["QUERY_STRING"];
	if(isset($_SESSION["USER"])){
		$params=array();
		array_push($params,"c_id","c_tag");
		if(verifygetvars($params,$_GET)){
			$cid = $_GET["c_id"];
			$user = $_SESSION["USER"];
			$title = stripslashes($_POST["title"]);
			$ctag = stripslashes($_GET["c_tag"]);
			$content= stripslashes($_POST["content"]);
			
			$tinfo = CreateThread($cid,$ctag,$title,$_SESSION["USER"]);
			$tid = $tinfo[0];
			$ttag = $tinfo[1];
			if($tid > 0) {
				$msgid=CreateMessage($cid,$ctag,$tid,$ttag,$content,$user);
				if($msgid > 0){
					$ttagenc=urlencode($ttag);
					$header=$_SERVER["QUERY_STRING"]."&t_id={$tid}&t_tag={$ttagenc}";
					$header="Location: ".$ROOT."/forum/index.php?{$header}";
				}else{
					$del=DeleteThread($cid,$ctag,$tid,$ttag,$user);
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
				echo 'tid:'.$tid . '<br>';
				echo 'ttag:'.$ttag . '<br>';
				echo 'ttagenc:'.$ttagenc. '<br>';
				echo 'title:'.$title . '<br>';
				echo 'msg:'.$msgid;
			 ?>
		</div>
	</div>
</body>
</html>
