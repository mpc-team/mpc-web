<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/forum/includes/sidebar.php');
	include_once($ROOT . '/forum/includes/navbar.php');
	// include_once($ROOT . '/forum/includes/reply.php');
	include_once($ROOT . '/forum/includes/modal.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$FORUMFUNC);
	
	$query=$_SERVER['QUERY_STRING'];
	$INDEX_PAGE = 'index.php';
	$CREATE_PAGE = $ROOT . '/forum/thread/create.php';
	$FORUM_TITLE = "MPC Forum";
	$CATEGORIES = "categories";
	$THREADS = "threads";
	$MESSAGES = "messages";
	
	$GLYPH_STAR="<span class='glyphicon glyphicon-star'></span>";
	
	session_start();
	$usersigned=(isset($_SESSION["USER"]));
	$user=($usersigned) ? $_SESSION["USER"] : NULL;
	
	$cid = $ctag = $tid = $ttag = null;
	$c_params=array();
	array_push($c_params,"c_id","c_tag");
	$t_params=array();
	array_push($t_params,"t_id","t_tag");
	if(verifygetvars($c_params,$_GET)) {
		$cid=$_GET["c_id"];
		$ctag=$_GET["c_tag"];
		if(verifygetvars($t_params,$_GET)) {
			$tid=$_GET["t_id"];
			$ttag=$_GET["t_tag"];
		}
	}
	
	$db=DB_CreateDefault();
	$db->connect();
	$pagetype=GetForumPageType($db,$cid,$ctag,$tid,$ttag);
	$path=GetForumPagePath($db,$cid,$ctag,$tid,$ttag,$pagetype);
	$content=GetForumPageContent($db,$cid,$ctag,$tid,$ttag,$pagetype);
	$contentcount=count($content);
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
	PrintJavaScriptResource( PathDir::GetJSPath($ROOT, 'util.js') );
 ?>
</head>
<body>
<div class="container-fluid">
	<?php PrintNavbar("forum", $ROOT); ?>
</div>
<div class="container">
	<div id="page-content-wrapper">
		<div class="navbar-forum">
			<?php 
				$highlight=($pagetype==$CATEGORIES) ? "forum" : "path";
				PrintForumNavbar($highlight,$ROOT,$path); 
			 ?>
		</div>
		<div class="forum">
			<div class="content">
				<?php
					switch($pagetype){
				/*
				 *	CATEGORY PAGE
				 */					
						case $CATEGORIES:
							echo HtmlPageTitle($FORUM_TITLE);
							for( $i=0; $i<$contentcount; $i++ ){
								$category=$content[$i];
								$glyph=("General" == $category[1]) ? $GLYPH_STAR : "";
								echo HtmlCategory($category[0],$category[1],$glyph);
							}
							break;		
				/*
				 *	CATEGORY > THREADS PAGE
				 */
						case $THREADS:
						
							$glyph="";
							echo HtmlPageTitle($ctag);
							
							for( $i=0; $i<$contentcount; $i++ ){
								$thread=$content[$i];
								echo HtmlThread($cid,$ctag,$thread[0],$thread[2],$glyph,$thread[3],$thread[4]);
							}
							if($usersigned){echo NewThreadModal($query,$CREATE_PAGE);}else{
								echo HtmlLoginNotice(PathDir::GetLoginPath($ROOT));
							}
							break;
				/*
				 *	CATEGORY > THREAD > MESSAGES PAGE
				 */
						case $MESSAGES:
						
							$info=$content[0];
							$messages=$content[1];
							$mcount=count($messages);
						
							echo HtmlPageTitleAuthor($info[0],$info[1]);
							for( $i=0; $i < $mcount; $i++ ){
								$message=$messages[$i];
								$msgid=$message[0];
								$msg=$message[1];
								$email=$message[2];
								$author=$message[3];
								$timestamp=$message[4];
								$canedit=($user==$email);
								$candelete=($user==$email||$user=="b0rg3r@gmail.com");
								
								echo	
									"<div class='panel-group'>",
										"<div class='panel panel-default'>",
											"<div class='panel-messages'>",
												"<div class='row'>",
													HtmlMessageAuthor($author),
													"<div class='col-xs-6'>";
								if($candelete){echo HtmlMsgDeleteFormOpen($query);}
								
								echo 				HtmlMessageDate($timestamp);
								
								if($candelete){echo HtmlMsgDeleteFormClose($msgid);}
								echo 			"</div>",
												"</div>";											
								if($canedit){echo HtmlMsgEditFormOpen($query);}
								
								echo 		"<div class='row'>",
													"<div class='content-msg' id='c{$i}'>",
														"{$msg}",
													"</div>",
												"</div>";
														
								if($canedit){echo HtmlMsgEditFormClose($i, $msgid);}
								echo 	"</div>",
										"</div>",
									"</div>";
							}
							if($usersigned){echo HtmlReplyForm($query);}
							else{echo HtmlLoginNotice(PathDir::GetLoginPath($ROOT));}
							
							echo UserToolPanelJavaScript();
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