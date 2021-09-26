function cambiar(){
    $('#LoginF').prop("hidden",true);
    
   
}

$(document).ready(function(){
    $(document).on('click','#btnLogin',function(){
        $.ajax({
            url:'../controlador/login.read.php',
            type:'POST',
            datatype:'JSON',
            data:$('#LoginF').serialize(),
        }).done(function(json){
            var obj = JSON.parse(json);
            console.log(json);

            if(document.getElementById('txtUsuario').value== "") {
                alertify.warning('Campo usuario vacio');

            }
            if(document.getElementById('txtClave').value== "") {
                alertify.warning('Campo contraseña vacio');

            }
            else { 
                if (obj == false){
                    alertify.warning('contraseña o correo incorrecto');
                  }else{
                    if (obj[0].id_rol == 1){
                        alertify.success('Bienvenido Administrador');
                        window.location.href="admin/index.adm.php";
                       
                    } 
                    if(obj[0].id_rol == 2){
                        alertify.success('Bienvenido');
                        window.location.href="mi_perfil.frm.php";
                    }
                }
                   
            }
        }).fail(function(xhr,status,error){
            alert("contraseña o usuario incorrecto")
        })



    })

   

})