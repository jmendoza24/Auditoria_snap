function guardar_informe(){
	$.confirm({
            title: 'Auditoria',
            content: 'Estas seguro que deseas guardar este informe?',
            buttons: {
                confirmar: function () {
                    $.ajax({
                          data: '',
                          url: '/api/v1/guardar_informe',
                          dataType: 'json',
                          type:  'get',
                          success:  function (response) { 
                          $.alert('Guardado');  
                           window.location.href = 'hallazgos';

                          }
                      });
                },
                cancelar: function () {
                }
            }
        });
}


function muestra_hallazgo(hallazgo){
  $.ajax({
      data: {'id_hallazgo':hallazgo},
      url: '/api/v1/muestra_hallazgo',
      dataType: 'json',
      type:  'get',
      success:  function (response) { 
        $("#contenido").html(response);
      }
  });
}

function ver_hallazgo(hallazgo){
   $.ajax({
      data: {'id_hallazgo':hallazgo},
      url: '/api/v1/ver_hallazgo',
      dataType: 'json',
      type:  'get',
      success:  function (response) { 
        $("#contenido").html(response);
      }
  });
}


function guarda_comentario(){
  var formData = new FormData($("#formUpload")[0]);

    $.ajax({
            url:"/api/v1/guarda_comentarios",
            type: 'POST',
            method: "POST",        
            data:  formData,
            //async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta){
              console.log(respuesta);
              $('#comentarios_table').html(respuesta);
            }
        }); 
}

function borra_comentario(id, hallazgo){
  var parametros = {'id':id,
                    'id_hallazgo':hallazgo};

   $.ajax({
            url:"/api/v1/borrar_comen",
            type: "get",
            data:parametros,
            success: function(respuesta){ 
              console.log(respuesta);
             $('#comentarios_table').html(respuesta);
            }
        }); 
  }
