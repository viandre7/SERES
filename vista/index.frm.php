<!-- Incluye Menu -->
<style>
	.form-control {
		position: relative;
		flex: 1 1 auto;
		width: 1%;
		min-width: 0;
		border-radius: 50px !important;
	}

	.btn {
		z-index: 2;
		border-radius: 39px !important;
		/* margin-right: 43px; */
		position: initial;
	}

	.carousel-inner img {
		width: 70%;
		max-height: 500px !important;
	}

	.carousel-inner {
		height: 500px !important;
	}


	.borde {
		padding: auto;
		box-shadow: 0px 10px 10px cadetblue;
		margin-bottom: 20px;
	}

	.img-fluid {
		padding: auto;
		box-shadow: 0px 10px 10px;
		margin-bottom: 20px;
		border-radius: 10px;

	}
.img{
	width: 230px;
	height: 130px;	

}
	.card {
		flex-direction: row-reverse !important;
	}

	.card-body {
		background-color: transparent !important;
	}

	.justify-content-between {
		margin-right: 20px;
		margin-left: 20px;
	}

	.zoom {
  transition: transform .2s; /* Animation */
  width: 300px;
  height: 300px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.7); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

</style>

<?php include_once "head.frm.php" ?>
<!-- Fin Incluye Menu -->
<title>SERES</title>
</head>

