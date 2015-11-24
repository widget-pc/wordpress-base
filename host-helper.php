<?php 

abstract class ConfigHostCloud{
	static $host        = '';
	static $db_name     = '';
	static $db_user     = '';
	static $db_password = '';
}

abstract class ConfigLocalHost{
	static $db_host     = 'localhost';
	static $db_name     = 'wordpress_base';
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