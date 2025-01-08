<?php
include('db.php');
session_start();
$usuario = $_POST['txtUsuario'];
$contraseña = $_POST['txtPassword'];

// Utiliza consultas preparadas para evitar inyección SQL
$consulta = "SELECT * FROM usuarios WHERE Usuario=? AND Password=? AND estado='activo'";
$statement = mysqli_prepare($conexion, $consulta);
mysqli_stmt_bind_param($statement, "ss", $usuario, $contraseña);
mysqli_stmt_execute($statement);

$resultado = mysqli_stmt_get_result($statement);
$filas = mysqli_fetch_array($resultado);

if ($filas && $filas['id_rol'] == 1) {
    $_SESSION['username'] = $filas['Nombre'];
    $_SESSION['user_id'] = $filas['ID'];
    // administrador
    header("location:vistas_admin.php");
    exit(); // Detener la ejecución del script
} elseif ($filas && $filas['id_rol'] == 2) {
    // cliente
    // Almacena el nombre y la foto del usuario en la sesión
    session_start();
    $_SESSION['username'] = $filas['Nombre'];
    $_SESSION['user_id'] = $filas['ID'];

    header("location:vistas_usuario.php");
    exit(); // Detener la ejecución del script
} else {
    // En caso de error de autenticación o usuario inactivo, muestra una alerta de SweetAlert en la misma página
    if ($filas && $filas['estado'] == 'inactivo') {
        $_SESSION['mensajeError'] = "El usuario está inactivo. Contacta al administrador para obtener más información.";
    } else {
        $_SESSION['mensajeError'] = "Usuario o Contraseña Incorrectas";
    }
    header("location: index.php");
    exit(); // Detener la ejecución del script
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>
