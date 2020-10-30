<?php
	// Реєстрація
	
	session_start();
	require_once "db.php";

	if (count($_POST) > 0) {

		$full_name = $_POST['full_name'];
		$login = $_POST['login'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirn_password = $_POST['confirn_password'];

		// XSS
		$name = htmlspecialchars($name);
		$login = htmlspecialchars($login);
		$email = htmlspecialchars($email);
		$password = htmlspecialchars($password);
		$confirn_password = htmlspecialchars($confirn_password);

		if ($password === $confirn_password) {			// перевірка на співпадання паролів

			$password = password_hash($password, PASSWORD_DEFAULT);					// хеш паролю

			$sql = "INSERT INTO `users`(`full_name`,`login`,`email`,`password`) VALUES (:full_name, :login,:email,:password)";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(['full_name' => $full_name, 'login' => $login, 'email' => $email, 'password' => $password]);

			$_SESSION['message'] = 'Реєстрація пройшла успішно!';
			header('Location: ../index.php');

		} else {
			$_SESSION['message'] = 'Паролі не співпадають!';
			header('Location: ../register.php');
		}
	}
	
?>