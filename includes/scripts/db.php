<?php

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	function DB_CreateDefault() {
		return new dbutil(dbinfo::$HOST, dbinfo::$USER, dbinfo::$PASS, dbinfo::$NAME);
	}
	
	function DB_GetNewUserID($db) {
		if ($db->connected) {
			$sql = "SELECT userID FROM User ORDER BY userID DESC LIMIT 0, 1";
			$result = $db->query($sql);
			$id = 1;
			if ($result) {
				$row = $result->fetch_assoc();
				$id = $row['userID'] + 1;
				$result->close();
				return $id;
			}
		}
		return (-1);
	}
	
	function DB_AddUserAlias($db, $id, $alias) {
		$sql = "INSERT INTO UserAlias VALUES ({$id}, '{$alias}')";
		return (boolean) $db->query($sql);
	}
	
	function DB_CreateNewUser($db, $id, $email, $alias, $pass) {
		if ($db->connected) {
			$sql = "INSERT INTO User VALUES ({$id}, '{$email}', '{$pass}')";
			$result = $db->query($sql);
			if ($result) {
				DB_AddUserAlias($db, $id, $alias);
				return TRUE;
			}
		} 
		return (FALSE);
	}
	
	function DB_GetUserInfoList($db) {
		if ($db->connected) {
			$sql = <<<EOD
				SELECT userName, userAlias 
				FROM User
				LEFT JOIN UserAlias ON User.userID=UserAlias.userID
EOD;
			$result = $db->query($sql);
			$json = array();
			if ($result) {
				while ($set = $result->fetch_assoc()) {
					$entry = array();
					array_push($entry, $set['userName'], $set['userAlias']);
					array_push($json, $entry);
				}
				$result->close();	
			}
			return $json;
		}
		return (null);
	}
	
	function DB_GetUserCredentials($db, $email) {
		if ($db->connected) {
			$sql = "SELECT userName, userPassword FROM User WHERE userName='{$email}'";
			$result = $db->query($sql);
			if ($result) {
				$row = $result->fetch_assoc();
				$cred = $row['userPassword'];
				$result->close();
				return $cred;
			}
		}
		return (null);
	}
	
	function DB_GetUserID($db, $email) {
		if ($db->connected) {
			$sql = "SELECT userID FROM User WHERE userName='{$email}'";
			$result = $db->query($sql);
			if ($result) {
				$row = $result->fetch_assoc();
				$id = $row['userID'];
				$result->close();
				return $id;
			}
		}
		return (-1);
	}
	
	function DB_UserExists($db, $email) {
		if ($db->connected) {
			return (DB_GetUserID($db, $email) > 0);
		}
		return (FALSE);
	}
	
	function DB_GetUserAliasByID($db, $id) {
		if ($db->connected) {
			$sql = "SELECT userAlias FROM UserAlias WHERE userID={$id}";
			$result = $db->query($sql);
			if ($result) {
				$row = $result->fetch_assoc();
				$alias = $row['userAlias'];
				$result->close();
				return $alias;
			}
		}
		return (null);
	}
	
	function DB_GetUserAliasByEmail($db, $email) {
		$id = DB_GetUserID($db, $email);
		return (($id > 0) ? DB_GetUserAliasByID($db, $id) : null);
	}
 ?>