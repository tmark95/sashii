<?php
session_start();

?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sashii</title>
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
      <li><a href="menu.php">El Menu</a></li>
      <li><a href="faq.php">Faq</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
    </div>
    <a href="perfil.php"><i class="fas fa-user-circle fa-2x"></i></a>
      <a href="../logout.php" style="color: red;">Logout</a>
    <a class="carrito" href="#"><i id="carrito" class="fas fa-shopping-cart"></i></a>
  </header>

  <h1> Sashimis</h1>

    <div class="producto">
	    <img src="../../img/sashimi.jpg" alt="">
			<h3 class="titulo">Sashimi Clásico </h3>
			<button type="button" name="Añadir al carrito">Añadir al carrito</button>
		</div>

		<div class="producto">
			<img src="../../img/sashimi.jpg" alt="">
      <h3 class="titulo">Sashimi Roble</h3>
      <p class="descripcion">Salmón ahumado en roble, con sal marina y ralladura de lima.</p>
			<button type="button" name="Añadir al carrito">Añadir al carrito</button>
	  </div>

		<div class="producto">
			<img src="../../img/sashimi.jpg" alt="">
		  <h3 class="titulo">Sashimi Maracuyá</h3>
      <p class="descripcion">Cortes de salmón bañados con salsa de maracuyá.</p>
			<button type="button" name="Añadir al carrito">Añadir al carrito</button>
	  </div>

		<div class="producto">
			<img src="../../img/sashimi.jpg" alt="">
      <h3 class="titulo">Sashimi Spicy</h3>
      <p class="descripcion">Cortes de salmón sellados en nanami.</p>
			<button type="button" name="Añadir al carrito">Añadir al carrito</button>
	  </div>

		<div class="producto">
			<img src="../../img/sashimi.jpg" alt="">
      <h3 class="titulo">Sashimi Huancayo</h3>
      <p class="descripcion">Con salsa huancaina y maiz cancha</p>
			<button type="button" name="Añadir al carrito">Añadir al carrito</button>
	  </div>

    <a href="menu.php" class="volver">Volver al Menú</a>

  <hr>
   <div class="banner-contacto">
     <i id="celular" class="fas fa-mobile-alt"> - 11.4041.2160</i>
     <i id="mail" class="far fa-envelope"> - info@tmtsushi.com</i>
     <div id="redes">
     <i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"> - @TMTsushi</i>
     </div>
   </div>
   <hr>
  <main>

   <footer>
		 <li><a href="header.php">Home</a></li>
     <li><a href="menu.php">El Menu</a></li>
     <li><a href="faq.php">Faq</a></li>
     <li><a href="contacto.php">Contacto</a></li>
   </footer>
  </main>
</body>
</html>