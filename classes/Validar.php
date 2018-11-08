<?php 
class Validar{
    
    public static function validacionRegistro(User $usuario)
    {
    $errores=[];
    if (strlen($usuario->getName()<2)) {
    $errores["nombre"]="Nombre no valido";
    }
    if (strlen($usuario->getLastn()<2)) {
        $errores["apellido"]="Apellido no valido";
    }
    if (validarUsuario($usuario->getUsername())) {
    $errores["username"]="ya existe este usuario";
    }
    if (strlen($usuario->getEmail())<7) {
    $errores["contrasena"]="Contraseña demasiado corta";
    }
    if ($usuario->getPass()!=$usuario->getPassConfirm()) {
    $errores["contrasena_conf"]="No concuerdan las contraseñas";
    }
    if (!filter_var($usuario->getEmail(),FILTER_VALIDATE_EMAIL)) {
    $errores["email"]="no ingreso un email valido";
    }
    if ($usuario->getEmail()!=$usuario->getEmailConfirm()) {
    $errores["email_conf"]="no concuerdan los emails";
    }
    if ($usuario->getTerms())
    {
    $errores["terminos"]="no acepto los terminos y condiciones";
    }
    if ($_FILES["perfil"]["size"] > 500000) {
        $errores["perfil"]= "El archivo es demasiado grande.";
    }
    return $errores;
    }
}
