<?php include_once "head.adm.frm.php" ?>

<title>Categorias </title>
</head>

<body >
    <div class="container border ">
         <!-- Nombre formulario -->

        <div class="row   justify-content-center " >
            <form action="../../controlador/categoria.adm.create.php" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center text-center">
                    <h3 class=" text-center ">CATEGORIAS</h3>
                </div>
                <br>

                 <!-- Datos para ingresar valores del formulario -->
                 <div class="row justify-content-center text-center">
                    <h5 class=" text-center ">Crear una Categoria</h5>
                </div>
                <br>
                <div class="row ">
                    <div class="col-md-5 col-xs-12 col-sm-12 ">
                        <label> Nombre Categoria</label>
                        <input class="form-control" type="text" name="txtNombreCat" id="txtNombreCat">
                    </div>
                    <div class="col-md-1 col-xs-12 col-sm-12 ">
                       
                    </div>
                    <div class="col-md-5 col-xs-12 col-sm-12">
                        <label>Imagen De La Categoria </label>
                        <input class="form-control file" type="file" name="imgCategoria" id="imgCategoria">
                    </div>
                </div>
                <br>

                 <!-- botones para realizar operaciones -->

                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-6">
                        <button type="submit"  class="btn btn-primary">Guardar</button>
                        <!-- <a id="btnRegistrar" class="btn btn-primary" >Registrar <i class="fas fa-pencil-alt"></i></a> -->
                    </div>
                </div>

                 <!-- datos del js -->
                 <div class="row justify-content-center text-center">
                    <h5 class=" text-center ">Categorias Registradas</h5>
                </div>
                <div class="row my-1 ">
                    <div class="col-md-12 col-xs-12 col-sm-6">
                        <h5 id="datos"></h5>   
                    </div>
                  
                </div>
                <div class="row my-1 col-md-12 col-xs-12 col-sm-6">
                    <h5 id="respuesta"></h5>
                </div>
            </form>
            <!-- Modal Modificar -->
                <div class="modal fade" id="modalModificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modificar Categoria</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="../../controlador/categoria.adm.update.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-12">
                                <input type="number" name="txtIdCatMod" id="txtIdCatMod" hidden>
                                <label> Nombre Categoria</label>
                                <input class="form-control" type="text" name="txtCatMod" id="txtCatMod">
                            </div>
                            <div class="col-12">
                                <label for="">Imagen </label>
                                <input class="form-control" type="file" name="imgImagenCatMod" id="imgImagenCatMod">
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
            <!-- Fin Modal Modificar -->

            <!-- Modal eLIMINAR -->
            <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Cambiar Estado</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form class="form-group" id="categoriaEstado">
                        <div class="row">
                                    <div class="col-12 border-bottom">
                                        <input type="number" name="txtIdCatElm" id="txtIdCatElm" hidden >
                                        <h5>Esta seguro de cambiar el estado a la categoria:</h5>
                                        <h4  class="form-control" id="catEliminar" readonly></h4>
                                        <h5>Estado Actual</h5>
                                        <h4 class="form-control" name="estadoEliminar" id="estadoEliminar" readonly></h4>
                                    </div>
                                    <div  class="col-12 border-bottom">
                                        <h5>Seleccione el nuevo estado </h5>
                                        <select class="form-control redondeado" id="selctEstado" name="selctEstado">
                                            <option value="A">Activo</option>
                                            <option value="I">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" id="btnEliminar" class="btn btn-primary" data-bs-dismiss="modal">Modificar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                      </div>
                    </div>
                  </div>
            <!-- Fin Modal Modificar -->
            
        </div>
        <?php include_once "footer.resum.frm.php" ?>
    </div> 
    <br>
 
</body>
    <script src="../../js/administrador/categorias.js"></script>
</html>