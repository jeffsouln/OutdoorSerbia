<?php 
require_once "config.php";
if (isset($_POST['btn_submit'])) {
	$email = $_POST['tb_email'];
	$password = $_POST['tb_password'];
	$db = DB::getInstance();
	$st = $db->prepare("SELECT * FROM `users` WHERE `email` = :email AND `password` = :password LIMIT 1");
	$st->bindParam(':email', $email);
	$st->bindParam(':password', $password);
	$st->execute();
	if ($rw = $st->fetch()) { 
		session_start();
		$_SESSION['user_id'] = $rw['user_id'];
		$_SESSION['user'] = $rw['username'];
		$_SESSION['status'] = $rw['status'];
		header("Location: ".SITE_ROOT);
	} else {
		session_start();
		$_SESSION['errorLogin'] = TRUE;
		header("Location: ".SITE_ROOT."login");
	}
}