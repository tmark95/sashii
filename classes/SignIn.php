<?php 

Class SignIn{
    public static function loguearUsuario($username){
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
    function validarUsuario($username){
        $archivo= file_get_contents("datos.json");
        $datos= json_decode($archivo,true);
        for ($i=0; $i < count($datos["usuarios"]); $i++) {
          if ($datos["usuarios"][$i]["username"]==$username) {
            return true;
          }else{
            return false;
          }
        }
      }
}