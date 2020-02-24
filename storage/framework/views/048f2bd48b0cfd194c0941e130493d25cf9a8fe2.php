  
<table class="table table-striped table-bordered zero-configuration display" >
        <thead>
         <tr class="gris">
                <th>Empresa</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($empresas->razon_social); ?></td>
                <td style="text-align: center;">
                    <?php echo Form::open(['route' => ['empresas.destroy', $empresas->id], 'method' => 'delete','id'=>'emp']); ?>

                    <div class="btn-group" role="group" aria-label="Second Group">   
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a class="btn  btn_gris" href="<?php echo route('empresas.edit', [$empresas->id]); ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn  btn_rojo" href="#"  onclick="borra_empresa(<?php echo e($empresas->id); ?>)"><i class="fa fa-trash"></i></a>
                        </div>                
                    </div>
                    <?php echo Form::close(); ?>


                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php /**PATH /var/www/html/auditoria/resources/views/empresas/table.blade.php ENDPATH**/ ?>