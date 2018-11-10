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

        return $errores;
    }

    function guardarUsuario($datos){

        $archivo= file_get_contents("datos.json");
        $guardados=json_decode($archivo,true);
        $datos["contrasena"]=password_hash($datos["contrasena"],PASSWORD_DEFAULT);
        unset($datos["contrasena_confirm"]);
        unset($datos["email_confirm"]);
        $usuario=$datos;
        $guardados["usuarios"][]=$usuario;
        $usuarioJson=json_encode($guardados);
        file_put_contents("datos.json",$usuarioJson);
        header("location:../pages/login.php");
    }

    function logearUsuario($datosLogin){
        
        $archivo= file_get_contents("datos.json");
        $datos= json_decode($archivo,true);
        for ($i=0; $i < count($datos["usuarios"]); $i++) {
          if ($datos["usuarios"][$i]["username"]==$datosLogin["username"]) {
            if (password_verify($datosLogin["contrasena"],$datos["usuarios"][$i]["contrasena"])) {
              session_start();
              $_SESSION['user']= $datos["usuarios"][$i]["username"];
              setcookie("perfil", $datos["usuarios"][$i]["username"], time() + (86400 * 30));
  
              header("location: ../pages/partials/header.php");
            } 
          }
        }
  
    }
}
