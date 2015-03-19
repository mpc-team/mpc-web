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
	$emailsplit = explode('@', $email);
	if (count($emailsplit) != 2) return FALSE;
	$name = $emailsplit[0];
	$domain = explode('.', $emailsplit[1]);
	if (count($domain) != 2) return FALSE;
	
	return TRUE;
}

function isValidAlias($alias) {
	if ($alias == NULL) return FALSE;
	if (strlen(trim($alias)) == 0) return FALSE; //just spaces
	
	return TRUE;
}

function ValidateSignupInformation($email, $alias) {
	return (isValidEmail($email) && isValidAlias($alias));
}

/* #### Input Validation End ################################### */
 ?>