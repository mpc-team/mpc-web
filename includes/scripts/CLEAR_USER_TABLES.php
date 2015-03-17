<?php
	$ROOT = '../..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	session_start();
	
	$success = FALSE;
	if (isset($_SESSION["USER"]) and ($_SESSION["USER"] == 'b0rg3r@gmail.com')) {
		$db = new dbutil(dbinfo::$HOST, dbinfo::$USER, dbinfo::$PASS, dbinfo::$NAME);
		$db->connect();
		$sql = "TRUNCATE TABLE User";
		$db->query($sql);
		$sql = "TRUNCATE TABLE UserAlias";
		$db->query($sql);
		$db->disconnect();
		$success = TRUE;
	}
 ?>
<html>
	<head>
		<title>Development</title>
	</head>
	<body>
		<h1>Testing</h1>
		<?php 
			if ($success) 
				echo '<h4>Action completed.</h4></br>';
			else
				echo '<h4>Action cancelled.</h4></br>';
		 ?>
	</body>
</html>