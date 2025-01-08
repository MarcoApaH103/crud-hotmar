<?php
include('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="icon" href="https://yt3.googleusercontent.com/8P1fl7HcNfogjGUzAZ1YrOd9rRS4w19B07vgnr8_8r0j85G0VpzUxADY2kRVEBu-OFEYj8SU=s176-c-k-c0x00ffffff-no-rj" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
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
                    <span class="nombre">Admin</span>
                </a>
                <span class="tooltip"></span>
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
    
        <h1 class="text-center titulo-principal">ACTUALIZAR USUARIOS</h1>
        
        <div class="container table-responsive">
  
             <div class="alert alert-success text-center mx-auto mt-3 mb-0 small">
        <h7>INGRESE LOS DATOS CORRESPONDIENTES PARA <b>ACTUALIZAR USUARIOS</b></h7>
    </div>
<!------------mmostrar------>
<?php
    $id = $_GET["id"];
    $sql = "SELECT u.*, r.descripcion as RolDescripcion FROM usuarios u JOIN rol r ON u.id_rol = r.id_rol where ID='$id'";
    /*$sql="SELECT * FROM usuarios where ID='$id'";*/
    $result = mysqli_query($conexion, $sql);
    while($mostrar = mysqli_fetch_array($result)){

?>
<!----FORMULARIO------>
<form class="row g-4 mt-1 mb-3" action="procesar_editar.php" method="post" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="txtID">        
        <div class="col-md-5">
                    <label for="inputState" class="form-label"><b>NOMBRE</b></label>
                    <input class="form-control" type="text" value="<?php echo $mostrar['Nombre'] ?>" name="txtNombre">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label"><b>USUARIO</b></label>
                    <input class="form-control" type="text" value="<?php echo $mostrar['Usuario'] ?>" name="txtUsuario">
                </div>
                <div class="col-md-3">
                <label for="inputState" class="form-label"><b>GENERO</b></label>
                    <select id="departamentos" class="form-select" name="txtGenero"required > 
                    <option value="<?php echo $mostrar['Genero'] ?>"><?php echo $mostrar['Genero'] ?></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    </select> <br>
                </div>
        
                <div class="col-md-3">
                    <label for="inputState" class="form-label"><b>FECHA DE NACIMIENTO</b></label>
                    <input type="date" id="fechaNacimiento"  value="<?php echo $mostrar['Fecha_Nac'] ?>" name="txtNacimiento" class="form-control" >
                </div>
               
                <div class="col-md-3">
                    <label for="inputState" class="form-label"><b>CONTRASEÑA</b></label>
                    <input class="form-control" type="text" value="<?php echo $mostrar['Password'] ?>" name="txtPassword">
                </div>
                
                <div class="col-md-3">
                    <label for="inputState" class="form-label"><b>ROL</b></label>
                    <select id="departamentos" class="form-select" name="txtRol"required> 
                    <option selected value="<?php echo $mostrar['id_rol'] ?>"><?php echo $mostrar['RolDescripcion'] ?></option>
                    <option value="1">Admin</option>
                    <option value="2">Usuario</option>
                </div>
                <div class="col-md-3">
                <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="txtID">
                </div>
                <div class="text-center">
                <button type="submit" name="accion"  class="btn btn-success text-center">Actualizar</button>
                 <a class="btn btn-danger" href="admin/admin.php">Cancelar</a>
                </div>
                    <!------BOTON------>
                    <?php
                                }
                                ?>    
                    <!------------------->
            </form><br>
            
    <!-----------------FIN FORMULARIO------->
       

<?php
include('admin/pie.html');

?>
          <style>
                .img-titulo{
                    margin-left: 340px;
                }
            </style>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>