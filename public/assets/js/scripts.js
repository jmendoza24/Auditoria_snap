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
