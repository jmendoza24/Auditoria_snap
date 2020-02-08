function borra_usuario(id) {
	
	$.confirm({
           animation: 'zoom',
           icon: 'la la-warning',
           title: 'Mensaje',
           cancelButtonClass: 'btn-danger',
           content: '<h3 style="text-aling:center" class="texto_rojo"><strong>¿Estas seguro que deseas eliminar este usuario?</strong></h3>',
           buttons: {
               Aceptar: function () {
                 
                 $("#"+url).submit();
               },
               cancelar: function () {
               }
           }
       });
}