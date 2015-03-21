<?php
	$ROOT = '..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	
	function ValidateInput($title, $content){
		if($title==null || $content==null) return FALSE;
		if(strlen($title)==0 || strlen($content)==0) return FALSE;
		if(strlen(trim($title))==0 || strlen(trim($content))==0) return FALSE;
		return TRUE;
	}
	
	if (!isset($_GET["tid"])||!isset($_GET["cid"])||!isset($_GET["ttag"])||!isset($_GET["ctag"])){
		$header="Location: ".$ROOT."/forum/index.php";
	}elseif(isset($_GET["tid"])&&isset($_GET["cid"])&&isset($_GET["ttag"])&&isset($_GET["ctag"])){
		$tid=$_GET["tid"];
		$cid=$_GET["cid"];
		$ttag=$_GET["ttag"];
		$ctag=$_GET["ctag"];
		$title=trim($_POST["title"]);
		$content=trim($_POST["content"]);
		$header="Location: ".$ROOT."/forum/index.php?cid={$cid}&ctag={$ctag}&tid={$tid}&ttag={$ttag}";
		if(ValidateInput($title,$content)){
			$db=DB_CreateDefault();
			$db->connect();
			$msg=DBF_CreateMessage($db,$tid,$title,$content);
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
				echo("<h3>{$tid}</h3>");
				echo("<h3>{$title}</h3>");
				echo("<h3>{$content}</h3>");
			 ?>
		</div>
	</div>
</body>
</html>
