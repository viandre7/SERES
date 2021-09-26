<?php include_once "head.adm.frm.php" ?>

<title>Unidad de Medida </title>
</head>

<body >
    <div class="container border">
         <!-- Nombre formulario -->

        <div class="row   justify-content-center " >
            <form class="form-group" id="unidadesmedida">
                <div class="row justify-content-center text-center">
                    <h3 class=" text-center ">UNIDADES DE MEDIDAS</h3>
                </div>
                <br>
                                 <!-- Datos para ingresar valores del formulario -->
                 <div class="row justify-content-center text-center">
                    <h5 class=" text-center ">Crear una Unidad de Medida</h5>
                </div>
                <br>
                <div class="row ">
                    <div class="col-md-5 col-xs-12 col-sm-12 ">
                        <label> Nombre Unidad de Medida</label>
                        <input class="form-control" type="text" name="txtunidadMedida" id="txtunidadMedida">
                    </div>
                    <div class="col-md-1 col-xs-12 col-sm-12 ">
                       
                    </div>
                    <div class="col-md-5 col-xs-12 col-sm-12">
                        <label>Nomenclatura De La Unidad de Medida </label>
                        <input class="form-control" type="text" name="txtNomUnidadM" id="txtNomUnidadM">
                    </div>
                </div>
                <br>

                 <!-- botones para realizar operaciones -->
                 <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-6">
                        <a id="btnRegistrar" class="btn btn-primary" >Registrar <i class="fas fa-pencil-alt"></i></a>
                    </div>
                </div>

                 <!-- datos del js -->
            <!-- datos del js -->
            <div class="row justify-content-center text-center">
                    <h5 class=" text-center ">Unidades de Medidas Registradas</h5>
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
                          <h5 class="modal-title" id="exampleModalLabel">Modificar Unidad De Medida</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form class="form-group" id="uniMedModificar">
                            <div class="row">
                            <div class="col-12">
                                <input type="number" name="txtUniMedMod" id="txtUniMedMod" hidden >
                                <label> Nombre Unidad de Medida</label>
                                <input class="form-control" type="text" name="txtUnMedMod" id="txtUnMedMod">
                            </div>
                            <div class="col-12">
                                <label> Nomenclatura Unidad de Medida</label>
                                <input class="form-control" type="text" name="txtNomeMod" id="txtNomeMod">
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btnModificar" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
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
                    <form class="form-group" id="UniMedEstado">
                    <div class="row">
                                <div class="col-12 border-bottom">
                                    <input type="number" name="txtMunEli" id="txtMunEli" hidden >
                                    <h5>Esta seguro de cambiar el estado a la Unidad de Medida:</h5>
                                    <h4  class="form-control" id="txtUniMedElm" readonly></h4>
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
    <script src="../../js/administrador/unidadmedida.js"></script>
</html>