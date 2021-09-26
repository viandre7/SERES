// function mostrarPassword(){
//     var cambio = document.getElementById("txtPassword");
//     if(cambio.type == "password"){
//         cambio.type = "text";
//         $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
//     }else{
//         cambio.type = "password";
//         $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
//     }
// }

function mostrarPassword(){
    var cambio = document.getElementById("txtPassword");
    if(cambio.type == "password"){
        cambio.type = "text";
        $('.icons').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
        cambio.type = "password";
        $('.icons').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
} 


function mostrarPassword1(){
  var cambio = document.getElementById("txtClave");
  if(cambio.type == "password"){
      cambio.type = "text";
      $('.icons').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
  }else{
      cambio.type = "password";
      $('.icons').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
  }
} 

function mostrarPassword11(){
  var cambio = document.getElementById("pass1");
  if(cambio.type == "password"){
      cambio.type = "text";
      $('.icons').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
  }else{
      cambio.type = "password";
      $('.icons').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
  }
} 


function mostrarPassword12(){
  var cambio = document.getElementById("pass2");
  if(cambio.type == "password"){
      cambio.type = "text";
      $('.icons').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
  }else{
      cambio.type = "password";
      $('.icons').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
  }
} 


$(document).ready(function () {
//CheckBox mostrar contraseña
$('#ShowPassword').click(function () {
    $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
});
});

  $("#flexCheckDefault").on("click", function() {
    let empty = false;
    if($("#flexCheckDefault").prop('checked')) {
      if(!empty) {
        $('#btncrear').removeAttr('disabled');
        return;
      }
    }
    $('#btncrear').attr('disabled', 'disabled');
  });

  