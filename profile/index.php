<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . '/profile/includes/sidebar.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	
	session_start();
	if (!isset($_SESSION["USER"])) {
		header("Location: {$ROOT}/login/index.php");
	} else {
		$db = DB_CreateDefault();
		$db->connect();
		$user = $_SESSION["USER"];
		$id = DB_GetUserID($db, $user);
		$alias = DB_GetUserAliasByID($db, $id);
		$db->disconnect();
	} 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Miacro Power Clan - MPC Gaming.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php
		PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
		PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
		PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
		PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
		PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
	 ?>
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>
<body>
	<div class="container-fluid">
		<?php PrintNavbar("profile", $ROOT); ?>
	</div>
	<div id="wrapper" class="container">
		<?php PrintSidebar("overview", $ROOT); ?>
		<div id="page-content-wrapper">
			<?php
				echo "<h1>{$alias}</h1>";
				echo "<p>{$user}</p>";
			 ?>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>