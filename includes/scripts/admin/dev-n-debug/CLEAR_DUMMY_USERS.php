<?php
	$ROOT = "../../../..";
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB);
	
	session_start();
	
	// This is a Safe-Guard to prevent people from doing this. Only the Users
	// 'b0rg3r@gmail.com' and 'keatingc88@gmail.com'.
	$success = 'fail';
	if (isset($_SESSION["USER"])) {
		$user = $_SESSION["USER"];
		if ($user == "b0rg3r@gmail.com" || $user == "keatingc88@gmail.com") {
			$db = DB_CreateDefault();
			$db->connect();
			
			$id = DB_GetUserID($db, 'destiny@bungie.com');
			DB_DeleteUser($db, $id);
			
			$db->disconnect();
			$success = 'yes';
		} else { $success = 'perm'; }
	}
 ?>
<html>
	<head>
		<title>Development</title>
	</head>
	<body>
		<h1>Testing</h1>
		<?php 
			switch ($success) {
				case 'fail':
					echo '<h4>Action cancelled.</h4></br>';
					break;
				case 'yes':
					echo '<h4>Action completed.</h4></br>';
					break;
				case 'perm':
					echo '<h4>You do not have Permission.</h4></br>';
					break;
			}
		 ?>
	</body>
</html>