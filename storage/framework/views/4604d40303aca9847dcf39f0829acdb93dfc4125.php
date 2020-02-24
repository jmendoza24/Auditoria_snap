 
<?php $__env->startSection('content'); ?>
    
        <h1 class="pull-left">Hallazgos</h1>
        <br>
        <span>
        <a class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('hallazgos.create'); ?>"><i class="fa fa-plus"></i> Carga</a>
        </span>
        <br><br>
        <div class="" style="overflow: auto;">
                    <?php echo $__env->make('hallazgos.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              

        </div>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\Auditoria_snap\resources\views/hallazgos/index.blade.php ENDPATH**/ ?>