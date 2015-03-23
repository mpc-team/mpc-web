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
			
			$db->query("DROP TABLE ForumCategory");
			$db->query("DROP TABLE ForumThreads");
			$db->query("DROP TABLE ThreadMessages");
			$db->query("DROP TABLE ThreadMessageContent");
			$db->query("DROP TABLE ForumThreadInfo");
			
			$createtables = TRUE;
			$createtables = $createtables && DBF_CreateCategoryTable($db);
			$createtables = $createtables && DBF_CreateThreadTable($db);
			$createtables = $createtables && DBF_CreateMessagesTable($db);
			$createtables = $createtables && DBF_CreateMessageContentTable($db);
			$createtables = $createtables && DBF_CreateThreadInfoTable($db);
			
			$success = 'tables';
			if ($createtables) {
				$cid = DBF_CreateCategory($db, "General");
				$success = 'categ';
				if ($cid > 0) {
					$tid = DBF_CreateThread($db, $cid, "Top Thread", "b0rg3r@gmail.com");
					$success = 'thread';
					if ($tid > 0) {
						$mid = DBF_CreateMessage($db, $tid, "This is a testing message.","b0rg3r@gmail.com");
						$success = 'msg';
						if ($mid > 0) {
							$success = 'yes';
							$mid=DBF_CreateMessage($db, $tid,"This is just another testing message.","b0rg3r@gmail.com");
							if ($mid < 0){
								$success="almost";
							}
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
				case 'almost':
					echo '<h4>Second message not created properly.</h4>';
					break;
			}
			
		 ?>
	</body>
</html>