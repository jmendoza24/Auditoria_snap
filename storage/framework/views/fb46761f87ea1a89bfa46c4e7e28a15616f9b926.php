<table class="table table-striped table-bordered small" >
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
                <td>
                    <b><?php echo e($infoComentarios->tipo_user); ?></b><br/>
                    <?php echo e($infoComentarios->nombre_user); ?></td>
                <td><?php echo e($infoComentarios->comentarios); ?> <br/> - (<?php echo e(substr($infoComentarios->fecha,0,10)); ?>)</td>
                <td><a href="<?php echo e($infoComentarios->archivo); ?>" target="_blank"><?php echo e(str_replace('storage/hallazgos/', '', $infoComentarios->archivo )); ?> </td>
                <td>
                    <?php if(Auth::user()->id==$infoComentarios->id_usuario or Auth::user()->tipo==1): ?>
                    <span class="btn btn-danger btn-sm" onclick="borra_comentario(<?php echo e($infoComentarios->id); ?>,<?php echo e($infoComentarios->id_hallazgo); ?>)"><i class="fa fa-trash"></i></span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH C:\wamp64\www\laravel\Auditoria_snap\resources\views/info_comentarios/table.blade.php ENDPATH**/ ?>