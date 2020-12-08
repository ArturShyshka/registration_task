<?php 
session_start();
require "function.php";

$email = $_POST["email"];
$password = $_POST["password"];

$user = login($email, $password);

if ($user == false) {
	set_flash_message("danger" , "Неверный пароль или email");
	redirect_to("/page_login.php");
} else {

	$_SESSION['email'] = $email; 			// записую email в сессию

	set_flash_message("success" , "Профиль успешно обновлен.");
	redirect_to("/users.php");
}


?>