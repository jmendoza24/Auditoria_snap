  
  <table class="table table-striped table-bordered zero-configuration display" >
        <thead>
         <tr class="gris">
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->email; ?></td>
                <td>
                    <?php if($user->tipo==0): ?>
                      <?php echo e('S/n'); ?>

                    <?php elseif($user->tipo==1): ?>
                      <?php echo e('Responsable'); ?>

                    <?php elseif($user->tipo==2): ?>
                      <?php echo e('Auditor'); ?>

                    <?php elseif($user->tipo==3): ?>
                     <?php echo e('Gerente'); ?>

                    <?php elseif($user->tipo==4): ?>
                     <?php echo e('Administrador'); ?>

                    <?php endif; ?>
                </td>
                <td style="text-align: center;">
                    <?php echo Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete','id'=>'us']); ?>


                    <div class="btn-group" role="group" aria-label="Second Group">   
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a class="btn  btn_gris" href="<?php echo route('users.edit', [$user->id]); ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn  btn_rojo" href="#"  onclick="borra_usuario(<?php echo e($user->id); ?>)"><i class="fa fa-trash"></i></a>
                        </div>                
                    </div>
                </td>                 
        
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php /**PATH C:\wamp64\www\laravel\Auditoria_snap\resources\views/users/table.blade.php ENDPATH**/ ?>