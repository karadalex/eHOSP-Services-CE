<?php
// Implementing DB Singleton class
class DB {
	private static $_instance = null; // used to make class singleton
	private $_pdo,
	        $_query,
	        $_error = false,
	        $_results,
	        $_count = 0;

	// Class constructor
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

	// Create an instance of this class and only once (singleton)
	public static function getInstance() {
		if (!isset(self::$_instance)) {
			self::$_instance = new DB();
		}

		return self::$_instance;
	}

	// Run a query on the database
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
				//echo "Query ran successfully!";
				try {
					$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
				} catch (Exception $e) {}
				$this->_count = $this->_query->rowCount();
			} else {
				$this->_error = true;
			}
		}
		return $this;
	}

	// Run a task on the database instead of passing raw queries
	public function action($action, $table, $where = array()) {
		if (count($where) === 3) {
			$operators = array('=', '>', '<', '<=');

			$field    = $where[0];
			$operator = $where[1];
			$value    = $where[2];

			if (in_array($operator, $operators)) {
				$sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
				if (!$this->query($sql, array($value))->error()) {
					return $this;
				}
			}
		}
		return false;
	}

	public function get($table, $where) {
		return $this->action('SELECT *', $table, $where);
	}

	public function delete($table, $where) {
		return $this->action('DELETE', $table, $where);
	}

	public function insert($table, $fields = array()) {
		if (count($fields)) {
			$keys = array_keys($fields);
			$values = null;
			$i = 1;

			foreach($fields as $field) {
				$values .= '?';
				if ($i < count($fields)) {
					$values .= ', ';
				}
				$i++;
			}

			$sql = "INSERT INTO `{$table}` (`" . implode('`, `', $keys) . "`) VALUES ({$values})";

			if (!$this->query($sql, $fields)->error()) {
				return true;
			}

			echo "ok";
		}
		return false;
	}

	public function update($table, $id, $fields) {
		$set = '';
		$i = 1;

		foreach($fields as $name => $value) {
			$set .= "{$name} = ?";
			if ($i < count($fields)) {
				$set .= ', ';
			}
			$i++;
		}


		$sql = "UPDATE `{$table}` SET {$set} WHERE `{$table}`.`user_id` = {$id}";

		if (!$this->query($sql, $fields)->error()) {
			return true;
		}
		return false;
	}

	public function results() {
		return $this->_results;
	}

	public function first() {
		$data = $this->results();
		return $data[0];
	}

	public function error() {
		return $this->_error;
	}

	public function count() {
		return $this->_count;
	}
}
