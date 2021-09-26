<form id="nuevaContrasena" method = "POST">
        <div class="form-group" name= "control">
        <div class="modal fade" id="modalV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Modaliniciar">Escribe la Nueva contraseña</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="location.reload()" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="contrasena" id="contrasena">
                        <!--   se colocan los datos  que hay que llenar   -->
                        <label for="formFile" class="form-label">Ingrese Contraseña</label>
                        <div class="input-group mb-3 p-1">
                        <input type="password"  autocomplete="off" class="form-control" placeholder="Nueva Contraseña" id="pass1"
                            aria-label="E" name="pass1"  pattern="[A-Z]{1}[0-9]{2}" maxlength="50" aria-describedby="basic-addon1">
                        <!-- <button class="btn btn-outline-secondary" onclick="mostrarPassword()" type="button" id="inputGroupFileAddon04"><i class="fa fa-eye-slash icon"></i></button> -->
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword11()">
                            <span class="fa fa-eye-slash icons"></span> </button>
                        <!-- <span class="input-group-text" id="basic-addon1"><i class="fas fa-eye-slash"></i></span> -->
                    </div>

                        <label for="formFile" class="form-label">Confirme Contraseña</label>
                        <div class="input-group mb-3 p-1">
                        <input type="password"  autocomplete="off" class="form-control" placeholder="Confirme Nueva Contraseña" id="pass2" name="pass2"
                            aria-label="E"  pattern="[A-Z]{1}[0-9]{2}" maxlength="50" aria-describedby="basic-addon1">
                        <!-- <button class="btn btn-outline-secondary" onclick="mostrarPassword()" type="button" id="inputGroupFileAddon04"><i class="fa fa-eye-slash icon"></i></button> -->
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword12()">
                            <span class="fa fa-eye-slash icons"></span> </button>
                        <!-- <span class="input-group-text" id="basic-addon1"><i class="fas fa-eye-slash"></i></span> -->
                    </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary  btn-xl m-2 p-2" type="button" id="Newpass">Guardar
                                Cambios</button>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    <script src="../js/login/newpass.js"></script>
    <script src="../js/inicio/valida.js"></script>

</form>


