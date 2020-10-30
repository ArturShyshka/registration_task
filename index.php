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
  <!-- Головна сторінка (Гість) -->
	<?php require "blocks/header.php" ?>

  <!-- Статті -->
  
	<div class="col-md-8" id="leftArt">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-4 text-primary">World</strong>
              <h3 class="mb-0">
                Featured post
              </h3>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="article.php">Читати статтю</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 30rem; height: 20rem;" src="img/blog.jpg" data-holder-rendered="true">
          </div>
  </div>
  <div class="offset-md-4 col-md-8" id="rightArt">
          <div class="card flex-sm-row-reverse mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-4 text-primary">World</strong>
              <h3 class="mb-0">
                Featured post
              </h3>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Читати статтю</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 30rem; height: 20rem;" src="img/about.jpg" data-holder-rendered="true">
          </div>
  </div>
	<div class="col-md-8">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-4 text-primary">World</strong>
              <h3 class="mb-0">
                Featured post
              </h3>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Читати статтю</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 30rem; height: 20rem;" src="img/contact.jpg" data-holder-rendered="true">
          </div>
  </div>

  <?php require "blocks/footer.php" ?>
</body>
</html>







