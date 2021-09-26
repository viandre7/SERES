

<!-- Incluye Menu -->
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

<!-- Fin Incluye Menu -->
<title>Buscar Oferta </title>
</head>

<body>
<div class="container border">
<br>
        <div class="d-sm-flex">
            <div class="container border col-md-3 col-xs-12 col-sm-12">
                <div class="border-bottom">
                    <h5 class="text-center">Filtrar por</h5>
                </div>
                <form action="" class="form-group" id="filtro">
                    <div class="border-bottom">
                        <div>
                            <h5>Categoria</h5>
                            <select class="form-control redondeado" id="cat" name="cat"></select>
                        </div>
                        <br>
                    </div>
                    <div class="border-bottom">
                        <div>
                            <h5>Ubicación</h5>
                            <select class="form-control redondeado" value="0" name="txtubicacion"
                                id="txtubicacion"></select>
                        </div>
                        <br>
                    </div>
                    <div class="border-bottom">
                        <div>
                            <h5>Tarifa Máxima</h5>
                            <input type="range" value="1000" step="1000" min="1000" max="10000000"
                                oninput="this.nextElementSibling.value = this.value">
                            <input type="number" class="redondeado" id="numtarifaMaxima" name="numtarifaMaxima"
                                min="10000" max="10000000" oninput="this.form.range.value=this.value">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="border-bottom">
                        <div>
                            <h5>Que contenga una Calificación</h5>
                            <div class="clasificacion align-self-center">
                            <input id="radio1" type="radio" name="ckestrellas" id="ckestrellas" value="5"><label
                                    for="radio1"><i class="fas fa-star"></i></i></label>
                                <input id="radio2" type="radio" name="ckestrellas" id="ckestrellas" value="4"><label
                                    for="radio2"><i class="fas fa-star"></i></label>
                                <input id="radio3" type="radio" name="ckestrellas" id="ckestrellas" value="3"><label
                                    for="radio3"><i class="fas fa-star"></i></label>
                                <input id="radio4" type="radio" name="ckestrellas" id="ckestrellas" value="2"><label
                                    for="radio4"><i class="fas fa-star"></i></label>
                                <input id="radio5" type="radio" name="ckestrellas" id="ckestrellas" value="1"><label
                                    for="radio5"><i class="fas fa-star"></i></label>
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>
                    <div>
                        <a id="btnBuscarFiltro" class=" btn btn-primary" type="button"> Filtrar </a>
                        <a type="reset" id="btnBuscarFiltro" class="btn btn-primary" style="margin-top: 5px;" value="Restablecer Filtro"
                            onclick="location.reload()">Restablecer Filtro</a>
                        <br>
                    </div>
                    <br>
                </form>
            </div>
            <div class="container border col-md-8 col-xs-12 col-sm-12">
                <br>
                <form action="" class="form-group" id="buscar">
                    <div class="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="txtBuscarOferta" id="txtBuscarOferta"
                                placeholder="¿Que estas buscando?" aria-label="¿Que estas buscando?"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a class="btn btn-outline-primary" id="btnBuscarOferta" type="button">Buscar</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-12 col-xs-12 col-sm-12 border-bottom align-content-center" name="datos"
                        id="datos">
                    </div>
                    <h5 class=" col-md-12 col-xs-12 col-sm-12 border-bottom align-content-center" name="datos"
                        id="sindatos" hidden>No hay Ofertas Disponibles
                    </h5>
                    <div class=" col-md-12 col-xs-12 col-sm-12 border-bottom align-content-cente" name="datosFiltrob"
                        id="datosFiltrob" hidden>
                    </div>
                    <div class=" col-md-12 col-xs-12 col-sm-12 border-bottom align-content-cente" name="datosbusqueda"
                        id="datosbusqueda" hidden>
                    </div>
                    <br>
                    <div class="text-center">
                        <a href="publicar.oferta.php" class="btn btn-primary" style="width: 250px;">Publicar Oferta</a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Descripción de la Ofeta</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container border">
                                        <br>
                                        <div class="d-sm-flex col-md-9 col-xs-12 col-sm-12">
                                            <div class="col-md-3 col-xs-12 col-sm-12">
                                                <img src="../imagenes/" name="img" id="img"
                                                    style="width: 100px; height: 100px; float: left;"
                                                    class="rounded-circle border" alt="">
                                            </div>
                                            <br>
                                            <div class="justify-content-end col-md-9 col-xs-12 col-sm-12">
                                                <h5 name="txtNombreOfertante" id="txtNombreOfertante">
                                                </h5>
                                                <p class="text-break" name="txtUbicacion" id="txtUbicacion"></p>
                                                <p class="text-break" name="txtDescripcionOfertante"
                                                    id="txtDescripcionOfertante"></p>
                                                <a type="button" class="btn text-center text-wrap btn-primary"
                                                    style="width: 140px; height: 60px" name="txttelefno"
                                                    id="txttelefno"><i class="fas fa-phone"></i></a>
                                                <a type="button" class="btn text-center text-wrap btn-primary"
                                                    style="width: 160px; height: 60px" name="txtCelular"
                                                    id="txtCelular"><i class="fas fa-phone"></i></a>
                                                <a type="button" class="btn text-center boton text-wrap btn-primary" href=""
                                                    target="_blank" name="txtemail"
                                                    id="txtemail"><i class="far fa-envelope"></i></a>
                                                <a type="button" class="btn text-center text-wrap btn-primary" href=""
                                                    target="_blank" name="txtwhats"
                                                    id="txtwhats"><i class="fab fa-whatsapp"></i></a>
                                            </div>
                                            <div class="d-sm-flex col-md-1 col-xs-12 col-sm-12 align-items-center">
                                            </div>
                                            <div class="d-sm-flex col-md-2 col-xs-12 col-sm-12 align-items-center">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                                    style=" height: 40px">Atras</button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="d-sm-flex border-top justify-content-center">
                                            <div class="col-md-7 col-xs-12 col-sm-12">
                                                <br>
                                                <h5 name="txtCategoria" id="txtCategoria">
                                                </h5>
                                                <h5 name="txtOferta" id="txtOferta">
                                                </h5>
                                                <p class=" text-ritgh" name="txtdescripcion_oferta"
                                                    id="txtdescripcion_oferta">
                                                </p>
                                            </div>
                                            <div class="col-md-1 col-xs-12 col-sm-12">
                                                <br>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 ">
                                                <br>
                                                <br>
                                                <strong class="" name="numValorOferta" id="numValorOferta"></strong>
                                                <br>
                                                <br>
                                                <p class="border-top" name="txtfechapubli" id="txtfechapubli"></p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="modal-footer justify-content-center">
                                            <!-- Button trigger modal -->
                                            <button type="button" id="btnVerComentarios" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Ver Comentarios</button>
                                            <button type="button" id="ocultarComentarios" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1" hidden>Ocultar Comentarios</button>
                                            <button type="button"  id="btncalificarOferta" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalcalificacion1">Calificar Oferta</button>
                                        </div>
                                        <div class="row">
                                        <div class="col-12 " id="Vercomentarios" hidde>
                                            <input class="form-control" type="number" name="numIdVerMas" id="numIdVerMas" hidden>
                                                <h5 class=" col-md-12  " id="bodyModalComentarios"></h5>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Modal
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Comentarios de la Oferta</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <input class="form-control" type="number" name="numIdVerMas"
                                                id="numIdVerMas" hidden>
                                        </div>
                                    </div>
                                    <div class=" col-md-12  " id="bodyModalComentarios"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Volver a la
                                        Oferta</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                  
                <br>
                </form>
            </div>
        </div>
		    <!-- Modal -->
    <div class="modal fade" id="modalcalificacion1" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Calificar Oferta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="form-group" id="comentario">
                        <div class="row">
                            <div class="col-12">
                                <input hidden type="number" name="txtIdOfertaCom" id="txtIdOfertaCom">
                                <input hidden type="text" value="<?php
                                    $primernombre= $_SESSION['primer_nombre'];
                                    $otrosnombre= $_SESSION['otros_nombre'];
                                    $primerapell= $_SESSION['primer_apellido'];
                                    $otrossapell= $_SESSION['otros_apellido'];

                                    echo $primernombre,' ',$otrosnombre,' ',$primerapell,' ', $otrossapell; ?>"
                                    name="txtUsuarioComento" id="txtUsuarioComento">

                                <label>Comentario</label>
                                <textarea class="form-control text-break input-lg" type="text" maxlength="500"
                                    style="height: 250px" name="txtComentario" id="txtComentario"></textarea>
                            </div>
                            <div class="col-6">
                                <label for="">Calificación</label>
                                <select class="form-control redondeado" id="selCalificacion" name="selCalificacion">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Regresar</button>
                    <button type="button" id="btnGuardarComentario" name="btnGuardarComentario" class="btn btn-primary"
                        data-bs-dismiss="modal">Gurdar Calificación</button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php include_once "footer.frm.php" ?>
    </div>
    <br>

</body>
<script src="../js/ofertas/buscar.ofertas.js"></script>;

</html>