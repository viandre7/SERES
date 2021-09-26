$(document).ready(function(){
    $(document).on('click','#Newpass',function(){
        $.ajax({
            url:'../controlador/newpass.read.php',
            type:'POST',
            datatype:'JSON',
            data:$('#nuevaContrasena').serialize(),
        }).done(function(json){
          console.log(json);
          if(document.getElementById('pass1').value== "") {
            alertify.warning('Campo 1 no puede estar vacio');
    
        }
        if(document.getElementById('pass2').value== "") {
            alertify.warning('Campo Respuesta 2 vacio');
    
        }
        if(document.getElementById('pass1').value != document.getElementById('pass2').value) {
            alertify.warning('Los campos no coinciden');
        
        }
        else { 
            if (json = false){
                alertify.warning('Error al cambiar de contraseña');
              }
              else {
               alert("contraseña actualizada con exito ");
               window.location.href="index.frm.php";
            }      
        }
        }).fail(function(xhr,status,error){
            alert("contraseña o usuario incorrecto")
        })



    })

    $(document).on('click','#Newpassadm',function(){
        $.ajax({
            url:'../../controlador/newpass.read.php',
            type:'POST',
            datatype:'JSON',
            data:$('#nuevaContrasena').serialize(),
        }).done(function(json){
          console.log(json);
          if(document.getElementById('pass1').value== "") {
            alertify.warning('Campo 1 no puede estar vacio');
    
        }
        if(document.getElementById('pass2').value== "") {
            alertify.warning('Campo Respuesta 2 vacio');
    
        }
        if(document.getElementById('pass1').value != document.getElementById('pass2').value) {
            alertify.warning('Los campos no coinciden');
        
        }
        else { 
            if (json = false){
                alertify.warning('Error al cambiar de contraseña');
              }
              else {
               alert("contraseña actualizada con exito ");
               window.location.href="../index.frm.php";
            }      
        }
        }).fail(function(xhr,status,error){
            alert("contraseña o usuario incorrecto")
        })



    })


})
