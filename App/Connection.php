<?php

namespace App;

class Connection {

	public static function getDb() {
		try {
			//retirei a porta pois estava conflitando no meu pc
			$conn = new \PDO(
				"mysql:host=localhost;dbname=conseg;charset=utf8",
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