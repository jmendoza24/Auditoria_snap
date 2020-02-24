<table class="table table-striped table-bordered zero-configuration display small" >
        <thead>
         <tr class="gris">
            <th>Folio</th>
            <th>Año</th>
            <th>Trimestre</th>
            <th>Región</th>
            <th>Dirección</th>
            <th>Auditor</th>
            <th>Proceso</th>
            <th>Responsable</th>
            <th>Calificación</th>
            <th>Estatus</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $hallazgos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hallazgos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($hallazgos->id); ?></td>
            <td><?php echo e($hallazgos->anio); ?></td>
            <td><?php echo e($hallazgos->trimestre); ?></td>
            <td><?php echo e($hallazgos->region); ?></td>
            <td><?php echo e($hallazgos->direccion); ?></td>
            <td><?php echo e($hallazgos->auditor); ?></td>
            <td><?php echo e($hallazgos->responsable); ?></td>
            <td><?php echo e($hallazgos->calificacion); ?></td>
            <td><?php echo e($hallazgos->estatus); ?></td>
            <td></td>
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

<?php /**PATH /var/www/html/auditoria/resources/views/hallazgos/table.blade.php ENDPATH**/ ?>