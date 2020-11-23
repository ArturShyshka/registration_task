<?php 

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=task","root","root");
$sql = "INSERT INTO text_table (text) VALUES (:text_input)";
$statment = $pdo->prepare($sql);
$statment->execute(['text_input' => $text]);

header("Location: /task_9.php");

?>