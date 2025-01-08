<?php

$host = "localhost"; //Local XAMPP
$usuario = "root";  //Usuario de Xampp
$contrasena = "";   //Contraseña de Xampp 
$base_de_datos = "proyecto"; //Nombre de la base de datos
$puerto = "3306";  // puerto del xampp por defecto es 3306 no es necesario que lo cambies

$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos, $puerto);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>
