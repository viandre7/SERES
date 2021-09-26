
<?php include_once "head.usuario.frm.php" ?>


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

                  <title>Mi Perfil </title>
</head>
<body>
    <style type="text/css">
            .file{
                cursor: pointer; 
                height: 45%; 
                position:absolute; 
                top: 0; right: 0; z-index: 99; 
                font-size:50px; 
                opacity: 0; -moz-opacity: 0; 
                filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0)
     
    }
    .bb{          
        max-width: 100%;
        max-height: 100%;
        padding: 20%;
        margin-top: auto;
       
      }
      .padin{
          padding:30px;
      }
      .form-group{
          margin-top:40px;
      }
      
    </style>
 
 <div class="container border justify-content-center" style="width: 90%; height: 100%;" id="fondo">
    <form class="form-group" id="miPerfil" >
       
        <!-- /// INICIO PERFIL COMPLETO -->
        <div id="Perfil"> 

            <!-- /// Inicio nombre usuario y foto de perfil -->
            <div class="col-md-12 border-bottom">

                <div class="row">
                
                    <!-- /// Inicio foto de perfil -->
                    <div class="col-md-3 text-center">
                        <div class="seccion-block">
                        
                            <div id="img">
                               <img src="../imagenes/<?php $img = $_SESSION['img_usuario']; echo $img;?>"  style="width: 150px; height: 150px;" class="rounded-circle border">
                            </div>
                            
                            <a   class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalmodificar1"><i class="far fa-edit"></i></a>
                        </div>
                      
                    </div>
                    <!-- /// Fin foto de perfil -->

                    <!-- /// Inicio informacion personal-->
                    <div class="col-md-7 text-right" >
                        <div >
                            <div id="nombreUsuario">  
                            <h2><strong ><?php
                                    $primernombre= $_SESSION['primer_nombre'];
                                    $otrosnombre= $_SESSION['otros_nombre'];
                                    $primerapell= $_SESSION['primer_apellido'];
                                    $otrossapell= $_SESSION['otros_apellido'];

                                    echo $primernombre,' ',$otrosnombre,' ',$primerapell,' ', $otrossapell; ?> </strong> </h2> 
                            <h4><strong ><?php $usuario= $_SESSION['usuario'];  echo $usuario; ?> </strong> </h4> 
                            </div> <!-- /// Fin Nombre-->

                            <h2></h2>

                            <div class="row"> <!-- /// Inicio Ubicacion-->
                                <div class="col-md-2 text-right" id="bandera">
                                    <div hidden>Bandera</div>
                                    <img src="../componente/img/globales/colombia.png" style="width: 60px;" alt="">                                        
                                </div>

                                <div class="col-md-4 text-left sinpadding" id="departamento">
                                    <h5><strong>Departamento</strong></h5> 
                                    <h5 ><?php $departamento= $_SESSION['departamento'];  echo "".$departamento; ?></h5> 
                                </div>

                                <div class="col-md-4 text-left sinpadding" id="ciudad">
                                    <h5><strong>Municipio</strong></h5>
                                    <h5 id="ciudad"><?php $municipio= $_SESSION['municipio'];  echo "".$municipio; ?></h5> 
                                </div>
                                
                            </div> <!-- /// Fin Ubicacion-->

                            <h2></h2>

                            <div> <!-- /// Inicio Calificacion-->
                                <strong > Calificacion </strong>
                                <br>
                                <div class="ec-stars-wrapper ">
                                    <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                                    <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                                    <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                                    <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                                    <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                                </div>  
                            </div> <!-- /// Fin Calificacion-->
                        </div>                            
                    </div>
                    <!-- /// Fin informacion personal-->  

                    <!-- /// Inicio btn Editar-->  
                    <div class="col-md-2">
                        <br>
                        <a  id="btnModificarPersona" class="btn btn-primary" style="float: middle-right;" data-bs-toggle="modal" data-bs-target="#modalModificar">Editar</a>    
                    </div>
                    <!-- /// Fin btn Editar-->  
                    
                </div>
                <h1></h1>
            </div>                
            <!-- /// Fin nombre usuario y foto de perfil -->

            <h1></h1>

            <!-- /// Inicio Sobre mi -->    
            <div class="border-bottom padin">
                <div class="col-md-12">
                    <div class="row">
                        
                        <div class="col-md-10">
                            <div class="col-md-11"> 
                                <h3><strong>Sobre Mí</strong> </h3>
                            </div>                           
                            
                            <!-- /// Inicio descripcion-->
                            <div class="col-md-11">
                                <div>
                                    <p id="descripcion">
                                    <?php $descripcion= $_SESSION['descripcion_ofertante'];  echo "".$descripcion; ?>
                                    </p>
                                </div>                                
                            </div>
                            <!-- /// Fin descripcion-->                                     
                        </div>                            
                        
                        <!-- /// Inicio btn Editar-->  
                        <div class="col-md-2">
                            <br>
                            <a  class="btn btn-primary" id="btnDescripcion" style="float: middle-right;" data-bs-toggle="modal" data-bs-target="#modalModificar2">Editar</a>    
                        </div>
                        <!-- /// Fin btn Editar-->  

                    </div>
                </div>
                <h1></h1>
            </div>
            <!-- /// Fin Sobre mi -->  

            <h1></h1>
            
            <!-- /// Inicio informacion sobre mi-->
            <div>
                <div class="row padin">
                    <div class="row">

                        <div class="row">
                            <div class="row"> 
                                <h3><strong>Información de contacto</strong></h3>
                               
                            </div>                          

                            <h1></h1>


                            <div class="col-md-3 col-xs-12 col-sm-12">
                                <h4><strong>Dirección</strong></h4>
                                <p id="direccion"><?php $direccion= $_SESSION['direccion'];  echo "".$direccion; ?></p>
                            </div>     
                            <div class="col-md-3 col-xs-12 col-sm-12">
                                <h4><strong>Celular</strong></h4>
                                <p id="celular"><?php $celular= $_SESSION['celular'];  echo "".$celular; ?></p>
                            </div>  
                            
                            <div class="col-md-3 col-xs-12 col-sm-12">
                                <h4><strong>Email</strong></h4>
                                <p id="correo"><?php $correo= $_SESSION['email'];  echo "".$correo; ?></p>
                            </div>


                                
                        </div>

                      
                        <!-- /// Fin btn Editar-->                                           

                    </div>
                </div>
                    
                  <!-- /// Inicio btn Editar-->  
                  <div class="row">
                           <div class="text-center mt-5">
                                <a id="btnModificarUbicacion" class="btn btn-primary"  style="float: middle-right;" data-bs-toggle="modal" data-bs-target="#modalModificar3">Editar</a>    
                           </div>
                  </div>
                  <br>
            </div>
            <!-- /// Fin informacion sobre mi-->
         
        </div >
        <!-- /// FIN PERFIL COMPLETO -->
    
    </form>
