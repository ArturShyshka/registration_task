<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Site for Blog</title>
    <meta name="description" content="Тема: Структура HTML. Форматування тексту за допомогою тегів і атрибутів">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<?php require "blocks/header.php" ?>

	<!-- Авторизація (не готова) -->
	
	<div class="container" style="">
		<form class="form container" action="vendor/signin.php" method="post">
			<label>Логін</label>
			<input class="form-control col-md-6 mb-3" type="text" name="login" placeholder="Введіть логін">
			<label>Пароль</label>
			<input class="form-control col-md-6 mb-3" type="password" name="password" placeholder="Введіть пароль">
			<hr class="col-md-5 mb-3 ml-4">
			<button class="btn btn-primary btn-lg btn-block col-md-6 mb-3" type="submit">Вхід</button>
			<?php
				if (isset($_SESSION['messageCheck'])) {
					echo '<p class="msg col-md-6 mb-3" style="border: 2px solid #ffa908; border-radius: 5px; padding: 10px; text-align: center;">' . $_SESSION['messageCheck'] . '</p>';
				}
				unset($_SESSION['messageCheck'])
			?>
			<p>
				Немає акаунта? - <a href="register.php">Зареєструйтесь</a>!
			</p>
		</form>
	</div>
  
	<?php require "blocks/footer.php" ?> 
</body>