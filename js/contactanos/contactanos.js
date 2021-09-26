$(document).ready(function(){
/// REGISTRAR OK - FUNCIONAL ///
    $(document).on('click','#btnEnviar',()=>{

            let a = $("#txtNombreContac").val();//captura el valor del imput que contiene este id
            let b = $("#emailContac").val();
            let c = $("#txtMensajeContac").val();

            if (a==""||b=="" ||c=="" ) {
                return alert("Se deben llenar todos los campos")
            }
            $.ajax({
                url:'../controlador/contactanos.create.php',
                type: 'POST',
                dataType: 'json',
                data : $('#contactanos').serialize(),
            }).done(function(json){
                alert (json);
                // limpiarCampos()
            }).fail(function(xhr, status, error){
                alert (error);
        })
    })

    function limpiarCampos() {
        $("#txtNombreContac").val("");
        $("#emailContac").val("");
        $("#txtMensajeContac").val("");
    }




})