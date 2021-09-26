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
    
    
    <title>Sobre Nosotros</title>
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
        <div class="row justify-content-center">
    <!-- /// Inicio Banner /// -->
            <div  class="carousel slide" >
                <div class=" tyc">
                    <div class="carousel-item active">
                        <img src="../componente/img/plantilla.sobrenosotros/sobrenosotros.png" class="d-block w-100" alt="...">
                    </div>
                </div>  
            </div>
    <!-- /// Fin Banner /// -->
    <!-- /// Inicio caja de uso /// -->
            <div class="row justify-content-center" >
                <div class="col-md-3 col-xs-3 col-sm-3">
                    <h5 class="card-title text-center ">Historia</h5>
                    <p class="card-text text-center">Servicios especializados SERES, inicia como un proyecto estudiantil en la ciudad de neiva. Desde el año 2019 nuestro grupo de trabajo determinó que el proyecto era bueno y necesario en nuestra ciudad.</p>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3 border-bottom  d-flex justify-content-center" >
                    <div class="bg-transparent " style="width: 50% ">
                        <img class=" img-fluid  rounded-circle " src="../componente/img/plantilla.sobrenosotros/Surgimiento.jpg" alt="Responsive image">
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-md-3 col-xs-12 col-sm-12 d-flex justify-content-center" >
                    <div class="bg-transparent " style="width: 50% ">
                        <img class="   img-fluid  rounded-circle" src="../componente/img/plantilla.sobrenosotros/mision.jpg" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <h5 class="card-title text-center">Misión</h5>
                    <p class="card-text  border-bottom text-center">Ofrecer la facilidad para todas las personas de acceder a cualquier servicio u ofertarlo de forma fácil. </p>
                </div>
            </div>
            <br>
            <div class="row justify-content-center" >
                <div class="col-md-3 col-xs-12 col-sm-12 ">
                    <h5 class="card-title text-center ">Visión</h5>
                    <p class="card-text text-center">Ofrecer una variada cartera de productos de calidad que se anticipen y satisfagan los deseos y necesidades de los consumidores.</p>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 border-bottom d-flex justify-content-center" >
                    <div class="bg-transparent " style="width: 50% ">
                        <img class="  img-fluid  rounded-circle" src="../componente/img/plantilla.sobrenosotros/vision.jpg" alt="Responsive image">
                    </div>
                </div>
            </div>
            <br>
            <!-- /// Fin caja de uso /// -->
        </div>
    <!-- Incluye footer -->
    <?php include_once "footer.frm.php" ?>
    <!-- Fin Incluye footer -->
    </div>
</body>
</html>