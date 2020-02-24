<?php $__env->startSection('titulo'); ?>Empresas <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('documentos.index'); ?>"> <i class="fa fa-undo"></i> Regresar</a>
<br><br><br>
<?php ($editar = 1); ?>
 <?php echo Form::model($documentos, ['route' => ['documentos.update', $documentos->id], 'method' => 'patch','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']); ?>

                        <?php echo $__env->make('documentos.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/auditoria/resources/views/documentos/edit.blade.php ENDPATH**/ ?>