<?php $__env->startSection('titulo'); ?>Nuevo Usuario 
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
<a class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('users.index'); ?>"> <i class="fa fa-undo"></i> Regresar</a>
<br><br><br>
<?php ($editar = 0); ?>      
<?php echo Form::open(['route' => 'users.store','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']); ?>

         <?php echo $__env->make('users.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/auditoria/resources/views/users/create.blade.php ENDPATH**/ ?>