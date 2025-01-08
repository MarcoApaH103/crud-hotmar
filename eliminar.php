<?php
include('db.php');
session_start();
// Verifica si se ha proporcionado un ID a través de GET o POST
if (isset($_GET["id"])) {
    $id = $_GET["id"];
} elseif (isset($_POST["txtID"])) {
    $id = $_POST["txtID"];
} else {
    // Manejar el caso en el que no se proporciona un ID
    $_SESSION['mensajeError'] = "Error: No se proporcionó un ID válido.";
    header("location: admin/admin.php");
    exit(); // Detener la ejecución del script
}

// Evitar la inyección SQL utilizando sentencias preparadas
$query_eliminar = mysqli_prepare($conexion, "DELETE FROM usuarios WHERE ID = ?");
mysqli_stmt_bind_param($query_eliminar, "i", $id);

if (mysqli_stmt_execute($query_eliminar)) {
    $_SESSION['mensajeEliminado'] = "Registro eliminado con éxito.";
} else {
    $_SESSION['mensajeError'] = "Error al eliminar el registro.";
}

mysqli_stmt_close($query_eliminar);
mysqli_close($conexion);

// Redirecciona después de establecer el mensaje
header("location: admin/admin.php");
var_dump($_SESSION); // Agrega esta línea para depurar
exit(); // Asegura que el script se detenga después de la redirección
?>
