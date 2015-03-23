<?php
	$ROOT = "../../..";
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	
	session_start();
	
	$created = FALSE;
	if (isset($_SESSION["USER"])) {
		$user = $_SESSION["USER"];
		if ($user == "b0rg3r@gmail.com" || $user == "keatingc88@gmail.com") {
			$db = DB_CreateDefault();
			$db->connect();
			$cid=array();
			array_push($cid,DBF_CreateCategory($db, "StarCraft II"));
			array_push($cid,DBF_CreateCategory($db, "Heroes of the Storm"));
			array_push($cid,DBF_CreateCategory($db, "Admin"));
			$db->disconnect();
		} 
	}
 ?>
<html>
	<head>
	</head>
	<body>
	</body>
</html>