<?php
// Implementing DB Singleton class
class DB {
	private static $_instance = null; // used to make class singleton
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
			// set the PDO error mode to exception
			// echo "Connected successfully<br>";
		    $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}

	public static function getInstance() {
		if (!isset(self::$_instance)) {
			self::$_instance = new DB();
		}

		return self::$_instance;
	}

	public function query($sql, $params = array()) {
		$this->_error = false;
		if ($this->_query = $this->_pdo->prepare($sql)) {
			// echo 'Success';
			$i = 1;
			if (count($params)) {
				foreach ($params as $param) {
					$this->_query->bindValue($i, $param);
					$i++;
				}
			}
			if ($this->_query->execute()) {
				echo "Query ran successfully!";
				$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
				$this->_count = $this->_query->rowCount();
			} else {
				$this->_error = true;
			}
		}
		return $this;
	}

	public function error() {
		return $this->_error;
	}
}