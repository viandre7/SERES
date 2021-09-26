function VerOferta (img_usuario, primer_nombre,otros_nombre,primer_apellido,otros_apellido, municipio,departamento,descripcion_ofertante,categoria,nombre_oferta,descripcion_oferta,valor_oferta,email,celular,telefono,fecha_publicacion,id_oferta,nombre){
    $("#img").attr('src','../imagenes/'+img_usuario);
    $("#txtNombreOfertante").html('<strong>Nombre Ofertante:</strong> '+primer_nombre+' '+ otros_nombre+' '+ primer_apellido+' '+otros_apellido);
    $("#txtUbicacion").html('<strong>Ubicacion: </strong> '+municipio+','+departamento);
    $("#txtDescripcionOfertante").html('<strong>Descipcion Ofertante: '+descripcion_ofertante);
    $("#txtCategoria").html('<strong>Categoria: </strong> '+categoria);
    $("#txtOferta").html('<strong>Oferta: </strong>'+nombre_oferta);   
    $("#txtdescripcion_oferta").html('<strong>Descripción Oferta: </strong>'+descripcion_oferta);
    $("#numValorOferta").html('Valor Oferta $'+valor_oferta+' '+nombre);
    $("#txtemail").attr('href','mailto:'+email+'?subject=Mas información de la Oferta '+nombre_oferta+' &body=Hola me gustaría conocer más sobre la oferta '+nombre_oferta+' '+descripcion_oferta);
    $("#txttelefno").html('Telefono Fijo '+ telefono);
    $("#txtCelular").html('Telefono Celular '+ celular);
    // $("#txtCelular").attr('href'+'tel :+57'+celular);
    $("#txtwhats").attr('href','https://api.whatsapp.com/send?phone='+celular+'&text=Hola me gustaria saber mas sobre la oferta '+descripcion_oferta);
    // $("#txtfechapubli").attr('href','https://api.whatsapp.com/send?phone='+celular+'&text=Hola me gustaria saber mas sobre la oferta '+descripcion_oferta);
    $("#txtfechapubli").html('Publicado desde '+ fecha_publicacion);
    $("#numIdVerMas").val(id_oferta);
    $("#txtIdOfertaCom").val(id_oferta);
    // $("#txtUsuarioComento").val(primer_nombre);
}

