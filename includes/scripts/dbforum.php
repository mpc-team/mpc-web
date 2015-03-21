<?php
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	function DBF_GetCategories($db) {
		if ($db->connected) {
			$sql = "SELECT categoryID, categoryName FROM ForumCategory";
			$result = $db->query($sql);
			if ($result) {
				$categories=array();
				while ($row=$result->fetch_assoc()) {
					$cat=array();
					array_push($cat, $row['categoryID'], $row['categoryName']);
					array_push($categories, $cat);
				}
				$result->close();
				return $categories;
			}
		}
		return (null);
	}
	
	function DBF_GetCategoryThreads($db, $categoryID) {
		if($db->connected){
			$sql="SELECT fthreadID,categoryID,name FROM ForumThreads WHERE categoryID={$categoryID}";
			$result=$db->query($sql);
			if($result){
				$threads=array();
				while($row=$result->fetch_row()){
					$thr=array();
					array_push($thr,$row[0],$row[1],$row[2]);
					array_push($threads,$thr);
				}
				$result->close();
				return($threads);
			}
		}
		return(null);
	}
	
	function DBF_GetThreadMessages($db, $threadID){
		if($db->connected){
			$sql="SELECT tmsgID FROM ThreadMessages";
			$result=$db->query($sql);
			if($result){
				$msgids=array();
				while($row=$result->fetch_assoc()){
					array_push($msgids,$row["tmsgID"]);
				}
				$result->close();
				return($msgids);
			}
		}
		return(null);
	}
	
	function DBF_GetThreadContents($db, $threadID){
		if($db->connected){
			$sql=<<<EOD
				SELECT ThreadMessages.tmsgID, ThreadMessageContent.title, ThreadMessageContent.content 
				FROM ThreadMessages 
				LEFT JOIN ThreadMessageContent 
				ON ThreadMessages.tmsgID=ThreadMessageContent.tmsgID
EOD;
			$result=$db->query($sql);
			if($result){
				$messages=array();
				while($row=$result->fetch_row()){
					$content=array();
					array_push($content,$row[0],$row[1],$row[2]);
					array_push($messages,$content);
				}
				$result->close();
				return($messages);
			}
		}
		return(null);
	}
	
	function DBF_GetMessageContent($db, $msgID){
		if($db->connected){
			$sql=<<<EOD
				SELECT title,content FROM ThreadMessageContent
				WHERE tmsgID={$smgID}
EOD;
			$result=$db->query($sql);
			if($result){
				$messages=array();
				while($row=$result->fetch_assoc()){
					$content=array();
					array_push($content,$row[0],$row[1]);
					array_push($messages,$content);
				}
				$result->close();
				return $messages;
			}	
		}
		return(null);
	}
	
	function DBF_GetNewMessageID($db) {
		if ($db->connected) {
			$sql = "SELECT tmsgID FROM ThreadMessages ORDER BY tmsgID DESC LIMIT 0, 1";
			$result = $db->query($sql);
			$id = 1;
			if ($result) {
				$row = $result->fetch_assoc();
				$id = $row['tmsgID'] + 1;
				$result->close();
				return $id;
			}
		}
		return (-1);
	}
	
	function DBF_GetNewThreadID($db) {
		if ($db->connected) {
			$sql = "SELECT fthreadID FROM ForumThreads ORDER BY fthreadID DESC LIMIT 0, 1";
			$result = $db->query($sql);
			$id = 1;
			if ($result) {
				$row = $result->fetch_assoc();
				$id = $row['fthreadID'] + 1;
				$result->close();
				return $id;
			}
		}
		return (-1);
	}
	
	function DBF_CheckCategory($db,$cid,$ctag){
		if($db->connected){
			$sql=<<<EOD
				SELECT categoryID FROM ForumCategory
				WHERE categoryID={$cid} AND categoryName='{$ctag}'
EOD;
			$result=$db->query($sql);
			if($result){
				$rows=$result->num_rows;
				return($rows > 0);
			}
		}
		return(FALSE);
	}
	
	function DBF_CheckThread($db,$tid,$ttag){
		if($db->connected){
			$sql=<<<EOD
				SELECT fthreadID FROM ForumThreads 
				WHERE fthreadID={$tid} AND name='{$ttag}'
EOD;
			$result=$db->query($sql);
			if($result){
				$rows=$result->num_rows;
				return($rows > 0);
			}
		}
		return(FALSE);
	}
	
	function DBF_CreateCategoryTable($db) {
		if ($db->connected) {
			$sql = <<<EOD
				CREATE TABLE ForumCategory (
					categoryID INT PRIMARY KEY,
					categoryName CHAR(128)
				)
EOD;
			return (boolean) $db->query($sql);
		}
		return (FALSE);
	}
	
	function DBF_CreateThreadTable($db) {
		if ($db->connected) {
			$sql = <<<EOD
				CREATE TABLE ForumThreads (
					fthreadID INT PRIMARY KEY,
					categoryID INT NOT NULL,
					name CHAR(32)
				)
EOD;
			return (boolean) $db->query($sql);
		}
		return (FALSE);
	}
	
	function DBF_CreateMessagesTable($db) {
		if ($db->connected) {
			$sql = <<<EOD
				CREATE TABLE ThreadMessages (
					tmsgID INT PRIMARY KEY,
					fthreadID INT NOT NULL
				)
EOD;
			return (boolean) $db->query($sql);
		}
		return (FALSE);
	}
	
	function DBF_CreateMessageContentTable($db) {
		if ($db->connected) {
			$sql = <<<EOD
				CREATE TABLE ThreadMessageContent (
					tmsgID INT NOT NULL,
					title CHAR(32),
					content TEXT
				)
EOD;
			return (boolean) $db->query($sql);
		}
		return (FALSE);
	}
	
	function DBF_GetNewCategoryID($db) {
		if ($db->connected) {
			$sql = "SELECT categoryID FROM ForumCategory ORDER BY categoryID DESC LIMIT 0, 1";
			$result = $db->query($sql);
			$id = 1;
			if ($result) {
				$row = $result->fetch_assoc();
				$id = $row['categoryID'] + 1;
				$result->close();
				return $id;
			}
		}
		return (-1);
	}
	
	function DBF_CreateCategory($db, $name) {
		if ($db->connected) {
			$id  = DBF_GetNewCategoryID($db);
			$sql = "INSERT INTO ForumCategory VALUES ({$id}, '{$name}')";
			if ($db->query($sql)) {
				return($id);
			}
		}
		return (-1);
	}
	
	function DBF_CreateThread($db, $categoryID, $name) {
		if ($db->connected) {
			$id = DBF_GetNewThreadID($db);
			$sql = "INSERT INTO ForumThreads VALUES ({$id}, {$categoryID}, '{$name}')";
			if ($db->query($sql)) {
				return $id;
			}
		}
		return (-1);
	}
		
	function DBF_CreateMessage($db, $threadID,$title,$content) {
		if ($db->connected) {
			$id = DBF_GetNewMessageID($db);
			$sql = "INSERT INTO ThreadMessages VALUES ({$id}, {$threadID})";
			if ($db->query($sql)) {
				$sql=<<<EOD
					INSERT INTO ThreadMessageContent
					VALUES ({$id}, '{$title}', '{$content}')
EOD;
				$db->query($sql);
				return $id;
			}
		}
		return(-1);
	}
 ?>
