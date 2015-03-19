<?php
	$ROOT = "../../..";
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB);
	
	session_start();
	
	// This is a Safe-Guard to prevent people from doing this. Only the Users
	// 'b0rg3r@gmail.com' and 'keatingc88@gmail.com'.
	$success = 'fail';
	$created = FALSE;
	$added = 0;
	if (isset($_SESSION["USER"])) {
		$user = $_SESSION["USER"];
		if ($user == "b0rg3r@gmail.com" || $user == "keatingc88@gmail.com") {
			$db = DB_CreateDefault();
			$db->connect();
			
			$sql = "DROP TABLE UserPermissions";
			$db->query($sql);
			
			$sql = <<<EOD
			CREATE TABLE UserPermissions (
				userID INT NOT NULL,
				userPermission CHAR(32) NOT NULL)
EOD;
		// ADMINS
			if ($db->query($sql)) { $created = TRUE; }
			
			$id = DB_GetUserID($db, 'b0rg3r@gmail.com');
			$sql = "INSERT INTO UserPermissions VALUES ({$id}, 'admin')";			
			if ($db->query($sql)) { $added++; }
			
			$id = DB_GetUserID($db, 'b0rg3r@gmail.com');
			$sql = "INSERT INTO UserPermissions VALUES ({$id}, 'member')";			
			if ($db->query($sql)) { $added++; }
			
			$id = DB_GetUserID($db, 'keatingc88@gmail.com');
			$sql = "INSERT INTO UserPermissions VALUES ({$id}, 'admin')";
			if ($db->query($sql)) { $added++; }
			
			$id = DB_GetUserID($db, 'keatingc88@gmail.com');
			$sql = "INSERT INTO UserPermissions VALUES ({$id}, 'member')";
			if ($db->query($sql)) { $added++; }
		
		// MEMBERS
			$id = DB_GetUserID($db, 'mattmell@hotmail.com');
			$sql = "INSERT INTO UserPermissions VALUES ({$id}, 'member')";	
			if ($db->query($sql)) { $added++; }
			$id = DB_GetUserID($db, 'danieljcos@gmail.com');
			$sql = "INSERT INTO UserPermissions VALUES ({$id}, 'member')";	
			if ($db->query($sql)) { $added++; }
			$id = DB_GetUserID($db, 'tonyyu809@gmail.com');
			$sql = "INSERT INTO UserPermissions VALUES ({$id}, 'member')";	
			if ($db->query($sql)) { $added++; }
			
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
					echo "<h4>Action completed. ({$created}, {$added})</h4></br>";
					break;
				case 'perm':
					echo '<h4>You do not have Permission.</h4></br>';
					break;
			}
		 ?>
	</body>
</html>