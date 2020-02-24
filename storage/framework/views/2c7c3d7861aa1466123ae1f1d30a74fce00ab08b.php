<table class="table table-striped table-bordered zero-configuration display small" >
        <thead>
         <tr class="gris">
            <th>Folio</th>
            <th>Año</th>
            <th>Detalle</th>
            <th>Solicitante</th>
            <th>Aprobación</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $hallazgos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hallazgos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($hallazgos->id); ?></td>
            <td><?php echo e($hallazgos->anio); ?> (<?php echo e($hallazgos->trimestre); ?>)</td>
            <td><label style="cursor: pointer;" data-toggle="modal" data-backdrop="false" data-target="#primary" onclick="muestra_hallazgo(<?php echo e($hallazgos->id); ?>)"> <?php echo e(substr($hallazgos->hallazgo,0,100)); ?></label></td>
            <td>
                <?php echo e($hallazgos->archivo); ?> : <?php echo e($hallazgos->proceso); ?> <br>
                <?php echo e($hallazgos->depto); ?>

            </td>
            <td><?php echo e($hallazgos->estatus); ?></td>
            <td style="text-align: center;">                 
                <div class="btn-group" role="group" aria-label="Second Group">   
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a title="Ver"  href="<?php echo e(route('auditaHallazgos2', ['id'=>$hallazgos->id])); ?>" class="btn  btn_azul  btn-group-sm btn" href="#"><i class="fa fa-eye"></i></a>
                      <a title="Editar" href="<?php echo e(route('auditaHallazgos.edit', [$hallazgos->id])); ?>"  class="btn  btn_gris  btn-group-sm btn" href="#"><i class="fa fa-pencil"></i></a>
                      <a title="Eliminar" class="btn  btn_rojo btn-group-sm btn" href="#" onclick="crf_borrafase()"><i class="fa fa-trash"></i></a>
                  </div>                
                </div>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php /**PATH C:\wamp64\www\laravel\Auditoria_snap\resources\views/hallazgos/table.blade.php ENDPATH**/ ?>