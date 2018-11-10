<?php

class DB {
    
    public static function connectDB() {
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
    }

    public static function guardarUsuario(User $usuario, $connect) {

        if ($_POST) {

            $guardados = "SELECT * FROM users";

            $name= $usuario->getName();
            $apellido=$usuario->getApellido();
            $email=$usuario->getEmail();
            $password=password_hash($usuario->getPassword(),PASSWORD_DEFAULT);
            $terms=$usuario->getTerms();


            $sql = "INSERT INTO users (email, password, nombre, apellido, terminos) VALUES (:email, :password, :nombre, :apellido, :terminos)";

            $query = $db->prepare($sql);

            $query->bindValue(":email",$email);
            $query->bindValue(":nombre",$nombre);
            $query->bindValue(":apellido",$apellido);
            $query->bindValue(":terminos",$terminos);
            $query->bindValue(":password",$usuario->getPassword());

            $query->execute();
        }

    }

}
   