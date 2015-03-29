<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/forum/includes/sidebar.php');
	include_once($ROOT . '/forum/includes/navbar.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$FORUMFUNC);;
	
	session_start();
	$usersigned=(isset($_SESSION["USER"]));
	$s_user=($usersigned) ? $_SESSION["USER"] : NULL;
	$s_alias=($usersigned) ? $_SESSION["ALIAS"] : NULL;
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//	VERIFY GET VARIABLES
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	$cid = $ctag = $tid = $ttag = null;
	$c_params=array();
	array_push($c_params,"c_id","c_tag");
	$t_params=array();
	array_push($t_params,"t_id","t_tag");
	if(verifygetvars($c_params,$_GET)) {
		$cid=$_GET["c_id"];
		$ctag=stripslashes($_GET["c_tag"]);
		if(verifygetvars($t_params,$_GET)) {
			$tid=$_GET["t_id"];
			$ttag=stripslashes($_GET["t_tag"]);
		}
	}
	
	$db=DB_CreateDefault();
	$db->connect();
	$s_permissions = array( );
	if(isset($_SESSION["USER"])) {
		$s_permissions=DB_GetUserPermissionsByEmail($db,$_SESSION["USER"]);
	}
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//	USER HAS PAGE PERMISSION
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	if(!CheckPagePermissions($db,$cid,$ctag,$usersigned,$s_user)) {
		header("Location: {$ROOT}/forum/index.php");
		$db->disconnect( );
		exit( );
	}
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//	LOAD PAGE DATA
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	$pagetype=GetForumPageType($db,$cid,$ctag,$tid,$ttag);
	$path=GetForumPagePath($db,$cid,$ctag,$tid,$ttag,$pagetype);
	$content=GetForumPageContent($db,$cid,$ctag,$tid,$ttag,$pagetype,$s_user);
	$contentcount=count($content);
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//	DEFINE VALUES USED IN DOCUMENT
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	$query = $_SERVER['QUERY_STRING'];
	$CATEGORIES = "categories";
	$THREADS = "threads";
	$MESSAGES = "messages";
	if( $pagetype == $MESSAGES ){
		$LAYOUT_OPEN = "<div class='panel-group'><div class='panel panel-default'>";
		$LAYOUT_CLOSE = "</div></div>";
	}else{
		$LAYOUT_OPEN = "<tr><td><div class='panel-group'><div class='panel panel-default'>";
		$LAYOUT_CLOSE = "</div></div></td></tr>";
	}
	
	$highlight=($pagetype==$CATEGORIES)?"forum":"path";
	$navbar="<div class='navbar-forum'>".ForumNavbar($highlight,$ROOT,$path)."</div>";	
	$pagefooter=HtmlPageFooter( );
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//	RECENT POST FEED
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	$postfeed = NULL;
	if($pagetype == $CATEGORIES) {
		$postfeed = GetForumRecentFeed($db);
	}
	$db->disconnect();

//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//	PAGE TITLE HTML
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	$pagetitle="";
	switch($pagetype) {
		case $CATEGORIES:
			$pagetitle=HtmlPageTitle("Forum","Categories");
			break;
		case $THREADS:
			$pagetitle=HtmlPageTitle($ctag,"Forum");
			break;
		case $MESSAGES:
			$info=$content[0];
			$pagetitle=HtmlPageTitleAuthorDate($info[0],$ctag,$info[1],$info[2]);
			break;
	}
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//	LOGIN NOTICE HTML
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	$noticelogin=(!$usersigned) ? HtmlLoginNotice(PathDir::$LOGIN,$query):"";
	$replyform="";
	switch($pagetype) {
		case $MESSAGES:
			if($usersigned) {
				$replyform.=HtmlReplyForm($query,$s_alias);
			}
			break;
	}
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
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php
	echo JavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	echo JavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	echo StyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
	echo JavaScriptResource( PathDir::GetJSPath($ROOT, 'util.js') );
	echo JavaScriptResource( PathDir::GetJSPath($ROOT, 'forum-message-userpanel.js') );
	echo JavaScriptResource( PathDir::GetJSPath($ROOT, 'field-selection.js') );
	echo JavaScriptResource( PathDir::GetJSPath($ROOT, 'page-scroll-on-load.js') );
 ?>
</head>
<body>
<div class="container-fluid">
		<?php 
			$signed = isset($_SESSION["USER"]);
			$user = ($signed) ? $_SESSION["USER"] : NULL;
			PrintNavbar("forum", $ROOT, $signed, $user, $_SERVER["QUERY_STRING"]); 
		?>	
</div>
<div class="container">
	<div id="page-content-wrapper">
		<div class="forum">
			<div class="content">
				<?php 
				
					echo $navbar;
					
					switch($pagetype) {
						case $CATEGORIES:
							echo "<div class='row'>";
							echo "<h3>Recent Activity</h3>";
							echo "</div>";
							echo "<div class='row'>";
							$count=count($postfeed);
							for($i=0; $i<$count; $i++) {
								$recent=$postfeed[$i];
								echo HtmlRecentFeed($recent[6], $recent[2],$recent[3],
										$recent[0],$recent[1],$recent[4],$recent[5],$recent[7]);	
							}
							echo "</div>";
							break;
					}
					
					echo $pagetitle, $noticelogin;
					
					switch($pagetype){
				//////////////////////////////////////////////////////////////////////////////////////////////////////////
				//
				//	Forum Categories
				//
				//////////////////////////////////////////////////////////////////////////////////////////////////////////	
						case $CATEGORIES:
							echo "<table class='table-forum-layout'>";
							for( $i=0; $i<$contentcount; $i++ ){
								$category=$content[$i];
								if($category[3] == 'public' || in_array($category[3],$s_permissions)) {
									echo $LAYOUT_OPEN;
									echo HtmlCategory($category[0],$category[1],$category[2],"",$category[4]);
									echo $LAYOUT_CLOSE;
								}
							}
							echo "</table>";
							break;	
				//////////////////////////////////////////////////////////////////////////////////////////////////////////
				//
				//	Category Threads
				//
				//////////////////////////////////////////////////////////////////////////////////////////////////////////	
						case $THREADS:
							echo "<table class='table-forum-layout'>";
							for( $i=0; $i<$contentcount; $i++ ){
								$thread=$content[$i];
								$editPerm=($s_user==$thread[3] || in_array('admin', $s_permissions));
								
								echo $LAYOUT_OPEN;
								echo HtmlThread($cid,$ctag,$thread[0],$thread[2],"",$thread[4],$thread[5],$thread[6]);
								$toptions=($editPerm) ? HtmlThreadOptions($cid,$ctag,$thread[0],$thread[2]) : "";
								echo $toptions;
								echo $LAYOUT_CLOSE;
								
							}
							echo "</table>";
							if( $usersigned ){ echo NewThreadModal($query);	}
							break;
				//////////////////////////////////////////////////////////////////////////////////////////////////////////
				//
				//	Thread Messages
				//
				//////////////////////////////////////////////////////////////////////////////////////////////////////////	
						case $MESSAGES:
							$messages = $content[1];
							$mcount = count($messages);
							$first = TRUE;
							for( $i=0; $i<$mcount; $i++ ){
								$message = $messages[$i];
								$msgid = $message[0];
								$email = $message[2];
								$editPerm = ($s_user == $email || in_array('admin', $s_permissions));
								
								echo $LAYOUT_OPEN;
								echo HtmlMessage($first,$msgid,$message[1],$email,$message[3],$message[4],$query);
								$moptions=($editPerm) ? HtmlMessageOptions($msgid,$query) : "";
								echo $moptions;
								echo $LAYOUT_CLOSE;
								$first = FALSE;
							}
					}
					
					echo $pagefooter, $navbar, $replyform;
					
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