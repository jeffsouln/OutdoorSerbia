<?php
define("APP_DIR","c:/wamp/www/outdoor/");
define("SITE_ROOT","http://localhost/outdoor/");

define("DSN","mysql:host=localhost;dbname=outdoor;charset=utf8") ;
define ("USER", "root");
define ("PASS", "");

session_start();

class Autoloader{
	public static function autoloadClass($className){
		if (file_exists(APP_DIR."model/".$className.".class.php")) {
			include(APP_DIR."model/".$className.".class.php");
		}
		
	}
	public static function autoloadController($className){
		if (file_exists(APP_DIR."controller/".$className.".class.php")) {
			require(APP_DIR."controller/".$className.".class.php");
		}
	}
}
spl_autoload_register("Autoloader::autoloadController");
spl_autoload_register("Autoloader::autoloadClass");