<br>    
                    
<form action="../controlador/persona.update.php" method="POST" >
    <!-- /// INICIO MODAL MODIFICAR -->
    <div class="modal"  id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modificar información usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                                    <div class="col-12">
                                        <input class="form-control"  hidden type="numb"  name="txt" id="txt" value="<?php $idpersona= $_SESSION['id_persona'];  echo "".$idpersona; ?>" >
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col-12">
                                        <label> Primer nombre</label>
                                        <input class="form-control" type="text" name="txtPriNom" id="txtPriNom" value="<?php $prinombre= $_SESSION['primer_nombre'];  echo "".$prinombre; ?>">
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col-12">
                                        <label> Segundo nombre</label>
                                        <input class="form-control" type="text" name="txtSegNom" id="txtSegNom"value="<?php $segnombre= $_SESSION['otros_nombre'];  echo "".$segnombre; ?>">
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col-12">
                                        <label> Primer apellido</label>
                                        <input class="form-control" type="text" name="txtPriApel" id="txtPriApel" value="<?php $priapellido= $_SESSION['primer_apellido'];  echo "".$priapellido; ?>">
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col-12">
                                        <label> Segundo apellido</label>
                                        <input class="form-control" type="text" name="txtSegApel" id="txtSegApel" value="<?php $segapellido= $_SESSION['otros_apellido'];  echo "".$segapellido; ?>">
                                    </div>
                            </div>
                            <br>
                            <div class="row">
                            <label for="categoria" class="form-label">Ubicacion</label>
                                <select  class="form-select" aria-label="Seleccionar Ubicacion" id="municipio" name="municipio">
                    
                                </select>
                            </div>
                           

                            
                        </div>
                        <div class="modal-footer">                            
                            <button type="submit" id="btnModificarPersona"  class="btn btn-primary" data-dismiss="modal">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                        </div>
                    </div>
    </div>
    <!-- <div class="text-center">
        <a href="buscar.oferta.usuario.frm.php" class="btn btn-primary">Atrás</a>
    </div> -->
    </form>
    <!-- /// FIN MODAL MODIFICAR -->
    <form action="../controlador/ofertante.update.php" method="POST">
    <!-- /// INICIO MODAL MODIFICAR SOBRE MI-->
    <div class="modal"  id="modalModificar2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modificar información sobre mí</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <!-- <span aria-hidden="true">&times;</span> -->
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                        <input type="hidden" id="idText"  name="idText"  value="<?php $iddes= $_SESSION['id_ofertante'];  echo "".$iddes; ?>">    
                                            <textarea type="text"  rows="10" cols="80"  name="txtareaSobreMi" id="txtareaSobreMi" value="<?php $des= $_SESSION['descripcion_ofertante'];  echo "".$des; ?>"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">                            
                                <button type="submit" id="btnDescripcion" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
    </div>
    <!-- /// FIN MODAL MODIFICAR SOBRE MI -->
