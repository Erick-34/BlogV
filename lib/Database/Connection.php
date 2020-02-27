<?php

	abstract class Connection
	{
		private static $conn;

       //Conexão com o banco de dados 
		public static function getConn()
		{
			if (self::$conn == null) {
				self::$conn = new PDO('mysql: 
					host=localhost; 
					dbname=blog;', 
					'root', '');
			}
			
			return self::$conn;
		}
	}