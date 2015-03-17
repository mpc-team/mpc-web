<?php
include_once($ROOT . '/includes/pathdir.php');
include_once($ROOT . PathDir::$DB);
include_once($ROOT . PathDir::$PASSHASH);

function AuthenticateUser($email, $password) {
	$db = DB_CreateDefault();
	$db->connect();
	$passhash = DB_GetUserCredentials($db, $email);
	$success = false;
	if ($passhash != null) { 
		$hasher = new PasswordHash(8, FALSE);
		$success = $hasher->CheckPassword($password, $passhash);
	}
	$db->disconnect();
	return $success;
}

function ProtectPassword($password) {
	$hasher = new PasswordHash(8, FALSE);
	return $hasher->HashPassword($password);
}
 ?>