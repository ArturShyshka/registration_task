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
	<!-- Головна сторінка (Користувач) -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-1">
	<h5 class="mt-2 mr-2" style="color: white;">Site for Blog</h5>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
	    <ul class="navbar-nav mr-auto">
	     	<li class="nav-item">
	       		<a class="nav-link" href="userIndex.php">Головна<span class="sr-only">(current)</span></a>
	     	</li>
	    </ul>
	  	<form class="form-inline mt-2 mt-md-0" action="vendor/logout.php">
	   		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Вихід</button>
		</form>
	</div>
</nav>
<div class="container py-1 mb-4" style="width: 25rem;">
	<input class="form-control mr-sm-2" type="text" placeholder="Пошук" aria-label="Пошук">
</div>
</body>
</html>