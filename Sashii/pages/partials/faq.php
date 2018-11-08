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
      <li><a href="menu.php">El Menu</a></li>
      <li><a href="#.php">Faq</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
    </div>
    <a href="perfil.php"><i class="fas fa-user-circle fa-2x"></i></a>
      <a href="../logout.php" style="color: red;">Logout</a>
    <a class="carrito" href="#"><i id="carrito" class="fas fa-shopping-cart"></i></a>
  </header>
  <main>
	<h2 class="titulofaq"> Preguntas frecuentes </h2>
	    <h3 class="Pregunta">¿Hacen entrega a domicilio? ¿Hasta dónde?</h3>
	    <p class="respuesta"> Sí, cubrimos envíos en Belgrano, Palermo y Colegiales.</p>
	    <h3 class="Pregunta"> ¿Cuál es el costo de envío?</h3>
	    <p class="respuesta"> Dependiendo la distancia, varía entre $20 y $50.</p>
	    <h3 class="Pregunta"> ¿Tienen opciones para vegetarianos? </h3>
	    <p class="respuesta"> si, pueden consultar las mismas en nuestro <a href="menu.php" style="color: white;">MENU</a>.</p>
	    <h3 class="Pregunta"> ¿La salsa de soja está incluida? </h3>
	    <p class="respuesta"> Sí, incluímos una salsa de soja y una salsa teriyaki cada 15 piezas.</p>
	    <h3 class="Pregunta"> ¿Aceptan tarjeta de crédito?</h3>
	    <p class="respuesta"> Sí, únicamente en compras mayores a $400.</p>
	    <h3 class="Pregunta"> ¿Cuántas piezas se recomiendan por persona?</h3>
	    <p class="respuesta"> Entre 15 y 20, dependiendo del apetito de cada comensal.</p>
	    <h3 class="Pregunta"> Soy alérgico al gluten. ¿Qué puedo comer?</h3>
	    <p class="respuesta"> Contamos con piezas libres de gluten. Podés consultar las mismas en el <a href="menu.php" style="color: white;">MENU</a>.</p>
	    <h3 class="Pregunta"> ¿Cuánto tiempo llevan abiertos?</h3>
	    <p class="respuesta"> Nuestro primer local en el barrio de Belgrano fue abierto en marzo de 2014.</p>
	    <h3 class="Pregunta"> ¿Cuáles son sus horarios de atención?</h3>
	    <p class="respuesta"> Nuestros horarios de atención son de Lunes a Viernes de 19:30 a 00:00. Sábados y Domingos de 11:30 a 15:00 y de 19:30 a 00:00.</p>
  </main>
 <hr>
  <div class="banner-contacto">
      <i id="celular" class="fas fa-mobile-alt"> - 11.4041.2160</i>
      <i id="mail" class="far fa-envelope"> - info@sashiisushi.com</i>
      <div id="redes">
      <i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"> - @sashii_</i>
      </div>
    </div>
  <hr>
</main>

  <footer>
	<li><a href="header.php">Home</a></li>
    <li><a href="menu.php">El Menu</a></li>
    <li><a href="#">Faq</a></li>
    <li><a href="contacto.php">Contacto</a></li>
  </footer>
 </body>
</html>