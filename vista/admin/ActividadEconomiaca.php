<?php include_once "head.adm.frm.php" ?>

<title>Actividad Economia</title>
</head>

<body >
    <div class="container border ">
         <!-- Nombre formulario -->

        <div class="row bg-light  justify-content-center " >
            <form action="../../controlador/Economica.create.php" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center text-center">
                    <h3 class=" text-center ">Actividad Economica</h3>
                </div>
                <br>

                 <!-- Datos para ingresar valores del formulario -->
                 <div class="row justify-content-center">
                    <h5 class=" text-center ">Crear una Actividad Economica</h5>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-6 justify-content-center" >
                        <label> Nombre</label>
                        <input    class="form-control" type="text" name="txtNombre" id="txtNombre" >
                    </div>
             
                    <div class="col-6 justify-content-center ">
                        <label>Codigo Dian </label>
                        <input class="form-control" type="text" name="txtCodigo" id="txtCodigo">
                    </div>
                </div>
                <br>

                 <!-- botones para realizar operaciones -->

                <div class="row">
                    <div class="col-md-4">
                        <button type="submit"  class="btn  btn-primary">Guardar</button>
                        <!-- <a id="btnRegistrar" class="btn  btn-primary" >Registrar <i class="fas fa-pencil-alt"></i></a> -->
                    </div>
                </div>

                 <!-- datos del js -->
                 <div class="row justify-content-center text-center">
                    <h5 class=" text-center "> Listado </h5>
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
                        <form action="../../controlador/Economia.update.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-12">
                                <input type="number" name="id" id="id" hidden>
                                <label> Nombre</label>
                                <input class="form-control" type="text" name="txtact" id="txtact">
                            </div>
                            <div class="col-12">
                                <label for="">Codigo </label>
                                <input class="form-control" type="text" name="txtcode" id="txtcode">
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn  btn-primary">Guardar</button>
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
                                        <h5>Esta seguro de cambiar el estado a la Actividad Economica:</h5>
                                        <h4  class="form-control" id="catEliminar" readonly></h4>
                                        <h5>Estado Actual</h5>
                                        <h4 class="form-control" name="estadoEliminar" id="estadoEliminar" readonly></h4>
                                    </div>
                                    <div  class="col-12 border-bottom">
                                        <h5>Seleccione el nuevo estado</h5>
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
    </div> 
    <br>
    <?php include_once "footer.resum.frm.php" ?>
</body>
    <script src="../../js/administrador/economia.js"></script>
</html>