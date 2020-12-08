<?php 
session_start();

function get_user_by_email($email) {

	$pdo = new PDO("mysql:host=localhost;dbname=task", "root", "root");

	$sql = "SELECT * FROM register_users WHERE email=:email";
	$statment = $pdo->prepare($sql);
	$statment->execute(["email" => $email]);
	$user = $statment->fetch(PDO::FETCH_ASSOC);

	return $user;
};

function add_user($email, $password) {

	$pdo = new PDO("mysql:host=localhost;dbname=task", "root", "root");
	
	$sql = "INSERT INTO register_users (email, password) VALUES (:email, :password)";
	$statment = $pdo->prepare($sql);
	$statment->execute([
		"email" => $email,
		"password" => $password
	]);

	return $pdo->lastInsertId();
};

function set_flash_message($name, $message) {
	$_SESSION[$name] = $message;
};

function display_flash_message($name) {
	if(isset($_SESSION[$name])) {
		echo '<div class="alert alert-'.$name.' text-dark" role="alert">'.$_SESSION[$name].'</div>';
		unset($_SESSION[$name]);
	}
};

function redirect_to($path) {
	header("Location: {$path}");
	exit;
};

function login($email, $password) {
	$pdo = new PDO("mysql:host=localhost;dbname=task;", "root", "root");

    $sql = "SELECT * FROM register_users WHERE email=:email AND password=:password";
    $statement = $pdo->prepare($sql);
    $statement->execute([
    	"email" => $email,
     	"password" => $password
 	]);
    $login_user = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $login_user;  // Возвращает boolean
};







?>