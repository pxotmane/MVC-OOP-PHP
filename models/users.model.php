<?php
class users extends DatabaseModel {
	public $id;
	public $username;
	public $password;
	public $email;
	public $register_date;
	public $last_login;
	public $status;
	public $active;
	public $admin;
	public $ip;
	public $tablename = 'user';
	public $rows = array (
			'username',
			'password',
			'email',
			'register_date',
			'last_login',
			'status',
			'active',
			'admin',
			'ip' 
	);
	public static function checkUsername($username) {
		$sql = "SELECT username FROM user WHERE username ='" . $username . "'";
		$user = self::read ( $sql, PDO::FETCH_CLASS, __CLASS__ );
		if ($user != false) {
			return false;
		} else {
			return true;
		}
	}
	public static function checkEmail($email) {
		$sql = "SELECT email FROM user WHERE email ='" . $email . "'";
		$user = self::read ( $sql, PDO::FETCH_CLASS, __CLASS__ );
		if ($user != false) {
			return false;
		} else {
			return true;
		}
	}
}
