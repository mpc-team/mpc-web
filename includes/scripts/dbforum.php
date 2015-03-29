<?php
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$MYSQLI_UTILITY);
	include_once($ROOT . PathDir::$MYSQLI_INFO);
	
	function DBF_GetCategories($db,$user) {
		$categories=array();
		if ($db->connected) {
			$sql =<<<EOD
			SELECT ForumCategory.categoryID, ForumCategory.categoryName, ForumCategoryDescr.categoryDescr, ForumCategoryPermissions.permission
			FROM ForumCategory
				JOIN ForumCategoryDescr
					ON ForumCategory.categoryID=ForumCategoryDescr.categoryID
				JOIN ForumCategoryPermissions
					ON ForumCategory.categoryID=ForumCategoryPermissions.categoryID
				ORDER BY ForumCategoryPermissions.permission DESC
EOD;
			$statement= $db->prepare($sql);
			$statement->execute();
			$statement->bind_result($cid,$ctag,$cdes,$cperm);
			while($statement->fetch()) {
				$category= array();
				array_push($category, $cid,$ctag,$cdes,$cperm);
				array_push($categories, $category);
			}
			$statement->close();
			$count= count($categories);
			for($i=0; $i<$count; $i++) {
				$category=$categories[$i];
				$threadcount=DBF_GetCategoryThreadCount($db,$category[0]);
				array_push($categories[$i],$threadcount);
			}
		}
		return $categories;
	}
	
