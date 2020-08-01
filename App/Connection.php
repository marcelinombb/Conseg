<?php

namespace App;

use \PDO;

class Connection
{

	public static function getDb()
	{
		try {
			$conn = new PDO("mysql:host=127.0.0.1;dbname=conseg","root","");
			return $conn;
		} catch (\PDOException $exception) {
			return 'Connection failed: ' . $exception->getMessage();
		}
	}
}
