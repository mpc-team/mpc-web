<?php
class PathDir {	

	# PHP Scripts
	public static $FOOTER = '/includes/footer.php';
	public static $NAVBAR = '/includes/navbar.php';
	public static $SIDEBAR = '/profile/includes/sidebar.php';
	
	public static $LOGINFORM = '/login/form.php';
	public static $SIGNUPFORM = '/login/signup/form.php';
	public static $SIGNOUT = '/login/signout.php';
	
	public static $HEADER = '/includes/header.php';
	public static $PASSHASH = '/includes/phpass/PasswordHash.php';
	public static $AUTHENTICATE = '/includes/scripts/auth.php';
	public static $DB = '/includes/scripts/db.php';
	
	# Database PHP
	public static $DB_UTILITY = '/includes/db/util.php';
	public static $DB_INFO = '/includes/db/info.php';
	
	# Directories
	public static $CSS = '/includes/css/';
	public static $JS = '/includes/js/';
	
	# Common Dependencies
	public static $BS_SB_CSS = '/bootstrap/css/simple-sidebar.css';
	public static $BS_CSS = '/bootstrap/css/bootstrap.css';
	public static $BS_JS = '/bootstrap/js/bootstrap.js';
	public static $JQUERY = '/bootstrap/js/jquery-1.11.2.js';
	
	# This Path
	public static $PATHDIR = '/includes/pathdir.php';
	
	
	# ---- Utility Functions -------------------------------
	
	public static function GetJQueryPath($root) {
		return $root . self::$JQUERY;
	}
	
	public static function GetBootstrapCSSPath($root) {
		return $root . self::$BS_CSS;
	}
	
	public static function GetBootstrapJSPath($root) {
		return $root . self::$BS_JS;
	}
	
	public static function GetBootstrapSidebarCSSPath($root) {
		return $root . self::$BS_SB_CSS;
	}
	
	public static function GetCSSPath($root, $cssName) {
		return $root . self::$CSS . $cssName;
	}
	
	public static function GetJSPath($root, $jsName) {
		return $root . self::$JS . $jsName;
	}
}

?>