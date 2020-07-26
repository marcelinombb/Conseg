<?php

namespace App;

class Connection {

	public static function getDb() {
		try {
	
			$conn = new \PDO(
				"mysql:host=localhost;dbname=conseg;port=3307;charset=utf8",
				"root",
				"" 
			);

			return $conn;

		} catch (\PDOException $exception) {
			return'Connection failed: ' . $exception->getMessage();
		}
	}
}

?>