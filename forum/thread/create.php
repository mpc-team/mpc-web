<?php
	$ROOT = '../..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	include_once($ROOT . PathDir::$UTILITY);
	
	session_start();
	
	$title=$_POST["title"];
	$content=$_POST["content"];
	$header="Location: ".$ROOT."/forum/index.php";
	if(isset($_SESSION["USER"])){
		$params=array();
		array_push($params,"c_id","c_tag");
		$db=DB_CreateDefault();
		$db->connect();
		if(verifygetvars($params,$_GET)){
			$cid=$_GET["c_id"];
			$ctag=$_GET["c_tag"];
			if(DBF_CheckCategory($db,$cid,$ctag)){
				if(validateinput($title)){
					$tid=DBF_CreateThread($db,$cid,$title,$_SESSION["USER"]);
					$title=urlencode($title);
					$ctag=urlencode($ctag);
					if($tid > 0 && validateinput($content)){
						$mid=DBF_CreateMessage($db,$tid,$content,$_SESSION["USER"]);
						if($mid > 0){
							$header="Location: ".$ROOT."/forum/index.php?c_id={$cid}&c_tag={$ctag}&t_id={$tid}&t_tag={$title}";
						}
					}
				}
			}
		}	
		$db->disconnect();
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
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
</head>
<body>
	<div class="container">
		<div class="page-header text-center">
			<h1>Create Thread Processing...</h1>
		</div>
	</div>
</body>
</html>
