<?php 

  
// Class SignIn{
//     public static function loguearUsuario(User $usuario, $connect){

// if(isset($_POST["email"], $_POST["password"])) 
//     {     

//         $email = $_POST["email"]; 
//         $password = $_POST["password"]; 
//     }
//     $connect=DB::connectDB();


//         $result1 = mysql_query ("SELECT username, password FROM Users WHERE email = '".$email."' AND  password = '".$password."'");


//         if(mysql_num_rows($result1) = )
//         { 
//             $_SESSION["logged_in"] = true; 
//             $_SESSION["email"] = $email; 
//         }
//         else
//         {
//             echo 'The username or password are incorrect!';
//             echo "Failed to connect to MySQL: " . mysqli_connect_error();
//         }
// $con=mysqli_connect("mysql","database_user","database_password","mydatabase");
// 05
// // Check connection
// 06
// if (mysqli_connect_errno())
// 07
//   {
// 08

//   }
// 10
// $qz = "SELECT id FROM members where username='".$username."' and password='".$password."'" ;
// 11
// $qz = str_replace("\'","",$qz);
// 12
// $result = mysqli_query($con,$qz);
// 13
// while($row = mysqli_fetch_array($result))
// 14
//   {
// 15
//   echo $row['id'];
// 16
//   }
// 17
// mysqli_close($con);
// 18
// ?>


//         {
//           if (password_verify($password ,$datos["usuarios"][$i]["contrasena"])) {
//             session_start();
//             $_SESSION['user']= $datos["usuarios"][$i]["username"];
//             setcookie("perfil", $datos["usuarios"][$i]["foto"], time() + (86400 * 30));

//             header("location:perfil.php");
//           } 
//         }
//       }

//   }}
// }

//     function validarUsuario($username){
//         $archivo= file_get_contents("datos.json");
//         $datos= json_decode($archivo,true);
//         for ($i=0; $i < count($datos["usuarios"]); $i++) {
//           if ($datos["usuarios"][$i]["username"]==$username) {
//             return true;
//           }else{
//             return false;
//           }
//         }
//       }
// }