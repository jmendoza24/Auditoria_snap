<script type="text/javascript">
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
</script>  
<table class="table table-striped table-bordered zero-configuration display" >
        <thead>
         <tr class="gris">
                <th>Nombre Documento</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $documentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documentos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($documentos->nombre_documento); ?></td>
                <td style="text-align: center;">
                    <?php echo Form::open(['route' => ['documentos.destroy', $documentos->id], 'method' => 'delete','id'=>'doc']); ?>

                    <div class="btn-group" role="group" aria-label="Second Group">   
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a class="btn  btn_gris" href="<?php echo route('documentos.edit', [$documentos->id]); ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn  btn_rojo" href="#"  onclick="borra_doc(<?php echo e($documentos->id); ?>)"><i class="fa fa-trash"></i></a>
                        </div>                
                    </div>
                    <?php echo Form::close(); ?>


                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php /**PATH /var/www/html/auditoria/resources/views/documentos/table.blade.php ENDPATH**/ ?>