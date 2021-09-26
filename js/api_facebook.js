
const data = null;

function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
  console.log('statusChangeCallback');
  console.log(response);                   // The current login status of the person.
  if (response.status === 'connected') {   // Logged into your webpage and Facebook.
    testAPI();  
  } else {                                 // Not logged into your webpage or we are unable to tell.
    document.getElementById('status').innerHTML = 'Please log ' +
      'into this webpage.';
  }
}


function checkLoginState() {               // Called when a person is finished with the Login Button.
  FB.getLoginStatus(function(response) {   // See the onlogin handler
    statusChangeCallback(response);
  });
}


window.fbAsyncInit = function() {
  FB.init({
    appId      : '494507558430559',
    cookie     : true,                     // Enable cookies to allow the server to access the session.
    xfbml      : true,                     // Parse social plugins on this webpage.
    version    : 'v3.2'           // Use this Graph API version for this call.
  });


  FB.getLoginStatus(function(response) { 
      console.log(response);  // Called after the JS SDK has been initialized.
    statusChangeCallback(response);        // Returns the login status.
  });
};

function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
  console.log('Welcome!  Fetching your information.... ');
  FB.api('/me?fields=id,name,email,picture', function(response){
    envia(response)
  });
 
}
function envia(Facebook){

    
       console.log("entro a enviar");
       console.log(Facebook);
       $("#data").val(Facebook.id);
       $("#email").val(Facebook.email);
       $("#name").val(Facebook.name);
       guardar()
       face()
}

function guardar(){
  $.ajax({
    url:'../controlador/create.user.php',
    type: 'POST',
    dataType: 'json',
    data : $('#LoginF').serialize(),
}).done(function(json){
  console.log(json);
}).fail(function(xhr, status, error){
    console.log("su madre error");
})     
}
function face(){
  $.ajax({
      url:'../controlador/login.facebook.php',
      type:'POST',
      datatype:'JSON',
      data:$('#LoginF').serialize(),
  }).done(function(json){
    var obj = JSON.parse(json);
    console.log("sabes",obj);
    if (obj[0].id_rol == 1){
                  alertify.success('Bienvenido Administrador');
                  window.location.href="admin/index.adm.php";
                 
              } 
              if(obj[0].id_rol == 2){
                console.log("usuario de facebook");
                  alertify.success('Bienvenido');
                  window.location.href="mi_perfil.frm.php";
              }
          
             
      
  }).fail(function(xhr,status,error){
      alert("contraseña o usuario incorrecto")
  })



}