<?php

function validacionRegistro($datos){
$errores=[];
if (strlen($datos["nombre"])<2) {
  $errores["nombre"]="Nombre no valido";
}
if (strlen($datos["apellido"])<2) {
  $errores["apellido"]="Apellido no valido";
}
if (validarUsuario($datos["username"])) {
 $errores["username"]="ya existe este usuario";
}
if (strlen($datos["contrasena"])<7) {
  $errores["contrasena"]="Contraseña demasiado corta";
}
if ($datos["contrasena"]!=$datos["contrasena_confirm"]) {
  $errores["contrasena_conf"]="No concuerdan las contraseñas";
}
if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
  $errores["email"]="no ingreso un email valido";
}
if ($datos["email"]!=$datos["email_confirm"]) {
  $errores["email_conf"]="no concuerdan los emails";
}
if (!isset($datos["terminos"])) {
  $errores["terminos"]="no acepto los terminos y condiciones";
}
if ($_FILES["perfil"]["size"] > 500000) {
    $errores["perfil"]= "El archivo es demasiado grande.";
}
return $errores;
}

function guardarUsuario($datos){
  $archivo= file_get_contents("datos.json");
  $guardados=json_decode($archivo,true);
  $datos["contrasena"]=password_hash($datos["contrasena"],PASSWORD_DEFAULT);
  unset($datos["contrasena_confirm"]);
  unset($datos["email_confirm"]);
  $ultimoID=(count($guardados["usuarios"]));
  $target_dir = "assets/uploads/usuarios/$ultimoID/";
  if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
  }
  $target_file = $target_dir . basename($_FILES["perfil"]["name"]);
  move_uploaded_file($_FILES["perfil"]["tmp_name"], $target_file);
  $datos["perfil"]=$target_file;
  $usuario=$datos;
  $guardados["usuarios"][]=$usuario;
  $usuarioJson=json_encode($guardados);
  file_put_contents("datos.json",$usuarioJson);
  header("location:login.php");
}

function validarUsuario($username){
  $archivo= file_get_contents("datos.json");
  $datos= json_decode($archivo,true);
  for ($i=0; $i < count($datos["usuarios"]); $i++) {
    if ($datos["usuarios"][$i]["username"]== $username['username']) {
      return true;
    }else{
      return false;
    }
  }
}

function logearUsuario($datosLogin){
    $archivo= file_get_contents("datos.json");
    $datos= json_decode($archivo,true);
    for ($i=0; $i < count($datos["usuarios"]); $i++) {
      if ($datos["usuarios"][$i]["username"]==$datosLogin["username"]) {
        if (password_verify($datosLogin["contrasena"],$datos["usuarios"][$i]["contrasena"])) {
          session_start();
          $_SESSION['user']= $datos["usuarios"][$i]["username"];
          setcookie("perfil", $datos["usuarios"][$i]["foto"], time() + (86400 * 30));

          header("location:perfil.php");
        } 
      }
    }
}

?>