<?php $__env->startSection('titulo'); ?>Asginacion <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="col-md-12" style="overflow-x: auto;">
    <table class="table table-bordered table-striped small">
        <thead>
            <tr>
                <th>Año</th>
                <th>Trimestre</th>
                <th>Hallazgo</th>
                <th>Tipo</th>
                <th>Recomendacion</th>
                <th>Riesgo</th>
                <th>Responsable</th>
                <th>Causa raiz</th>
                <th>Accion</th>
                <th>Compromiso</th>
                <th>Calificación</th>
                <th>Calif. Num</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $hallazgos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hallazgos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($hallazgos->anio); ?></td>
                <td><?php echo e($hallazgos->trimestre); ?></td>
                <td><?php echo substr(nl2br($hallazgos->hallazgo),0,150); ?>...</td>
                <td><?php echo e($hallazgos->tipo); ?></td>
                <td><?php echo substr(nl2br($hallazgos->recomendacion),0,150); ?>...</td>
                <td><?php echo e($hallazgos->riesgo); ?></td>
                <td><span class="badge badge-<?php echo e(($hallazgos->valida==1)?'success':'danger'); ?>"><?php echo e($hallazgos->responsable); ?></span></td>
                <td><?php echo substr(nl2br($hallazgos->causa_raiz),0,150); ?>...</td>
                <td><?php echo substr(nl2br($hallazgos->accion),0,150);?>...</td>
                <td><?php echo e($hallazgos->compromiso); ?></td>
                <td><?php echo e($hallazgos->calificacion); ?></td>
                <td><span class="badge badge-<?php echo e(($hallazgos->calif_numerico*1>0)?'success':'danger'); ?>"><?php echo e($hallazgos->calif_numerico); ?></span></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/auditoria/resources/views/hallazgos/edit.blade.php ENDPATH**/ ?>