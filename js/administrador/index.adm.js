    
$(document).ready(function(){
    ofertas(); 
    ofertantes();
    categorias();
    subcategorias();
    comentarios();

    function ofertas (){
        $.ajax({
            url:'../../controlador/oferta.adm.index.read.php',
            type: 'POST',
            dataType: 'json',
            data : null,
        }).done(function(json){
            if(json.length>=1){
            var datos = '';
                    $.each(json, function(key, value){
                            if(value.estado=="A"){
                                datos += '<h5 class=" activo text-wrap">Ofertas Activas: '+value.total+'</h5>'; 
                            }else{
                                datos += '<h5 class=" activo text-wrap">Ofertas Inactivas: '+value.total+'</h5>';
                            }                   
                    })
            $('#totalOfertas').html(datos);
            }else{
                var datos = '';
                datos += '<h5 class=" activo text-wrap">No hay Ofertas Registradas</h5>';
                datos += '<h5 class=" activo text-wrap"></h5>';
                $('#totalOfertas').html(datos);
            }
        }).fail(function(xhr, status, error){
            $('#totalOfertas').html(error);
    })
    }

    function ofertantes (){
        $.ajax({
            url:'../../controlador/ofertante.adm.index.read.php',
            type: 'POST',
            dataType: 'json',
            data : null,
        }).done(function(json){
            if(json.length>=1){
            var datos = '';
                    $.each(json, function(key, value){
                            if(value.estado=="A"){
                                datos += '<h5 class=" activo text-wrap">Ofertantes Activos: '+value.total+'</h5>'; 
                            }else{
                                datos += '<h5 class=" activo text-wrap">Ofertantes Inactivos: '+value.total+'</h5>';
                            }                   
                    })
            $('#totalOfertantes').html(datos);
            }else{
                var datos = '';
                datos += '<h5 class=" activo text-wrap">No hay Ofertantes Registrados</h5>';
                datos += '<h5 class=" activo text-wrap"></h5>';
                $('#totalOfertantes').html(datos);
            }
        }).fail(function(xhr, status, error){
            $('#totalOfertantes').html(error);
    })
    }
    function categorias (){
        $.ajax({
            url:'../../controlador/categoria.adm.index.read.php',
            type: 'POST',
            dataType: 'json',
            data : null,
        }).done(function(json){
            if(json.length>=1){
            var datos = '';
                    $.each(json, function(key, value){
                            if(value.estado=="A"){
                                datos += '<h5 class=" activo text-wrap">Categorias Activas: '+value.total+'</h5>'; 
                            }else{
                                datos += '<h5 class=" activo text-wrap">Categorias Inactivas: '+value.total+'</h5>';
                            }                   
                    })
            $('#totalCategorias').html(datos);
            }else{
                var datos = '';
                datos += '<h5 class=" activo text-wrap">No hay Categorias Registradas</h5>';
                datos += '<h5 class=" activo text-wrap"></h5>';
                $('#totalCategorias').html(datos);
            }
        }).fail(function(xhr, status, error){
            $('#totalCategorias').html(error);
    })
    }
    function subcategorias (){
        $.ajax({
            url:'../../controlador/subcategoria.adm.index.read.php',
            type: 'POST',
            dataType: 'json',
            data : null,
        }).done(function(json){
            if(json.length>=1){
            var datos = '';
                    $.each(json, function(key, value){
                            if(value.estado=="A"){
                                datos += '<h5 class=" activo text-wrap">Subcategorias Activas: '+value.total+'</h5>'; 
                            }else{
                                datos += '<h5 class=" activo text-wrap">Subcategorias Inactivas: '+value.total+'</h5>';
                            }                   
                    })
            $('#totalSubCategorias').html(datos);
            }else{
                var datos = '';
                datos += '<h5 class=" activo text-wrap">No hay Subcategorias Registradas</h5>';
                datos += '<h5 class=" activo text-wrap"></h5>';
                $('#totalSubCategorias').html(datos);
            }
        }).fail(function(xhr, status, error){
            $('#totalSubCategorias').html(error);
    })
    }
    function comentarios (){
        $.ajax({
            url:'../../controlador/comentario.adm.index.read.php',
            type: 'POST',
            dataType: 'json',
            data : null,
        }).done(function(json){
            if(json.length>=1){
            var datos = '';
                    $.each(json, function(key, value){
                            if(value.estado=="A"){
                                datos += '<h5 class=" activo text-wrap">Comentarios Activos: '+value.total+'</h5>'; 
                            }else{
                                datos += '<h5 class=" activo text-wrap">Comentarios Inactivos: '+value.total+'</h5>';
                            }                   
                    })
            $('#totalComentarios').html(datos);
            }else{
                var datos = '';
                datos += '<h5 class=" activo text-wrap">No hay Comentarios Registrados</h5>';
                datos += '<h5 class=" activo text-wrap"></h5>';
                $('#totalComentarios').html(datos);
            }
        }).fail(function(xhr, status, error){
            $('#totalComentarios').html(error);
    })
    }


})