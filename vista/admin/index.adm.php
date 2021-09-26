<?php include_once "head.adm.frm.php" ?>

<title>Inicio</title>
</head>

<body >
    <div class="container border "> 
        <div class="row" >
            <h1 class="text-center">Pagina Principal Administrador</h1>
        </div>
        <br>
        <br>
        <div class="row">
        <div class="col-sm-5 ">
            <div class="card border border-1 bordecuadro  ">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <a><i class="fas fa-list-ul fa-4x"></i></a>
                    </div>
                    <div class="col-8">
                        <h3 class="card-title">Total de Ofertas </h3>
                        <p class="card-text" id="totalOfertas"></p>
                        <a href="ofertas.adm.frm.php" class="btn btn-primary">Ver Mas<i class="far fa-eye"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <br>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-5">
            <div class="card  border border-1 bordecuadro ">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <a><i class="fas fa-user-check fa-4x"></i></a> 
                    </div>
                    <div class="col-8">
                        <h3 class="card-title">Total de Ofertantes </h3>
                        <p class="card-text" id="totalOfertantes"></p>
                        <a href="ofertante.adm.frm.php" class="btn btn-primary">Ver Mas<i class="far fa-eye"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-5">
                <div class="card  border border-1 bordecuadro ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <a><i class="fas fa-forward fa-4x"></i></a>
                        </div>
                        <div class="col-8">
                            <h3 class="card-title">Total de Categorias  </h3>
                            <p class="card-text" id="totalCategorias"></p>
                            <a href="categoria.adm.frm.php" class="btn btn-primary">Ver Mas<i class="far fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-5">
                <div class="card  border border-1 bordecuadro ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <a><i class="fas fa-fast-forward fa-4x"></i></a>
                        </div>
                        <div class="col-8">
                            <h3 class="card-title">Total Subcategorias</h3>
                            <p class="card-text" id="totalSubCategorias"></p>
                            <a href="subcategoria.adm.frm.php" class="btn btn-primary">Ver Mas<i class="far fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-5 ">
                    <div class="card  border border-1 bordecuadro ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <a><i class="far fa-comment-alt fa-4x"></i></a>
                            </div>
                            <div class="col-8">
                                <h3 class="card-title">Total de Comentarios  </h3>
                                <p class="card-text" id="totalComentarios"></p> 
                                <a href="comentarios.adm.frm.php" class="btn btn-primary">Ver Mas<i class="far fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-1">
                </div>
                <!-- <div class="col-sm-5">
                    <div class="card  border border-1 bordecuadro ">
                    <div class="card-body">
                        <h3 class="card-title">Total de Comentarios <a><i class="far fa-envelope"></i></a> </h3>
                        <p class="card-text" id="totalComentarios"></p> 
                        <div  class="text-center">
                            <a href="comentarios.adm.frm.php" class="btnbtn-primary">Ver Mas<i class="far fa-eye"></i></a>
                        </div>
                    </div>
                    </div>
                </div> -->
            </div>
    <br>
    <?php include_once "footer.resum.frm.php" ?>
    </div>
    <br>

</body>
<script src="../../js/administrador/index.adm.js"></script>
</html>