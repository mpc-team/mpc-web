<?php
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	// Returns set { categoryID, categoryName }
	function DBF_GetCategories($db) {
		$categories=array();
		if ($db->connected) {
			$sql = "SELECT categoryID, categoryName FROM ForumCategory";
			$result = $db->query($sql);
			if ($result) {
				while ($row=$result->fetch_assoc()) {
					$cat=array();
					array_push($cat, $row['categoryID'], $row['categoryName']);
					array_push($categories, $cat);
				}
				$result->close();
				return $categories;
			}
		}
		return $categories;
	}
	
	// Returns set { threadID, categoryID, thread name }
	function DBF_GetCategoryThreads($db, $categoryID) {
		$threads=array();
		if($db->connected){
			$sql="SELECT fthreadID,categoryID,name FROM ForumThreads WHERE categoryID={$categoryID}";
			$result=$db->query($sql);
			if($result){
				while($row=$result->fetch_row()){
					$thr=array();
					array_push($thr,$row[0],$row[1],$row[2]);
					array_push($threads,$thr);
				}
				$result->close();
				return($threads);
			}
		}
		return($threads);
	}
/*
 *
 *	Thread Contents Functions
 *
 */
	function DBF_GetThreadContents($db, $threadID){
		$messages=array();
		if($db->connected){
			$sql=<<<EOD
				SELECT 	ThreadMessages.tmsgID AS id, 
								ThreadMessageContent.content AS content, 
								ThreadMessageContent.author AS author, 
								UserAlias.userAlias AS alias, 
								ThreadMessageContent.tstamp AS time 
				FROM (((ThreadMessages
					JOIN ThreadMessageContent 
						ON ThreadMessages.tmsgID=ThreadMessageContent.tmsgID)
					JOIN User
						ON ThreadMessageContent.author=User.userName)
					JOIN UserAlias
						ON User.userID=UserAlias.userID)
				WHERE ThreadMessages.fthreadID={$threadID}
				ORDER BY ThreadMessageContent.tstamp ASC
EOD;
			$result=$db->query($sql);
			if($result){
				while($row=$result->fetch_assoc()){
					$content=array();
					array_push($content,$row['id'],
															$row['content'],
															$row['author'],
															$row['alias'],
															$row['time']);
					array_push($messages,$content);
				}
				$result->close();
			}
		}
		return($messages);
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
	
	function DBF_GetThreadTitle($db,$tid){
		if($db->connected){
			$sql="SELECT name FROM ForumThreads WHERE fthreadID={$tid}";
			$result=$db->query($sql);
			$row=$result->fetch_assoc();
			$title=$row['name'];
			$result->close();
			return($title);
		}
		return(null);
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
	
	function DBF_CreateThreadInfoTable($db){
		if($db->connected){
			$sql=<<<EOD
				CREATE TABLE ForumThreadInfo (
					fthreadID INT NOT NULL,
					author CHAR(64) NOT NULL,
					tstamp TIMESTAMP
				)
EOD;
			return (boolean)$db->query($sql);
		}
		return(FALSE);
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
					author CHAR(64) NOT NULL,
					tstamp TIMESTAMP,
					content TEXT
				)
EOD;
			return (boolean) $db->query($sql);
		}
		return (FALSE);
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
	
	function DBF_CreateThread($db, $categoryID, $name, $author) {
		if ($db->connected) {
			$id = DBF_GetNewThreadID($db);
			$sql = "INSERT INTO ForumThreads VALUES ({$id}, {$categoryID}, '{$name}')";
			if ($db->query($sql)) {
				$sql="INSERT INTO ForumThreadInfo VALUES({$id}, '{$author}', NOW())";
				if($db->query($sql)){
					return $id;
				}else{
					$sql="DELETE FROM ForumThreads WHERE fthreadID={$id}";
					$db->query($sql);
				}
			}
		}
		return (-1);
	}
		
	function DBF_CreateMessage($db, $threadID, $content, $author) {
		if ($db->connected) {
			$id = DBF_GetNewMessageID($db);
			$sql = "INSERT INTO ThreadMessages VALUES ({$id}, {$threadID})";
			if ($db->query($sql)) {
				$sql=<<<EOD
					INSERT INTO ThreadMessageContent
					VALUES ({$id}, '{$author}', NOW(), '{$content}')
EOD;
				$db->query($sql);
				return $id;
			}
		}
		return(-1);
	}
	
	function DBF_UpdateMessage($db, $mid, $content){
		if($db->connected){
			$sql="UPDATE ThreadMessageContent SET content='{$content}' WHERE tmsgID={$mid}";
			return (boolean)$db->query($sql);
		}
		return(FALSE);
	}
	
	function DBF_DeleteMessage($db, $mid){
		if($db->connected){
			$count=0;
			$sql="DELETE FROM ThreadMessageContent WHERE tmsgID={$mid}";
			$count=($db->query($sql))?($count+1):($count);
			$sql="DELETE FROM ThreadMessages WHERE tmsgID={$mid}";
			$count=($db->query($sql))?($count+1):($count);
			return($count);
		}
		return(-1);
	}
 ?>
