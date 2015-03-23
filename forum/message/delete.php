<?php
	$ROOT = '../..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$FORUMFUNC);
	
	session_start();
	
	$header="Location: ".$ROOT."/forum/index.php?".$_SERVER["QUERY_STRING"];
	if(isset($_SESSION["USER"])){
		$params=array();
		array_push($params,"t_id","c_id","t_tag","c_tag");
		if(verifygetvars($params,$_GET)){
			$tid=$_GET["t_id"];
			$cid=$_GET["c_id"];
			$ttag=$_GET["t_tag"];
			$ctag=$_GET["c_tag"];
			$del=DeleteMessage($cid,$ctag,$tid,$ttag,$_POST["message"]);
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
			<h1>Forum Post Processing...</h1>
			<?php
				echo $del;
			 ?>
		</div>
	</div>
</body>
</html>
