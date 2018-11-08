<?php
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sashii INICIO</title>
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

	 <h1>Bienvenido <?php echo $_SESSION['email']; ?></h1>
	 <br>
	 <img src="../../img/sushi.gif" alt="">
	 <footer>
	    <li><a href="header.php">Home</a></li>
	    <li><a href="menu.php">El Menu</a></li>
	    <li><a href="faq.php">Faq</a></li>
	    <li><a href="contacto.php">Contacto</a></li>
	  </footer>
   </body>
 </html>
