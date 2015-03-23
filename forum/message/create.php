<?php
	$ROOT = '../..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	include_once($ROOT . PathDir::$UTILITY);
	
	$ALLOWED_HTML_TAGS = "<b></b><i></i><u></u><center></center><h1></h1><h2></h2><h3></h3><h4></h4><p></p><ul></ul><li></li><img></img></br><br><br/><a></a>";
	
	session_start();
	
	$header="Location: ".$ROOT."/forum/index.php";
	if (isset($_SESSION["USER"])){
		if(isset($_GET["t_id"])&&isset($_GET["c_id"])&&isset($_GET["t_tag"])&&isset($_GET["c_tag"])){
			$db=DB_CreateDefault();
			$db->connect();
			if(DBF_CheckCategory($db,$_GET["c_id"],$_GET["c_tag"])&&DBF_CheckThread($db,$_GET["t_id"],$_GET["t_tag"])){
				$tid=$_GET["t_id"];
				$cid=$_GET["c_id"];
				$ttag=urlencode($_GET["t_tag"]);
				$ctag=urlencode($_GET["c_tag"]);
				
				$content=trim($_POST["content"]);
				$content=strip_tags($content, $ALLOWED_HTML_TAGS);
				$content=preg_replace('/(<[^>]+) style=".*?"/i', '$1', $content);
				$content=str_replace("\r", "", $content);
				$content=ShredLinefeeds($content);
				$content=str_replace("\n", "<br>", $content);
			
				$header="Location: ".$ROOT."/forum/index.php?c_id={$cid}&c_tag={$ctag}&t_id={$tid}&t_tag={$ttag}";
				if(ValidateInput($content)){
					$msg=DBF_CreateMessage($db,$tid,$content,$_SESSION["USER"]);
				}
			}
			$db->disconnect();
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
				echo("<h3>{$ttag}</h3>");
				echo("<h3>{$ctag}</h3>");
				echo("<h3>{$title}</h3>");
				echo("<h3>{$content}</h3>");
			 ?>
		</div>
	</div>
</body>
</html>
