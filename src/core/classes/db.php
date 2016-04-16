<?php
class db {
	private static $_instance = null;
	private $_pdo,
	        $_query,
	        $_error = false,
	        $_results,
	        $_count = 0;

	// constructor
	private function __construct() {
		try {
			// Connect to MySQL Server with info as specified in configuration file
			$this->_pdo = new PDO('mysql:host='.config_get::get('DB_HOSTNAME').';dbname='.config_get::get('DB_NAME'), config_get::get('DB_ROOT_USERNAME'), config_get::get('DB_ROOT_PASSWORD'));
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}
}