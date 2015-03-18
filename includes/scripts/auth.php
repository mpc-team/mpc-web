<?php
include_once($ROOT . '/includes/pathdir.php');
include_once($ROOT . PathDir::$DB);
include_once($ROOT . PathDir::$PASSHASH);

/* __Database_Authentication__ */

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

/* #### Database Authentication End ############################ */

/* __Input_Validation__ */

function hasSpaces($email) {
	return (preg_match('/\s/', $email));
}

function isValidEmail($email) {
	if (hasSpaces($email)) return FALSE;
	$email = $email.split('@');
	if ($email.length != 2) return FALSE;
	$name = $email[0];
	$domain = explode('.', $email[1]);
	if ($domain.length != 2) return FALSE;
	
	return TRUE;
}

function isValidAlias($alias) {
	if ($alias == NULL) return FALSE;
	if (trim($alias) == "") return FALSE; //just spaces
	
	return TRUE;
}

/* #### Input Validation End ################################### */
 ?>