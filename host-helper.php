<?php 

abstract class ConfigHostCloud{
	static $host        = '162.252.57.83';
	static $db_name     = 'developm_kamilas';
	static $db_user     = 'developm';
	static $db_password = '8aSc3U2u1p';
}

abstract class ConfigLocalHost{
	static $db_host     = 'localhost';
	static $db_name     = 'kamilas';
	static $db_user     = 'root';
	static $db_password = '';
}


class HostHelper{

	public static function get_host(){
		return $_SERVER['SERVER_NAME'];
	}

	public static function get_db_user(){
		if($_SERVER['SERVER_NAME']!='localhost'){
			return ConfigHostCloud::$db_user;
		}
		return ConfigLocalHost::$db_user;
	}

	public static function get_db_name(){
		if($_SERVER['SERVER_NAME']!='localhost'){
			return ConfigHostCloud::$db_name;
		}
		return ConfigLocalHost::$db_name;
	}

	public static function get_db_password(){
		if($_SERVER['SERVER_NAME']!='localhost'){
			return ConfigHostCloud::$db_password;
		}
		return ConfigLocalHost::$db_password;
	}
}

 ?>