<?php 
	// Авторизація

	session_start();
	require_once "db.php";

	$login = $_POST['login'];
	$password = $_POST['password'];

	// XSS
	$login = htmlspecialchars($login);
	$password = htmlspecialchars($password);

	$sql  = "SELECT * FROM `users` WHERE login = :login";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['login' => $login]);
	$user = $stmt->fetch(PDO::FETCH_OBJ);

	if($user) {										 	 		// Перевірка чи існує такий логін в БД
		if(password_verify($password, $user->password)) {		// Перевірка паролю
			$user = $stmt->fetch(PDO::FETCH_ASSOC);
			$_SESSION['userName'] = $login;						// Запис логіну в сесію для авторизації
			header('Location: ../userIndex.php');

		} else {
			$_SESSION['messageCheck'] = 'Неправильний Логін або Пароль!';
			header('Location: ../check.php');
		}
	} else {
		$_SESSION['messageCheck'] = 'Неправильний Логін або Пароль!';
			header('Location: ../check.php');
	} 
?>