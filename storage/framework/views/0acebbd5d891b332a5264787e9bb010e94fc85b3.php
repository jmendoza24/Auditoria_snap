<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Hallazgos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <?php echo $__env->make('hallazgos.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <a href="<?php echo e(route('hallazgos.index')); ?>" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/auditoria/resources/views/hallazgos/show.blade.php ENDPATH**/ ?>