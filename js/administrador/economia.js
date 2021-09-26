function modificar (id_actividad_economica, actividad_economica, codigo_dian){
    $("#id").val(id_actividad_economica);
    $("#txtact").val(actividad_economica);
    $("#txtcode").val(codigo_dian);

}

function limpiar() {
    $("#txtNombreCat").val("");
    $("#imgCategoria").val("");
}

function eliminar(id_actividad_economica, actividad_economica, estado){
    $("#txtIdCatElm").val(id_actividad_economica);
    $("#catEliminar").html(actividad_economica);
    if(estado=="A"){
        $("#estadoEliminar").html('Activo');
    }else{
        $("#estadoEliminar").html('Inactivo');
    }
    }
   
    
$(document).ready(function(){
    buscar(); 


    /// BUSCAR ///
    function buscar (){
        $.ajax({
            url:'../../controlador/Economia.read.php',
            type: 'POST',
            dataType: 'json',
            data : null,
        }).done(function(json){
            var datos = '';
            datos += "<table id='tableCat' class='table table-striped  compact table-hover row-border border-dark table-bordered dt-responsive nowrap'  style='font-size: 18px ' >";
                datos += '<thead>';
                    datos += '<tr>';
                        datos += '<th class="text-center border border-primary align-middle">Estado</th>';
                        datos += '<th class="text-center border border-primary align-middle">Actividad Economica</th>';
                        datos += '<th class="text-center border border-primary align-middle">Codigo Dane</th>';
                        datos += '<th class="text-center border border-primary align-middle">Modificar</th>';
                        datos += '<th class="text-center border border-primary align-middle">Cambiar Estado</th>';
                    datos += '</tr>';
                datos +=  '</thead>';
                datos += '<tbody>';
                    $.each(json, function(key, value){
                        datos += '<tr>';
                            if(value.estado=="A"){
                                datos += '<td class="border border-primary activo text-wrap">Activo</td>'; 
                                datos += '<td class="border border-primary activo text-wrap">'+value.actividad_economica+'</td>'; 
                                datos += '<td class="border border-primary activo text-wrap">'+value.codigo_dian+'</td>'; 
                                datos += '<td class="border border-primary activo text-center align-middle" ><a class="btn  btn-primary" onclick="modificar('+value.id_actividad_economica+',\''+value.actividad_economica+'\',\''+value.codigo_dian+'\',\''+value.estado+'\')"  data-bs-toggle="modal"  data-bs-target="#modalModificar"><i class="fas fa-edit"></i></a></td>';
                                datos += '<td class="border border-primary activo text-center align-middle" ><a class="btn  btn-secondary" onclick="eliminar('+value.id_actividad_economica+',\''+value.actividad_economica+'\',\''+value.estado+'\')" data-bs-toggle="modal"  data-bs-target="#modalEliminar"><i class="fas fa-exchange-alt"></i></a></td>';
                        
                            }else{
                                datos += '<td class="border border-primary  inactivo text-wrap">Inactivo</td>';
                                datos += '<td class="border border-primary  inactivo text-wrap">'+value.actividad_economica+'</td>'; 
                                datos += '<td class="border border-primary  inactivo text-wrap">'+value.codigo_dian+'</td>'; 
                                datos += '<td class="border border-primary  activo text-center align-middle" ><a class="btn  btn-primary" onclick="modificar('+value.id_actividad_economica+',\''+value.actividad_economica+'\',\''+value.codigo_dian+'\')"  data-bs-toggle="modal"  data-bs-target="#modalModificar"><i class="fas fa-edit"></i></a></td>';
                                datos += '<td class="border border-primary  activo text-center align-middle" ><a class="btn  btn-secondary onclick="eliminar('+value.id_actividad_economica+',\''+value.actividad_economica+'\',\''+value.estado+'\')" data-bs-toggle="modal"  data-bs-target="#modalEliminar"><i class="fas fa-exchange-alt"></i></a></td>';
                        
                        
                            }
                          datos += '</tr>';
                    })
                datos += '</tbody>';
            datos += '</table>';
            $('#datos').html(datos);
            $('#tableCat').DataTable({  
                "lengthChange": false,
                "pageLength": 10,
                "paging": true,
                "ordering": true,
                "scrollX": true,
                "info": true,
                "order": [[1, 'asc']],   
                "destroy" : true,
                "autoWidth": false,
                "language": {"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json",
                            "buttons":{
                                copyTitle: 'Registros Copiados',
                                copySuccess:{
                                    _:'%d Registros Copiados',
                                    1:'1 Registro Copiado',
                                }
                            },
                            searchBuilder: {
                                add: 'Agregar',
                                data: 'Filtro',
                                clearAll: 'Limpiar',
                                title:{  0: 'Selecione Filtro',
                                _: 'Filtro(s) Seleccionado(s) (%d)'},
                                condition: 'Condición',
                                value: 'Valor',
                                deleteTitle: 'Suprimir',
                                leftTitle: 'Izquierda',
                                rightTitle: 'Derecha',
                                logicOr: 'O',
                                logicAnd: 'Y',
                                button: 'FILTRAR <i class="fas fa-filter"></i>',
                                conditions :{
                                    date: {
                                        after: 'Despues',
                                        before: 'Antes',
                                        between: 'Entre',
                                        empty: 'Vacío',
                                        equals: 'Igual a',
                                        not: 'Diferente',
                                        notBetween: 'No entre',
                                        notEmpty: 'No vacío'
                                    },
                                    moment: {
                                        before: 'Antes',
                                        after: 'Despues',
                                        equals: 'Igual a',
                                        not: 'Diferente',
                                        between: 'Entre',
                                        notBetween: 'No entre',
                                        empty: 'Vacío',
                                        notEmpty: 'No vacío'
                                    },
                                    number: {
                                        equals: 'Igual a',
                                        not: 'Diferente de',
                                        gt: 'Mayor que',
                                        gte: 'Mayor o igual que',
                                        lt: 'Menor que',
                                        lte: 'Menor o igual a',
                                        between: 'Entre',
                                        notBetween: 'No entre',
                                        empty: 'Vacío',
                                        notEmpty: 'No vacío'
                                    },
                                    string: {
                                        contains: 'Contiene',
                                        empty: 'Vacío',
                                        notEmpty: 'No vacío',
                                        equals: 'Es igual a',
                                        not: 'Diferente de',
                                        endsWith: 'Termina con',
                                        startsWith: 'Empieza por'
                                    },
                                }
                            },
                            },
                dom:  'Bfrtip',
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        download: 'open',
                        title: 'SERES - Actividades  Economicas',
                        titleAttr: 'PDF',
                        className: ' btn-primary',
                        messageTop: 'Actividades  Economicas',
                        messageTop: 'PDF con la información de las Actividades  Economicas.',
                        footer: true,
                        autoFiltre : true ,
                        text : '<i class="far fa-file-pdf"></i>',
                        exportOptions : {
                            stripHtml: false, /* Aquí indicamos que no se eliminen las imágenes */
                            columns: [0,1]
                        },
                        customize: function ( doc ) {
                            doc.content.splice( 1, 0, {
                                margin: [ 0, 0, 0, 12 ],
                                alignment: 'center',
                                image: 'data:image/png;base64,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'
                              } );
                        }
                    },
                    {
                        extend: 'print',
                        autoFiltre : true , 
                        footer: true,
                        className: ' btn-primary',
                        text : '<i class="fas fa-print"></i>',
                        title: 'Actividades  Economicas',
                        messageTop: 'Impresión con la información de las Actividades  Economicas.',
                        titleAttr: 'IMPRIMIR',
                        exportOptions : {
                            stripHtml: false, /* Aquí indicamos que no se eliminen las imágenes */
                            columns: [0,1,2]
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        footer: true,
                        text : '<i class="fas fa-file-excel"></i>',
                        autoFiltre : true ,
                        title: 'Actividades  Economicas',
                        titleAttr: 'EXCEL',
                        className:'btn-primary',
                        exportOptions : {
                            stripHtml: true, /* Aquí indicamos que no se eliminen las imágenes */
                            columns: [0,1]
                        }
                    },
                    {
                        extend: 'copyHtml5',
                        className: 'btn-primary',
                        text : '<i class="far fa-copy"></i>',
                        autoFiltre : true ,
                        footer: true,
                        titleAttr: 'COPIAR',
                        exportOptions : {
                            columns: [0,1]
                        }
                    },
                    
                    'searchBuilder',                       
                ]
            });
        }).fail(function(xhr, status, error){
            $('#datos').html(error);
    })
}
   
    /// ELIMINAR ///
    $(document).on('click','#btnEliminar',function(event){
        event.preventDefault();
            $.ajax({
                url:'../../controlador/Economia.delete.php',
                type: 'POST',
                dataType: 'json',
                data : $('#categoriaEstado').serialize(),
            }).done(function(json){
                buscar(); 
                alertify.success(json);
                buscar();
            }).fail(function(xhr, status, error){
                alertify.error (error);
        })

    })

})