<table class="table table-striped table-bordered zero-configuration display" >
        <thead>
         <tr class="gris">
        <th>Usuario</th>
        <th>Comentarios</th>
        <th>Archivo</th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $infoComentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $infoComentarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($infoComentarios->usuario); ?></td>
            <td><?php echo e($infoComentarios->comentarios); ?></td>
            <td><?php echo e($infoComentarios->nom_doc); ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Second Group">   
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a data-toggle="modal" data-target="#cometarios2" onclick="edita_com(<?php echo e($infoComentarios->id); ?>)" class="btn  btn_gris" href="#"><i class="fa fa-pencil"></i></a>
                          <a class="btn  btn_rojo" href="#"  onclick="borra_com(<?php echo e($infoComentarios->id); ?>,<?php echo e($id); ?>)"><i class="fa fa-trash"></i></a>
                        </div>                
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH C:\wamp64\www\laravel\Auditoria_snap\resources\views/info_comentarios/table.blade.php ENDPATH**/ ?>