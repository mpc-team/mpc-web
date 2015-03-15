<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 
<head>
<?php

	$ROOT = '../..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HTMLHEADER);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
 ?>
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
	
		<div class="text-center">
			<?php
				$dbhandle = new dbutil(dbinfo::$HOST, dbinfo::$USER, dbinfo::$PASS, dbinfo::$NAME);
				$dbhandle->connect();
				
				$sql = "SELECT * FROM User WHERE userName='{$_POST["email"]}' AND userPassword='{$_POST["password"]}'";
				$result = $dbhandle->query($sql);
				$adduser = ($result->num_rows == 0);
				$result->close();
				
				$success = false;
				if ($adduser) {
					$sql = "SELECT userID FROM User ORDER BY userID DESC LIMIT 0, 1";
					$result = $dbhandle->query($sql);
					if ($result) {
						$row = $result->fetch_row();
						$id = $row[0] + 1;
					} else {
						$id = 1;
					}
					$result->close();
				
					$sql = "INSERT INTO User VALUES ({$id}, '{$_POST["email"]}', '{$_POST["password"]}')";
					$result = $dbhandle->query($sql);
					if ($result) {
					
						echo '<em>Signup Success</em> </br>';
						$success = true;
						setcookie("USER", $_POST["email"], 0, '/');
						
					}
				} 
				if (!$success) {
					
					echo '<em>Signup Failed</em> </br>';
					
				}
				
				$dbhandle->disconnect();
				
			 ?>
		</div>
			 
	</div>
	
	<div class="container-fluid">
	
		<?php PrintFooter($ROOT); ?>
	
	</div>
</body>

</html>