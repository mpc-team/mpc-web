<?php
	$ROOT = '../..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HTMLHEADER);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	session_start();
	
	$dbhandle = new dbutil(dbinfo::$HOST, dbinfo::$USER, dbinfo::$PASS, dbinfo::$NAME);
	$dbhandle->connect();
	$sql = "SELECT * FROM User WHERE userName='{$_POST["email"]}'";
	$result = $dbhandle->query($sql);
	if ($result->num_rows > 0) {
		$adduser = false;
	} else {
		$adduser = true;
	}
	$result->close();
	$success = false;
	if ($adduser) {
		$sql = "SELECT userID FROM User ORDER BY userID DESC LIMIT 0, 1";
		$result = $dbhandle->query($sql);
		if ($result) {
			$row = $result->fetch_assoc();
			$id = $row['userID'] + 1;
		} else {
			$id = 1;
		}
		$result->close();
		$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
		$sql = "INSERT INTO User VALUES ({$id}, '{$_POST["email"]}', '{$hash}')";
		$result = $dbhandle->query($sql);
		if ($result) {
			$success = true;
			$sql = "SELECT userPassword FROM User WHERE userID={$id}";
			$result = $dbhandle->query($sql);
			$row = $result->fetch_assoc();
			$passhash = $row['userPassword'];
			$sql = "INSERT INTO UserAlias VALUES ({$id}, '{$_POST["alias"]}')";
			$result = $dbhandle->query($sql);
			$_SESSION["USER"] = $_POST["email"];
			session_write_close();
			header("Location: {$ROOT}/profile/index.php");
		}
	} 
	$dbhandle->disconnect();
	if (!$success) { 
		header("Location: {$ROOT}/login/signup/index.php");
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
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>

</html>
