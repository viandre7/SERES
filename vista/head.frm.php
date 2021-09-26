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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@600&family=Kanit:wght@700&family=Oswald:wght@700&display=swap" rel="stylesheet"> 

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
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

   
<header class="padre">
   
    <div  class="">
    <div class="head-model d-flex justify-content-between">
        <div class="topnav d-flex align-items-center" id="myTopnav"> 
            <a class="navbar-brand" href="index.frm.php"><img src="../componente/img/globales/Logo_SERES.png"style="width: 100px;"></a>
            <a class="nav-link " href="index.frm.php"><i class="fas fa-home  fa-xs"></i>Inicio</a>
            <a class="nav-link" href="#foot"><i class="fas fa-users"></i>Acerca de Nosotros</a>
            <a class="nav-link" href="buscar.oferta.frm.php"><i class="fas fa-search  fa-xs"></i>Buscar Oferta</a>
            <a class="nav-link" href="registro.frm.php"><i class="fas fa-user-plus  fa-xs"></i>Registrarse</a>
            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#Modaliniciarsesion"> <i class="fas fa-user-check fa-xs"></i>Iniciar sesión </a>           
            <a href="javascript:void(0);" class="icon" onclick="Menu()"><i class="fa fa-bars"></i></a>
        </div>  
    </div>
</header>
    <!-- Modal  de iniciar sesion-->

    <form id="LoginF">
        <div class="modal fade" id="Modaliniciarsesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Modaliniciar">Iniciar Sesion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--   se colocan los datos  que hay que llenar   -->
                        <h4 for="formFile" class="form-label">Ingrese su Email</h4>
                        <input class="form-control form-control-lg" type="text" placeholder="Email" id="txtUsuario"
                            name="txtUsuario" aria-label=".form-control-lg example">
                            <div class="input-group mb-3 p-1">
                        
                        <input type="password"  autocomplete="off" class="form-control" placeholder="Contraseña" id="txtClave"
                            aria-label="E" name="txtClave"  pattern="[A-Z]{1}[0-9]{2}" maxlength="50" aria-describedby="basic-addon1">
                        <!-- <button class="btn btn-outline-secondary" onclick="mostrarPassword()" type="button" id="inputGroupFileAddon04"><i class="fa fa-eye-slash icon"></i></button> -->
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword1()">
                            <span class="fa fa-eye-slash icons"></span> </button>
                        <!-- <span class="input-group-text" id="basic-addon1"><i class="fas fa-eye-slash"></i></span> -->
                    </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn  btn-primary btn-xl m-2 p-2" type="button" id="btnLogin">Iniciar
                                Sesion</button>
                                <div class="fb-login-button"  scope="public_profile,email" onlogin="checkLoginState();" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"> </div>
                                          
                                            <input hidden type="text" name="data" id="data">
                                            <input hidden type="text" name="email" id="email">
                                            <input hidden type="text" name="name" id="name">
                                        <div id="status">
                                        </div> 

                            <a href="#" class="m-1 p-1" style="text-decoration:none"  data-bs-toggle="modal" data-bs-target="#modalrecupera" onclick="cambiar()" >¿Olvido su
                                contraseña?</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="registro.frm.php" class="m-1 p-1" style="text-decoration:none">Registrase</a>
                    </div>
                </div>
             
    
                <script src="../js/login/login.js" ></script>

            </div>
        </div>
    </form>

    <form id="Recupera" method="POST">
        <div class="form-group" name= "control">
            <div class="modal fade" id="modalrecupera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Modaliniciar">Modificar Contraseña</h5>
                        <button type="button" class="btn-close" onclick="location.reload()" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--   se colocan los datos  que hay que llenar   -->
                        <h5 for="formFile" class="form-label">Ingrese tu Email registado</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Email" id="txtemail"
                            name="txtemail" aria-label=".form-control-lg example">
                        <h5 for="formFile" class="form-label">escribe tu respuesta de recuperar contraseña</h5>
                        <input class="form-control form-control-lg" type="text" placeholder="Respuesta"
                            id="txtrecu" name="txtrecu" aria-label=".form-control-lg example">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary  btn-xl m-2 p-2" type="button" id="btnRecupera" >
                            Validar</button>
                        </div>
                    </div>
                </div>
            </div>
            <script src="../js/login/recuperar.js"></script>
        </div>
    </form>
    <?php include_once "newpass.php" ?>

    <script src="../js/api_facebook.js"></script>
    <script src="../js/inicio/valida.js"></script>

   






