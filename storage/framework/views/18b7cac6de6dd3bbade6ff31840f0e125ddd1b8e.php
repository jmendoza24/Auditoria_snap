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
            <td>
                <?php echo Form::open(['route' => ['hallazgos.destroy', $hallazgos->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo e(route('hallazgos.show', [$hallazgos->id])); ?>" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="<?php echo e(route('hallazgos.edit', [$hallazgos->id])); ?>" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/html/auditoria/resources/views/hallazgos/table.blade.php ENDPATH**/ ?>