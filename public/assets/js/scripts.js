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
                          }
                      });
                },
                cancelar: function () {
                }
            }
        });
}