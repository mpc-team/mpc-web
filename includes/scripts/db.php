<?php
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
		
	function DB_CreateDefault() {
		return new dbutil(dbinfo::$HOST, dbinfo::$USER, dbinfo::$PASS, dbinfo::$NAME);
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
	
	function DB_GetUserPermissionsByID($db, $id) {
		if ($db->connected) {
			$sql = "SELECT userPermission FROM UserPermissions WHERE userID={$id}";
			$result = $db->query($sql);
			if ($result) {
				$permissions = array();
				while ($row = $result->fetch_assoc()) {
					array_push($permissions, $row['userPermission']);
				}
				$result->close();
				return $permissions;
			}
		}
		return (null);
	}
	
	function DB_GetUserPermissionsByEmail($db, $email) {
		$id = DB_GetUserID($db, $email);
		return (($id > 0) ? DB_GetUserPermissionsByID($db, $id) : null);
	}
	
	function DB_GetUserMembersList($db) {
		if ($db->connected) {
			$sql = <<<EOD
				SELECT userAlias, userName
				FROM User
				LEFT JOIN UserAlias ON User.userID=UserAlias.userID
EOD;
			$result = $db->query($sql);
			$json = array();
			if ($result) {
				while ($set = $result->fetch_assoc()) {
					$entry = array();
					array_push($entry, $set['userAlias'], $set['userName']);
					array_push($json, $entry);
				}
				$result->close();
			}
			return $json;
		}
		return (null);
	}
	
	function DB_GetUserPublicList($db) {
		if ($db->connected) {
			$sql = <<<EOD
				SELECT userAlias 
				FROM User
				LEFT JOIN UserAlias ON User.userID=UserAlias.userID
EOD;
			$result = $db->query($sql);
			$json = array();
			if ($result) {
				while ($set = $result->fetch_assoc()) {
					$entry = array();
					array_push($entry, $set['userAlias']);
					array_push($json, $entry);
				}
				$result->close();	
			}
			return $json;
		}
		return (null);
	}
	
	function DB_DeleteUser($db, $id) {
		if ($db->connected) {
			$sql = "DELETE FROM User WHERE userID={$id}";
			if ($db->query($sql)) {
				$sql = "DELETE FROM UserAlias WHERE userID={$id}";
				$db->query($sql);
				$sql = "DELETE FROM UserPermissions WHERE userID={$id}";
				$db->query($sql);
				return (TRUE);
			}
		}
		return (FALSE);
	}
	
	function DB_AddUserAlias($db, $id, $alias) {
		if ($db->connected) {
			$sql = "INSERT INTO UserAlias VALUES ({$id}, '{$alias}')";
			return (boolean) $db->query($sql);
		}
		return (FALSE);
	}
	
	function DB_RemoveUserAlias($db, $id, $alias) {
		if ($db->connected) {
			$sql = "DELETE FROM UserAlias WHERE userID={$id} AND userAlias='{$alias}'";
			return (boolean) $db->query($sql);
		}
		return (FALSE);
	}
	
	function DB_RemoveUserAliases($db, $id) {
		if ($db->connected) {
			$sql = "DELETE FROM UserAlias WHERE userID={$id}";
			return (boolean) $db->query($sql);
		}
		return (FALSE);
	}
	
	function DB_AddUserPermission($db, $id, $perm) {
		if ($db->connected) {
			$sql = "INSERT INTO UserPermissions VALUES ({$id}, '{$perm}')";
			return (boolean) $db->query($sql);
		}
		return (FALSE);
	}
	
	function DB_RemoveUserPermission($db, $id, $perm) {
		if ($db->connected) {
			$sql = "DELETE FROM UserPermissions WHERE userID={$id} AND userPermission='{$perm}'";
			return (boolean) $db->query($sql);
		}
		return (FALSE);
	}
	
	function DB_UserExists($db, $email) {
		if ($db->connected) {
			return (DB_GetUserID($db, $email) > 0);
		}
		return (FALSE);
	}
	
	function DB_CreateNewUser($db, $email, $alias, $perm, $pass) {
		if ($db->connected) {
			$id  = DB_GetNewUserID($db);
			$sql = "INSERT INTO User VALUES ({$id}, '{$email}', '{$pass}')";
			$result = $db->query($sql);
			if ($result) {
				$permCount = count($perm);
				DB_AddUserAlias($db, $id, $alias);
				foreach ($perm as $p) {
					DB_AddUserPermission($db, $id, $p);
				}
				return TRUE;
			}
		} 
		return (FALSE);
	}
 ?>
