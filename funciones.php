<?php

function validacionRegistro($datos){
$errores=[];
if (strlen($datos["nombre"])<2) {
  $errores["nombre"]="Nombre no valido";
}
if (strlen($datos["apellido"])<2) {
  $errores["apellido"]="Apellido no valido";
}
if (strlen($datos["password"])<7) {
  $errores["password"]="La contraseña debe ser mayor a 8 caracteres";
}
if ($datos["password"]!=$datos["confirm_password"]) {
  $errores["confirm_password"]="No concuerdan las contraseñas";
}
if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
  $errores["email"]="no ingreso un email valido";
}
if ($datos["email"]!=$datos["confirm_email"]) {
  $errores["confirm_email"]="no concuerdan los emails";
}
if ($_FILES["perfil"]["size"] > 500000) {
    $errores["perfil"]= "El archivo es demasiado grande.";
}
if($_FILES["perfil"]["error"] === UPLOAD_ERR_OK){
      $nombre = $_FILES["perfil"]["name"];
      $archivo = $_FILES["perfil"]["tmp_name"];
      $ext = pathinfo($nombre, PATHINFO_EXTENSION);
      $miArchivo = dirname(__FILE__);
      $miArchivo = $miArchivo . $ext;
      if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
        $errores["perfil_ext"]= "El archivo debe ser .jpg, .png o .jpeg";
      } else {
        move_uploaded_file($archivo, $miArchivo);
      }
    }
return $errores;
}


function guardarUsuario($datos){

  $dsn= 'mysql:host=127.0.0.1;dbname=sashii;port=3306';
  $user= "root";
  $pass= "";
  $opt= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
  try{
      $db= new PDO($dsn, $user, $pass, $opt);
  } 
  catch(PDOException $Exception){
      echo $Exception ->getMessage();
  }

  if ($_POST) {

    $guardados = "SELECT * FROM users";

    var_dump($guardados);

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $datos["password"] = password_hash($datos["password"],PASSWORD_DEFAULT);
    $confirm_password = $_POST['confirm_password'];
    $terminos = $_POST['terminos'];
    $perfil = $_FILES['perfil'];

    
    $ultimoID=$guardados["email"];
    $target_dir = "assets/uploads/usuarios/$ultimoID/";
    if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir . basename($_FILES["perfil"]["name"]);
    move_uploaded_file($_FILES["perfil"]["tmp_name"], $target_file);
    $datos["perfil"]=$target_file;


    $sql = "INSERT INTO users (email, password, nombre, apellido, terminos, perfil) VALUES (:email, :password, :nombre, :apellido, :terminos, :perfil)";

    $query = $db->prepare($sql);

    $query->bindValue(":email",$email);
    $query->bindValue(":nombre",$nombre);
    $query->bindValue(":apellido",$apellido);
    $query->bindValue(":terminos",$terminos);
    $query->bindValue(":password",$datos["password"]);
    $query->bindValue(":perfil",$target_file);

    $query->execute();
  }
}


function logearUsuario($datosLogin) {

  $dsn= 'mysql:host=127.0.0.1;dbname=sashii;port=3306';
  $user= "root";
  $pass= "";
  $opt= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
  try{
      $db= new PDO($dsn, $user, $pass, $opt);
  } 
  catch(PDOException $Exception){
      echo $Exception ->getMessage();
  }

  if ($_POST) {
    
    $guardados = "SELECT email, password FROM users";

    var_dump($guardados);

    for ($i=0; $i < count($guardados['email']); $i++) {
      if ($guardados['email']==$datosLogin['email']) {
        if (password_verify($datosLogin['password'],$guardados['password'])) {
          session_start();
              $_SESSION['email']= $guardados["email"];
              setcookie("perfil", $guardados["perfil"], time() + (86400 * 30));

              header("Location: partials/header.php");
        } else {
          $message = 'Email o contraseña son incorrectos';
        }
      }
    } 
  }
  
}

?>