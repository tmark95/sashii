<?php

  session_start();


  if (isset($_SESSION['user_id'])) {
    header('Location: logout.php');    
  }

  $message = '';

  require '../load.php';

  if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $email_conf = $_POST['confirm_email'];
    $pass = $_POST['password'];
    $pass_conf = $_POST['confirm_password'];
    $perfil = $_FILES['perfil'];
    $terms = $_POST['terminos'];

    $usuario = New User($nombre, $apellido, $email, $email_conf, $pass, $pass_conf, $perfil, $terms);

    $errores = Validar::validacionRegistro($usuario);

    if (empty($errores)) {
      $connect=DB::connectDB();
      DB::guardarUsuario($usuario, $connect);
      sleep(3);
      header('Location: login.php');
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
  <body style="margin-top: 5%;">   

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrarse</h1>
    <span>o <a href="login.php">Login</a></span>

    <form action="signup.php" method="POST" enctype="multipart/form-data">
      <input name="nombre" type="text" placeholder="Ingrese su nombre" value="<?php echo (!empty($nombre))?$nombre:""; ?>" required>
      <?php echo (isset($errores["nombre"]))?'<p style="color:red;">'.$errores["nombre"].'</p>':""; ?>
      <input name="apellido" type="text" placeholder="Ingrese su apellido"value="<?php echo (!empty($apellido))?$apellido:""; ?>" required>
      <?php if (isset($errores["apellido"])) {
              echo '<p style="color:red;">'.$errores["apellido"].'</p>';
            } ?>
      <input name="email" type="email" placeholder="Ingrese su email" value="<?php echo (!empty($email))?$email:""; ?>" required>
      <?php echo (isset($errores["email"]))?'<p style="color:red;">'.$errores["email"].'</p>':""; ?>
      <?php echo (isset($errores["confirm_email"]))?'<p style="color:red;">'.$errores["confirm_email"].'</p>':""; ?>
      <input name="confirm_email" type="email" placeholder="Confirmar email" required>
      <?php echo (isset($errores["confirm_email"]))?'<p style="color:red;">'.$errores["confirm_email"].'</p>':""; ?>
      <input name="password" type="password" placeholder="Introduzca su contraseña" required>
      <?php echo (isset($errores["password"]))?'<p style="color:red;">'.$errores["password"].'</p>':""; ?>
      <?php echo (isset($errores["confirm_password"]))?'<p style="color:red;">'.$errores["confirm_password"].'</p>':""; ?>
      <input name="confirm_password" type="password" placeholder="Confirmar contraseña" required>
      <?php echo (isset($errores["confirm_password"]))?'<p style="color:red;">'.$errores["confirm_password"].'</p>':""; ?>
      <label for="perfil">Foto de Perfil</label><br><br>
      <input name="perfil" type="file" ><br><br>
      <?php echo (isset($errores["perfil"]))?'<p style="color:red;">'.$errores["perfil"].'</p>':""; ?>
      <?php echo (isset($errores["perfil_ext"]))?'<p style="color:red;">'.$errores["perfil_ext"].'</p>':""; ?>
      <label for="terminos" style="">Acepto los Terminos y Condiciones</label>
      <input name="terminos" type="checkbox" required><br><br>
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
