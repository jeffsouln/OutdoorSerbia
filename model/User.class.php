<?php
class User extends Registration {
	public static $table = "users";
	public static $key = "user_id";
	public $first_name;
	public $last_name;
	public $username;
	public $password;
	public $email;

	public function __construct($first_name,$last_name,$username,$password,$email){
	$this->first_name = $first_name;
	$this->last_name = $last_name;
	$this->username = $username;
	$this->password = $password;
	$this->email = $email;
	}
}