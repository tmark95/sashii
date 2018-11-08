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
      <li><a href="#.php">Contacto</a></li>
    </ul>
    </div>
    <a href="perfil.php"><i class="fas fa-user-circle fa-2x"></i></a>
      <a href="../logout.php" style="color: red;">Logout</a>
    <a class="carrito" href="#"><i id="carrito" class="fas fa-shopping-cart"></i></a>
  </header>
	<form action="" class="mensaje">
			<div class="contacto-container">
            <form action="/action_page.php">
									<legend class="legend">Complete el formulario y nos comunicaremos a la brevedad.</legend>
									<p class="dato">Nombre y Apellido:</p>
									<input type="text" name="name" class="button">
									<p class="dato">Telefono:</p>
									<input type="phone" name="phone" class="button">
                  <p class="dato">Correo Electronico:</p>
                  <input type="Email" name="email" class="button">
                  <p class="dato">Comentarios: <br></p>
                  <textarea name="" id="" cols="50" rows="10" class="button"></textarea> <br><br>
                  <input class="boton-contacto" type="submit" value="ENVIAR">
            </form>
      </div>
    </form>  
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
     <li><a href="menu.php">El Menu</a></li>
     <li><a href="faq.php">Faq</a></li>
     <li><a href="#">Contacto</a></li>
   </footer>
  </main>
</body>
</html>