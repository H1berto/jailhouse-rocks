<?php 
	 class DB{

		private static $conn;
		
		static function getConn(){
			if(is_null(self::$conn)){
				self::$conn = new PDO('mysql:host=bdmusica.mysql.uhserver.com;dbname=bdmusica','icoders','Icoders@1999');
				self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			return self::$conn;
		}
	}