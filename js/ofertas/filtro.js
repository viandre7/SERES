function verOferta (id, identificacion, nombre, apellido){
    $("#txtIdClieMod").val(id);
    $("#txtIdentificacionClieMod").val(identificacion);
    $("#txtNombreClieMod").val(nombre);
    $("#txtApellidoClieMod").val(apellido);
}


$(document).ready(function(){


    

// $(Document).on('click','#btnBuscarFiltro',function(event){
//     event.preventDefault();
//         $.ajax({
//             url:'../controlador/filtro.read.php',
//             type: 'POST',
//             dataType: 'json',
//             data : $('#filtro').serialize(),
//         }).done(function(json){
//             $("#datos").prop("hidden", true);
//             $("#datosFiltro").prop("hidden", false);
//             var datosFiltro = '';
//             datosFiltro += "<table id='tablaFiltro' class='table dt-responsive  ' style='font-size: 18px' >";
//             datosFiltro += '<thead>';
//                 datosFiltro += '<tr>';
//                     datosFiltro += '<th> </th>' ;
//                     datosFiltro += '<th style="text-align: center">OFERTAS DISPONIBLES</th>';
//                     datosFiltro += '<th></th>';
//                 datosFiltro += '</tr>';
//             datosFiltro +=  '</thead>';
//             datosFiltro += '<tbody>';
//                     $.each(json, function(key, value){
//                         datosFiltro += '<tr>';
//                             datosFiltro += '<td><img class="img-thumbnail img-fluid" style="float: left;" src="../'+value.img_oferta+'"></img></td>'; 
//                             datosFiltro += '<td><div><b>'+value.categoria+'</b></div>';
//                             datosFiltro += '<div><b>'+value.oferta+'</b></div>';
//                             datosFiltro += '<div >'+value.descripcion+'</div>';
//                             datosFiltro += '<div>'+value.municipio+'-'+value.departamento+'</div></td>';
//                             datosFiltro += '<td><a class="btn btn-success"  onclick="eliminar('+value.id_oferta+',\''+value.nombreCliente+'\',\''+value.apellidoCliente+'\')">Ver Más</a></td>';
//                         datosFiltro += '</tr>';
//                     })
//                 datosFiltro += '</tbody>';
//             datosFiltro += '</table>';
//             $('#datosFiltro').html(datosFiltro);
//             $('#tablaFiltro').DataTable({
//                 "destroy" : true,
//                 "autoWidth": false,
//                 "searching": false,
//                 "info":     false,
//                 "ordering": false,
//                 "sZeroRecords": true,
//                 "lengthMenu":	[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
//                 "iDisplayLength":	5,
//                 "language": {"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json",   
                                         
//                             },
//             }); 
//      }).fail(function(xhr, status, error){
//             $('#datos').html(error);        
//     }) 
    
// })

    $(document).on('click','#btnBuscarFiltro',function(event){
        event.preventDefault();
            $.ajax({
                url:'../controlador/filtro.read.php',
                type: 'POST',
                dataType: 'json',
                data : {'categoria_id':id_ubicacion},
            }).done(function(json){
       
                $("#datos").prop("hidden", true);
                $("#datosFiltro").prop("hidden", false);
                var datosFiltro = '';
                datosFiltro += "<table id='tablaFiltro' class='table dt-responsive  ' style='font-size: 18px' >";
                datosFiltro += '<thead>';
                    datosFiltro += '<tr>';
                        datosFiltro += '<th> </th>' ;
                        datosFiltro += '<th style="text-align: center">OFERTAS DISPONIBLES</th>';
                        datosFiltro += '<th></th>';
                    datosFiltro += '</tr>';
                datosFiltro +=  '</thead>';
                datosFiltro += '<tbody>';
                        $.each(json, function(key, value){
                            datosFiltro += '<tr>';
                                datosFiltro += '<td><img class="zoom img-thumbnail img-fluid" style="float: left;" src="../'+value.img_oferta+'"></img></td>'; 
                                datosFiltro += '<td><div><b>'+value.categoria+'</b></div>';
                                datosFiltro += '<div><b>'+value.oferta+'</b></div>';
                                datosFiltro += '<div >'+value.descripcion_oferta+'</div>';
                                datosFiltro += '<div>'+value.municipio+'-'+value.departamento+'</div></td>';
                                datosFiltro += '<td><a class="btn btn-success" >Ver Más</a></td>';
                            datosFiltro += '</tr>';
                        })
                    datosFiltro += '</tbody>';
                datosFiltro += '</table>';
                $('#datosFiltro').html(datosFiltro);
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
                $('#datos').html(error);        
        }) 
        
    })


})

function xclick(id,id_ubicacion) {
    let categoria=id;
    let ubicacion=id_ubicacion;
    let filtro1=3;
    let filtro1=4;


    
}