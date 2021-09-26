
$(document).ready(function(){
   
    cat()   
    function cat(){

        $.ajax({
            url:'../controlador/cat.read.oferta.php',
            type:'GET',
            datatype:'JSON',
            data:null,

        }).done(function(json){
           
            var obj = JSON.parse(json);
            var datos2 ='';
            var datos ='';
                 datos2+='<option>- Seleccione una Categoria -</option>';
            $.each(obj, function(key, value){
                datos2 += '<option value="'+value.id_categoria+'">'+value.categoria+'</option>';
                            })
                            
            $('#categorias').html(datos2);
                            
        }).fail(function(xhr,status,error){
            alert("error");
        })
    }
    $("#categorias").change(function () {
        subcat(this.value);
    });
    subcat("")
    function subcat(id_categoria){

        $.ajax({
            url:'../controlador/SubCat.read.php',
            type:'GET',
            datatype:'JSON',
            data:null,

        }).done(function(json){
           
            var obj = JSON.parse(json);
            var datos2 ='';
            var filter = obj.filter(e=>e.categoria == id_categoria)
           
            $.each(filter, function(key, value){
               
                datos2 += '<option value="'+value.id_subcategoria+'">'+value.subcategoria+'</option>';
                
                            })
            $('#subcategorias').html( datos2);
                            
        }).fail(function(xhr,status,error){
            alert("error");
        })
    }


     //  /// FILTRAR SUBCATEGORIA///
     filtrarSubCate(); 
     function filtrarSubCate() {
 
         $.ajax({
             url:'../controlador/SubCat.read.php',
             type: 'POST',
             dataType: 'json',
             data : null,
         }).done(function(json){

            var filtrarsubcate  =0;
            filtrarsubcate+='<option  selected>- Seleccione una subcategoría -</option>';
 
             $('#categorias').on('change',function(){
                 // alert('Holaaaa');
                 var a =$(this).children(":selected").val();                    
                 $('#inIdCategoria').val(a);                
 
                     var filtrarsubcate  =0;
                     filtrarsubcate+='<option  selected>- Seleccione una subcategoría -</option>';
                     $.each(json, function (key,value) {   
                         if (a == value.categoria) { 
                             
                             filtrarsubcate+='<option value='+value.id_subcategoria+'>'+value.subcategoria+' '+value.categoria+' </option>';    
                         }
                     })
                     $('#subcategorias').html(filtrarsubcate);
                 })  
                 
                 $('#subcategorias').html(filtrarsubcate);
         }).fail(function(xhr, status, error){
             $('#subcategorias').html(error);
         })     
     }


    unidad()
    function unidad(){

        $.ajax({
            url:'../controlador/unidad.read.php',
            type:'GET',
            datatype:'JSON',
            data:$('#oferta').serialize(),

        }).done(function(json){
            // alert(json);
            var obj = JSON.parse(json);
            var datos3 ='';
            datos3 += '<option hidden selected>- Seleccione una unidad de medida -</option>';
            $.each(obj, function(key, value){
                datos3 += '<option value="'+value.id_unidad_medida+'">'+value.nombre+'</option>';
                            })
            $('#unidad').html(datos3);
                            
        }).fail(function(xhr,status,error){
            alert("error");
        })
    }


    //////////imagen
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
 
            reader.onload = function (e) {
                var filePreview = document.createElement('txtImagen');
                filePreview.id = 'file-preview';
                //e.target.result contents the base64 data from the image uploaded
                filePreview.src = e.target.result;
        
                var previewZone = document.getElementById('file-preview-zone');
                previewZone.appendChild(filePreview);
            }
 
            reader.readAsDataURL(input.files[0]);
        }
    }
 

})