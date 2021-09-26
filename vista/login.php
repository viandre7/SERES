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
    <title>Iniciar Sesion</title>
<style>
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
</head>
<body>
<div  class="container">
        <div class="row">
            <div class="topnav" id="myTopnav"> 
                <a class="navbar-brand" href="index.frm.php"><img src="../componente/img/globales/Logo_SERES.png"style="width: 100px;"></a>
                <a class="nav-link " href="index.frm.php">Inicio</a>
                <a href="javascript:void(0);" class="icon" onclick="Menu()"><i class="fa fa-bars"></i></a>
            </div>  
        </div>
	</div>
	<div class="container border"  >
	<br>
		<div  class="row justify-content-center">
			<div class=" border col-md-6 col-xs-12 col-sm-12 m-2 p-2">
				<form id="LoginF">
                <h4 for="formFile" class="form-label">Ingrese su Email</h4>
                        <input class="form-control form-control-lg" type="text" placeholder="Email" id="txtUsuario"
                            name="txtUsuario" aria-label=".form-control-lg example">
                        <h4 for="formFile" class="form-label">Ingrese su Contraseña</h4>
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
                                <button class="btn  btn-primary btn-xl m-2 p-2" type="button" id="btnLogin">Facebook</button>
                           
                        </div>
					<div class="col-6 mx-auto ">
                    <a href="#"  style="text-decoration:none"  data-bs-toggle="modal" data-bs-target="#modalrecupera" onclick="cambiar()" >¿Olvido su
                                contraseña?</a>
                                
						<a href="registro.frm.php" style="text-decoration:none">Registrarse</a>
					</div>
				</form>
			</div>  
		</div>
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
     <?php include_once "footer.frm.php" ?>
    </div>
    

</body>
<script src="../js/login/login.js"></script>
<script src="../js/inicio/valida.js"></script>
</html>