<body>
	<div class="container border">
		<br>
		<div class=row>
			<!-- /// Inicio Banner /// -->
			<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
						aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
						aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
						aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="100">
						<img src="../componente/img/plantilla.inicio/background.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<img src="../componente/img/plantilla.inicio/sapling-154734_1280.png" class="d-block w-100"
							alt="...">
					</div>
					<div class="carousel-item">
						<img src="../componente/img/plantilla.inicio/businessman-2753324_1280.png" class="d-block w-100"
							alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
					data-bs-slide="prev" style="background:transparent !important; border:none !important; color:blue;">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Anterior</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
					data-bs-slide="next" style="background:transparent !important; border:none !important; color:blue;">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Proximo</span>
				</button>
			</div>
			<br>
			<!-- /// Fin Banner /// -->
			<!-- /// Inicio Barra Buscar/// -->
			<div class="container col-md-8 col-xs-12 col-sm-12" style="border:none;">
				<form action="" class="form-group" id="buscar">
					<div class="">
						<br>
						<div class="input-group  align-items-center col-md-12 col-xs-12 col-sm-12 mb-3 border-bottom">
							<br>
							<input type="text" class="form-control" name="txtBuscarOferta" id="txtBuscarOferta"
								placeholder="¿Que estas buscando?" aria-label="¿Que estas buscando?"
								aria-describedby="basic-addon2">
							<a class="btn btn-outline-secondary " id="btnBuscarOfertaIndex" type="button">Buscar</a>
							<a class="btn btn-primary " id="btn" href="index.frm.php" type="button" hidden>Volver al
								Inicio</a>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class=" col-md-12 col-xs-12 col-sm-12  text-center" id="buscarIndex" hidden>
						</div>
					</div>
					<h5 class=" col-md-12 col-xs-12 col-sm-12 border-bottom justify-content-center" name="datos"
						id="sindatos" hidden></h5>
					<a class="btn btn-primary col-md-12 col-xs-12 col-sm-12 border-bottom justify-content-center "
						id="btn1" href="index.frm.php" type="button" hidden>Volver al Inicio</a>
					<br>
					<br>
					<!-- Modal -->
					<div class="modal fade" id="exampleModal23" tabindex="-1" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel"> Descripción de la Oferta</h5>
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
												<h4 name="txtCategoria" id="txtCategoria">
												</h4>
												<h4 name="txtOferta" id="txtOferta">
												</h4>
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
									</div>
								</div>
								<div class="modal-footer justify-content-center">
									<!-- Button trigger modal -->
									<button type="button" id="btnVerComentarios" class="btn btn-primary"
										data-bs-toggle="modal" data-bs-target="#exampleModal1">Ver Comentarios</button>
									<button type="button" id="ocultarComentarios" class="btn btn-primary"
										data-bs-toggle="modal" data-bs-target="#exampleModal1" hidden>Ocultar
										Comentarios</button>
									<button type="button" id="btncalificarOferta" class="btn btn-primary"
										data-bs-toggle="modal" data-bs-target="#modalcalificacion">Calificar
										Oferta</button>
								</div>
								<div class="row">
									<div class="col-12 " id="Vercomentarios" hidde>
										<input class="form-control" type="number" name="numIdVerMas" id="numIdVerMas"
											hidden>
										<h5 class=" col-md-12  " id="bodyModalComentarios"></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- /// Fin Barra Buscar /// -->
			<!-- // Inicio Categorias ///-->

			<div class="row border justify-content-around align-items-center" style="border:none;" id="busqueda">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<h3 class="text-center"><strong>Encuentra Diferentes Servicios y Profesionales</strong></h3>
					<br>
					<h4 class="text-center"><strong>Nuestas Categorias Disponibles</strong></h4>
					<div class="row d-flex justify-content-between" id="categorias"></div>
					<br>
				</div>
				<h4 class="text-center"><strong>Ofertas Disponibles Por Categorias</strong></h4>
				<form id="buscarcteind" action="" class="form-group">
					<div class="row d-flex justify-content-between" id="categoriasofr"></div>
					<input class="form-control" type="number" name="numcatego" id="numcatego" hidden>
				</form>
			</div>


			<br>
			<br>
			<!-- // Fin Categorias ///-->
			<!-- /// Inicio caja de uso /// -->
			<br>
			
			<br>
			<br>
			<div class="row borde justify-content-center align-items-center border " id="seres">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<br>
					<h3 class="text-center">SERES es fácil y rápido de usar</h3>
				</div>
				<div class=" col-md-3 col-xs-3 col-sm-3">
					<div class="bg-transparent p-2 text-center " style="max-width: 100%; height: auto;">
						<img class="img-fluid " style="width:130px"
							src="../componente/img/plantilla.inicio/Publicar.png" alt="Responsive image">
						<div class="card-body">
							<h5 class="card-title text-center ">Publica tu oferta</h5>
							<p class="card-text text-center ">Habla sobre tu talento y las ventajas de contratarte</p>
						</div>
					</div>
				</div>
				<div class=" col-md-3 col-xs-3 col-sm-3">
					<div class="bg-transparent p-2 text-center" style="max-width: 100%; height: auto;">
						<img class="img-fluid " style="width:130px" src="../componente/img/plantilla.inicio/Buscar.png"
							alt="Responsive image">
						<div class="card-body">
							<h5 class="card-title text-center">Busca el servicio</h5>
							<p class="card-text text-center">Que necesites, el que se acomode a tus necesidades.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-xs-3 col-sm-3">
					<div class="bg-transparent p-2 text-center" style="max-width: 100%; height: auto;">
						<img class="img-fluid " style="width:130px"
							src="../componente/img/plantilla.inicio/Seleccionar.png" alt="Responsive image">
						<div class="card-body">
							<h5 class="card-title text-center">Elige</h5>
							<p class="card-text text-center">Selecciona al profesional que consideres se acomode a tus
								necesidades</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /// Inicio caja de uso /// -->
			<!-- Modal -->
			<div class="modal fade" id="modalcalificacion" tabindex="-1" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Calificar Oferta</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<p>Recuerda que para poder calificar debe estar registrado en nuestra plataforma</p>
							<p>Le invitamos a que inicie sesión o se registre</p>
						</div>
						<div class="modal-footer justify-content-center">
							<a type="button" href="login.php" class="btn btn-primary">Iniciar Sesion</a>
							<a type="button" href="registro.frm.php" class="btn btn-primary">Registrarse</a>
							<!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Regresar</button> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include_once "footer.frm.php" ?>
	</div>

</body>
<script src="../js/ofertas/categorias.js"></script>
<script src="../js/ofertas/buscar.ofertas.js"></script>

</html>