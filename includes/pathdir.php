<?php

#
# class PathDir:
#
#	Listing of important or useful directories and files based
#	on their location from the ROOT directory. 
#
#	Doesn't seem like we have a way to get that.
#

class PathDir 
{	
	# PHP Scripts
	public static $FOOTER = '/includes/footer.php';
	public static $NAVBAR = '/includes/navbar.php';
	public static $LOGINFORM = '/login/form.php';
	public static $SIGNUPFORM = '/login/signup/form.php';
	public static $HTMLHEADER = '/includes/htmlheader.php';
	
	# Directories
	public static $CSS = '/includes/css/';
	public static $JS = '/includes/js/';
	
	# Includes
	public static $BS_CSS = '/bootstrap/css/bootstrap.css';
	public static $BS_JS = '/bootstrap/js/bootstrap.js';
	public static $JQUERY = '/bootstrap/js/jquery-1.11.2.js';
	
	
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
	
	public static function GetCSSPath($root, $cssName) {
		return $root . self::$CSS . $cssName;
	}
	
	public static function GetJSPath($root, $jsName) {
		return $root . self::$JS . $jsName;
	}
}


?>

 
 
 