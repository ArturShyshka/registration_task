<?php 
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=task","root","root");

$sql = "SELECT * FROM text_table WHERE text=:text_input";
$statment = $pdo->prepare($sql);
$statment->execute(['text_input' => $text]);
$task = $statment->fetchAll(PDO::FETCH_ASSOC);

if (!empty($task)) {
	$message = "You should check in on some of those fields below.";
	$_SESSION['message'] = $message;

	header("Location: /task_10.php");
	exit;
}

$sql = "INSERT INTO text_table (text) VALUES (:text_input)";
$statment = $pdo->prepare($sql);
$statment->execute(['text_input' => $text]);
header("Location: /task_10.php");

?>