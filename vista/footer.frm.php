
<style>
.hola{
	margin-left: 100px;
	display:none;
}
.card{
	padding: auto;
    background-color: white;
	box-shadow: 0px 10px 10px;
    margin-bottom: 20px;
}
.card-body {
    flex: 1 1 auto;
    padding: 1rem 1rem;
    background-color: white;
}
.color{
	color: #264d9f;

}
@media only screen and (max-width : 425px){
.ocultar{
    display: none;
    }
	.hola{
		display:block;
	}
	
}


</style>

<div class="row ocultar">
	<div>
		<div class="card text-center" id="fondo">
			<div class="card-body">
				<!-- Footer -->
				<footer class="page-footer font-small	">
					<div class="container text-center text-md-left">
						<div class="row">
							<div class="col-md-3">
								<!-- redes sociales -->
								<h5 class="font-weight-bold "> 
									<img src="../componente/img/globales/Logo_SERES.png"style="width: 100px;">
								</h5>
								<!-- Facebook -->
								<a type="button" class="btn-floating btn-fb my-3"><i class="fab fa-facebook-f"  style=" font-Size:40px;"></i></a>
								<!-- Twitter -->
								<a type="button" class="btn-floating btn-tw mx-4 "><i class="fab fa-twitter"  style=" font-Size:40px;"></i></a>
								<!-- Google +-->
								<a type="button" class="btn-floating btn-gplus"><i class="fab fa-instagram" style=" font-Size:40px;"></i></a>
							</div>
							<!-- Fin de redes sociales -->
							<!-- Grid column -->
							<div class="col-md-3">
								<div class="row justify-content-center text-start">
									<!-- Content -->
									<h5 class="font-weight-bold  ">Información</h5>
									<div class="col-12  ">
										<a href="sobrenosotros.frm.php" id="foot" target="_blank" style="text-decoration:none">Acerca de nosotros</a>
									</div>
									<div class="col-12">
										<a href="solicitante.frm.php" id="foot" target="_blank"  style="text-decoration:none">Como funciona</a>
									</div>
									<!-- <div class="col-12">
										<a href="" style="text-decoration:none">Mapa del sitio</a>
									</div> -->
								</div>
							</div>
							<!-- Grid column -->
							<hr class="clearfix w-100 d-md-none">
							<!-- Grid column -->
							<div class="col-md-3">
								<div class="row justify-content-center text-start">
								<!-- Content -->
									<h5 class="font-weight-bold  ">Términos</h5>
									<div class="col-12">
										<a href="politica.prv.frm.php" id="foot" target="_blank" style="text-decoration:none" >Politica de Privaciadad</a>
									</div>
									<div class="col-12  text-nowrap bd-highlight">
										<a href="tyc.frm.php" id="foot" target="_blank" style="text-decoration:none">Términos y condiciones </a>
									</div>
								</div>
							</div>
							<!-- Grid column -->
							<hr class="clearfix w-100 d-md-none">
							<!-- Grid column -->
							<div class="col-md-3">

							
								<div class="row justify-content-center text-start">
										<ul class="list-unstyled mt-1">
										<li>
											<a  href="contactanos.frm.php" ><i class="fas fa-comments mr-3"></i>Contactenos</a>
										</li>
										<li>
											<a><i class="fas fa-home mr-3"></i> Neiva-Huila</a>
										</li>
										<li>
											<a href="mailto:proyectoseres56@gmail.com" style="font-size: 15px;"><i class="fas fa-envelope mr-3"></i> proyectoseres56@gmail.com</a>
										</li>
									</ul>
									
								</div>
								
								<!-- Grid column -->
								<hr class="clearfix w-100 d-md-none">
								
							</div>
							<a href="#top"><i class="fas fa-chevron-up"></i></a>
							<!-- Grid row -->
						</div>
						<!-- Footer Links -->
						<!-- Copyright -->
						<div class="card-footer text-muted" id="fondo">
							Copyright © 2020 | SERES - Todos los derechos reservados
						</div>
						<!-- Copyright -->
						<!-- Footer -->
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
<div class = "container">
	<div class ="justify-content-center aling-center-item">
		<a class="hola btn" id="mostrar" onclick="mostrar()" ><i class="fas fa-chevron-up"></i>Mostrar Mas</a>	
	</div> 
</div>

<script>

	function mostrar(){
		var datos= "";
		datos += '<style> .ocultar{ display: block;} </style>';
		$('#mostrar').html(datos);
		//return datos;
	}

</script>