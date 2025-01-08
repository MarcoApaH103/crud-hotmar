<?php
session_start(); // Inicia la sesión al comienzo del script
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://yt3.googleusercontent.com/8P1fl7HcNfogjGUzAZ1YrOd9rRS4w19B07vgnr8_8r0j85G0VpzUxADY2kRVEBu-OFEYj8SU=s176-c-k-c0x00ffffff-no-rj" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--=============== CSS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/login.css">

    <title>Sistema de Reportes</title>
</head>
<body>
    <div class="caja-login">
        <form class="formulario" action="validar.php" method="post">
            <div class="text-center">
                <img src="IMG/logo.jpg" width="40%">
                <p class="login__register" style="color: white;">
                    CRUD COMPLETO EN PHP<br>
                    <b style="color: yellow;">INGENIERIA DE SISTEMAS</b>
                </p>
            </div>
            
            <?php
            if (isset($_SESSION['mensaje'])) {
                echo '<div class="alert alert-success" role="alert">' . $_SESSION['mensaje'] . '</div>';
                unset($_SESSION['mensaje']); // Limpia la variable de sesión después de mostrarla
            } elseif (isset($_SESSION['mensajeError'])) {
                echo '<div class="alert alert-danger text-center" role="alert" style="padding: 0.5rem;"><img src="IMG/alerta.png" width="25px" height="25px">' . $_SESSION['mensajeError'] . '</div>';

                unset($_SESSION['mensajeError']); // Limpia la variable de sesión después de mostrarla
            }
            ?>
            <div class="usuario-password">
                <input class="form-control entradas" type="email" placeholder="Usuario" name="txtUsuario"><br>
                <i class="ri-user-3-line icon"></i>
            </div><br>
            <div class="usuario-password">
                <input class="form-control entradas" id="login-pass" type="password" placeholder="Contraseña" name="txtPassword">
                <i class="ri-lock-2-line icon"></i>
                <i class="ri-eye-off-line login__eye icon" id="login-eye"></i>
            </div>
            <div class="text-center"> <br>
                <button type="submit" class="shadow__btn login__button">
                    Ingresar
                </button><br><br>
                <div class="text-center sistema">
                    <b class="tit">SISTEMA DE CONTROL DE USUARIOS</b>
                </div>

                <!-- Área para mostrar mensajes de error -->
                <div id="mensajeError"></div>
            </div>
        </form>
    </div>

    <!--=============== MAIN JS ===============-->
    <script src="js/main.js"></script>
</body>
</html>
