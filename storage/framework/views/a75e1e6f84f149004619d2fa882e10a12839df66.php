 
<?php $__env->startSection('content'); ?>
    
        <h1 class="pull-left">Empresas</h1>
        <br>
        <span>
           <a class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('empresas.create'); ?>"><i class="fa fa-plus"></i> Nueva Empresa</a>
        </span>
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br><br>
        <div class="" style="overflow: auto;">
                    <?php echo $__env->make('empresas.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              
        </div>
<?php $__env->stopSection(); ?>










<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/auditoria/resources/views/empresas/index.blade.php ENDPATH**/ ?>