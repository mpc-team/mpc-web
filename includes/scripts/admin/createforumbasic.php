<?php
	$ROOT = "../../..";
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB);
	include_once($ROOT . PathDir::$DBFORUM);
	
	session_start();
	
	function CreateTables($db){
		$createtables = TRUE;
		$createtables = $createtables && DBF_CreateCategoryTable($db);
		$createtables = $createtables && DBF_CreateCategoryDescriptionTable($db);
		$createtables = $createtables && DBF_CreateCategoryPermissionsTable($db);
		$createtables = $createtables && DBF_CreateThreadTable($db);
		$createtables = $createtables && DBF_CreateThreadInfoTable($db);
		$createtables = $createtables && DBF_CreateMessagesTable($db);
		$createtables = $createtables && DBF_CreateMessageInfoTable($db);
		$createtables = $createtables && DBF_CreateMessageContentTable($db);
		return($createtables);
	}
	
	function DropTables($db){
		$db->query("DROP TABLE ThreadMessageInfo");
		$db->query("DROP TABLE ThreadMessageContent");
		$db->query("DROP TABLE ThreadMessages");
		$db->query("DROP TABLE ForumThreadInfo");
		$db->query("DROP TABLE ForumThreads");
		$db->query("DROP TABLE ForumCategoryDescr");
		$db->query("DROP TABLE ForumCategoryPermissions");
		$db->query("DROP TABLE ForumCategory");
	}
	
	// This is a Safe-Guard to prevent people from doing this. Only the Users
	// 'b0rg3r@gmail.com' and 'keatingc88@gmail.com'.
	$created = FALSE;
	if (isset($_SESSION["USER"])) {
		$user = $_SESSION["USER"];
		if ($user == "b0rg3r@gmail.com" || $user == "keatingc88@gmail.com") {
			$db = DB_CreateDefault();
			$db->connect();
			
			DropTables($db);
			$createtables = CreateTables($db);
			if ($createtables) {
				$perms=array( );
				array_push($perms,"public");
				$cid = DBF_CreateCategory($db, "General", "Discussions with no particular topic.", $perms);
				if ($cid > 0) {
					$created=TRUE;
				}else{
					DropTables($db);
				}
			}
			$db->disconnect();
		} 
	}
 ?>
<html>
	<head>
	</head>
	<body>
		<?php 
			if($created){
				echo "<h1>created ({$cid})</h1><br>";
			}else{
				echo "error: {$cid}";
			}			
		?>
	</body>
</html>