<?php
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	function DBF_GetCategories($db) {
		$categories=array();
		if ($db->connected) {
			$sql =<<<EOD
			SELECT ForumCategory.categoryID, ForumCategory.categoryName, ForumCategoryDescr.categoryDescr
			FROM ForumCategory
				JOIN ForumCategoryDescr
					ON ForumCategory.categoryID=ForumCategoryDescr.categoryID
EOD;
			$result = $db->query($sql);
			if ($result) {
				while ($row=$result->fetch_row()) {
					$category=array();
					array_push($category, $row[0], $row[1], $row[2]);
					array_push($categories, $category);
				}
				$result->close();
				$count=count($categories);
				for($i=0; $i<$count; $i++) {
					$category=$categories[$i];
					$threadcount=DBF_GetCategoryThreadCount($db,$category[0]);
					array_push($categories[$i],$threadcount);
				}
				return $categories;
			}
		}
		return $categories;
	}
	
	function DBF_GetCategoryThreads($db, $categoryID) {
		$threads=array();
		if($db->connected){
			$sql=<<<EOD
				SELECT ForumThreads.fthreadID, ForumThreads.categoryID, ForumThreads.name, User.userName, UserAlias.userAlias, ForumThreadInfo.tstamp
				FROM ForumThreads
					JOIN ForumThreadInfo 
						ON ForumThreads.fthreadID=ForumThreadInfo.fthreadID
					JOIN User 
						ON ForumThreadInfo.author=User.userName
					JOIN UserAlias
						ON UserAlias.userID=User.userID
				WHERE categoryID={$categoryID}
EOD;
			$result=$db->query($sql);
			if($result){
				while($row=$result->fetch_row()){
					$thr=array();
					array_push($thr,$row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
					array_push($threads,$thr);
				}
				$count=count($threads); 
				for($i=0; $i<$count; $i++) {
					$thr=$threads[$i];
					$mcount=DBF_GetThreadMessageCount($db,$thr[0]);
					array_push($threads[$i],$mcount);
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
	function DBF_GetThreadContents($db, $tid){
		$messages=array();
		if($db->connected){
			$sql=<<<EOD
				SELECT 	ThreadMessages.tmsgID,
								ThreadMessageContent.content, 
								ThreadMessageContent.author, 
								UserAlias.userAlias, 
								ThreadMessageContent.tstamp 
				FROM (((ThreadMessages
					JOIN ThreadMessageContent 
						ON ThreadMessages.tmsgID=ThreadMessageContent.tmsgID)
					JOIN User
						ON ThreadMessageContent.author=User.userName)
					JOIN UserAlias
						ON User.userID=UserAlias.userID)
				WHERE ThreadMessages.fthreadID={$tid}
				ORDER BY ThreadMessageContent.tstamp ASC
EOD;
			$result=$db->query($sql);
			if($result){
				$data=array();
				while($row=$result->fetch_row()){
					$content=array();
					array_push($content,$row[0],$row[1],$row[2],$row[3],$row[4]);
					array_push($data,$content);
				}
				$result->close();
				$info=DBF_GetThreadInfo($db,$tid);
				array_push($messages,$info);
				array_push($messages,$data);
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
	
	function DBF_GetThreadInfo($db,$tid){
		if($db->connected){
			$sql=<<<EOD
				SELECT name, UserAlias.userAlias, ForumThreadInfo.tstamp, User.userName
				FROM ForumThreads 
					JOIN ForumThreadInfo
						ON ForumThreads.fthreadID=ForumThreadInfo.fthreadID
					JOIN User 
						ON ForumThreadInfo.author=User.userName
					JOIN UserAlias
						ON User.userID=UserAlias.userID
				WHERE ForumThreads.fthreadID={$tid}
EOD;
			$result=$db->query($sql);
			$row=$result->fetch_row();
			$info=array();
			array_push($info,$row[0],$row[1],$row[2],$row[3]);
			$result->close();
			return($info);
		}
		return NULL;
	}
	
	function DBF_GetMessageInfo($db,$mid) {
		if($db->connected) {
			$sql=<<<EOD
				SELECT author, tstamp, content, fthreadID
				FROM ThreadMessageContent
					JOIN ThreadMessages
						ON ThreadMessages.tmsgID=ThreadMessageContent.tmsgID
				WHERE ThreadMessageContent.tmsgID={$mid}
EOD;
			$result=$db->query($sql);
			$row=$result->fetch_row();
			$info=array();
			array_push($info,$row[0],$row[1],$row[2],$row[3]);
			$result->close();
			return $info;
		}
		return NULL;
	}
	
	function DBF_GetThreadMessageCount($db,$tid) {
		if($db->connected) {
			$sql="SELECT COUNT(*) FROM ThreadMessages WHERE fthreadID={$tid}";
			$result=$db->query($sql);
			if($result) {
				$count=$result->fetch_row();
				$count=$count[0];
				$result->close();
				return $count;
			}
		}
		return -1;
	}
	
	function DBF_GetCategoryThreadCount($db,$cid) {
		if($db->connected) {
			$sql="SELECT COUNT(*) FROM ForumThreads WHERE categoryID={$cid}";
			$result=$db->query($sql);
			if($result) {
				$count=$result->fetch_row();
				$count=$count[0];
				$result->close();
				return $count;
			}
		}
		return -1;
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
	
	function DBF_CreateCategoryDescriptionTable($db) {
		if($db->connected) {
			$sql=<<<EOD
				CREATE TABLE ForumCategoryDescr (
					categoryID INT NOT NULL UNIQUE,
					categoryDescr CHAR(255)
				)
EOD;
			return (boolean)$db->query($sql);
		}
		return(FALSE);
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
	
	function DBF_CreateCategory($db, $name, $descr) {
		if ($db->connected) {
			$id  = DBF_GetNewCategoryID($db);
			$sql = "INSERT INTO ForumCategory VALUES ({$id}, '{$name}')";
			if ($db->query($sql)) {
				$sql="INSERT INTO ForumCategoryDescr VALUES ({$id}, '{$descr}')";
				if($db->query($sql)) {
					return $id;
				}else{
					$sql="DELETE FROM ForumCategory WHERE categoryID={$id}";
					$db->query($sql);
				}
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


	function DBF_DeleteThreadMessages($db,$tid) {
		if($db->connected) {
			$sql=<<<EOD
				DELETE ThreadMessages, ThreadMessageContent
				FROM ThreadMessages
					JOIN ThreadMessageContent
						ON ThreadMessages.tmsgID=ThreadMessageContent.tmsgID
						AND ThreadMessages.fthreadID={$tid}
EOD;
			return (boolean)$db->query($sql);
		}
		return FALSE;
	}
	
	function DBF_DeleteThread($db, $tid) {
		if($db->connected) {
			$count=0;
			$count=(DBF_DeleteThreadMessages($db,$tid))?($count+1):($count);
			$sql=<<<EOD
				DELETE ForumThreads, ForumThreadInfo
				FROM ForumThreads
					JOIN ForumThreadInfo
						ON ForumThreads.fthreadID=ForumThreadInfo.fthreadID
						AND ForumThreads.fthreadID={$tid}
EOD;
			$count=($db->query($sql))?($count+1):($count);
			return $count;
		}
		return -1;
	}
		
	function DBF_CreateMessage($db, $tid, $content, $author) {
		if ($db->connected) {
			$id = DBF_GetNewMessageID($db);
			$sql = "INSERT INTO ThreadMessages VALUES ({$id}, {$tid})";
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
			$sql="UPDATE ThreadMessageContent SET content='{$content}',tstamp=tstamp WHERE tmsgID={$mid}";
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
