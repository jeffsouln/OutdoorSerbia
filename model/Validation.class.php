<?php
class Validation {
	public static function textValidation ($data){
		return preg_match("/^[a-zA-Z ]*$/",$data);
	}
	public static function usernameValidation ($data){
		return preg_match("/^[a-zA-Z0-9_\-.]{3,15}$/",$data);
	}
	public static function passwordValidation ($data){
		return preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{8,50}$/",$data);
	}
	public static function emailValidation ($data){
		return filter_var($data, FILTER_VALIDATE_EMAIL);
	} 
}