<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/forum/includes/sidebar.php');
	include_once($ROOT . '/forum/includes/navbar.php');
	include_once($ROOT . '/forum/includes/reply.php');
	include_once($ROOT . '/forum/includes/modal.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	session_start();
	$reply=FALSE;
	if(isset($_SESSION["USER"])){
		$reply=TRUE;
	}
	
	$db=DB_CreateDefault();
	$db->connect();
	$query=$_SERVER['QUERY_STRING'];
	$INDEX_PAGE='index.php';
	$SEND_PAGE='sendmessage.php';
	
	$path=array();
	$pagetype="categories";
	$highlight="forum";
	
	if(isset($_GET["c_id"]) && isset($_GET["c_tag"])){
		$cid=$_GET["c_id"];
		$ctag=$_GET["c_tag"];
		if(DBF_CheckCategory($db,$cid,$ctag)){
			$highlight="path";
			$pagetype="threads";
			$dir=array("id"=>$cid,"name"=>$ctag);
			array_push($path,$dir);
			if(isset($_GET["t_id"]) && isset($_GET["t_tag"])){
				$tid=$_GET["t_id"];
				$ttag=$_GET["t_tag"];
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
	<div id="page-content-wrapper">
		<div class="navbar-forum">
			<?php PrintForumNavbar($highlight,$ROOT,$path); ?>
		</div>
		<div class="forum">
			<div class="content">
				<?php
					switch($pagetype){
			//
			//	Pull All Categories
			// 	-----------------------------------------
			//
						case "categories":
							echo "<div class='page-header'><h1>MPC Forum</h1></div>";
							$len=count($categories);
							for($i=0; $i<$len; $i++){
								$C=$categories[$i];
								$ctag=urlencode($C[1]);
								echo <<<EOD
									<div class="panel-group">
										<div class="panel panel-default">
											<a class="btn" href="index.php?c_id={$C[0]}&c_tag={$ctag}">
												{$C[1]}
											</a>
										</div>
									</div>
EOD;
							}
							break;
			//
			// 	Pull Threads From Specific Category
			// 	------------------------------------------
			//	
			//			1. Show Threads (all users)
			//			2. Show User-Tools (members)
			//
						case "threads":
			//
			//		1.
							echo<<<EOD
							<div class='page-header'>
								<h1>{$ctag}</h1>
							</div>
EOD;
							$len=count($threads);
							$ctag=urlencode($ctag);
							for($i=0; $i<$len; $i++){
								$thread=$threads[$i];
								$tid=$thread[0];
								$ttag=urlencode($thread[2]);
								echo <<<EOD
									<div class="panel-group">
										<div class="panel panel-default">
											<a class="btn" href="index.php?c_id={$cid}&c_tag={$ctag}&t_id={$tid}&t_tag={$ttag}">
												{$thread[2]}
											</a>
										</div>
									</div>
EOD;
							}
			//
			//		2.
							if(isset($_SESSION["USER"])){
								PrintModal($query);
							}else{
								$loginpath=PathDir::GetLoginPath($ROOT);
								echo<<<EOD
									<div class="alert alert-info" role="alert">
										<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
										<span class="sr-only">Error:</span>
										You must <a class="alert-link" href="{$loginpath}">Login/Register</a> before posting on the Forum
									</div>
EOD;
							}
							break;
			//
			// 	Pull Messages From Specific Thread
			//	------------------------------------------
			//
			//			1. Print Thread Messages (all users)
			//			2. Print User-Tools (members)
			//	
						case "messages":
			//
			//		1.
							echo<<<EOD
								<div class='page-header'>
									<h1>{$ttag}</h1>
								</div>
EOD;
							$len=count($messages);
							for($i=0; $i<$len; $i++){
								$message=$messages[$i];
								$content=$message[1];
								$author=$message[3];
								$timestamp=$message[4];
								echo <<<EOD
									<div class="panel-group">
										<div class="panel panel-default">
											<div class="panel-messages">
												<div class="row">
													<div class="col-xs-6">
														<span class="glyphicon glyphicon-user"></span>
														{$author}
													</div>
													<div class="col-xs-6">
														<div class="pull-right">
															<span class="glyphicon glyphicon-time"></span>													
															{$timestamp}
														</div>
													</div>
												</div>
												</br>
												<div class="row">
													<div class="content-msg" id='c{$i}'>
														{$content}
													</div>
												</div>
												<div class="row" id='r{$i}'>
													<button type="button" class="btn btn-edit" id='b{$i}'>
														<span class="glyphicon glyphicon-edit"></span>
														Edit
													</button>
												</div>
											</div>
										</div>
									</div>
EOD;
							}
							echo<<<EOD
								<script type="text/javascript">
									$(document).ready(function(){
										$(".btn-edit").click(function(){
											$(this).hide();
											var id=$(this).attr('id');
											id=id.substring(1,id.length);
											console.log("Clicked ("+id+")");
											
											$(".panel-messages").find(("#r"+id)).append("<button id='d"+id+"' type='button' class='btn btn-edit pull-right'><span class='glyphicon glyphicon-trash'></span> Discard</button>");
											$(".panel-messages").find(("#r"+id)).append("<button id='s"+id+"' type='button' class='btn btn-edit pull-right'><span class='glyphicon glyphicon-check'></span> Confirm</button>");
											
											$(".panel-message").find(("#d"+id)).click(function(){
												console.writeline("Clicked Dismiss");
											});
											
											var editcontent=$(".panel-messages").find("#c"+id).html();
											editcontent=editcontent.trim();
											editcontent=editcontent.replace("\t", "");
											editcontent="<textarea class='form-control' rows='5'>"+editcontent+"</textarea>";
											
											$(".panel-messages").find("#c"+id).html(editcontent);
										});
									});
								</script>
EOD;
			//
			//		2.
							if($reply){
								echo("<form class='form-horizontal' action='sendmessage.php?{$query}' method='post'>");	
									PrintReplyForm($ROOT,$reply);
								echo("</form>");
							}else{
								$loginpath=PathDir::GetLoginPath($ROOT);
								echo<<<EOD
									<div class="alert alert-info" role="alert">
										<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
										<span class="sr-only">(not signed in)</span>
										You must <a class="alert-link" href="{$loginpath}">Login/Register</a> before posting on the Forum
									</div>
EOD;
			//
			//				End of Forum Processing
			//
							}
					}
				 ?>
				 
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<?php PrintFooter($ROOT); ?>
</div>
</body>
</html>