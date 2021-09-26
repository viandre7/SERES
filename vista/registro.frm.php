<!-- Incluye Menu -->
<?php include_once "head.frm.php" ?>
<!-- Fin Incluye Menu -->

<!--   se colocan los datos  que hay que llenar   -->
<div class="container border">
    <div class="row">
        <form class="form-group" id="cuenta">
            <div class="card p-2 m-2">
                <h5 class="form-label nav justify-content-center">Completa la Siguiente Informacion para crear tu cuenta
                </h5>
                <!-- <label for="formFile" class="form-label">Ingrese su Email</label> -->
                <br>
                <label for="formFile" class="form-label">Datos Personales</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="far fa-id-card"></i></span>
                            <select class="form-select " aria-label=".form-select-lg example" id="txtdocumento"
                                name="txtdocumento">
                                <option selected>Seleccione una opcion...</option>

                            </select>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="far fa-id-card"></i></span>
                            <input type="number" class="form-control" title="Digite solo numeros" placeholder="Numero de documento" id="txtcedula"
                                name="txtcedula" aria-label="E" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" pattern="[0-9]{10}" aria-describedby="basic-addon1" min=1 >
                        </div>
                    </div>
                </div>
                <!-- <label for="formFile" class="form-label">Ingrese su Nombre</label> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Primer nombre" id="txtnombre"
                                name="txtnombre" aria-label="E" aria-describedby="basic-addon1"
                                onkeypress="return restringir(event)">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Otros nombres" id="txtotros"
                                name="txtotros" aria-label="E" aria-describedby="basic-addon1"
                                onkeypress="return restringir(event)">
                        </div>
                    </div>
                    <!-- <label for="formFile" class="form-label">Ingrese su Apellido</label> -->

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Primer apellido" id="txtprimerapellido"
                                name="txtprimerapellido" aria-label="E" aria-describedby="basic-addon1"
                                onkeypress="return restringir(event)">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Otros apellidos" id="txtotroapellidos"
                                name="txtotroapellidos" aria-label="E" aria-describedby="basic-addon1"
                                onkeypress="return restringir(event)">
                        </div>
                    </div>
                    <!-- <label for="formFile" class="form-label">Ingrese su Apellido</label> -->

                </div>

                <div class="row ">

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label m-1">Fecha Nacimiento</label>
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                            <input size="16" type="date" class="form-control" placeholder="hola" id="calendario"
                                id="txtcalendario" name="txtcalendario" onkeydown="return false"  max= "<?php echo date("Y-m-d",strtotime(date("Y-m-d")."- 15 year"));?>" min="1900-01-01">
                        </div>

                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label m-1">Fecha Expedición</label>
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="far fa-calendar-times"></i></span>
                            <input size="16" type="date" class="form-control" id="expedicion" id="txtexpedicion"
                                name="txtexpedicion" onkeydown="return false" max= "<?php echo date("Y-m-d",strtotime(date("Y-m-d")."- 1 day"));?>">

                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label m-1"> Genero</label>
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fas fa-transgender-alt"></i></span>
                            <select class="form-select " aria-label=".form-select-lg example" id="txtgenero"
                                name="txtgenero">
                                <option selected>Seleccione un genero...</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                                <option value="O">Otros</option>
                            </select>
                        </div>
                    </div>
                </div>

                <label for="formFile" class="form-label">Datos de Ubicación</label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe-asia"></i></span>
                            <select class="form-select " aria-label=".form-select-lg example" id="txtpais"
                                name="txtpais">
                                <option selected>Seleccione el pais...</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fas fa-map-marker-alt"></i></span>
                            <select class="form-select " aria-label=".form-select-lg example" id="txtdepartamento"
                                name="txtdepartamento">
                                <option selected>Seleccione el departamento...</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker"></i></span>
                            <select class="form-select " aria-label=".form-select-lg example" id="txtmunicipio"
                                name="txtmunicipio">
                                <option selected>Seleccione el municipio...</option>
                            </select>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-signs"></i></span>
                            <input type="text" class="form-control" placeholder=" Ingrese la Direccion"
                                id="txtdireccion" name="txtdireccion" aria-label="E" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Ingrese el  barrio" id="txtbarrio"
                                name="txtbarrio" aria-label="E" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <!-- <label for="formFile" class="form-label">Ingrese su Apellido</label> -->

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
                            <input type="tel" class="form-control"  maxlength="8" placeholder=" Ingrese el telefono"
                                id="txttelefono" name="txttelefono" aria-label="E" aria-describedby="basic-addon1" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" pattern="[0-9]{10}" >
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
                            <input type="tel" class="form-control" maxlength="10" placeholder="Ingrese el  celular"
                                id="txtcelular" name="txtcelular" aria-label="E" aria-describedby="basic-addon1" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" pattern="[0-9]{10}" >
                        </div>
                    </div>
                    <!-- <label for="formFile" class="form-label">Ingrese su Apellido</label> -->

                </div>
                <label for="formFile" class="form-label">Datos Para Creación de Usuario</label>
                <div class="col-md-12">
                    <div class="input-group mb-3 m-1 p-1">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                        <input type="email" class="form-control" title="Introduzca una direccion de corrreo valido" placeholder="Email" id="txtemail" name="txtemail"
                            aria-label="E" aria-describedby="basic-addon1">
                    </div>
                </div>
               
                <div class="col-md-12">
                
                    <!-- <label for="formFile" class="form-label">Ingrese su Contraseña</label> -->
                    <div class="input-group mb-3 p-1">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        <input type="password"  autocomplete="off" class="form-control" placeholder="Contraseña" id="txtPassword"
                            aria-label="E" name="txtPassword"  pattern="[A-Z]{1}[0-9]{2}" maxlength="50" aria-describedby="basic-addon1">
                        <!-- <button class="btn btn-outline-secondary" onclick="mostrarPassword()" type="button" id="inputGroupFileAddon04"><i class="fa fa-eye-slash icon"></i></button> -->
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()">
                            <span class="fa fa-eye-slash icons"></span> </button>
                        <!-- <span class="input-group-text" id="basic-addon1"><i class="fas fa-eye-slash"></i></span> -->
                    </div>
                </div>

                <div class = "row">
                <label for="formFile" class="form-label">Datos Para Recuperación de Cuenta</label>
                    <div class="col-md-12">
                            <div class="input-group mb-1 p-1">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-question"></i></span>
                              <select class = "form-select" name="cuestion" id="cuestion">
                                    <option class = "form-select">  Seleciona pregunta para recuperar contraseña </option>
                                    <option value="1" id = "1" >Color favorito?</option>
                                    <option value="2" id = "2" >Nombre de mi primera mascota ?</option>
                                    <option value="3" id = "3" >Mi apodo ?</option>
                              </select>
                            </div>
                    </div>  
                    <p > 
                    <input type="text" class = "form-control" placeholder = "escribe tu respuesta" id = "recupera" name = "recupera"> 
                    <p>
                </div>

                <div class="row m-1 p-1">

                    <div class="form-check m-2 p-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" onChange="comprobar(this);" required> Si,
                            <a _ngcontent-eom-c1="" href="tyc.frm.php" target="_blank"> Acepto los terminos y
                                condiciones de SERES.</a>
                        </label>
                    </div>

                    <button type="button" class="btn btn-primary" id="btncrear" disabled>Crear cuenta</button>
        </form>
    </div>
</div>
</div>

<?php include_once "footer.frm.php" ?>
</div>

</body>

<script src="../js/perfil/perfil.js"></script>
<script src="../js/inicio/valida.js"></script>
</html>

<!-- tatiana -->