$(document).ready(function(){
    // read();
    $(document).on('click','#btnModificarPersona',function(){
        $.ajax({
            url:'../controlador/persona.update.php',
            type:'POST',
            datatype:'JSON',
            data:$('#Perfil').serialize(),
        }).done(function(json){
            
            
           
            // read();
        }).fail(function(xhr,status,error){
            console.log(error);
        })
    });

    $(document).on('click','#btnDescripcion',function(){

        $.ajax({
            url:'../controlador/ofertante.update.php',
            type:'POST',
            datatype:'JSON',
            data:$('#formularioPerfil').serialize(),
        }).done(function(json){
            
           
            // read();
        }).fail(function(xhr,status,error){
            console.log(error);
        })
    })

    $(document).on('click','#btnModificarUbicacion',function(){
        $.ajax({
            url:'../controlador/ubicacion.update.php',
            type:'POST',
            datatype:'JSON',
            data:$('#formularioPerfil').serialize(),
        }).done(function(json){
            
            // read();
        }).fail(function(xhr,status,error){
            console.log(error);
        })
    })
    municipio()

    function municipio(){

        $.ajax({
            url:'../controlador/municipio.read.php',
            type:'GET',
            datatype:'JSON',
            data:$('#modalModificar').serialize(),

        }).done(function(json){
           
            var obj = JSON.parse(json);
            var datos2 ='';
            $.each(obj, function(key, value){
                datos2 += '<option value="'+value.id_municipio+'">'+value.municipio+'</option>';
                            })
                            
            $('#municipio').html(datos2);
                            
        }).fail(function(xhr,status,error){
            alert("error");
        })
    }
   
    
   
})