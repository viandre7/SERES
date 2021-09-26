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
<style type="text/css">

.d-flex{
    
    display: block !important; */
}
/* .file{
                cursor: pointer; 
                height: 45%; 
                position:absolute; 
                top: 0; right: 0; z-index: 99; 
                font-size:50px; 
                opacity: 0; -moz-opacity: 0; 
                filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0)
     
    } */
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

      .zoom {
  transition: transform .2s; /* Animation */
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.7); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

      
</style>
<title>Mis Ofertas</title>
</head>
<body>

<div class="container border justify-content-center" style="width: 90%; height: 100%;" >

<form class="form-group"  id="misOfertasFrm" action="" enctype="multipart/form-data" >
        <div class="border-bottom text-center">
            <h2 >Mis Ofertas</h2>

            <input type="text" id="idOfertante" value="<?php $idofertante= $_SESSION['id_ofertante'];  echo $idofertante; ?>" hidden> 
            <br>
        </div>

        <div  id="misOfertas"></div>      
        
        <!-- /// INICIO MODAL COMENTARIOS -->
        <div class="modal fade"  id="modalVerMAs" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><strong>Comentarios de la oferta</strong> </h5>
                            <button type="button" value="" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->                                
                            </button>
                        </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-12 ">
                                <input class="form-control" type="number" name="numIdVerMas" id="numIdVerMas" hidden >
                            </div>
                        </div>

                        <!-- <div class="row" id="calificacion_total"></div> -->
                        <div class=" col-md-12  " id="bodyModalComentarios"></div>                           

                    </div>
                    <div class="modal-footer">                            
                        <button type="button" onclick="limpiar()" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                    </div>
                </div>
        </div>
        <!-- /// FIN MODAL COMENTARIOS -->
       
        <!-- /// INICIO MODAL MODIFICAR -->

        <!-- /// FIN MODAL MODIFICAR -->

        <!-- MODAL ELIMINAR -->
        <div class="modal"  id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Eliminar oferta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                    <div class="col-12">
                                        <input type="number" name="txtIdOferElm" id="txtIdOferElm" hidden >
                                        <h5>¿Está seguro que desea eliminar la oferta?</h5>
                                        <h4 id="oferEliminar"></h4>
                                    </div>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" id="btnEliminar" class="btn btn-primary" data-bs-dismiss="modal">Eliminar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- FIN MODAL ELIMINAR -->
    
    </form>

    <form class="form-group"    action="../controlador/misOfertas.update.php" method="POST" enctype="multipart/form-data" >

    <div class="modal"  id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><strong>Modificar Oferta</strong> </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <!-- <span aria-hidden="true">&times;</span> -->
                                </button>
                            </div>
                            <div class="modal-body">
                        
                        
                                <div class="row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" name="numIdOferta" id="numIdOferta" hidden >
                                        </div>
                                </div>                              
                                <div class="row">   
                                        <div class="col-12">                                            
                                            <label><strong>Categoria</strong> </label> <br>
                                            <label type="text" name="opCategoria1" id="opCategoria1"></label>
                                            <select class="form-select" name="txtIdCategoria" id="txtIdCategoria"> </select>                           
                                        </div>
                                </div>
                                <h3></h3>
                                <div class="row">
                                        <div class="col-12">
                                            <input class="form-control" type="number" name="inIdCategoria" id="inIdCategoria" hidden>
                                            <label><strong>Subcategoria</strong> </label><br>
                                            <select class="form-select" name="txtIdSubCategoria" id="txtIdSubCategoria" > 
                                                <!-- <option selected>- Seleccione una subcategoría -</option>                                              -->
                                            </select>
                                        </div>
                                </div>
                                <h3></h3>   

                                <div class="row">
                                        <div class="col-12 text-left">
                                            <label><strong>Nombre de la oferta</strong> </label>   
                                            <input class="form-control" type="text" name="txtIdNombreOfertaMod" id="txtIdNombreOfertaMod">                                         
                                        </div>
                                </div>                                
                                <h3></h3>
                                                            
                                <div class="row">
                                        <div class="col-12 text-left">
                                            <label><strong>Descripción</strong> </label>                                            
                                        </div>
                                        <div class="col-12 text-center">
                                            <textarea class="form-control" name="txtIdDescripcion" id="txtIdDescripcion" cols="55" rows="5" ></textarea>
                                        </div>
                                </div>                                
                                <h3></h3>
                                <div class="row">
                                        <div class="col-12">
                                            <label for=""><strong>Valor</strong> </label>
                                            <input class="form-control" type="number" name="txtIdPrecioOfeMod" id="txtIdPrecioOfeMod">
                                        </div>
                                </div>
                                <h3></h3>
                                <div class="row">
                                        <div class="col-12">
                                            <label for=""><strong>Unidad de medida</strong> </label><br>
                                            <select class="form-select" name="txtUniMedi" id="txtUniMedi"></select>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 "  align="center">
                                      
                                                <div class="col-12" ><p> Selecione Imagen: </p></div>
                                                <input class="form-control" type="text" name="imgAct" id="imgAct" hidden>
                                            <img id = "data" src="../componente/img/plantilla.usuario/usuario.png" class="rounded-circle" alt="" id="bb"/>
                                        <input type="file" id="txOf" name="txOf" class="file " accept="image/*"  >
                                        <div class="dato justify-content-center aling-item-center text-center" id="file-preview-zone">  
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                            
                            <div class="modal-footer">  
                            <button type="submit"  class="btn btn-primary" data-dismiss="modal">Guardar</button>                          
                                <!-- <button type="button" id="btnModificar" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button> -->
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                            </div>
                        </div>
        </div>
        </form>
	<br>
<div class="text-center">
    <a href="#inicio_logo" class="btn btn-primary">Arriba<ion-icon name="arrow-up-outline"></ion-icon></a>
</div>      
<br>

<?php include_once "footer.frm.php" ?>
</div>
</body>
<link rel="stylesheet" href="../componente/css/globales/misOfertas/misOfertas.css"> 
<script src="../js/misOfertas.js"></script>

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
 
    var fileUpload = document.getElementById('txOf');
    fileUpload.onchange = function (e) {
        readFile(e.srcElement);
    }
    function disable(){
        var data = "";

        data += "<style>.rounded-circle{display:none}</style>";
        $('#data').html(data);
    }
 
</script>
</html>

<!-- viviana -->