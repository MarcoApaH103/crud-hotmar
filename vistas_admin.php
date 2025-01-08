<?php
session_start();
//seguridad de sessiones paginacion
error_reporting(0);
$varsesion= $_SESSION['username'];
if($varsesion== null || $varsesion=''){
    header("location:index.php");
    die();
}

// Verificar si el usuario ha iniciado sesión
// if(isset($_SESSION['username'])) {
    // $username = $_SESSION['username'];

// } else {
    // Redirigir o mostrar un mensaje de error si el usuario no ha iniciado sesión
   //  header("Location: index.html");
    // exit();
// }
// if (isset($_SESSION['mensaje'])) {
   //  $mensaje = $_SESSION['mensaje'];
    // Limpia el mensaje de la sesión para que no se muestre de nuevo
   //  unset($_SESSION['mensaje']);
// } else {
    // $mensaje = ""; // Inicializa la variable si no hay mensaje
// }
// if (isset($_SESSION['mensaje1'])) {
    // $mensaje1 = $_SESSION['mensaje1'];
    // Limpia el mensaje de la sesión para que no se muestre de nuevo
    // unset($_SESSION['mensaje1']);
// } else {
   //  $mensaje1 = ""; // Inicializa la variable si no hay mensaje
// }
// ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Consular</title>
    <link rel="icon" href="https://yt3.googleusercontent.com/8P1fl7HcNfogjGUzAZ1YrOd9rRS4w19B07vgnr8_8r0j85G0VpzUxADY2kRVEBu-OFEYj8SU=s176-c-k-c0x00ffffff-no-rj" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/caja_admin.css">
    <link rel="stylesheet" href="css/subir.css">
    <link rel="stylesheet" href="css/fot1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
</head>
<body>
<div class="sidebare">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name titulo-principal">ADMIN</div>
            </div>
            <i class='bx bx-menu is' id='btne'></i>
        </div>
        <style>
            .logo_name.titulo-principal {
                color: yellow;
            }
        </style>

        <ul class="nave">
            <li class="lis">
                <a class="as" href="#">
                    <i class='bx bx-user-circle is' ></i>
                    <span class="nombre"><?php echo  $_SESSION['username'] ?> (Admin)</span>
                </a>
                <span class="tooltip"></span>
            </li>
            <li class="lis">
                <a class="as" href="admin/admin.php">
                <i class='bx bx-user-circle is' ></i>
                    <span class="link_names">Administrar Usuarios</span>
                </a>
                <span class="tooltip">Historial</span>
            </li>
            <li class="lis">
                <a class="as" href="cerrar-sesion.php">
                <i class='bx bxs-left-top-arrow-circle is' ></i>
                    <span class="link_names">Salir</span>
                </a>
                <span class="tooltip">Salir</span>
            </li>
        </ul>
    </div>
   
   
    <div class="home_content">
        <div class="text">Sistema de:</div><br>
    
        <h1 class="text-center titulo-principal">CONTENIDO DEL ADMINISTRADOR</h1>
        <div class="container table-responsive">
            <div class="text-center">
                <div class="alert alert-success">
                        <p>tu contenido</p>
                        <!---A MEDIDA QUE VAYAS AGREGANDO CONTENIDO EL CUADRO SE AGRANDA--->
                </div>
            </div>
        </div>

            <!-----TU CONTENIDO-------->            
            
    
<script>
    let btn = document.querySelector('#btne');
    let sidebar = document.querySelector('.sidebare');
    let srcBtn = document.querySelector('.bx-search');

    function toggleSidebar() {
        sidebar.classList.toggle('active');
    }

    // Abre el menú por defecto en escritorio
    window.addEventListener('load', function() {
        if (window.innerWidth > 768) {
            sidebar.classList.add('active');
        }
    });

    btn.onclick = toggleSidebar;
    srcBtn.onclick = toggleSidebar;

    // Cierra el menú en dispositivos móviles por defecto
    window.addEventListener('resize', function() {
        if (window.innerWidth <= 768) {
            sidebar.classList.remove('active');
        } else {
            // Si el tamaño de la pantalla es mayor que 768px, abre el menú
            sidebar.classList.add('active');
        }
    });
</script>
<style>
                .img-titulo{
                    margin-left: 340px;
                }
            </style>
<!----MENSAJE DE INICIO DE SESSION EXITOSO-->
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js
"></script>


<!-------------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</body>
</html>