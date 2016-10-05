<?php
class Database
{
	private  static $dbh;

	private function __construct(){}

	public static function getInstance()
	{
		if(null === self::$dbh)
		{
			//self::$dbh =  new PDO('mysql://hostname='.DB_HOST.';dbname='.DB_NAME .'; charset=utf8' , DB_USER, DB_PASS);
                        self::$dbh =  new PDO('mysql://hostname='.DB_HOST.';dbname='.DB_NAME , DB_USER, DB_PASS);
			self::$dbh->exec("set names utf8");
			 
		}
		return self::$dbh;
	}
}
?>