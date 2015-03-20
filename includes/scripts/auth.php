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

function isValidEmail($email) {
	$regex = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
	if (!preg_match($regex, $email)) return FALSE;
	return TRUE;
}

function isValidAlias($alias) {
	if ($alias == NULL) return FALSE;
	if ($alias == "")   return FALSE;
	$regex = "/^(?=[0-9a-zA-Z\s]{3,32}$)[a-zA-Z\s]+[a-zA-Z0-9\s]*/";
	if (!preg_match($regex, $alias)) return FALSE;
	
	return TRUE;
}

function ValidateSignupInformation($email, $alias) {
	return (isValidEmail($email) && isValidAlias($alias));
}

/* #### Input Validation End ################################### */
 ?>