$(document).ready(function(){
    buscarCategoria(); 
    buscarUbicacion(); 
    buscar();

    function buscarCategoria(){
            $.ajax({
                url:'../controlador/categoria.read.php',
                type: 'GET',
                dataType: 'json',
                data : $('#filtro').serialize(),
            }).done(function(json){
                   var categorias = '';                
                         categorias += '<option > </option>'; 
                        $.each(json, function(key, value){
                                categorias += '<option value='+value.id_categoria+'>'+value.categoria+'</option>'; 
                        })
                $('#cat').html(categorias);
            }).fail(function(xhr, status, error){
                $('#txtcategorias').html(error);
        })
    }

    function buscarUbicacion(){
        $.ajax({
            url:'../controlador/ubicacion.read.php',
            type: 'GET',
            dataType: 'json',
            data : $('#filtro').serialize(),
        }).done(function(json){
            var ubicacion = '';
                    ubicacion += '<option >  </option>'; 
                    $.each(json, function(key, value){
                        ubicacion += '<option value='+value.id_municipio+'>'+value.municipio+'-'+value.departamento+'</option>'; 
                    })
            $('#txtubicacion').html(ubicacion);
        }).fail(function(xhr, status, error){
            $('#txtubicacion').html(error);
        })
    }

    function buscar (){      
        $.ajax({
            url:'../controlador/oferta.read.php',
            type: 'GET',
            dataType: 'json',
            data : null,
        }).done(function(json){
            // alert(error);
            if(json== 0){
                // alertify.error("Actualmente no hay Ofertas Disponibles");
                $("#datos").prop("hidden", true);
                $("#sindatos").prop("hidden", false);   
            }else{
            var datos = '';
            datos += "<table id='tablaBuscarOferta' class='table dt-responsive ' style='font-size: 18px' >";
                datos += '<thead>';
                    datos += '<tr>';
                        datos += '<th></th>';
                        datos += '<th></th>';
                        datos += '<th></th>';
                    datos += '</tr>';
                    datos += '<tr>';
                        datos += '<th colspan="3">OFERTAS DISPONIBLES</th>';
                    datos += '</tr>';
                datos +=  '</thead>';
                datos += '<tbody>';
                    $.each(json, function(key, value){
                        datos += '<tr>';
                            datos += '<td><img class="zoom img-thumbnail img-fluid img"  style="float: left;" src="../componente/img/oferta/'+value.img_oferta+'"></img></td>'; 
                            datos += '<td><div class="text-wrap" ><strong>Categoria:</strong> '+value.categoria+'</div>';
                            datos += '<div class="text-wrap" ><strong>Oferta:</strong> '+value.nombre_oferta+'</div>';
                            datos += '<div class="text-wrap" ><strong>Descripcion:</strong> '+value.descripcion_oferta+'</div>';
                            datos += '<div><strong>Ubicacion:</strong> '+value.municipio+'-'+value.departamento+'</div></td>';
                            datos += '<td class="" ><a class="btn btn-primary align-content-center" style="width: 100px; height: 40px" onclick="VerOferta(\''+value.img_usuario+'\',\''+value.primer_nombre+'\',\''+value.otros_nombre+'\',\''+value.primer_apellido+'\',\''+value.otros_apellido+'\',\''+value.municipio+'\',\''+value.departamento+'\',\''+value.descripcion_ofertante+'\',\''+value.categoria+'\',\''+value.nombre_oferta+'\',\''+value.descripcion_oferta+'\','+value.valor_oferta+',\''+value.email+'\','+value.celular+'\,'+value.telefono+'\,\''+ value.fecha_publicacion+'\','+value.id_oferta+'\,\''+value.nombre+'\')" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver Mas</a></td>';
                        datos += '</tr>';
                    })
                datos += '</tbody>';
            datos += '</table>';
            $('#datos').html(datos);
            $('#tablaBuscarOferta').DataTable({
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
        }
        }).fail(function(xhr, status, error){
            $('#datos').html(error);
        })
        
    }

    $(document).on('click','#btnBuscarFiltro',function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/filtro.read.php',
                type: 'POST',
                dataType: 'json',
                data : $('#filtro').serialize(),
            }).done(function(json){
                if(json== 0){
                    alertify.error("Actualmente no hay Ofertas Disponibles");
                    $("#datos").prop("hidden", true); 
                    $("#sindatos").prop("hidden", false);
                    // alert("no hay nada")
                    // var datosFiltrob = '';
                    // datosFiltrob = '';
                    // $('#datosFiltrob').html(datosFiltrob);
                }else{
                
                $("#datos").prop("hidden", true);
                $("#sindatos").prop("hidden", true);
                $("#datosFiltrob").prop("hidden", false);
                $("#datosbusqueda").prop("hidden", true);
                var datosFiltrob = '';
                // var json = JSON.parse(datosFiltrob);
                datosFiltrob += "<table id='tablaFiltro' class='table dt-responsive ' style='font-size: 18px' >";
                    datosFiltrob += '<thead>';
                        datosFiltrob += '<tr>';
                            datosFiltrob += '<th></th>';
                            datosFiltrob += '<th></th>';
                            datosFiltrob += '<th></th>';
                        datosFiltrob += '</tr>';
                        datosFiltrob += '<tr>';
                            datosFiltrob += '<th colspan="3">OFERTAS DISPONIBLES</th>';
                        datosFiltrob += '</tr>';
                    datosFiltrob +=  '</thead>';
                datosFiltrob += '<tbody>';
                        $.each(json, function(key, value){
                            datosFiltrob += '<tr>';
                            datosFiltrob += '<td><img class="zoom img-thumbnail img-fluid "  style="float: left;" src="../componente/img/oferta/'+value.img_oferta+'"></img></td>'; 
                                datosFiltrob += '<td><div class="text-wrap" ><strong>Categoria:</strong> '+value.categoria+'</div>';
                                datosFiltrob += '<div class="text-wrap" ><strong>Oferta:</strong> '+value.nombre_oferta+'</div>';
                                datosFiltrob += '<div class="text-wrap" ><strong>Descripcion:</strong> '+value.descripcion_oferta+'</div>';
                                datosFiltrob += '<div><strong>Ubicacion:</strong> '+value.municipio+'-'+value.departamento+'</div></td>';
                                datosFiltrob += '<td class="" ><a class="btn btn-primary align-content-center" style="width: 100px; height: 40px" onclick="VerOferta(\''+value.img_usuario+'\',\''+value.primer_nombre+'\',\''+value.otros_nombre+'\',\''+value.primer_apellido+'\',\''+value.otros_apellido+'\',\''+value.municipio+'\',\''+value.departamento+'\',\''+value.descripcion_ofertante+'\',\''+value.categoria+'\',\''+value.nombre_oferta+'\',\''+value.descripcion_oferta+'\','+value.valor_oferta+',\''+value.email+'\','+value.celular+'\,'+value.telefono+'\,\''+ value.fecha_publicacion+'\','+value.id_oferta+'\,\''+value.nombre+'\')" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver Mas</td>';
                            datosFiltrob += '</tr>';
                        })
                    datosFiltrob += '</tbody>';
                datosFiltrob += '</table>';
                $('#datosFiltrob').html(datosFiltrob);
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
             alert(error);
                $('#datosFiltrob').html(error);        
        }) 
        
    })
    

    $(document).on('click','#btnBuscarOferta',function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/buscar.read.php',
                type: 'POST',
                dataType: 'json',
                data : $('#buscar').serialize(),
            }).done(function(json){
                if(json== 0){
                    alertify.error("Actualmente no hay Ofertas Disponibles");
                    $("#datos").prop("hidden", true);
                    $("#sindatos").prop("hidden", false);
                    $("#datosFiltrob").prop("hidden", true);
                    $("#datosbusqueda").prop("hidden", true);
                    // alert("no hay nada")
                    // var datosFiltrob = '';
                    // datosFiltrob = '';
                    // $('#datosFiltrob').html(datosFiltrob);
                }else{
                    
                    $("#sindatos").prop("hidden", true);
                    $("#datos").prop("hidden", true);
                    $("#datosFiltrob").prop("hidden", true);
                    $("#datosbusqueda").prop("hidden", false);
                    var datosbusqueda = '';
                    datosbusqueda += "<table id='tablaFiltro2' class='table dt-responsive ' style='font-size: 18px' >";
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
                                    datosbusqueda += '<td><img class="zoom img-thumbnail img-fluid" style="float: left;" src="../componente/img/oferta/'+value.img_oferta+'"></img></td>';  
                                    datosbusqueda += '<td><div><b>Categoria: '+value.categoria+'</b></div>';
                                    datosbusqueda += '<div><b>Oferta: '+value.nombre_oferta+'</b></div>';
                                    datosbusqueda += '<div ><strong>Descripción de la Oferta </strong>'+value.descripcion_oferta+'</div>';
                                    datosbusqueda += '<div><strong>Ubicación:</strong> '+value.municipio+'-'+value.departamento+'</div></td>';
                                    datosbusqueda += '<td class="" ><a class="btn btn-primary align-content-center" style="width: 100px; height: 40px" onclick="VerOferta(\''+value.img_usuario+'\',\''+value.primer_nombre+'\',\''+value.otros_nombre+'\',\''+value.primer_apellido+'\',\''+value.otros_apellido+'\',\''+value.municipio+'\',\''+value.departamento+'\',\''+value.descripcion_ofertante+'\',\''+value.categoria+'\',\''+value.nombre_oferta+'\',\''+value.descripcion_oferta+'\','+value.valor_oferta+',\''+value.email+'\','+value.celular+'\,'+value.telefono+'\,\''+ value.fecha_publicacion+'\','+value.id_oferta+'\,\''+value.nombre+'\')" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver Mas</td>';
                                datosbusqueda += '</tr>';
                            })
                        datosbusqueda += '</tbody>';
                    datosbusqueda += '</table>';
                $('#datosbusqueda').html(datosbusqueda);
                $('#tablaFiltro2').DataTable({
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

    $(document).on('click','#btnBuscarOfertaIndex',function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/buscar.read.php',
                type: 'POST',
                dataType: 'json',
                data : $('#buscar').serialize(),
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
                    // alert("no hay nada")
                    // var datosFiltrob = '';
                    // datosFiltrob = '';
                    // $('#datosFiltrob').html(datosFiltrob);
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
                datosbusqueda += "<table id='tablaFiltro' class='table dt-responsive    ' style='font-size: 18px' >";
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
                            datosbusqueda += '<td><img class="zoom img-thumbnail img-fluid" style="float: left;" src="../componente/img/oferta/'+value.img_oferta+'"></img></td>';  
                                datosbusqueda += '<td><div><b>Categoria:'+value.categoria+'</b></div>';
                                datosbusqueda += '<div><b>Oferta: '+value.nombre_oferta+'</b></div>';
                                datosbusqueda += '<div><strong>Descripcion de la oferta:</strong> '+value.descripcion_oferta+'</div>';
                                datosbusqueda += '<div><strong>Ubicación:</strong> '+value.municipio+'-'+value.departamento+'</div></td>';
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

   
    $(document).on('click','#btnVerComentarios',function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/comentario.read.php',
                type: 'POST',
                dataType: 'json',
                data : $('#buscar').serialize(),
            }).done(function(json){
                $("#Vercomentarios").prop("hidden", false);
                $("#ocultarComentarios").prop("hidden", false);
                $("#btnVerComentarios").prop("hidden", true);
                $("#btncalificarOferta").prop("hidden", true);
                $("#bodyModalComentarios").prop("hidden", false);
                    if(json== 0){
                        alertify.error("Actualmente no hay Comentarios Disponibles");
                        $('#bodymodalComentarios').html("Actualmente no hay Comentarios Disponibles");
                        // alert("no hay nada")
                        // var datosFiltrob = '';
                        // datosFiltrob = '';
                        // $('#datosFiltrob').html(datosFiltrob);
                    }else{
                    var misOfertas1 ="";
                    $.each(json, function(key, value){             
                        var misOfertas1 = '';
                        misOfertas1 += "<table id='tablaFiltro' class='table dt-responsive text-center  ' style='font-size: 18px' >";
                            misOfertas1 += '<thead>';
                                misOfertas1 += '<tr>';
                                    misOfertas1 += '<th text-center >Comentario</th>' ;
                                    misOfertas1 += '<th text-center >Calificación</th>';
                                    misOfertas1 += '<th text-center >Usuario</th>';
                                    misOfertas1 += '<th text-center >Fecha Comentario</th>';
                                misOfertas1 += '</tr>';
                            misOfertas1 +=  '</thead>';
                        misOfertas1 += '<tbody>';
                                $.each(json, function(key, value){
                                    misOfertas1 += '<tr>';
                                    misOfertas1 += '<td>'+value.comentario+'</td>'; 
                                    misOfertas1 += '<td>'+value.calificacion+'</td>'; 
                                    misOfertas1 += '<td>'+value.usuario+'</td>';
                                    misOfertas1 += '<td>'+value.fecha_registro+'</td>';
                                    misOfertas1 += '</tr>';
                                })
                                misOfertas1 += '</tbody>';
                                misOfertas1 += '</table>';
                    $('#bodyModalComentarios').html(misOfertas1);
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
                }).fail(function(xhr, status, error){
                        $('#bodyModalComentarios').html(error); 
                })
                }
        
            //aas
        })
    }
    )

    $(document).on('click','#btnGuardarComentario',function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/comentario.create.php',
                type: 'POST',
                dataType: 'json',
                data : $('#comentario').serialize(),
            }).done(function(json){
                alertify.success(json);
                buscarCategoria(); 
                buscarUbicacion(); 
                buscar(); 
                // limpiar();
            }).fail(function(xhr, status, error){
                alert (error);
        })
    })
    
    $(document).on('click','#ocultarComentarios', function(){

        $("#Vercomentarios").prop("hidden", true);
        $("#ocultarComentarios").prop("hidden", true);
        $("#btnVerComentarios").prop("hidden", false);
        $("#btncalificarOferta").prop("hidden", false);
        $("#bodyModalComentarios").prop("hidden", true);
        
    })

})