/*
 * 	Threads From Category
 *	---------------------
 *	-Thread information is gathered in a single query.
 *	-IMPORTANT- *		
 *		!: To order threads by their most recent message activity, merging
 *			is necessary but we only need N recent results rather than ALL the messages.
 *
 *		!: It SHOULD only do this merge on threads within that specific Category,
 *			meaning it is at least narrowing its search-field slightly.
 *
 */
	function DBF_GetCategoryThreads($db, $categoryID) {
		$threads=array();
		if($db->connected){
			$sql=<<<EOD
				SELECT fthreads.fthreadID, fthreads.categoryID, fthreads.name, User.userName, ualias.userAlias, finfo.tstamp, minfo.tstamp AS recent
				FROM ForumThreads AS fthreads
					JOIN ForumThreadInfo AS finfo
						ON fthreads.fthreadID=finfo.fthreadID
						AND fthreads.categoryID={$categoryID}
					JOIN User 
						ON finfo.author=User.userName
					JOIN UserAlias AS ualias
						ON User.userID=ualias.userID
					JOIN ThreadMessages AS tmsgs
						ON tmsgs.fthreadID=fthreads.fthreadID
					JOIN ThreadMessageInfo AS minfo
						ON minfo.tmsgID=tmsgs.tmsgID
				GROUP BY fthreads.fthreadID
				ORDER BY recent DESC
EOD;
			$statement=$db->prepare($sql);
			$statement->execute( );
			$statement->bind_result($tid,$cid,$ttag,$user,$alias,$tstamp,$recent);
			while($statement->fetch()){
				$thr=array();
				array_push($thr,$tid,$cid,$ttag,$user,$alias,$tstamp);
				array_push($threads,$thr);
			}
			$statement->close();
			$count=count($threads); 
			for($i=0; $i<$count; $i++) {
				$thr=$threads[$i];
				$mcount=DBF_GetThreadMessageCount($db,$thr[0]);
				array_push($threads[$i],$mcount);
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
								ThreadMessageInfo.author, 
								UserAlias.userAlias, 
								ThreadMessageInfo.tstamp 
				FROM (((ThreadMessages
					JOIN ThreadMessageContent 
						ON ThreadMessages.tmsgID=ThreadMessageContent.tmsgID)
					JOIN ThreadMessageInfo
						ON ThreadMessageInfo.tmsgID=ThreadMessages.tmsgID
					JOIN User
						ON ThreadMessageInfo.author=User.userName)
					JOIN UserAlias
						ON User.userID=UserAlias.userID)
				WHERE ThreadMessages.fthreadID={$tid}
				ORDER BY ThreadMessageInfo.tstamp ASC
EOD;
			$statement= $db->prepare($sql);
			$statement->execute();
			$statement->bind_result($mid,$content,$author,$alias,$tstamp);
			$data=array();
			while($statement->fetch()) {
				$tcontent=array();
				array_push($tcontent,$mid,$content,$author,$alias,$tstamp);
				array_push($data,$tcontent);
			}
			$statement->close();
			$info=DBF_GetThreadInfo($db,$tid);
			array_push($messages,$info);
			array_push($messages,$data);
			
		}
		return($messages);
	}
	
	function DBF_GetRecentPosts($db) {
		if($db->connected) {
			$threads=array( );
			$sql=
<<<EOD
				SELECT ft.fthreadID, ft.name, fc.categoryID, fc.categoryName, ualias.userAlias, tmc.content, tm.tmsgID, tmi.tstamp AS date
				FROM ForumThreads AS ft
					JOIN ForumCategory AS fc
						ON ft.categoryID=fc.categoryID
					JOIN ForumCategoryPermissions AS fcp
						ON ft.categoryID=fcp.categoryID
					JOIN ForumThreadInfo AS fti
						ON fti.fthreadID=ft.fthreadID
					JOIN ThreadMessages AS tm
						ON tm.fthreadID=ft.fthreadID
					JOIN ThreadMessageInfo AS tmi
						ON tmi.tmsgID=tm.tmsgID
					JOIN ThreadMessageContent AS tmc
						ON tmc.tmsgID=tm.tmsgID
					JOIN User
						ON tmi.author=User.userName
					JOIN UserAlias AS ualias
						ON User.userID=ualias.userID
				WHERE fcp.permission='public'
				ORDER BY date DESC
				LIMIT 3
EOD;
			$statement=$db->prepare($sql);
			$statement->execute( );
			$statement->bind_result($tid,$ttag,$cid,$ctag,$author,$content,$mid,$date);
			while($statement->fetch()) {
				$thread=array( );
				array_push($thread,$tid,$ttag,$cid,$ctag,$author,$content,$mid,$date);
				array_push($threads,$thread);
			}
			$statement->close( );
			return $threads;
		}
		return NULL;
	}
	
	function DBF_GetNewMessageID($db) {
		if ($db->connected) {
			$sql = "SELECT tmsgID FROM ThreadMessages ORDER BY tmsgID DESC LIMIT 0, 1";
			$statement= $db->prepare($sql);
			$statement->execute();
			$statement->bind_result($mid);
			$id = 1;
			if($statement->fetch()) {
				$id= $mid + 1;
			}
			$statement->close();
			return $id;
		}
		return -1;
	}
	
	function DBF_GetNewThreadID($db) {
		if ($db->connected) {
			$sql = "SELECT fthreadID FROM ForumThreads ORDER BY fthreadID DESC LIMIT 0, 1";
			$statement= $db->prepare($sql);
			$statement->execute();
			$statement->bind_result($tid);
			$id= 1;
			if($statement->fetch()) {
				$id= $tid + 1;
			}
			$statement->close();
			return $id;
		}
		return -1;
	}
	
	function DBF_GetNewCategoryID($db) {
		if ($db->connected) {
			$sql = "SELECT categoryID FROM ForumCategory ORDER BY categoryID DESC LIMIT 0, 1";
			$statement= $db->prepare($sql);
			$statement->execute();
			$statement->bind_result($cid);
			$id= 1;
			if($statement->fetch()) {
				$id= $cid + 1;
			}
			$statement->close();
			return $id;
		}
		return -1;
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
			$statement= $db->prepare($sql);
			$statement->execute();
			$statement->bind_result($name,$alias,$tstamp,$user);
			$info= array();
			if($statement->fetch()) {
				array_push($info,$name,$alias,$tstamp,$user);
			}
			$statement->close();
			return $info;
		}
		return NULL;
	}
	
	function DBF_GetMessageInfo($db,$mid) {
		if($db->connected) {
			$sql=<<<EOD
				SELECT author, tstamp
				FROM ThreadMessageInfo
				WHERE ThreadMessageInfo.tmsgID={$mid}
EOD;
			$statement= $db->prepare($sql);
			$statement->execute();
			$statement->bind_result($author,$tstamp);
			$info= array();
			if($statement->fetch()) {
				array_push($info,$author,$tstamp);
			}
			$statement->close();
			return $info;
		}
		return NULL;
	}
	
	function DBF_GetThreadMessageCount($db,$tid) {
		if($db->connected) {
			$sql="SELECT COUNT(*) FROM ThreadMessages WHERE fthreadID={$tid}";
			$statement= $db->prepare($sql);
			$statement->execute();
			$statement->bind_result($count);
			$mcount= -2;
			if($statement->fetch()) {
				$mcount= $count;
			}
			$statement->close();
			return $mcount;
		}
		return -1;
	}
	
	function DBF_GetCategoryThreadCount($db,$cid) {
		if($db->connected) {
			$sql="SELECT COUNT(*) FROM ForumThreads WHERE categoryID={$cid}";
			$statement= $db->prepare($sql);
			$statement->execute();
			$statement->bind_result($count);
			$ccount= -2;
			if($statement->fetch()) {
				$ccount= $count;
			}
			$statement->close();
			return $ccount;
		}
		return -1;
	}
	
	function DBF_GetCategoryPermissions($db,$cid) {
		if($db->connected) {
			$sql="SELECT permission FROM ForumCategoryPermissions WHERE categoryID={$cid}";
			$perms=array( );
			$statement= $db->prepare($sql);
			$statement->execute();
			$statement->bind_result($perm);
			while($statement->fetch()) {
				array_push($perms,$perm);
			}
			$statement->close();
			return $perms;
		}
		return NULL;
	}
	
	function DBF_CheckCategory($db,$cid,$ctag){
		if($db->connected){
			$sql=<<<EOD
				SELECT categoryID FROM ForumCategory
				WHERE categoryID={$cid} AND categoryName=?
EOD;
			$statement= $db->prepare($sql);
			$statement->bind_param("s", $ctag);
			$statement->execute();
			$statement->store_result();
			$rows= $statement->num_rows;
			$statement->close();
			return($rows > 0);
		}
		return(FALSE);
	}
	
	function DBF_CheckThread($db,$tid,$ttag){
		if($db->connected){
			$sql="SELECT fthreadID FROM ForumThreads WHERE fthreadID={$tid} AND ForumThreads.name=?";
			$statement= $db->prepare($sql);
			$statement->bind_param("s", $ttag);
			$statement->execute();
			$statement->store_result();	
			$rows= $statement->num_rows;
			$statement->close();
			return($rows > 0);
		}
		return(FALSE);
	}
	
	function DBF_CreateCategory($db, $name, $descr, $perms) {
		if ($db->connected) {
			$id  = DBF_GetNewCategoryID($db);
			$sql = "INSERT INTO ForumCategory VALUES ({$id}, ?)";
			$statement= $db->prepare($sql);
			$statement->bind_param("s", $name);
			if ($statement->execute()) {
				$sql="INSERT INTO ForumCategoryDescr VALUES ({$id}, ?)";
				$statement= $db->prepare($sql);
				$statement->bind_param("s", $descr);
				if($statement->execute()){
					$pcount=count($perms);
					$padded=0;
					for($i=0; $i<$pcount; $i++) {					
						$sql="INSERT INTO ForumCategoryPermissions VALUES ({$id}, ?)";
						$statement= $db->prepare($sql);
						$statement->bind_param("s",$perms[$i]);
						$padded=($statement->execute())?($padded+1):($padded);
					}
					return $padded;
				}else{
					$sql="DELETE FROM ForumCategory WHERE categoryID={$id}";
					$statement= $db->prepare($sql);
					$statement->execute();
				}
			}
		}
		return (-1);
	}
	
	function DBF_CreateThread($db, $categoryID, $name, $author) {
		if ($db->connected) {
			$id = DBF_GetNewThreadID($db);
			$sql = "INSERT INTO ForumThreads VALUES ({$id}, {$categoryID}, ?)";
			$statement= $db->prepare($sql);
			$statement->bind_param("s", $name);
			if ($statement->execute()) {
				$sql="INSERT INTO ForumThreadInfo VALUES({$id}, ?, NOW())";
				$statement= $db->prepare($sql);
				$statement->bind_param("s", $author);
				if($statement->execute()){
					return $id;
				}else{
					$sql="DELETE FROM ForumThreads WHERE fthreadID={$id}";
					$statement= $db->prepare($sql);
					$statement->execute();
				}
			}
		}
		return (-1);
	}
	
	function DBF_UpdateThread($db,$tid,$name) {
		if($db->connected) {
			$sql= "UPDATE ForumThreads SET `name`=? WHERE fthreadID={$tid}";
			$statement= $db->prepare($sql);
			$statement->bind_param('s', $name);
			return $statement->execute();
		}
		return FALSE;
	}
	
	function DBF_DeleteThread($db, $tid) {
		if($db->connected) {
			$sql=<<<EOD
				DELETE ft, fi, tm, tmi, tmc
				FROM ForumThreads AS ft
					JOIN ForumThreadInfo AS fi
						ON ft.fthreadID=fi.fthreadID
						AND ft.fthreadID={$tid}
					JOIN ThreadMessages AS tm
						ON tm.fthreadID=ft.fthreadID
					JOIN ThreadMessageInfo AS tmi
						ON tmi.tmsgID=tm.tmsgID
					JOIN ThreadMessageContent AS tmc
						ON tmc.tmsgID=tm.tmsgID
EOD;
			$statement= $db->prepare($sql);
			return $statement->execute();
		}
		return FALSE;
	}
		
		
	function DBF_CreateMessage($db, $tid, $content, $author) {
		if ($db->connected) {
			$id = DBF_GetNewMessageID($db);
			$sql = "INSERT INTO ThreadMessages VALUES ({$id}, {$tid})";
			$statement= $db->prepare($sql);
			if ($statement->execute()) {
				$sql=<<<EOD
					INSERT INTO ThreadMessageContent
					VALUES ({$id}, ?)
EOD;
				$statement= $db->prepare($sql);
				$statement->bind_param("s", $content);
				if($statement->execute()) {
					$sql="INSERT INTO ThreadMessageInfo VALUES ({$id}, ?, NOW())";
					$statement= $db->prepare($sql);
					$statement->bind_param("s", $author);
					if($statement->execute()) {
						return $id;
					}else{
						$sql="DELETE FROM ThreadMessageContent WHERE ThreadMessageContent.tmsgID={$id}";
						$statement= $db->prepare($sql);
						$statement->execute();
						$sql="DELETE FROM ThreadMessages WHERE ThreadMessages.tmsgID={$id}";
						$statement= $db->prepare($sql);
						$statement->execute();
						return -200;
					}
				}else{
					$sql="DELETE FROM ThreadMessages WHERE ThreadMessages.tmsgID={$id}";
					$statement->prepare($sql);
					$statement->execute();
					return -100;
				}
			}
		}
		return(-1);
	}
	
	function DBF_UpdateMessage($db, $mid, $content){
		if($db->connected){
			$sql="UPDATE ThreadMessageContent SET content=? WHERE tmsgID={$mid}";
			$statement= $db->prepare($sql);
			$statement->bind_param('s', $content);
			return $statement->execute();
		}
		return(FALSE);
	}
	
	function DBF_DeleteMessage($db, $mid){
		if($db->connected){
			$count=0;
			$sql="DELETE FROM ThreadMessageContent WHERE tmsgID={$mid}";
			$statement= $db->prepare($sql);
			$count=($statement->execute())?($count+1):($count);
			$sql="DELETE FROM ThreadMessageInfo WHERE tmsgID={$mid}";
			$statement= $db->prepare($sql);
			$count=($statement->execute())?($count+1):($count);
			$sql="DELETE FROM ThreadMessages WHERE tmsgID={$mid}";
			$statement= $db->prepare($sql);
			$count=($statement->execute())?($count+1):($count);
			return($count);
		}
		return(-1);
	}
	
	function DBF_CreateCategoryTable($db) {
		if ($db->connected) {
			$sql = <<<EOD
				CREATE TABLE ForumCategory (
					categoryID INT PRIMARY KEY,
					categoryName CHAR(128)
				)
EOD;
			$statement= $db->prepare($sql);
			return $statement->execute();
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
			$statement= $db->prepare($sql);
			return $statement->execute();
		}
		return(FALSE);
	}
	
	function DBF_CreateCategoryPermissionsTable($db) {
		if($db->connected) {
			$sql=<<<EOD
				CREATE TABLE ForumCategoryPermissions (
					categoryID INT NOT NULL,
					permission CHAR(32) NOT NULL
				)
EOD;
			$statement= $db->prepare($sql);
			return $statement->execute();
		}
		return FALSE;
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
			$statement= $db->prepare($sql);
			return $statement->execute();
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
			$statement= $db->prepare($sql);
			return $statement->execute();
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
			$statement= $db->prepare($sql);
			return $statement->execute();
		}
		return (FALSE);
	}
	
	function DBF_CreateMessageInfoTable($db) {
		if($db->connected) {
			$sql=<<<EOD
				CREATE TABLE ThreadMessageInfo (
					tmsgID INT NOT NULL,
					author CHAR(64) NOT NULL,
					tstamp TIMESTAMP,
					UNIQUE (tmsgID)
				)
EOD;
			$statement= $db->prepare($sql);
			return $statement->execute();
		}
		return FALSE;
	}
	
	function DBF_CreateMessageContentTable($db) {
		if ($db->connected) {
			$sql = <<<EOD
				CREATE TABLE ThreadMessageContent (
					tmsgID INT NOT NULL UNIQUE,
					content TEXT
				)
EOD;
			$statement= $db->prepare($sql);
			return $statement->execute();
		}
		return (FALSE);
	}
 ?>
