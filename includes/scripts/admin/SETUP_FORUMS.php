<?php
	$ROOT = "../../..";
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
			
			$db->query("DROP TABLE ForumCategory");
			$db->query("DROP TABLE ForumThreads");
			$db->query("DROP TABLE ThreadMessages");
			$db->query("DROP TABLE ThreadMessageContent");
			
			$createtables = TRUE;
			$createtables = $createtables && DBF_CreateCategoryTable($db);
			$createtables = $createtables && DBF_CreateThreadTable($db);
			$createtables = $createtables && DBF_CreateMessagesTable($db);
			$createtables = $createtables && DBF_CreateMessageContentTable($db);
			
			$success = 'tables';
			if ($createtables) {
				$cid = DBF_CreateCategory($db, "General Testing");
				$success = 'categ';
				if ($cid > 0) {
					$tid = DBF_CreateThread($db, $cid, "Thread Testing");
					$success = 'thread';
					if ($tid > 0) {
						$mid = DBF_CreateMessage($db, $tid);
						$mcont = DBF_AddMessageContent($db, $mid, "Hi", "This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message. This is a testing message.");
						$success = 'msg';
						if ($mid > 0 && $mcont) {
							$success = 'yes';
						}
					}
				}
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
					echo '<p>cid=', $cid, '</p>';
					echo '<p>tid=', $tid, '</p>';
					echo '<p>mid=', $mid, '</p>';
					break;
				case 'perm':
					echo '<h4>You do not have Permission.</h4></br>';
					break;
				case 'tables':
					echo '<h4>Tables were not created.</h4>';
					break;
				case 'categ':
					echo '<h4>Category not created.</h4>';
					echo '<p>cid=', $cid, '</p>';
					break;
				case 'thread':
					echo '<h4>Thread not created.</h4>';
					break;
				case 'msg':
					echo '<h4>Message not created.</h4>';
					break;
			}
			
		 ?>
	</body>
</html>