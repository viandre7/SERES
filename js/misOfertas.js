// function modificar (id_oferta, id_categoria,id_subcategoria,descripcion_oferta,valor_oferta,id_unidad_medida){ 
    function modificar (id_oferta, id_categoria,id_subcategoria,valor_oferta,id_unidad_medida,nombre_oferta,descripcion_oferta,img_oferta){ 

        $("#numIdOferta").val(id_oferta);    
        $("#txtIdCategoria").val(id_categoria);
        $("#txtIdSubCategoria").val(id_subcategoria);
        // $("#txtIdDescripcion").val(descripcion_oferta);
        $("#txtIdPrecioOfeMod").val(valor_oferta);
        $("#txtUniMedi").val(id_unidad_medida);  
        $("#txtIdNombreOfertaMod").val(nombre_oferta);  
        $("#txtIdDescripcion").val(descripcion_oferta);
        $("#imgAct").val(img_oferta);  
         
    }
    
    function eliminar(id_oferta){
        $("#txtIdOferElm").val(id_oferta);
    }
    
    function VerMasId(id_oferta){
        $("#numIdVerMas").val(id_oferta);
    }
    
    function limpiar() {
        $("#idComentario").val("");
    }
    
    $(document).ready(function(){
    
        /// BUSCAR ///
        buscar(); 
        function buscar(){        
            $.ajax({
                url:'../controlador/misOfertas.read.php',
                type: 'POST',
                dataType: 'json',
                data : null,
            }).done(function(json){
                
                var misOfertas ="";
                i=1;
                $.each(json, function(key, value){                    
                    misOfertas += '<div class=" border-top d-flex align-items-start mb-3">';
                    misOfertas+= '<div class="row ">';
                        misOfertas+= '<div class="d-flex col-md-9 col-xs-12 col-sm-12 ">';
                            misOfertas+= '<h1></h1>';
                            misOfertas+=  '<h3 id="numOferta"><strong id="strNumOferta">Oferta:'+i+'</strong> </h3>';
                            misOfertas+=  '<img class="zoom img-thumbnail img-fluid img" style="float: left;" src="../componente/img/oferta/'+value.img_oferta+'"></img>';
                            misOfertas+= '<br>';
                            misOfertas+=  '<h5 id="hCategoria"><strong>Categoria:</strong>'+value.categoria+'</h5>';
                            misOfertas+=  '<h5 id="hSubCategoria"><strong>Subategoria:</strong>'+value.subcategoria+'</h5>';
                            misOfertas+=  '<h5 id="pNombreOferta"><strong>Nombre de la oferta:</strong> '+value.nombre_oferta+' </h5>';
                            misOfertas+=  '<h5 id="pDescripcion"><strong>Descripcion de la Oferta:</strong>'+value.descripcion_oferta+' </h5>';
                        misOfertas+= '</div>';
                        misOfertas+= '<div class="d-flex col-md-3 col-xs-12 col-sm-12">';
                            misOfertas+= '<br>';
                            misOfertas+= '<a href="" id="btnEditar" class="btn btn-primary" onclick="modificar('+value.id_oferta+','+value.id_categoria+','+value.id_subcategoria+','+value.valor_oferta+','+value.id_unidad_medida+',\''+value.nombre_oferta+'\',\''+value.descripcion_oferta+'\',\''+value.img_oferta+'\')" data-bs-toggle="modal" data-bs-target="#modalModificar">Editar</a>'; //,\''+value.descripcion_oferta+'\'
                            misOfertas+= '<br>';
                            misOfertas+= '<br>';
                            misOfertas+= '<a href="" class="btn btn-secondary" onclick="eliminar('+value.id_oferta+')" data-bs-toggle="modal" data-bs-target="#modalEliminar">Eliminar</a>';
                            misOfertas+= '<br>';
                            misOfertas+= '<div class="mt-5">';
                                misOfertas+= '<br>';
                                misOfertas+= '<h3 >$ '+value.valor_oferta+'</h3>';
                                misOfertas+= '<h6 class="border-bottom justify-content-end" >'+value.nombre_um+' - '+value.nomenclatura_um+'</h6>';
                            misOfertas+= '</div>';
                        misOfertas+= '</div>';
                    misOfertas+='</div>';
                    misOfertas+='<br>'; 
                misOfertas+= '</div>';
                misOfertas+= '<hr/ class="linea">';
                misOfertas+= '<div class=" d-flex align-items-end mb-3 ">';
                    misOfertas+='<div class="container">';
                        misOfertas+= '<h5 >Comentarios Sobre la Oferta</h5><br>';
                        misOfertas+='<div class="justify-content-start">';
                            misOfertas+= '<a href="" id="btnVerMas" class="btn btn-primary" onclick="VerMasId('+value.id_oferta+')" data-bs-toggle="modal" data-bs-target="#modalVerMAs">Ver más <i class="fas fa-plus"></i> </a>'; 
                        misOfertas+= '</div>';    
                    misOfertas+= '</div>';                               
                misOfertas+= '</div>';    
                i++;
    
                })
    
                $('#misOfertas').html(misOfertas);
                        
            }).fail(function(xhr, status, error){
                $('#misOfertas').html(error);
            })
     } 
    
    
    
        /// VER MAS ///
        $(document).on('click','#btnVerMas',function(event){
            event.preventDefault();
                $.ajax({
                    url:'../controlador/misOfertasComentario.read.php',
                    type: 'POST',
                    dataType: 'json',
                    data : $('#misOfertasFrm').serialize(),
                }).done(function(json){


                    if(json== 0){
                        // alertify.error("Actualmente no hay Comentarios Disponibles");
                        $('#bodyModalComentarios').html("Actualmente no hay Comentarios Disponibles");
                        
                    
                    }else{
                        var misOfertas1 ="";
                        var calificacion_total = 0;
                        var i=0;
                        var total_calificacion =0;
        
                        $.each(json, function(key, value){             
                        
                                misOfertas1+='<div class="col-md-12 border-bottom">';
                                    misOfertas1+= '<h5><strong class="justify-content-center"> '+value.Usuario+'</strong></h5>';
                                    misOfertas1+= '<p id="idComentario">'+value.comentario+'</p>';
                                    misOfertas1+= '<strong> Calificación - '+value.calificacion+' -</strong>';
                                    misOfertas1+= '<h3></h3>';                      
                                misOfertas1+= '</div>';                                   
                                // i++;
                                // calificacion_total += parseFloat((value.calificacion));  
                        })
                        // total_calificacion = calificacion_total/i;
                       
                        // calificacionhtml = ` <div class="col-12">
                        //                         <h6 id="total_calificacion"><strong class="justify-content-center">Calificación total - ${total_calificacion} - </strong></h6>                                                
                        //                         <hr>
                        //                     </div>`;

                    } 
                        // $('#calificacion_total').html(calificacionhtml); 
                        $('#bodyModalComentarios').html(misOfertas1); 
                    }).fail(function(xhr, status, error){
                        // $('#calificacion_total').html(error); 
                        $('#bodyModalComentarios').html(error); 
                    })
            
        })
    
     
        /// BUSCAR CATEGORIA///
        buscarCate();  
        function buscarCate() {
    
            $.ajax({
                url:'../controlador/misOfertasBusCat.read.php',
                type: 'POST',
                dataType: 'json',
                data : null,
            }).done(function(json){
                var categorias  =0;
                categorias+='<option disabled selected> - Seleccione una categoría -</option>';
                $.each(json, function (key,value) {    
                    categorias+='<option value='+value.id_categoria+'>'+value.categoria+'</option>';   
                })
               
                $('#txtIdCategoria').html(categorias);
            }).fail(function(xhr, status, error){
                $('#txtIdCategoria').html(error);
            })     
        }
    
    
    
        //  / EVENTO CATEGORIAS///
        //  $('#txtIdCategoria').on('change',function(){
        //     // alert('Holaaaa');
        //     var a =$(this).children(":selected").val();
        //     $('#inIdCategoria').val(a);
            
        // })
    
    
    
        /// BUSCAR SUBCATEGORIA///
        buscarSubCate(); 
        function buscarSubCate() {
    
            $.ajax({
                url:'../controlador/misOfertasBusSubCat.read.php',
                type: 'POST',
                dataType: 'json',
                data : null,
            }).done(function(json){
                var subcategorias  =0;
                subcategorias+='<option disabled selected>- Seleccione una subcategoría -</option>';
                $.each(json, function (key,value) {    
                    subcategorias+='<option value='+value.id_subcategoria+'>'+value.subcategoria+'</option>';   
                })
                $('#txtIdSubCategoria').html(subcategorias);
            }).fail(function(xhr, status, error){
                $('#txtIdSubCategoria').html(error);
            })     
        }
    
    
        //  /// FILTRAR SUBCATEGORIA///
        filtrarSubCate(); 
        function filtrarSubCate() {
    
            $.ajax({
                url:'../controlador/misOfertasBusSubCat.read.php',
                type: 'POST',
                dataType: 'json',
                data : null,
            }).done(function(json){
    
                $('#txtIdCategoria').on('change',function(){
                    // alert('Holaaaa');
                    var a =$(this).children(":selected").val();                    
                    $('#inIdCategoria').val(a);                
    
                        var filtrarsubcate  =0;
                        filtrarsubcate+='<option hidden selected>- Seleccione una subcategoría -</option>';
                        $.each(json, function (key,value) {   
                            if (a == value.categoria) { 
                                
                                filtrarsubcate+='<option value='+value.id_subcategoria+'>'+value.subcategoria+' </option>';    
                            }
                        })
                        $('#txtIdSubCategoria').html(filtrarsubcate);
                    })                
            }).fail(function(xhr, status, error){
                $('#txtIdSubCategoria').html(error);
            })     
        }
    
     
        /// BUSCAR NOMBRE UNIDAD DE MEDIDA///
        buscarUniMed(); 
        function buscarUniMed() {
            $.ajax({
                url:'../controlador/buscarUnidadMed.read.php',
                type: 'POST',
                dataType: 'json',
                data : null,
            }).done(function(json){
                var uniMed  =0;
                uniMed+='<option disabled selected>- Seleccione una opción -</option>';
                $.each(json, function (key,value) {    
                    uniMed+='<option value='+value.id_unidad_medida+'>'+value.nombre+'</option>';   
                })
                $('#txtUniMedi').html(uniMed);
            }).fail(function(xhr, status, error){
                $('#txtUniMedi').html(error);
            })     
        }
    
    
        /// MODIFICAR ///
        $(document).on('click','#btnModificar',function(event){
            event.preventDefault();
                $.ajax({
                    url:'../controlador/misOfertas.update.php',
                    type: 'POST',
                    dataType: 'json',
                    data : $('#misOfertasFrm1').serialize(),
                }).done(function(json){
                    alert (json);
                    buscar();
                    buscarSubCate(); 
                    buscarUniMed();
                }).fail(function(xhr, status, error){
                    alert (error);
            })
        })
    
    
        /// ELIMINAR ///
        $(document).on('click','#btnEliminar',function(event){
            event.preventDefault();
                $.ajax({
                    url:'../controlador/misOfertas.delete.php',
                    type: 'POST',
                    dataType: 'json',
                    data : $('#misOfertasFrm').serialize(),
                }).done(function(json){
                    alert (json);
                    buscar();
                }).fail(function(xhr, status, error){
                    alert (error);
            })
    
        })
    
    
    })
     
   
                    
                        
                    