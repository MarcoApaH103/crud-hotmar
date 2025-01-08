<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');

$nombre=$_POST['txtNombre'];
$genero=$_POST['txtGenero'];
$fecha_nac=$_POST['txtNacimiento'];
$usuario=$_POST['txtUsuario'];
$contraseña=$_POST['txtPassword'];

$consulta="INSERT INTO `usuarios` (`Nombre`, `Genero`, `Fecha_Nac`,`Usuario`, `Password`,`Foto`,`id_rol`)
VALUES ('$nombre','$genero','$fecha_nac', '$usuario', '$contraseña','$rutaFoto','2')";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

header("Location:index.html");

mysqli_close($conexion);





?>