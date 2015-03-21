<?php
	$ROOT = '..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	
	function ValidateInput($name){
		if($name==null) return FALSE;
		if(strlen($name)==0) return FALSE;
		return TRUE;
	}
	
	if (!isset($_GET["cid"])||!isset($_GET["ctag"])){
		$header="Location: ".$ROOT."/forum/index.php";
	}elseif(isset($_GET["cid"])&&isset($_GET["ctag"])){
		$cid=$_GET["cid"];
		$ctag=$_GET["ctag"];
		$name=$_POST["name"];
		$header="Location: ".$ROOT."/forum/index.php?cid={$cid}&ctag={$ctag}";
		if(ValidateInput($title,$content)){
			$db=DB_CreateDefault();
			$db->connect();
			$msg=DBF_CreateThread($db,$cid,$name);
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
			<h1>Create Thread Processing...</h1>
			<?php
				echo("<h3>{$cid}</h3>");
				echo("<h3>{$name}</h3>");
			 ?>
		</div>
	</div>
</body>
</html>
