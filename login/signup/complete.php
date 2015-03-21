<?php
	$ROOT = '../..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$AUTHENTICATE);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	$alias = trim($_POST['alias']);
	$email = trim($_POST['email']);
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	
	$header = "Location: {$ROOT}/login/signup/index.php";
	if (strcmp($confirm, $password) == 0) {
		$db = DB_CreateDefault();
		$db->connect();
		
		$v_info = ValidateSignupInformation($email, $alias);
		$v_user = ($v_info) ? (!DB_UserExists($db, $email)) : FALSE;
		if ($v_user) {
			$hash = ProtectPassword($password);
			$perm = array();
			array_push($perm, 'member');
			if (DB_CreateNewUser($db, $email, $alias, $perm, $hash)) {
				session_start();
				$_SESSION["USER"] = $email;
				session_write_close();
				$header = "Location: {$ROOT}/profile/index.php";
			}
		}
		$db->disconnect();
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
<?php
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
	<meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
</head>
<body>
	<div class="container">
		<div class="page-header text-center">
			<h1>Signup Processing...</h1>
		</div> 
	</div>
</body>
</html>
