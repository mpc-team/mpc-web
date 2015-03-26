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
			$public=array();
			$admin=array();
			array_push($public,'public');
			array_push($admin,'admin');
			DBF_CreateCategory($db, "StarCraft II", "Posts related to StarCraft II builds, strategies, etc.",$public);
			DBF_CreateCategory($db, "Heroes of the Storm", "Posts related to Heroes of the Storm gameplay, team-finding, etc.",$public);
			DBF_CreateCategory($db, "Counter-Strike: Global Offensive", "Let people know you play and team-up.",$public);
			DBF_CreateCategory($db, "Admin","Administration board. Eventually only available to Admins.",$admin);
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