function verCategoria (id_categoria){
    $("#numcatego").val(id_categoria);
} 
  
    $(document).ready(function(){
    buscarCategoriaofrt(); 
    buscarCategoria();

    function buscarCategoriaofrt(){
            $.ajax({
                url:'../controlador/categoria.ofrt.read.php',
                type: 'POST',
                dataType: 'json',
                data : null,
            }).done(function(json){
                var categoriaso = '';
                        $.each(json, function(key, value){
                             categoriaso += '<div class="card d-flex align-items-center " style="width: 18rem;">';
                                      categoriaso +='<img src="../componente/img/categorias/'+value.img_categoria+'" class="card-img-top img-thumbnail img-fluid imgCate" title='+value.categoria+'>'	;
                                      categoriaso +='<div class="card-body">';
                                      categoriaso +='<h5 class="card-title" value='+value.id_categoria+'>'+value.categoria+'</h5>';
                                      categoriaso +='<a class="btn btn-primary align-content-center" id="btnVerOfertas" onclick="verCategoria('+value.id_categoria+'\)">Ver '+value.total+' Ofertas</a>';		
                                      categoriaso += '</div>';
                                      categoriaso += '</div>';
                        })
                        categoriaso += '<br';
                $('#categorias').html(categoriaso);
                $('#tablaCLie').DataTable({
                    "destroy" : true,
                    "autoWidth": false,
                    "searching": false,
                    "info":     false,
                    "ordering": false,
                    "lengthMenu":	[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
                    "iDisplayLength":	5,
                    "language": {"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json",                  
                                },
                });
                $('#categoriasofr').html(categoriaso);
            }).fail(function(xhr, status, error){
                $('#categoriasofr').html(error);
        })
    }

     function buscarCategoria(){
            $.ajax({
                url:'../controlador/categoria.read.php',
                type: 'POST',
                dataType: 'json',
                data : null,
            }).done(function(json){
                var categorias = '';
                        $.each(json, function(key, value){
                             categorias += '<div class="card d-flex align-items-center " style="width: 16rem;">';
                                      categorias +='<img src="../componente/img/categorias/'+value.img_categoria+'" class="card-img-top img-thumbnail img-fluid imgCate" title='+value.categoria+'>'	;
                                      categorias +='<div class="card-body">';
                                      categorias +='<h5 class="card-title" value='+value.id_categoria+'>'+value.categoria+'</h5>';	
                                      categorias += '</div>';
                                      categorias += '</div>';
                        })
                        categorias += '<br';
                $('#categorias').html(categorias);
                $('#tablaCLie').DataTable({
                    "destroy" : true,
                    "autoWidth": false,
                    "searching": false,
                    "info":     false,
                    "ordering": false,
                    "lengthMenu":	[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
                    "iDisplayLength":	5,
                    "language": {"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json",                  
                                },
                });
                $('#categorias').html(categorias);
            }).fail(function(xhr, status, error){
                $('#categorias').html(error);
        })
    }
    

    
    $(document).on('click','#btnBuscarOfertaIndex',function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/buscarcte.read.php',
                type: 'POST',
                dataType: 'json',
                data : $('#buscarcteind').serialize(),
            }).done(function(json){
                if(json== 0){
                    alertify.error("Actualmente no hay Ofertas Disponibles");
                    $("#datos").prop("hidden", true); 
                    $("#sindatos").prop("hidden", false)
                    $("#btn").prop("hidden", false)   
                    $("#datos").prop("hidden", true);
                    $("#busqueda").prop("hidden", true);
                    $("#buscarIndex").prop("hidden", true);
                    $("#seres").prop("hidden", true);
                    $("#carouselExampleDark").prop("hidden", true);
                    var datosFiltrob = '';
                    datosFiltrob = '';
                    $('#datosFiltrob').html(datosFiltrob);
                }else{
                
                $("#sindatos").prop("hidden", true);
                $("#datos").prop("hidden", true);
                $("#btn1").prop("hidden", false);
                $("#btn").prop("hidden", false);
                $("#busqueda").prop("hidden", true);
                $("#buscarIndex").prop("hidden", false);
                $("#seres").prop("hidden", true);
                $("#carouselExampleDark").prop("hidden", true);
                var datosbusqueda = '';
                datosbusqueda += "<table id='tablaFiltro' class='table dt-responsive ' style='font-size: 18px' >";
                    datosbusqueda += '<thead>';
                        datosbusqueda += '<tr>';
                            datosbusqueda += '<th></th>';
                            datosbusqueda += '<th></th>';
                            datosbusqueda += '<th></th>';
                        datosbusqueda += '</tr>';
                        datosbusqueda += '<tr>';
                            datosbusqueda += '<th colspan="3">OFERTAS DISPONIBLES</th>';
                        datosbusqueda += '</tr>';
                    datosbusqueda +=  '</thead>';
                datosbusqueda += '<tbody>';
                        $.each(json, function(key, value){
                            datosbusqueda += '<tr>';
                                datosbusqueda += '<td><img class="zoom img img-thumbnail img-fluid" style="float: left;" src="../componente/img/oferta/'+value.img_oferta+'"></img></td>'; 
                                datosbusqueda += '<td><div><b>Categoria:'+value.categoria+'</b></div>';
                                datosbusqueda += '<div><b>Oferta: '+value.nombre_oferta+'</b></div>';
                                datosbusqueda += '<div ><strong>Descripcion de la oferta:</strong>'+value.descripcion_oferta+'</div>';
                                datosbusqueda += '<div><strong>Ubicación: </strong>'+value.municipio+'-'+value.departamento+'</div></td>';
                                datosbusqueda += '<td class="" ><a class="btn btn-primary align-content-center" style="width: 100px; height: 40px" onclick="VerOferta(\''+value.img_usuario+'\',\''+value.primer_nombre+'\',\''+value.otros_nombre+'\',\''+value.primer_apellido+'\',\''+value.otros_apellido+'\',\''+value.municipio+'\',\''+value.departamento+'\',\''+value.descripcion_ofertante+'\',\''+value.categoria+'\',\''+value.nombre_oferta+'\',\''+value.descripcion_oferta+'\','+value.valor_oferta+',\''+value.email+'\','+value.celular+'\,'+value.telefono+'\,\''+ value.fecha_publicacion+'\','+value.id_oferta+'\,\''+value.nombre+'\')" data-bs-toggle="modal" data-bs-target="#exampleModal23">Ver Mas</a></td>';
                                datosbusqueda += '</tr>';
                        })
                    datosbusqueda += '</tbody>';
                datosbusqueda += '</table>';
                $('#buscarIndex').html(datosbusqueda);
                $('#tablaFiltro').DataTable({
                    "destroy" : true,
                    "autoWidth": false,
                    "searching": false,
                    "info":     false,
                    "ordering": false,
                    "sZeroRecords": true,
                    "lengthMenu":	[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
                    "iDisplayLength":	5,
                    "language": {"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json",   
                                             
                                },
                }); 
            }
         }).fail(function(xhr, status, error){
                $('#datos').html(error);        
        }) 
        
    })



    $(document).on('click','#btnVerOfertas',function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/buscarcte.readcte.php',
                type: 'POST',
                dataType: 'json',
                data : $('#buscarcteind').serialize(),
            }).done(function(json){
                if(json== 0){
                    alertify.error("Actualmente no hay Ofertas Disponibles");
                    $("#datos").prop("hidden", true); 
                    $("#sindatos").prop("hidden", false)
                    $("#btn").prop("hidden", false)   
                    $("#datos").prop("hidden", true);
                    $("#busqueda").prop("hidden", true);
                    $("#buscarIndex").prop("hidden", true);
                    $("#seres").prop("hidden", true);
                    $("#carouselExampleDark").prop("hidden", true);
                    var datosFiltrob = '';
                    datosFiltrob = '';
                    $('#datosFiltrob').html(datosFiltrob);
                }else{
                
                $("#sindatos").prop("hidden", true);
                $("#datos").prop("hidden", true);
                $("#btn1").prop("hidden", false);
                $("#btn").prop("hidden", false);
                $("#busqueda").prop("hidden", true);
                $("#buscarIndex").prop("hidden", false);
                $("#seres").prop("hidden", true);
                $("#carouselExampleDark").prop("hidden", true);
                var datosbusqueda = '';
                datosbusqueda += "<table id='tablaFiltro' class='table dt-responsive ' style='font-size: 18px' >";
                    datosbusqueda += '<thead>';
                        datosbusqueda += '<tr>';
                            datosbusqueda += '<th></th>';
                            datosbusqueda += '<th></th>';
                            datosbusqueda += '<th></th>';
                        datosbusqueda += '</tr>';
                        datosbusqueda += '<tr>';
                            datosbusqueda += '<th colspan="3">OFERTAS DISPONIBLES</th>';
                        datosbusqueda += '</tr>';
                    datosbusqueda +=  '</thead>';
                datosbusqueda += '<tbody>';
                        $.each(json, function(key, value){
                            datosbusqueda += '<tr>';
                                datosbusqueda += '<td><img class="zoom img img-thumbnail img-fluid" style="float: left;" src="../componente/img/oferta/'+value.img_oferta+'"></img></td>'; 
                                datosbusqueda += '<td><div><b>Categoria:'+value.categoria+'</b></div>';
                                datosbusqueda += '<div><b>Oferta: '+value.nombre_oferta+'</b></div>';
                                datosbusqueda += '<div ><strong>Descripcion de la oferta:</strong>'+value.descripcion_oferta+'</div>';
                                datosbusqueda += '<div><strong>Ubicación: </strong>'+value.municipio+'-'+value.departamento+'</div></td>';
                                datosbusqueda += '<td class="" ><a class="btn btn-primary align-content-center" style="width: 100px; height: 40px" onclick="VerOferta(\''+value.img_usuario+'\',\''+value.primer_nombre+'\',\''+value.otros_nombre+'\',\''+value.primer_apellido+'\',\''+value.otros_apellido+'\',\''+value.municipio+'\',\''+value.departamento+'\',\''+value.descripcion_ofertante+'\',\''+value.categoria+'\',\''+value.nombre_oferta+'\',\''+value.descripcion_oferta+'\','+value.valor_oferta+',\''+value.email+'\','+value.celular+'\,'+value.telefono+'\,\''+ value.fecha_publicacion+'\','+value.id_oferta+'\,\''+value.nombre+'\')" data-bs-toggle="modal" data-bs-target="#exampleModal23">Ver Mas</a></td>';
                                datosbusqueda += '</tr>';
                        })
                    datosbusqueda += '</tbody>';
                datosbusqueda += '</table>';
                $('#buscarIndex').html(datosbusqueda);
                $('#tablaFiltro').DataTable({
                    "destroy" : true,
                    "autoWidth": false,
                    "searching": false,
                    "info":     false,
                    "ordering": false,
                    "sZeroRecords": true,
                    "lengthMenu":	[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
                    "iDisplayLength":	5,
                    "language": {"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json",   
                                             
                                },
                }); 
            }
         }).fail(function(xhr, status, error){
                $('#datos').html(error);        
        }) 
        
    })

})



