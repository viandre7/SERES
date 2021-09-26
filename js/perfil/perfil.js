
$(document).ready(function () {
    //buscar();
    llenar_lista();
    encontrar();
    resultados("42");
    experimentar("1");
    
    function buscar() {
        $.ajax({
            url: '../controlador/perfil.read.php',
            type: 'POST',
            dataType: 'json',
            data: null,
        }).done(function (json) {
           
            let datos = "";
            $.each(json, function (key, value) {
                datos += '<h3>' + value.primer_nombre + ' ' + value.otros_nombre + ' ' + value.primer_apellido + ' ' + value.otros_apellido + ' </h3>';

            })
            $('#nom_per_perf').html(datos);
        }).fail(function (xhr, status, error) {
            $('#datos').html(error);
        })
    }

    $(document).on('click', '#btncrear', function () {
        event.preventDefault();
        $.ajax({
            url: '../controlador/perfil.create.php',
            type: 'POST',
            dataType: 'json',
            data: $('#cuenta').serialize(),
        }).done(function (json) {
            
            if (json[0].proceso == "OK") {
                alertify.success('Usuario creado!. ');
                limpiar_campo();
                $("#Modaliniciarsesion").modal("show");

            }else{
                alertify.error('No se pudo crear el usuario!. ');  
                alertify.error('Favor Verifique los datos ingresados '); 
            }

        }).fail(function (xhr, status, error) {
            $('#respuesta').html(error);
        })
    })

    function llenar_lista() {
        $.ajax({
            url: '../controlador/documento.read.php',
            type: 'POST',
            dataType: 'json',
            data: null,
        }).done(function (json) {
            var datos = '';
            $.each(json, function (key, value) {
                datos += '<option value="' + value.id_documento + '">' + value.nombre + '</option>';
            })
            $('#txtdocumento').html(datos);

        }).fail(function (xhr, status, error) {
            //$('#datos').html(error);
        })
    }



    function encontrar() {
        $.ajax({
            url: '../controlador/pais.read.php',
            type: 'POST',
            dataType: 'json',
            data: null,
        }).done(function (json) {
            var datos = '';

            $.each(json, function (key, value) {
                if (value.pais === "Colombia") {
                    datos += '<option value="' + value.id_pais + ' " selected>' + value.pais + '</option>';
                } else {


                    datos += '<option value="' + value.id_pais + ' ">' + value.pais + '</option>';

                }

            })
            $('#txtpais').html(datos);

        }).fail(function (xhr, status, error) {
            //$('#datos').html(error);
        })
    }


    function resultados(cod_pais) {
        $.ajax({
            url: '../controlador/departamento.read.php',
            type: 'POST',
            dataType: 'json',
            data: null,
        }).done(function (json) {
            var datos = '';

            $.each(json, function (key, value) {
                if (cod_pais.trim() === value.id_pais) {
                    datos += '<option value="' + value.id_departamento + ' ">' + value.departamento + '</option>';
                }

            })
            $('#txtdepartamento').html(datos);

        }).fail(function (xhr, status, error) {
            //$('#datos').html(error);
        })
    }

    function experimentar(cod_departamento) {
        $.ajax({
            url: '../controlador/municipio.read.php',
            type: 'POST',
            dataType: 'json',
            data: null,
        }).done(function (json) {
            var datos = '';

            $.each(json, function (key, value) {
                if (cod_departamento.trim() === value.id_departamento) {
                    datos += '<option value="' + value.id_municipio + ' ">' + value.municipio + '</option>';

                }
            })
            $('#txtmunicipio').html(datos);

        }).fail(function (xhr, status, error) {
            //$('#datos').html(error);
        })
    }




    function limpiar_campo() {
        document.getElementById("cuenta").reset();
    }

    $("#txtpais").change(function () {
        resultados(this.value);
    });

    $("#txtdepartamento").change(function () {
        experimentar(this.value);
    })

//////////////Recuperar contraseña
   
    $(document).ready(function(){
        $('#recupera').prop("hidden",true);
        $('#cuestion').on('change',function(){
            $('#recupera').prop("hidden",false);
          
        })
      });
  /////////////////
})


function restringir(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }

     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
}


