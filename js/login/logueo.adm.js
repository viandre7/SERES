$(document).ready(function(){

    $(document).on('click','#btnCerrar',function(){
        $.ajax({
            url:'../../controlador/login.delete.php',
            type:'POST',
            datatype:'json',
            data:null,
        }).done(function(json){
                var obj=JSON.parse(json);
                if(obj==true){
                window.location.href="../../vista/index.frm.php";
                }
        }).fail(function(xhr,status,error){
            console.log(error);

        })
    })
   
})
$(window).on('load',function() {
    $.ajax({
        url: '../../controlador/logueo.read.php',
        type: 'POST',
        datatype: null,
        data: null,
    })
    
})