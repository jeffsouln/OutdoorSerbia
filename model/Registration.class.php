<?php
class Registration {
	public static function BeginRegistration($first_name,$last_name,$username,$password,$email){
		$token = md5(time());
		$db = DB::getInstance();
		$st = $db->prepare("INSERT INTO `users` values (null, :username, :password, :email, now(),now(),-1,:token)");
		$st->bindParam(':username', $username);
		$st->bindParam(':password', $password);
		$st->bindParam(':email', $email);
		$st->bindParam(':token', $token);
		$st->execute();
		$lastId = $db->lastInsertId();
		$st = $db->prepare("INSERT INTO `users_info` values (:id, :first_name, :last_name)");
		$st->bindParam(':id', $lastId);
		$st->bindParam(':first_name', $first_name);
		$st->bindParam(':last_name', $last_name);
		echo $st->execute();
		require 'model/PHPMailerAutoload.php';
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPSecure = "tls";
		$mail->Mailer = "smtp";
		$mail->SMTPDebug  = 2;
		$mail->SMTPAuth   = true;
		$mail->Host       = "smtp.gmail.com";
		$mail->Port       = 587;
		$mail->Username   = "outdoor.serbia.mail@gmail.com";
		$mail->Password   = "outdoorserbiapass";
		$mail->SetFrom('outdoor.serbia.mail@gmail.com', 'Outdoor Serbia'); 
		$mail->Subject    = "Confirm registration";
		$mail->IsHTML(true);
		$mail->Body = "<a href='".(SITE_ROOT."register?confirm_registration=".$token)."'>Klikom na ovaj link potvrdjujete vasu zelju da se registrujete na OutdoorSerbia.rs</a>";
		$mail->AddAddress($email, $username); 
		$mail->Send();
	}
	public static function ConfirmRegistration($token){
		DB::exec("UPDATE users SET status = 1 WHERE token ='{$token}' AND status = -1");
	}
}
