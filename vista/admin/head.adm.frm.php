<?php
include_once("../../controlador/logueo.adm.read.php");
    if (!isset($_SESSION['id_rol'])) {
        header("location: ../login.php");
    } else {
        if ($_SESSION['id_rol']!=1) {
            header('location: index.adm.php');
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  type="image/png" href="../../componente/img/globales/Logo_SERES.png" sizes="16x16 24x24 36x36 48x48">  
    <link rel="stylesheet" href="../../componente/css/globales/bootstrap.css">
    <link rel="stylesheet" href="../../componente/css/globales/all.css">
    <link rel="stylesheet" href="../../componente/css/globales/datatables.css">
    <link rel="stylesheet" href="../../componente/css/globales/jquery-ui.css">
    <link rel="stylesheet" href="../../componente/css/globales/global.css">
    <link rel="stylesheet" href="../../componente/css/globales/alertify.css">
    <link rel="stylesheet" href="../../componente/css/globales/style.css">
    <link rel="stylesheet" href="../../componente/css/globales/calificacion.css">
    <link rel="stylesheet" href="../../componente/css/globales/fontawesome.css">
    <link rel="stylesheet" href="../../componente/css/globales/mi_perfil.css">
    <link rel="stylesheet" href="../../componente/css/globales/regular.css">
    <link rel="stylesheet" href="../../componente/css/globales/solid.css">
    <link rel="stylesheet" href="../../componente/css/globales/svg-with-js.css">
    <link rel="stylesheet" href="../../componente/css/globales/autoFill.bootstrap4.css">
    <link rel="stylesheet" href="../../componente/css/globales/autoFill.dataTables.css">
    <link rel="stylesheet" href="../../componente/css/globales/autoFill.foundation.css">
    <link rel="stylesheet" href="../../componente/css/globales/buttons.bootstrap4.css">
    <link rel="stylesheet" href="../../componente/css/globales/buttons.dataTables.css">
    <link rel="stylesheet" href="../../componente/css/globales/colReorder.bootstrap4.css">
    <link rel="stylesheet" href="../../componente/css/globales/colReorder.dataTables.css">
    <link rel="stylesheet" href="../../componente/css/globales/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../../componente/css/globales/dataTables.dateTime.css">
    <link rel="stylesheet" href="../../componente/css/globales/dataTables.jqueryui.css">
    <link rel="stylesheet" href="../../componente/css/globales/responsive.bootstrap4.css">
    <link rel="stylesheet" href="../../componente/css/globales/responsive.dataTables.css">

    <script src="../../componente/libreria/jquery-3.5.1.js" ></script>   
    <script src="../../componente/libreria/bootstrap.js"></script> 
    <script src="../../componente/libreria/all.js"></script>
    <script src="../../componente/libreria/datatables.js"></script>
    <script src="../../componente/libreria/dataTables.buttons.js"></script>
    <script src="../../componente/libreria/pdfmake.min.js"></script>
    <script src="../../componente/libreria/regular.js"></script>
    <script src="../../componente/libreria/vfs_fonts.js"></script>
    <script src="../../componente/libreria/buttons.html5.min.js"></script>
    <script src="../../componente/libreria/buttons.print.min.js"></script>
    <script src="../../componente/libreria/jszip.min.js"></script>
    <script src="../../componente/libreria/jquery-ui.js"></script> 
    <script src="../../componente/libreria/alertify.js"></script>      
    <script src="../../componente/libreria/autoFill.bootstrap4.js"></script>   
    <script src="../../componente/libreria/autoFill.foundation.js"></script>  
    <script src="../../componente/libreria/buttons.bootstrap4.js"></script>   
    <script src="../../componente/libreria/buttons.jqueryui.js"></script>   
    <script src="../../componente/libreria/buttons.print.js"></script>    
    <script src="../../componente/libreria/colReorder.bootstrap4.js"></script>   
    <script src="../../componente/libreria/colReorder.dataTables.js"></script> 
    <script src="../../componente/libreria/dataTables.bootstrap4.js"></script>   
    <script src="../../componente/libreria/dataTables.dateTime.js"></script>    
    <script src="../../componente/libreria/dataTables.fixedColumns.js"></script>   
    <script src="../../componente/libreria/dataTables.foundation.js"></script>   
    <script src="../../componente/libreria/dataTables.responsive.js"></script>   
    <script src="../../componente/libreria/fixedColumns.bootstrap4.js"></script>   
    <script src="../../componente/libreria/fixedColumns.dataTables.js"></script>   
    <script src="../../componente/libreria/responsive.bootstrap4.js"></script>   
    <script src="../../componente/libreria/jquery.maskedinput.min.js"></script>    
    <script src="../../js/globales/global.js"></script>  
    <script src="../../js/login/logueo.adm.js"></script>  
    
    <style>
        .head-model{
            padding: auto;
            box-shadow: 0px 10px 10px cadetblue;
            margin-bottom: 20px;
        }
        
    .form-control {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0;
    border-radius: 50px !important;
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control-lg {
    min-height: calc(1.5em + 1rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    border-radius: 0.3rem;
}
</style>
    <div  class="">
        <div class="head-model d-flex justify-content-between">
            <nav class="navbar navbar-expand-lg d-flex align-items-center">
                <div class="container-fluid">
                  <a class="navbar-brand" href=""><img src="../../componente/img/globales/Logo_SERES.png"style="width: 100px;"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">Menu</span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.adm.php">Inicio</a>
                      </li>
                      <li class="nav-item active dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Ofertas <i class="far fa-address-book"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="categoria.adm.frm.php">Categorias</a></li>
                          <li><a class="dropdown-item" href="comentarios.adm.frm.php">Comentarios</a></li>
                          <li><a class="dropdown-item" href="ofertas.adm.frm.php">Ofertas</a></li>
                          <li><a class="dropdown-item" href="subcategoria.adm.frm.php">Subcategorias</a></li>
                          <li><a class="dropdown-item" href="unidadmedida.adm.frm.php">Unidad de Medida</a></li>                                               
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link active    dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Ubicación <i class="fas fa-map-marked-alt"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="departamento.adm.frm.php ">Departamento</a></li>
                          <li><a class="dropdown-item" href="municipio.adm.frm.php">Municipio</a></li>
                          <li><a class="dropdown-item" href="pais.adm.php">Pais</a></li>   
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link active    dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Ofertante <i class="fas fa-user-check"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <!-- <li><a class="dropdown-item" href="ActividadEconomiaca.php">Actividad Economica</a></li>
                          <li><a class="dropdown-item" href="niveleducativo.php">Nivel Educativo</a></li>  
                          <li><a class="dropdown-item" href="ocupacion.php">Ocupación</a></li>   -->
                          <li><a class="dropdown-item" href="ofertante.adm.frm.php">Ofertantes</a></li>
                          <!-- <li><a class="dropdown-item" href="profesion.php">Profesión</a></li>   -->
                          <li><a class="dropdown-item" href="tipodocumento.adm.frm.php">Tipo Documento</a></li>  
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link active    dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Solicitudes <i class="fas fa-comments"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <!-- <li><a class="dropdown-item" href="ActividadEconomiaca.php">Actividad Economica</a></li>
                          <li><a class="dropdown-item" href="niveleducativo.php">Nivel Educativo</a></li>  
                          <li><a class="dropdown-item" href="ocupacion.php">Ocupación</a></li>   -->
                          <li><a class="dropdown-item" href="mensajes.adm.frm.php"> Mensajes Recibidos</a></li>
                          <!-- <li><a class="dropdown-item" href="profesion.php">Profesión</a></li>   --> 
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link active    dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Mi perfil <i class="fas fa-user"></i></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalV" href="#"><i class="fas fa-key"></i>Cambiar Contraseña</a></li>
                          <li><a  class="nav-link active"  id="btnCerrar"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a></li>  
                        </ul>
                      </li>
                      <script src="../../js/login/logueo.adm.js"></script>
                      <img src="../../imagenes/<?php $img = $_SESSION['img_usuario']; echo $img;?>"  style="width: 40px; height: 40px;" class="rounded-circle border">
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>

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
                            <button class="btn btn-primary  btn-xl m-2 p-2" type="button" id="Newpassadm">Guardar
                                Cambios</button>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/login/newpass.js"></script>
    <script src="../../js/inicio/valida.js"></script>

</form>