</form>
<form action="../controlador/ubicacion.update.php" method="POST">
     <!-- /// INICIO MODAL MODIFICAR INFORMACION DE CONTACTO -->
     <div class="modal"  id="modalModificar3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modificar información usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <!-- <span aria-hidden="true">&times;</span> -->
                                </button>
                            </div>
                            
                            <div class="modal-body">

                                    <div >
                                        <input type="text" id="idubicacion" hidden name="idubicacion" value="<?php $idubicacion= $_SESSION['id_ubicacion'];  echo "".$idubicacion; ?>">
                                    </div>
                                <div class="row">
                            
                                        <div class="col-12">
                                            <label> celular</label>
                                            <input class="form-control" type="number" name="numIdCel" id="numIdCel"value="<?php $celular= $_SESSION['celular'];  echo "".$celular; ?>">
                                        </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                           <label> Email</label>
                                           <input class="form-control" type="email" name="emailIdUsuario" id="emailIdUsuario" value="<?php $email= $_SESSION['email'];  echo "".$email; ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                           <label> País</label>
                                           <input class="form-control" type="text" disabled name="Pais" id="Pais" value="<?php $pais= $_SESSION['pais'];  echo "".$pais; ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                           <label> Dirección</label>
                                           <input class="form-control" type="text" name="Direc" id="Direc" value="<?php $direc= $_SESSION['direccion'];  echo "".$direc; ?>">
                                    </div>
                                </div>
                            </div>
                        

                            <div class="modal-footer">                            
                                <button type="submit" id="btnModificarUbicacion" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                        
                    </div>
    </div>
    </form>

    <form action="../controlador/imagen.update.php" method="POST" enctype="multipart/form-data" >
        <div class="modal"  id="modalmodificar1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modificar imagen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <!-- <span aria-hidden="true">&times;</span> -->
                        </button>
                    </div>
                   
                    <div class="modal-body" >
                        <div class="container justify-content-center align-items-center ">
                        <div class="col-12 "  align="center">
                            <div>
                                <input type="txt"  id="txtid" name="txtid" value="<?php $idusuario= $_SESSION['id_usuario'];  echo $idusuario; ?>" hidden >
                            </div>
                                    <div class="col-12" ><p> Selecione Imagen: </p></div>
                                <img id = "data" src="../componente/img/plantilla.usuario/usuario.png" class="rounded-circle" alt="" id="bb">
                            <input type="file" id="tx" name="tx" class="file " accept="image/*"  >
                            <div class="dato justify-content-center aling-item-center text-center" id="file-preview-zone">  
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">                            
                        <button type="submit"  class="btn btn-primary" data-dismiss="modal">Guardar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
</div>
    </form>

    <?php include_once "footer.frm.php" ?>
</div>

</body>
    <script src='../js/perfil.js'></script>
</html>
<script>
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
 
            reader.onload = function (e) {
                var filePreview = document.createElement('img');
                filePreview.id = 'file-preview';
                //e.target.result contents the base64 data from the image uploaded
                filePreview.src = e.target.result;
                filePreview.width = 120;
                filePreview.height = 120;

                console.log(e.target.result);
 
                var previewZone = document.getElementById('file-preview-zone');
                previewZone.appendChild(filePreview);
            }
 
            reader.readAsDataURL(input.files[0]);
        }
       disable()
    }
 
    var fileUpload = document.getElementById('tx');
    fileUpload.onchange = function (e) {
        readFile(e.srcElement);
    }
    function disable(){
        var data = "";

        data += "<style>.rounded-circle{display:none}</style>";
        $('#data').html(data);
    }
 
</script>

   <!-- lorenzo -->          

  