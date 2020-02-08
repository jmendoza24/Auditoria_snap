<?php $__env->startSection('titulo'); ?>Nuevo carga <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(route('upload.informe')); ?>" class="form-horizontal" enctype='multipart/form-data'>
    <?php echo csrf_field(); ?>
<div class="row">
    <div class="form-group col-sm-4">
        <select class="form-control" name="archivo">
            <option value="">Selecciona Archivo</option>
            <option value="Cedis">Cedis</option>
            <option value="Plantas">Plantas</option>
        </select>
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control" name="localidad">
            <option value="">Localidad</option>
            <option value="Acuña">Acuña</option>
            <option value="Colima">Colima</option>
        </select>
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control" name="">
            <option value="Empresa">Empresa</option>
            <option value="Qualtia">Qualtia</option>
            <option value="XO">XO</option>
        </select>
    </div> 
</div>
<div class="row">
    <div class="form-group col-sm-4">
        <input type="text" name="pais" id="pais" class="form-control" placeholder="País">
    </div>
    <div class="form-group col-sm-4">
        <input type="text" name="estado" id="estado" class="form-control" placeholder="Estado">
    </div>
    <div class="form-group col-sm-4">
         <input type="text" name="region" id="region" class="form-control" placeholder="Región">
    </div>
    <div class="form-group col-sm-4">
        <label class="">Informe &nbsp;</label>
        <input type="file" class="form-control" name="archivo" class="form-control">
    </div>
    <div class="form-group col-sm-4">
        <input type="submit" class="btn btn-success">
    </div>  
</div>

</form>
<hr>
<div class="col-md-12" style="overflow-x: auto;">
    <table class="table table-striped table-bordered zero-configuration display small" >
        <thead>
         <tr class="gris">
                <th>Hallazgo</th>
                <th>Tipo</th>
                <th>Recomendación</th>
                <th>Riesgo</th>
                <th>Responsable</th>
                <th>Causa raíz</th>
                <th>Acción</th>
                <th>Compromiso</th>
                <th>Calificación</th>
                <th>Calif. Num</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $hallazgos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hallazgos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/auditoria/resources/views/hallazgos/create.blade.php ENDPATH**/ ?>