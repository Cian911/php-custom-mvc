<?php

class Session {

	public static function init(){
		session_start();
	}

	public static function set($key, $value){ //set session
		$_SESSION[$key] = $value;
	} 

	public static function get($key){ //get session
		if(isset($_SESSION[$key])){
			return $_SESSION[$key];
		}
	}

	public static function endSession(){
		session_destroy();
	}
}