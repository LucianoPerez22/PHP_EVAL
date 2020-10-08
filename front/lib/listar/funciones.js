$('#formEditar').submit(function(e){
    e.preventDefault();
  });

//Variable utilizada cuando se edite un usuario para almacenar su valor de id actual
var user;

function listar(){

  $.ajax({
      data: '&fun=' + 4,
      url:   '../back/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
        document.getElementById('tabla').innerHTML="";
        for ( i in datos) {
          document.getElementById('tabla').innerHTML+='<tr >'+
            '<td >' + datos[i].usuario  + '</td>'+
            '<td >' + datos[i].clave  + '</td>'+
            '<td >' + datos[i].nombre  + '</td>'+
            '<td>' + datos[i].apellido  + '</td>'+
            '<td >' + datos[i].edad  + '</td>'+
            '<td >' + datos[i].email  + '</td>'+
            '<td >' + datos[i].sitio_web  + '</td>'+
            '<td >' + '<a onclick="modal(this);"' + 'id="' +  datos[i].usuario +'"'+ ' href="#"><i class="fas fa-edit"></i></a>'+ ' | ' +
            '<a onclick="eliminar(this);"'  + 'id="' +  datos[i].usuario +'"'+ 'href=""><i class="fa fa-trash" aria-hidden="true"></i></a>' + '</td>'+
          '</tr>';            
        }
      }
    });
}

function listar_edit( b ){
  
  $.ajax({
      data: '&fun=5'+'&user='+b,
      url:   '../back/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
         var usuario=document.getElementById("usuario");
         var clave=document.getElementById("clave");
         var nombre=document.getElementById("nombre");
         var apellido=document.getElementById("apellido");
         var edad=document.getElementById("edad");
         var email=document.getElementById("email");
         var sitio_web=document.getElementById("sitio_web");

         usuario.value=datos[0].usuario;
         clave.value=datos[0].clave;
         nombre.value=datos[0].nombre;
         apellido.value=datos[0].apellido;
         edad.value=datos[0].edad;
         email.value=datos[0].email;
         sitio_web.value=datos[0].sitio_web;
      }
    });
}
//Funciones para mostrar y ocultar el modal en listar.php
function modal( b ){

    $("#principal").addClass("principal");
    $("#modal1").addClass("ver");
    user=b.id;
    listar_edit( b.id );
  }

function ocultar(){
    $("#principal").removeClass("principal");
    $("#modal1").removeClass("ver");
}

function editar(){
   var usuario=document.getElementById("usuario");

    jQuery.ajax({
          type: "POST",
          url: "../back/funciones.php",
          data: $('#formEditar').serialize() + '&user='+user+ '&fun=2',
          cache: false,
          success: function(response)
          {
            listar();
            ocultar();
          }
        });                   
  
}

function eliminar( b ){
  var respuesta=confirm("Realmente desea eliminar?");

  if (respuesta) {
    jQuery.ajax({
          type: "POST",
          url: "../back/funciones.php",
          data: 'user='+b.id + '&fun=3',
          cache: false,
          success: function(response)
          {
            listar();
            
          }
        });        
      
      
  }           
  
}

