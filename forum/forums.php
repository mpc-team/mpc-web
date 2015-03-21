<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/members/includes/sidebar.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	session_start();
	$db=DB_CreateDefault();
	$db->connect();
	if(isset($_GET["category"])){
		$categoryID=$_GET["category"];
		$threads=DBF_GetCategoryThreads($db,$categoryID);
	}elseif($_GET["thread"]){
		$threadID=$_GET["thread"];
		$messages=DBF_GetThreadContents($db,$threadID);
	}
	$db->disconnect();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Multi-Player Clan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
<?php
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
	PrintJavaScriptResource( PathDir::GetJSPath($ROOT, 'util.js') );
 ?>
	<meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
</head>
<body>
	<div class="container-fluid">
		<?php PrintNavbar("forum", $ROOT); ?>
	</div>
	<div class="container">
		<div class="content">
			<?php
				if(isset($_GET["category"])){
					$thrs=count($threads);
					for($i=0; $i<$thrs; $i++){
						$thread=$threads[$i];
						echo <<<EOD
							<div class="panel-group">
								<div class="panel panel-default">
									<a href="./forums.php?thread={$thread[0]}"><h4>{$thread[2]}</h4></a>
								</div>
							</div>
EOD;
					}
				}elseif(isset($_GET["thread"])){
					$msgs=count($messages);
					for($i=0; $i<$msgs; $i++){
						$message=$messages[$i];
						$title=$message[1];
						$content=$message[2];
						echo <<<EOD
							<div class="panel-group">
								<div class="panel panel-default">
									<h3>{$title}</h3>
									<p>{$content}</p>
								</div>
							</div>
EOD;
					}
				}
			 ?>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
	</script>
</body>
</html>
