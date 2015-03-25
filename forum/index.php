<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/forum/includes/sidebar.php');
	include_once($ROOT . '/forum/includes/navbar.php');
	include_once($ROOT . '/forum/includes/modal.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$FORUMFUNC);
	
	$query = $_SERVER['QUERY_STRING'];
	$CREATE_PAGE = $ROOT . '/forum/thread/create.php';
	$CATEGORIES = "categories";
	$THREADS = "threads";
	$MESSAGES = "messages";
	
	$GLYPH_STAR="<span class='glyphicon glyphicon-star'></span>";
	
	session_start();
	$usersigned=(isset($_SESSION["USER"]));
	$s_user=($usersigned) ? $_SESSION["USER"] : NULL;
	$s_alias=($usersigned) ? $_SESSION["ALIAS"] : NULL;
	
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
	
	$highlight=($pagetype==$CATEGORIES)?"forum":"path";
	$navbar="<div class='navbar-forum'>".ForumNavbar($highlight,$ROOT,$path)."</div>";
	$pagefooter=HtmlPageFooter( );
	
	$pagetitle="";
	switch($pagetype) {
		case $CATEGORIES:
			$pagetitle=HtmlPageTitle("MPC Gaming","Forums");
			break;
		case $THREADS:
			$pagetitle=HtmlPageTitle($ctag,"Forum");
			break;
		case $MESSAGES:
			$info=$content[0];
			$pagetitle=HtmlPageTitleAuthorDate($info[0],$ctag,$info[1],$info[2]);
			break;
	}
	
	$noticelogin=(!$usersigned) ? HtmlLoginNotice(PathDir::$LOGIN,$query):"";
	$replyform="";
	switch($pagetype) {
		case $MESSAGES:
			if($usersigned) {
				$replyform.=HtmlReplyForm($query,$s_alias);
				$replyform.=UserToolPanelJavaScript();
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
		<div class="forum">
			<div class="content">
				<?php 
					echo $navbar,$pagetitle,$noticelogin;
					$layoutopen="<tr><td><div class='panel-group'><div class='panel panel-default'>";
					$layoutclose="</div></div></td></tr>";
					
					switch($pagetype){
						case $CATEGORIES:
							echo "<table class='table-forum-layout'>";
							for( $i=0; $i<$contentcount; $i++ ){
								$category=$content[$i];
								$glyph=("General"==$category[1])?$GLYPH_STAR:"";
								echo $layoutopen;
								echo HtmlCategory($category[0],$category[1],$category[2],$glyph,$category[3]);
								echo $layoutclose;
							}
							echo "</table>";
							break;	
							
						case $THREADS:
							echo "<table class='table-forum-layout'>";
							for( $i=0; $i<$contentcount; $i++ ){
								$thread=$content[$i];
								echo $layoutopen;
								echo HtmlThread($cid,$ctag,$thread[0],$thread[2],"",$thread[4],$thread[5],$thread[6]);
								$toptions=($s_user == $thread[3]) ? HtmlThreadOptions($cid,$ctag,$thread[0],$thread[2]) : "";
								echo $toptions;
								echo $layoutclose;
							}
							echo "</table>";
							if( $usersigned ){ echo NewThreadModal($query,$CREATE_PAGE);	}
							break;
							
						case $MESSAGES:
							$messages = $content[1];
							$mcount = count($messages);
							for( $i=0; $i<$mcount; $i++ ){
								$message = $messages[$i];
								$email = $message[2];
								$canEdit = ($s_user==$email);
								$canDelete = ($s_user==$email || $s_user=="b0rg3r@gmail.com");
								echo HtmlMessage($canEdit,$canDelete,
									$message[0],$message[1],$message[2],$message[3],$message[4],
									$query,$i);
							}
					}
					echo $pagefooter,$navbar,$replyform;
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