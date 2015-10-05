<?php 
require_once "config.php";
	$errors = array();
if (isset($_POST['btn_submit'])) {
	if (!empty($_POST['tb_fname'])){
		$first_name = $_POST['tb_fname'];
		if (!Validation::textValidation($first_name)) {
		$errors[] = "Ime može sadržati samo slova i razmake.";
		}
	} else {
		$errors[] = "Morate popuniti polje Ime.";
	}
	if (!empty($_POST['tb_lname'])){
		$last_name = $_POST['tb_lname'];
		if (!Validation::textValidation($last_name)) {
		$errors[] = "Prezime može sadržati samo slova i razmake.";
		}
	} else {
		$errors[] = "Morate popuniti polje Prezime.";
	};
	if (!empty($_POST['tb_username'])){
		$username = $_POST['tb_username'];
		if (!Validation::usernameValidation($username)) {
		$errors[] = "Username može sadržati samo slova, brojeve, . , _ i mora imati izmedju 3 i 15 karaktera.";
		}
	} else {
		$errors[] = "Morate popuniti polje Username.";
	};
	if (!empty($_POST['tb_password'])){
		$password = $_POST['tb_password'];
		if (!Validation::passwordValidation($password)) {
		$errors[] = "Šifra mora sadržati jedno veliko slovo, jedno malo i jedan broj 8 i 50 karaktera dugačka.";
		}
	} else {
		$errors[] = "Morate popuniti polje Password.";
	};
	if (!empty($_POST['tb_email'])){
		$email = $_POST['tb_email'];
		if (!Validation::emailValidation($email)) {
		$errors[] = "Neispravna email adresa.";
		}
	} else {
		$errors[] = "Morate popuniti polje Email.";
	};
	if (empty($errors)) {
		$new_user = new User ($first_name,$last_name,$username,$password,$email);
		$new_user->BeginRegistration($first_name,$last_name,$username,$password,$email);
		header("Location: ".SITE_ROOT."login");
	} else {
	$_SESSION['errors'] = $errors;
	header("Location: ".SITE_ROOT."register");
	}
}
