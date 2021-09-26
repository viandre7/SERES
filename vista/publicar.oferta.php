


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

<style>
    .file{
        display: none;
    } 
    
    
.file{
  cursor: pointer; 
  height: 45%; 
  position:absolute; 
  top: 0; right: 0; z-index: 99; 
  font-size:50px; 
  opacity: 0; -moz-opacity: 0; 
  filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0)

}

.filePub{
  position:absolute; 
  font-size:2px; 
  opacity: 0; -moz-opacity: 0; 
  filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0)

}

</style>

<title>publicar oferta</title>
</head>
<body>
<br>
<div class="container border" >
    <div class=" row d-sm-flex">
        <div class=" col-md-12 col-xs-12 col-sm-12">
            <h2 class="text-center">Publicar Oferta</h2>
            <br>
                <form id="oferta" class="row g-3" action="../controlador/publicarOferta.create.php" method="POST" enctype="multipart/form-data" >
                <input type="hidden" value="<?php $idofertante= $_SESSION['id_ofertante'];  echo $idofertante; ?>" id="idofertante" name="idofertante" >
                <div class=" row d-sm-flex">    
                    <div class="col-md-5 col-xs-12 col-sm-12">
                        <label for="categoria" class="form-label">Categoria</label>
                        <select  class="form-select" aria-label="Seleccionar categoria" id="categorias" name="categorias">    
                        </select>
                    </div>
                    <div class="col-md-5 col-xs-12 col-sm-12 ms-auto" >
                        <label for="subcategoria" class="form-label">Subcategoria</label>
                            <select class="form-select" aria-label="Seleccionar Subcategoria"  id="subcategorias" name="subcategorias">
                            </select>
                        <input class="form-control" type="number" name="inIdCategoria" id="inIdCategoria" hidden >
                    </div>
                </div>
                    <br>
                    <br>
                <div class=" row d-sm-flex">    
                        <div class="col-md-12 col-xs-12 col-sm-12 justify-content-center">
                         
                            <div class="justify-content-center aling-item-center text-center mt-3">
                            <label for="formFile" class="form-label text-center">Seleccionar Imagen</label>
                                    <div id="divImagen" class="justify-content-center aling-item-center text-center">
                                        <label for="txtImagen">
                                         <div class="dato justify-content-center aling-item-center text-center" id="file-preview-zone">
                                         </div>
                                            <i id="data" class="fas fa-camera" style="width: 30%; height: 30%;" ></i>
                                        </label>
                                        <input type="file" name="txtImagen" id="txtImagen" class="file" >
                                        
                                    </div>
                            </div>
                        </div>
                    </div>
                        <br>
                        <hr>
                    <div class=" row d-sm-flex"> 
                        <div class="col-md-12 col-xs-12 col-sm-12 justify-content-center">
                            <label for="">Nombre de la oferta</label>
                            <input type="text" placeholder="Escribir Nombre de la oferta" class="form-control" id="txtoferta" name="txtoferta">
                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <label for="exampleFormControlTextarea1" class="form-label" >Descripcion de la oferta</label>
                            <textarea name="descripcion_oferta" class="form-control" id="descripcion_oferta" rows="3" placeholder="Descripcion del producto..."></textarea>
                        </div>
                    </div>
                    <div class="row d-sm-flex">
                        <div class="col-md-4 col-xs-12 col-sm-12 4 ">
                            <label for="precio" class="form-label">Precio</label>
                            <input name="valor_oferta" type="number" class="form-control" id="valor_oferta" placeholder="Ingrese el precio en pesos">
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-12 ms-auto" >
                            <label for="subcategoria" class="form-label">Unidad de medida</label>
                                <select class="form-select" aria-label="Seleccionar Subcategoria"  id="unidad" name="unidad">
                                </select>
                            </div>
                        </div>
                    
                        <div class="text-center">
                            <button type="submit" id="btn_crear" class="btn btn-primary text-center">Publicar</button>
                        </div> 
                        <br>
                    </div>  
                    <br>                    
                </form> 
                <br>
        </div>
        <br>
		
        
<br>
<?php include_once "footer.frm.php" ?>

</div>

</body>
<script src="../js/publicar_oferta/publicar.oferta.js"> </script>
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
 
    var fileUpload = document.getElementById('txtImagen');
    fileUpload.onchange = function (e) {
        readFile(e.srcElement);
    }
    function disable(){
        var data = "";

        data += "<style>.fas{display:none}</style>";
        $('#data').html(data);
    }
 
</script>
 


<!--Melisa -->