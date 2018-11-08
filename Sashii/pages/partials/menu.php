<?php
session_start();

?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TMT Sushi</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilos.css">
</head>
<body>
	<header>
    <a class="nav-cel" href="#"><i class="fas fa-bars"></i></a>
    <a href="header.php"><img class="logo" src="../../img/sashiilogo.png"></a>
    <ul class="nav-desktop">
      <li><a href="header.php">Home</a></li>
      <li><a href="#">El Menu</a></li>
      <li><a href="faq.php">Faq</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
    <a href="perfil.php"><i class="fas fa-user-circle fa-2x"></i></a>
    <a href="../logout.php" style="color: red;">Logout</a>
    <a class="carrito" href="#"><i id="carrito" class="fas fa-shopping-cart"></i></a>
  </header>
  <h1> Nuestro Menú</h1>
  <div class="containercategoria">
	<ul class="categoria">
    <li><a href="rollsmakis.php" class="categorias"><img src="../../img/makis.jpg"><br> Rolls & Makis </a></li>
    <li><a href="sashimis.php" class="categorias"><img src="../../img/sashimi.jpg"><br> Sashimis </a></li>
    <li><a href="niguiris.php" class="categorias"><img src="../../img/niguiri.jpg"><br> Niguiris </a></li>
    <li><a href="especiales.php" class="categorias"><img src="../../img/especiales.jpg"><br> Especiales </a></li>
    <li><a href="vegetarianos.php" class="categorias"><img src="../../img/vegetariano.jpg"><br> Vegetarianos </a></li>
    <li><a href="bebidas.php" class="categorias"><img src="../../img/bebidas.jpg"><br> Bebidas </a></li>
  </ul>
</div>
  <hr>
   <div class="banner-contacto">
      <i id="celular" class="fas fa-mobile-alt"> - 11.4041.2160</i>
      <i id="mail" class="far fa-envelope"> - info@sashiisushi.com</i>
      <div id="redes">
      <i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"> - @sashii_</i>
      </div>
    </div>
   <hr>
  <main>

   <footer>
     <li><a href="header.php">Home</a></li>
     <li><a href="#">El Menu</a></li>
     <li><a href="faq.php">Faq</a></li>
     <li><a href="contacto.php">Contacto</a></li>
   </footer>
  </main>
</body>
</html>