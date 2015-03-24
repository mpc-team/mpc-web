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
			DBF_CreateCategory($db, "StarCraft II", "Posts related to StarCraft II builds, strategies, etc.");
			DBF_CreateCategory($db, "Heroes of the Storm", "Posts related to Heroes of the Storm gameplay, team-finding, etc.");
			DBF_CreateCategory($db, "Admin","Administration board. Eventually only available to Admins.");
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