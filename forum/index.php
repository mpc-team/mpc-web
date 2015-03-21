<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/forum/includes/sidebar.php');
	include_once($ROOT . '/forum/includes/navbar.php');
	include_once($ROOT . '/forum/includes/reply.php');
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
	
	$path=array();
	$pagetype="categories";
	$highlight="forum";
	
	if(isset($_GET["cid"]) && isset($_GET["ctag"])){
	
		$cid=$_GET["cid"];
		$ctag=$_GET["ctag"];
		
		if(DBF_CheckCategory($db,$cid,$ctag)){
		
			$highlight="path";
			$pagetype="threads";
			$dir=array("id"=>$cid,"name"=>$ctag);
			array_push($path,$dir);
			
			if(isset($_GET["tid"]) && isset($_GET["ttag"])){
			
				$tid=$_GET["tid"];
				$ttag=$_GET["ttag"];
				
				if(DBF_CheckThread($db,$tid,$ttag)){		
				
					$pagetype="messages";
					$dir=array("id"=>$tid,"name"=>$ttag);
					array_push($path,$dir);
					$messages=DBF_GetThreadContents($db,$tid);
					
				}else{
					$threads=DBF_GetCategoryThreads($db,$cid);
				}
			}else{
				$threads=DBF_GetCategoryThreads($db,$cid);
			}
		}else{
			$categories=DBF_GetCategories($db);
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
		<div id="wrapper">
			<?php PrintSidebar(null,$ROOT,null); ?>
			<div id="page-content-wrapper">
				<div class="navbar-forum">
					<?php PrintForumNavbar($highlight,$ROOT,$path); ?>
				</div>
				<div class="forum">
					<div class="content">
						<?php
							switch($pagetype){
								case "categories":
									$len=count($categories);
									for($i=0; $i<$len; $i++){
										$C=$categories[$i];
										echo <<<EOD
											<div class="panel-group">
												<a href="./index.php?cid={$C[0]}&ctag={$C[1]}">
													<div class="panel panel-default">
														<p>{$C[1]}</p>
													</div>
												</a>
											</div>
EOD;
									}
									break;
								case "threads":
									$len=count($threads);
									for($i=0; $i<$len; $i++){
										$thread=$threads[$i];
										echo <<<EOD
											<div class="panel-group">
												<a href="./index.php?cid={$cid}&ctag={$ctag}&tid={$thread[0]}&ttag={$thread[2]}">
													<div class="panel panel-default">
														<p>{$thread[2]}</p>
													</div>
												</a>
											</div>
EOD;
									}
									break;
								case "messages":
									$len=count($messages);
									for($i=0; $i<$len; $i++){
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
									PrintReplyForm($ROOT);
									break;
							}
						 ?>
						 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
	</script>
</body>
</html>
