<?php
	$ROOT = '..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$AUTHENTICATE);
	include_once($ROOT . PathDir::$HEADER);
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$PASSHASH);
	
	$email = trim($_POST["email"]);
	$password = $_POST["password"];
	$query=$_SERVER["QUERY_STRING"];
	if(strlen($query) > 0) $query="?".$query;
	
	$header = "Location: {$ROOT}/login/index.php".$query;
	$v_email = isValidEmail($email);
	if ($v_email && AuthenticateUser($email, $password)) {
		$db=DB_CreateDefault();
		$db->connect();
		$alias=DB_GetUserAliasByEmail($db,$email);
		$db->disconnect();
		session_start();
		$_SESSION["USER"] = $email;
		$_SESSION["ALIAS"] = $alias;
		session_write_close();
		if(strlen($query) > 0) {
			$header="Location: {$ROOT}/forum/index.php".$query;
		}else{
			$header = "Location: {$ROOT}/profile/index.php";
		}
	} 
	header( $header );
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Multi-Player Clan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<?php
	echo JavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	echo PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	echo JavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	echo StyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
	<meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
</head>
<body>
	<div class="container">
		<div class="page-header text-center">
			<h1>Login Redirecting...</h1>
			<?php
				echo $query."<br>";
			 ?>
		</div>
	</div>
</body>
</html>
