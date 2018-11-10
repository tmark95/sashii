<?php

  session_start();

  if (isset($_SESSION['email'])) {
    header('Location: partials/header.php');    
  }

  require '../load.php';

  /*if ($_POST) { 

    $connect=DB::connectDB();
    DB::loguearUsuario($usuario, $connect);

    
  } */

  if ($_POST) {
    $connect=DB::connectDB();
    DB::loguearUsuario();
  }
  
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../estilos.css">
  </head>
  <body style="margin-top: 5%;">
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>o <a href="signup.php">Registrarse</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Ingresar email">
      <input name="password" type="password" placeholder="Ingresar contraseña">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
