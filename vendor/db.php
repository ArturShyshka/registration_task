<?php 

	// Підключення до БД

	// PDO
	$servername = "localhost";
	$username = "root";
	$password = "root"; 

	try {
		$pdo = new PDO("mysql:host=$servername;dbname=SiteForBlog", $username, $password);
	} catch (PDOException $e) {
		echo "Connect failed: " . $e->getMessage();
	}

?>