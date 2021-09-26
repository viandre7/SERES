<?php include_once "head.adm.frm.php" ?>

<title>Municipio </title>
</head>

<body >
    <div class="container border">
         <!-- Nombre formulario -->

        <div class="row  justify-content-center " >
            <form class="form-group" id="departamento">
                <div class="row justify-content-center text-center">
                    <h3 class=" text-center ">MUNICIPIOS</h3>
                </div>
                <br>

                 <!-- Datos para ingresar valores del formulario -->
                 <div class="row justify-content-center text-center">
                    <h5 class=" text-center ">Crear un Municipio</h5>
                </div>
                <div class="row ">
                    <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Pais </label>
                            <select class="form-control redondeado" id="txtPaiss" name="txtPaiss"></select>
                   </div>
                   <div class="col-md-3 col-xs-6 col-sm-6">
                            <label>Departamento </label>
                            <select class="form-control redondeado" id="txtDepartamentos" name="txtDepartamentos"></select>
                            <input class="form-control" type="number" name="inIdDepartamento" id="inIdDepartamento" hidden >
                   </div>
                    <div class="col-md-3 col-xs-6 col-sm-6 ">
                        <label> Nombre Municipio</label>
                        <input class="form-control" type="text" name="txtNombreMun" id="txtNombreMun">
                    </div>
                    <div class="col-md-2 col-xs-6 col-sm-6 ">
                    <label> Codigo DANE </label>
                        <input class="form-control" type="text" name="txtCodigoDane" id="txtCodigoDane">
                    </div>
                   
                </div>
                <br>

                 <!-- botones para realizar operaciones -->

                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-6">
                        <a id="btnRegistrar" class="btn btn-primary" >Registrar <i class="fas fa-pencil-alt"></i></a>
                    </div>
                </div>
                <br>

                 <!-- datos del js -->
                 <div class="row border justify-content-center text-center">
                    <h5 class=" text-center ">Municipios Registrados</h5>
                
                <div class="row my-1 ">
                    <div class="col-md-12 col-xs-12 col-sm-6">
                        <h5 id="datos"></h5>   
                    </div>
                  
                </div>
                <div class="row my-1 col-md-12 col-xs-12 col-sm-6">
                    <h5 id="respuesta"></h5>
                </div>

                </form>
                </div>
            <!-- Modal Modificar -->

            <div class="modal fade" id="modalModificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modificar Municipio</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form class="form-group" id="municipioModificar">
                            <div class="row">
                            <div class="col-12">
                                <input type="number" name="txtIdMunicipio" id="txtIdMunicipio" hidden>
                                <label> Nombre Municipio</label>
                                <input class="form-control" type="text" name="txtMunicipioMod" id="txtMunicipioMod">
                            </div>
                            <div class="col-12">
                                <label> Codigo DANE</label>
                                <input class="form-control" type="text" name="txtCodigoDaneMod" id="txtCodigoDaneMod">
                            </div>
                            <div class="col-12">
                                <label for="">Pais </label>
                                <input class="form-control" type="text" name="txtPaisActual" id="txtPaisActual" readonly>
                                <label for="">Nuevo Pais o Confirmar Pais</label>
                                <select class="form-control redondeado" id="txtNuevoPais" name="txtNuevoPais"></select>
                            </div>
                            <div class="col-12">
                                <label for="">Departamento </label>
                                <input class="form-control" type="text" name="txtDepartamentoAct" id="txtDepartamentoAct" readonly>
                                <label for="">Nuevo Departamento o Confirmar Departamento</label>
                                <select class="form-control redondeado" id="txtNuevoDep" name="txtNuevoDep"></select>
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
                    <form class="form-group" id="municipioEstado">
                    <div class="row">
                                <div class="col-12 border-bottom">
                                    <input type="number" name="txtMunEli" id="txtMunEli" hidden>
                                    <h5>Esta seguro de cambiar el estado al Municipio:</h5>
                                    <h4  class="form-control" id="muniElim" readonly></h4>
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
    <script src="../../js/administrador/municipio.js"></script>
</html>