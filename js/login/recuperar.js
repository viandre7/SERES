function muestra2(){
    $('#modalV').modal('toggle');
}   
function Muestra (id_usuario){
    $('#contrasena').val(id_usuario);
}
function Muestra3(pregunta){
    if(pregunta == 1){
        $('#pregunta').val("Color favorito?");

    }
    else if(pregunta == 2){
        $('#pregunta').val("Nombre de mi primera mascota ?");
    }
    else{
        $('#pregunta').val("Mi apodo ?");

    }

}
$(document).ready(function(){

    $(document).on('click', '#btnRecupera', function () {

        $.ajax({
            url: '../controlador/recuperar.read.php',
            type: 'POST',
            dataType: 'json',
            data: $('#Recupera').serialize(),
        }).done(function (json) {
            
                
            if(document.getElementById('txtemail').value== "") {
                alertify.warning('Campo email vacio');

            }
            if(document.getElementById('txtrecu').value== "") {
                alertify.warning('Campo Respuesta vacio');

            }
            else { 
                if (json == false){
                    alertify.warning('repuesta o correo incorrecto');
                  }else{
                    $('#modalrecupera').modal('hide');
                    $.each(json,function(key, value){
                     Muestra(value.id_usuario );
                     Muestra3(value.pregunta);
                       
                   
                    muestra2()
                    })
                }
            }
        }).fail(function (xhr, status, error) {
            console.log(error)
            
        })
    })
})

