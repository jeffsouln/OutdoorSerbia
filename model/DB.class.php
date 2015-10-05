<?php
class DB {
	private static $instance = null;
	
	final private function __construct() { }
	final private function __clone() { }

	public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new PDO(DSN, USER, PASS);
			}
		return self::$instance;
	}
}