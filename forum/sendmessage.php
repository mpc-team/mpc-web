<?php
	$ROOT = '..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	
	$ALLOWED_HTML_TAGS = <<<EOD
		<b></b> <i></i> <u></u> <center></center> <h1></h1> <h2></h2> <h3></h3>
		<ul></ul> <li></li> <img></img>
EOD;
	
	session_start();
	
	function ValidateInput($content){
		if($content==null) return FALSE;
		if(strlen($content)==0) return FALSE;
		if(strlen(trim($content))==0) return FALSE;
		return TRUE;
	}
	
	$header="Location: ".$ROOT."/forum/index.php";
	if (isset($_SESSION["USER"])){
		if(isset($_GET["t_id"])&&isset($_GET["c_id"])&&isset($_GET["t_tag"])&&isset($_GET["c_tag"])){
			$tid=$_GET["t_id"];
			$cid=$_GET["c_id"];
			$ttag=urlencode($_GET["t_tag"]);
			$ctag=urlencode($_GET["c_tag"]);
			
			$content=strip_tags(trim($_POST["content"]), $ALLOWED_HTML_TAGS);
			$content=preg_replace('/(<[^>]+) style=".*?"/i', '$1', $content);
		
			$header="Location: ".$ROOT."/forum/index.php?c_id={$cid}&c_tag={$ctag}&t_id={$tid}&t_tag={$ttag}";
			if(ValidateInput($content)){
				$db=DB_CreateDefault();
				$db->connect();
				if(DB_GetUserID($db,$_SESSION["USER"]) > 0){
					$msg=DBF_CreateMessage($db,$tid,$content,$_SESSION["USER"]);
				}
				$db->disconnect();
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
