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

            $name= $usuario->getName();
            $apellido=$usuario->getApellido();
            $email=$usuario->getEmail();
            $password=password_hash($usuario->getPassword(),PASSWORD_DEFAULT);
            $terms=$usuario->getTerms();


            $sql = "INSERT INTO users (email, password, nombre, apellido, terminos) VALUES (:email, :password, :nombre, :apellido, :terminos)";

            $query = $db->prepare($sql);

            $query->bindValue(":email",$email);
            $query->bindValue(":nombre",$name);
            $query->bindValue(":apellido",$apellido);
            $query->bindValue(":terminos",$terms);
            $query->bindValue(":password",$password);

            $query->execute();
        }

    }

    public static function loguearUsuario() {

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

        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            $name = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT email, password FROM users WHERE email = :email";

            if($stmt = $db->prepare($sql)){
                
                $stmt->bindValue(":email", $name);
            
                if($stmt->execute()){
                    if($stmt->rowCount() == 1){
                        if($row = $stmt->fetch()){
                            $email = $row["email"];
                            $hashed_password = $row["password"];
                            if(password_verify($password, $hashed_password)){
                                session_start();
                                
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;                            
                            
                                header("location: partials/header.php");
                            } else {
                                echo "Usuario o contraseña erroneo";
                            }
                        }
                    }
                }
            }
        }
    }
}
                    