<table class="table table-striped table-bordered zero-configuration display small" >
        <thead>
         <tr class="gris">
        <th>Id</th>
        <th>Año</th>
        <th>Trimestre</th>
        <th>Región</th>
        <th>Dirección</th>
        <th>Auditor</th>
        <th>Auditor2</th>
        <th>Proceso</th>
        <th>Depto</th>
        <th>Area</th>
        <th>Responsable</th>
        <th>Calificacion</th>
        <th>Hallazgo</th>
        <th>Recomendación</th>
        <th>Riesgo</th>
        <th>Accion</th>
        <th>Fecha Inf</th>
        <th>Fecha Com</th>
        <th>Estatus</th>
        <th>Archivo</th>
        <th>Fila</th>
        <th>Fila Id</th>
        <th>Anexo</th>
        <th>Comentarios</th>
        <th>Accion2</th>
        <th>Situación</th>
        <th># Apoyo</th>
        <th>Jefatura</th>
        <th>Gerencia</th>
        <th>Fec Usr</th>
        <th>Aud Tip Val</th>
        <th>Aud Monto</th>
        <th>Ano Folio</th>
        <th>Aud Reincidente</th>
        <th>Aud Com Anexo</th>
        <th>Aud Fir Val</th>
        <th>Aud Fec Asignado</th>
        <th>Aud Fec Revisado</th>
        <th>Aud Fec Final</th>
        <th>User Id</th>
        <th>Enviar Mail</th>
        <th>User Id Resp</th>
        <th>Tipo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $auditaHallazgos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auditaHallazgo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($auditaHallazgo->id); ?></td>
            <td><?php echo e($auditaHallazgo->anio); ?></td>
            <td><?php echo e($auditaHallazgo->trimestre); ?></td>
            <td><?php echo e($auditaHallazgo->region); ?></td>
            <td><?php echo e($auditaHallazgo->direccion); ?></td>
            <td><?php echo e($auditaHallazgo->auditor); ?></td>
            <td><?php echo e($auditaHallazgo->auditor2); ?></td>
            <td><?php echo e($auditaHallazgo->proceso); ?></td>
            <td><?php echo e($auditaHallazgo->depto); ?></td>
            <td><?php echo e($auditaHallazgo->area); ?></td>
            <td><?php echo e($auditaHallazgo->responsable); ?></td>
            <td><?php echo e($auditaHallazgo->calificacion); ?></td>
            <td><?php echo e($auditaHallazgo->hallazgo); ?></td>
            <td><?php echo e($auditaHallazgo->recomendacion); ?></td>
            <td><?php echo e($auditaHallazgo->riesgo); ?></td>
            <td><?php echo e($auditaHallazgo->accion); ?></td>
            <td><?php echo e($auditaHallazgo->fecha_inf); ?></td>
            <td><?php echo e($auditaHallazgo->fecha_com); ?></td>
            <td><?php echo e($auditaHallazgo->estatus); ?></td>
            <td><?php echo e($auditaHallazgo->archivo); ?></td>
            <td><?php echo e($auditaHallazgo->fila); ?></td>
            <td><?php echo e($auditaHallazgo->fila_id); ?></td>
            <td><?php echo e($auditaHallazgo->anexo); ?></td>
            <td><?php echo e($auditaHallazgo->comentarios); ?></td>
            <td><?php echo e($auditaHallazgo->accion2); ?></td>
            <td><?php echo e($auditaHallazgo->situacion); ?></td>
            <td><?php echo e($auditaHallazgo->num_apoyo); ?></td>
            <td><?php echo e($auditaHallazgo->jefatura); ?></td>
            <td><?php echo e($auditaHallazgo->gerencia); ?></td>
            <td><?php echo e($auditaHallazgo->fec_usr); ?></td>
            <td><?php echo e($auditaHallazgo->aud_tip_val); ?></td>
            <td><?php echo e($auditaHallazgo->aud_monto); ?></td>
            <td><?php echo e($auditaHallazgo->ano_folio); ?></td>
            <td><?php echo e($auditaHallazgo->aud_reincidente); ?></td>
            <td><?php echo e($auditaHallazgo->aud_com_anexo); ?></td>
            <td><?php echo e($auditaHallazgo->aud_fir_val); ?></td>
            <td><?php echo e($auditaHallazgo->aud_fec_asignado); ?></td>
            <td><?php echo e($auditaHallazgo->aud_fec_revisado); ?></td>
            <td><?php echo e($auditaHallazgo->aud_fec_final); ?></td>
            <td><?php echo e($auditaHallazgo->user_id); ?></td>
            <td><?php echo e($auditaHallazgo->enviar_mail); ?></td>
            <td><?php echo e($auditaHallazgo->user_id_resp); ?></td>
            <td><?php echo e($auditaHallazgo->tipo); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['auditaHallazgos.destroy', $auditaHallazgo->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('auditaHallazgos.show', [$auditaHallazgo->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('auditaHallazgos.edit', [$auditaHallazgo->id])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/auditoria/resources/views/audita_hallazgos/table.blade.php ENDPATH**/ ?>