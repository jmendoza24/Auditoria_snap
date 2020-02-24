
<table class="table table-striped table-bordered zero-configuration display" >
        <thead>
         <tr class="gris">
                <th>Localidad</th>
                <th ></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $localidads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localidads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($localidads->nombre_loc); ?></td>
                <td style="text-align: center;">
                    <?php echo Form::open(['route' => ['localidads.destroy', $localidads->id], 'method' => 'delete','id'=>'emp']); ?>

                    <div class="btn-group" role="group" aria-label="Second Group">   
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a class="btn  btn_gris" href="<?php echo route('localidads.edit', [$localidads->id]); ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn  btn_rojo" href="#"  onclick="borra_localidad(<?php echo e($localidads->id); ?>)"><i class="fa fa-trash"></i></a>
                        </div>                
                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH /var/www/html/auditoria/resources/views/localidads/table.blade.php ENDPATH**/ ?>