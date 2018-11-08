<?php

/* Conectar a la base de datos */
$server = '127.0.0.1';
$user = 'root';
$pass = '';
$database = 'sashii';

$conn = mysqli_connect($server, $user, $pass, $database) or die('Error al conectar con MySQL Server.');


?>
