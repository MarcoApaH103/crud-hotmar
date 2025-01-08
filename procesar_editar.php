<?php
session_start();
include('db.php');

$ID=$_POST['txtID'];
$NOMBRE=$_POST['txtNombre'];
$GENERO=$_POST['txtGenero'];
$NACIMIENTO=$_POST['txtNacimiento'];
$USUARIO=$_POST['txtUsuario'];
$CONTRASEÑA=$_POST['txtPassword'];
$ROL=$_POST['txtRol'];

mysqli_query($conexion,"UPDATE `usuarios` SET `Nombre` = '$NOMBRE', `Genero` = '$GENERO', `Fecha_Nac` = '$NACIMIENTO', `Usuario` = '$USUARIO', `Password` = '$CONTRASEÑA'
 ,`id_rol` = '$ROL' WHERE `ID` ='$ID'")or die("error al actualizar");

mysqli_close($conexion);
$_SESSION['actualizado'] = "Datos Modificados con Exito";
header("location:admin/admin.php");

?>