<?php

  session_start();


  if (isset($_SESSION['user_id'])) {
    header('Location: logout.php');    
  }

  require '../controller/database.php';

  $message = '';

 if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['confirm_email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {  

    if($_POST['password'] == $_POST['confirm_password'] && $_POST['email'] == $_POST['confirm_email']){

      $query = "SELECT id FROM USERS WHERE email ='".$_POST['email']."'";
      $consul = mysqli_query($conn, $query);
      $results = mysqli_fetch_array($consul);
      
      if (count($results) == 0) {

        $query = "INSERT INTO USERS (nombre, apellido, email, password) VALUES ('".$_POST['nombre']."' , '".$_POST['apellido']."' , '".$_POST['email']."' ,'".$_POST['confirm_password']."')";
        $consul = mysqli_query($conn, $query);     
           
        $message = 'Successfully created new user';

      }
      else{
        $message = 'El email ya existe';
      }

    }else{
      $message="El mail o la contraseña no coincide";
    }
    
  }
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../estilos.css">
  </head>
  <body>   

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrarse</h1>
    <span>o <a href="login.php">Login</a></span>

    <form action="signup.php" method="POST" enctype="multipart/form-data">
      <input name="nombre" type="text" placeholder="Ingrese su nombre" required>
      <input name="apellido" type="text" placeholder="Ingrese su apellido" required>
      <input name="email" type="email" placeholder="Ingrese su email" required>
      <input name="confirm_email" type="email" placeholder="Confirmar email" required>
      <input name="password" type="password" placeholder="Introduzca su contraseña" required>
      <input name="confirm_password" type="password" placeholder="Confirmar contraseña" required>
      <label for="perfil">Foto de Perfil</label><br><br>
      <input name="perfil" type="file" ><br><br>
      <label for="terminos" style="">Acepto los Terminos y Condiciones</label>
      <input name="terminos" type="checkbox" required><br><br>
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
