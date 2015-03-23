<?php
	$ROOT = "../../../..";
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	
	session_start();
	
	// This is a Safe-Guard to prevent people from doing this. Only the Users
	// 'b0rg3r@gmail.com' and 'keatingc88@gmail.com'.
	$created = FALSE;
	$added = 0;
	$success = 'perm';
	if (isset($_SESSION["USER"])) {
		$user = $_SESSION["USER"];
		if ($user == "b0rg3r@gmail.com" || $user == "keatingc88@gmail.com") {
			$db = DB_CreateDefault();
			$db->connect();
			$id=DBF_CreateCategory($db,"Chris\'s Room");
			if($id > 0){
				$success='yes';
			}else{
				$success='fail';
			}
			$db->disconnect();
		} 
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
				case 'yes':
					echo "<h4>Action Completed</h4></br>";
					break;
				case 'perm':
					echo '<h4>You do not have Permission.</h4></br>';
					break;
				case 'fail':
					echo '<h4>Action Failed</h4>';
					break;
			}
			
		 ?>
	</body>
</html>