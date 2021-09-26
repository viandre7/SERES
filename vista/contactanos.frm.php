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
    
    <!-- <script src="../js/contactanos.js "></script> -->
    
    <title>Contáctanos</title>
</head>
<body>
    <div  class="container ">
        <div class="row">
            <div class="topnav" id="myTopnav"> 
                <a class="navbar-brand" href="index.frm.php"><img src="../componente/img/globales/Logo_SERES.png"style="width: 100px;"></a>
                <a class="nav-link " href="index.frm.php">Inicio</a>
                <a href="javascript:void(0);" class="icon" onclick="Menu()"><i class="fa fa-bars"></i></a>
            </div>  
        </div>
    </div>

<form class="form-group" id="contactanos" action="../controlador/enviar.php" method="post" >

<div id="fondoC" class="container border">
<!-- style="color: rgb(207, 199, 199); background-color: rgb(202, 197, 197);" -->
	<div class="aling-items-center justify-content-center mt-5">
    <br>
		<h3 class="text-center" style="color: black;"><strong>Contáctanos</strong> </h3><br>
		<img src="../componente/img/globales/Logo_SERES.png" style="width: 250px;" class="mx-auto d-block">
	</div>
	<div class="container col-md-6 col-xs-3 col-sm-3 ">
		<div class="mt-3 ">
			<input class="form-control" type="text" name="txtNombreContac" id="txtNombreContac" placeholder="Nombre*" required>
		</div>
		<div class="mt-3 ">
			<input class="form-control" type="email" name="emailContac" id="emailContac" placeholder="Email*" required>
		</div>
		<div class="mt-3 ">
            <textarea class="form-control" name="txtMensajeContac" id="txtMensajeContac" cols="30" rows="7" placeholder="Mensaje*" required></textarea>
			<!-- <input class="form-control " type="text" style="height: 180px;" name="" id="" placeholder="Descripción"> -->
		</div>
	</div>
	<br>
	<div class="text-center">

        <input type="submit" id="btnEnviar" class="btn btn-primary" style="width: 150px;" value="Enviar" id="btnEnviar">
		<!-- <a href=""  id="btnEnviar" class="btn btn-success" style="width: 150px;">Enviar</a> -->
	</div>
    <br>
    <?php include_once "footer.frm.php" ?>
</div>
</form>
</body>
</html>