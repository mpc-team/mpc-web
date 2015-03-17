<?php
	$ROOT = '../..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$AUTHENTICATE);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$db = DB_CreateDefault();
	$db->connect();
	$header = "Location: {$ROOT}/login/signup/index.php";
	if (!DB_UserExists($db, $email)) {
		$id = DB_GetNewUserID($db);
		$hash = ProtectPassword($password);
		if (DB_CreateNewUser($db, $id, $email, $hash)) {
			session_start();
			$_SESSION["USER"] = $email;
			session_write_close();
			$header = "Location: {$ROOT}/profile/index.php";
		}
	} 
	$db->disconnect();
	header($header);
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
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
 	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>
<body>
	<div class="container">
		<div class="page-header text-center">
			<h1>Signup Processing...</h1>
		</div> 
	</div>
</body>
</html>
