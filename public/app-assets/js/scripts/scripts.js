
function borra_com(id,cot) {
      
  $.confirm({
           animation: 'zoom',
           icon: 'la la-warning',
           title: 'Mensaje',
           cancelButtonClass: 'btn-danger',
           content: '<h3 style="text-aling:center" class="texto_rojo"><strong>¿Estas seguro que deseas eliminar este registro?</strong></h3>',
           buttons: {
               Aceptar: function () {

                var parametros ={ 
                      "id":id,               
                 };

                      $.ajax({
                        url:"/api/v1/borrar_comen",
                        type: "get",
                        data:parametros,
                        success: function(respuesta){ 
                         
                          window.location.href = 'auditaHallazgos?id='+cot;

                        },  
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                        }   

                    }); 
                 
               },
               cancelar: function () {
                  // $.alert('Canceledo!');
               }
           }
       });
    }


function borra_doc(id) {

     var parametros ={ 
        "id":id,                       
   };
  $.confirm({
           animation: 'zoom',
           icon: 'la la-warning',
           title: 'Mensaje',
           cancelButtonClass: 'btn-danger',
           content: '<h3 style="text-aling:center" class="texto_rojo"><strong>¿Estas seguro que deseas eliminar este tipo de documento?</strong></h3>',
           buttons: {
               Aceptar: function () {
                 
                 
                $.ajax({
                          url:"/api/v1/borra_doc",
                          type: "get",
                          data:parametros,
                          success: function(respuesta){ 
                           
                            window.location.href = 'documentos';

                          //  $("#doc").submit();
                          },  
                          error: function(XMLHttpRequest, textStatus, errorThrown) { 
                          // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                          }   

                      }); 
               },
               cancelar: function () {
               }
           }
       });
}

function borra_empresa(id) {
  var parametros ={ 
        "id":id,                       
   };
  $.confirm({
           animation: 'zoom',
           icon: 'la la-warning',
           title: 'Mensaje',
           cancelButtonClass: 'btn-danger',
           content: '<h3 style="text-aling:center" class="texto_rojo"><strong>¿Estas seguro que deseas eliminar esta empresa?</strong></h3>',
           buttons: {
               Aceptar: function () {
                 


                $.ajax({
                          url:"/api/v1/borra_emp",
                          type: "get",
                          data:parametros,
                          success: function(respuesta){ 
                           
                         window.location.href = 'empresas';
  
                          //  $("#doc").submit();
                          },  
                          error: function(XMLHttpRequest, textStatus, errorThrown) { 
                          // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                          }   

                      }); 
               },
               cancelar: function () {
               }
           }
       });
}


 function borra_localidad(id) {
  var parametros ={ 
        "id":id,                       
   };
  $.confirm({
           animation: 'zoom',
           icon: 'la la-warning',
           title: 'Mensaje',
           cancelButtonClass: 'btn-danger',
           content: '<h3 style="text-aling:center" class="texto_rojo"><strong>¿Estas seguro que deseas eliminar esta localidad?</strong></h3>',
           buttons: {
               Aceptar: function () {
                 


                $.ajax({
                          url:"/api/v1/borra_loc",
                          type: "get",
                          data:parametros,
                          success: function(respuesta){ 
                           
                         window.location.href = 'localidads';
  
                          //  $("#doc").submit();
                          },  
                          error: function(XMLHttpRequest, textStatus, errorThrown) { 
                          // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                          }   

                      }); 
               },
               cancelar: function () {
               }
           }
       });
}



 function borra_usuario(id) {
  
  $.confirm({
           animation: 'zoom',
           icon: 'la la-warning',
           title: 'Mensaje',
           cancelButtonClass: 'btn-danger',
           content: '<h3 style="text-aling:center" class="texto_rojo"><strong>¿Estas seguro que deseas eliminar este usuario?</strong></h3>',
           buttons: {
               Aceptar: function () {
                 
                 $("#us").submit();
               },
               cancelar: function () {
               }
           }
       });
}


function edita_com(id){

 var parametros ={ 
                      "id":id,
                 };
    $.ajax({
      url:"/api/v1/edita_comen",
      type: "get",
      data:parametros,
      success: function(respuesta){ 
       
         $('#fields2').html(respuesta);
      },  
      error: function(XMLHttpRequest, textStatus, errorThrown) { 
          //alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      }   

  });

}