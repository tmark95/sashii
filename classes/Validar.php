<?php 

class Validar{
    
    public static function validacionRegistro(User $usuario) {
        $errores=[];
        if (strlen($usuario->getName())<2) {
          $errores["nombre"]="Nombre no valido";
        }
        if (strlen($usuario->getApellido())<2) {
          $errores["apellido"]="Apellido no valido";
        }
        if (strlen($usuario->getPassword())<7) {
          $errores["password"]="La contraseña debe ser mayor a 8 caracteres";
        }
        if ($usuario->getPassword() != $usuario->getPasswordConf()) {
          $errores["confirm_password"]="No concuerdan las contraseñas";
        }
        if (!filter_var($usuario->getEmail(),FILTER_VALIDATE_EMAIL)) {
          $errores["email"]="no ingreso un email valido";
        }
        if ($usuario->getEmail()!=$usuario->getEmailConf()) {
          $errores["confirm_email"]="no concuerdan los emails";
        }
        if ($usuario->getPerfil()["size"] > 500000) {
            $errores["perfil"]= "El archivo es demasiado grande.";
        }
        if($usuario->getPerfil()["error"] === UPLOAD_ERR_OK){
              $nombre = $usuario->getPerfil()["name"];
              $archivo = $usuario->getPerfil()["tmp_name"];
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
}
