<?php
include_once("../controlador/logueo.read.php");
    if (!isset($_SESSION['id_rol'])) {
        header("location: login.php");
    } else {
        if ($_SESSION['id_rol']!=2) {
            header('location: publicar.oferta.php');
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  type="image/png" href="../componente/img/globales/Logo_SERES.png" sizes="16x16 24x24 36x36 48x48">  
    <link rel="stylesheet" href="../componente/css/globales/bootstrap.css">
    <link rel="stylesheet" href="../componente/css/globales/all.css">  
    <link rel="stylesheet" href="../componente/css/globales/datatables.css">
    <link rel="stylesheet" href="../componente/css/globales/jquery-ui.css"> 
    <link rel="stylesheet" href="../componente/css/globales/global.css"> 
    <link rel="stylesheet" href="../componente/css/globales/alertify.css">
    <link rel="stylesheet" href="../componente/css/globales/style.css">    
    <link rel="stylesheet" href="../componente/css/globales/calificacion.css">  
    <link rel="stylesheet" href="../componente/css/globales/fontawesome.css">
    <link rel="stylesheet" href="../componente/css/globales/mi_perfil.css"> 
    <link rel="stylesheet" href="../componente/css/globales/btnPersonalizadosSeres.css">
    <link rel="stylesheet" href="../componente/css/globales/regular.css"> 
    <link rel="stylesheet" href="../componente/css/globales/solid.css"> 
    <link rel="stylesheet" href="../componente/css/globales/svg-with-js.css"> 

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../componente/libreria/jquery-3.5.1.js" ></script>   
    <script src="../componente/libreria/bootstrap.js"></script> 
    <script src="../componente/libreria/all.js"></script>
    <script src="../componente/libreria/datatables.js"></script>
    <script src="../componente/libreria/dataTables.buttons.js"></script>
    <script src="../componente/libreria/pdfmake.min.js"></script>
    <script src="../componente/libreria/regular.js"></script>
    <script src="../componente/libreria/vfs_fonts.js"></script>
    <script src="../componente/libreria/buttons.html5.min.js"></script>
    <script src="../componente/libreria/buttons.print.min.js"></script>
    <script src="../componente/libreria/jszip.min.js"></script>
    <script src="../componente/libreria/jquery-ui.js"></script> 
    <script src="../componente/libreria/alertify.js"></script>  
    <script src="../componente/libreria/fontawesome.js"></script>   
    <script src="../componente/libreria/jquery.maskedinput.min.js"></script>        
    <script src="../js/globales/global.js"></script>
    <script src="../../js/login/logueo.adm.js"></script>  

<style>

.head-model{
  padding: auto;
  box-shadow: 0px 10px 10px #264d9f;
  margin-bottom: 20px;
}

.d-flex{

}
</style>

    <header class="padre ">
    <div class="head-model  ">
        <nav class="navbar navbar-expand-lg  ">
            <div class="container-fluid  lign-items-center">
                <a id="inicio_logo" class="navbar-brand" href="mi_perfil.frm.php"><img src="../componente/img/globales/Logo_SERES.png" style="width: 100px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">Menú</span>
                </button>
                <div class="collapse navbar-collapse "  id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="buscar.oferta.usuario.frm.php"><i class="fas fa-search"></i> Buscar Oferta</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active " href="publicar.oferta.php"><i class="fas fa-plus-circle"></i> Publicar Oferta</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="misOfertas.frm.php"><i class="far fa-address-book"></i> Mis Ofertas</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i> Mi Perfil 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="mi_perfil.frm.php"> Mi Perfil <img src="../imagenes/<?php $img = $_SESSION['img_usuario']; echo $img;?>"  style="width: 40px; height: 40px;" class="rounded-circle border"></a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalV" href="#"><i class="fas fa-key"></i>Cambiar Contraseña</a></li>
                        <li><button class="dropdown-item" id="btnCerrar"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</button></li>
                        <script src="../js/login/logueo.js"></script>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
    </header>

    <form id="nuevaContrasena" method = "POST">
        <div class="form-group" name= "control">
        <div class="modal fade" id="modalV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Modaliniciar">Escribe la Nueva contraseña</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"  aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input hidden value="<?php
                                    $id= $_SESSION['id_usuario'];
                                    echo $id; ?>" name="contrasena" id="contrasena">
                        <!--   se colocan los datos  que hay que llenar   -->
                        <label for="formFile" class="form-label">Ingrese Contraseña</label>
                        <div class="input-group mb-3 p-1">
                        <input type="password"  autocomplete="off" class="form-control" placeholder="Nueva Contraseña" id="pass1"
                            aria-label="E" name="pass1"  pattern="[A-Z]{1}[0-9]{2}" maxlength="50" aria-describedby="basic-addon1">
                        <!-- <button class="btn btn-outline-secondary" onclick="mostrarPassword()" type="button" id="inputGroupFileAddon04"><i class="fa fa-eye-slash icon"></i></button> -->
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword11()">
                            <span class="fa fa-eye-slash icons"></span> </button>
                        <!-- <span class="input-group-text" id="basic-addon1"><i class="fas fa-eye-slash"></i></span> -->
                    </div>

                        <label for="formFile" class="form-label">Confirme Contraseña</label>
                        <div class="input-group mb-3 p-1">
                        <input type="password"  autocomplete="off" class="form-control" placeholder="Confirme Nueva Contraseña" id="pass2" name="pass2"
                            aria-label="E"  pattern="[A-Z]{1}[0-9]{2}" maxlength="50" aria-describedby="basic-addon1">
                        <!-- <button class="btn btn-outline-secondary" onclick="mostrarPassword()" type="button" id="inputGroupFileAddon04"><i class="fa fa-eye-slash icon"></i></button> -->
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword12()">
                            <span class="fa fa-eye-slash icons"></span> </button>
                        <!-- <span class="input-group-text" id="basic-addon1"><i class="fas fa-eye-slash"></i></span> -->
                    </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary  btn-xl m-2 p-2" type="button" id="Newpass">Guardar
                                Cambios</button>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    <script src="../js/login/newpass.js"></script>
    <script src="../js/inicio/valida.js"></script>

</form>
