<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/members/includes/sidebar.php');
	include_once($ROOT . '/forum/includes/navbar.php');
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
	if(isset($_GET["category"]) && isset($_GET["cname"])){
		$categoryID=$_GET["category"];
		$cname=$_GET["cname"];
		if(isset($_GET["thread"]) && isset($_GET["tname"])){
			$threadID=$_GET["thread"];
			$tname=$_GET["tname"];
			$messages=DBF_GetThreadContents($db,$threadID);
		}else{
			$threads=DBF_GetCategoryThreads($db,$categoryID);
		}
	}else{
		$categories=DBF_GetCategories($db);
	}
	$db->disconnect();
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
	<div class="container-fluid">
		<?php PrintNavbar("forum", $ROOT); ?>
	</div>
	<div class="container">
		<div class="forum">
			<div class="navbar-forum">
				<?php
					if(isset($_GET["category"]) && isset($_GET["cname"])){
						$path=array();
						$highlight="path";
						$dir=array("id"=>$categoryID,"name"=>$cname);
						array_push($path,$dir);
						if(isset($_GET["thread"]) && isset($_GET["tname"])){
							$dir=array("id"=>$threadID,"name"=>$tname);
							array_push($path,$dir);
						}
					}else{
						$path=array();
						$highlight="forum";
					}
					PrintForumNavbar($highlight,$ROOT,$path); 
				 ?>
			</div>
			<div class="content">
				<?php
					if(isset($_GET["category"]) && isset($_GET["cname"])){
						if(isset($_GET["thread"]) && isset($_GET["tname"])){
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
						}else{
							$thrs=count($threads);
							for($i=0; $i<$thrs; $i++){
								$thread=$threads[$i];
								echo <<<EOD
									<div class="panel-group">
										<a href="./index.php?category={$categoryID}&cname={$cname}&thread={$thread[0]}&tname={$thread[2]}">
											<div class="panel panel-default">
												<p>{$thread[2]}</p>
											</div>
										</a>
									</div>
EOD;
							}
						}
					}else{
						$cats=count($categories);
						for($i=0; $i<$cats; $i++){
							$cat=$categories[$i];
							echo <<<EOD
								<div class="panel-group">
									<a href="./index.php?category={$cat[0]}&cname={$cat[1]}">
										<div class="panel panel-default">
											<p>{$cat[1]}</p>
										</div>
									</a>
								</div>
EOD;
						}
					}
				 ?>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
	</script>
</body>
</html>
