<?php $__env->startSection('titulo'); ?>Nuevo carga <?php if($valido==1): ?> <br><br>
<a title="Regresar" class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('hallazgos.index'); ?>"> <i class="fa fa-undo"></i> Regresar</a><br><br><br>
<a title="Guardar Formato" class="btn btn_gris pull-right" style="margin-top: -10px;margin-bottom: 5px" href="#" onclick="guardar_informe()"> <i class="fa fa-floppy-o"></i> Guardar</a>

 <?php endif; ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if($valido==0): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Tu informe cuenta con algunos errores, favor de corregir para poder guardarlo
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<form method="post" action="<?php echo e(route('upload.informe')); ?>" class="form-horizontal" enctype='multipart/form-data'>
    <?php echo csrf_field(); ?>
<div class="row">
    <div class=" col-sm-4">
        <input type="file" class="form-control" name="archivo" required="">
    </div>
    <div class="form-group col-sm-4">
         <select class="form-control select2" style="width: 100%" id="narchivo" name="narchivo"  required="required">
           <option value="">Selecciona Documento</option>
            <?php $__currentLoopData = $documentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option 
                    value="<?php echo e($tipo->id); ?>" 
               ><?php echo e($tipo->nombre_documento); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
         </select>
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control select2" style="width: 100%" id="localidad" name="localidad"  required="required">
           <option value="">Localidad</option>
            <?php $__currentLoopData = $localidad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option 
                    value="<?php echo e($tipo->id); ?>" 
               ><?php echo e($tipo->nombre_loc); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
         </select>

    </div>
    <div class="form-group col-sm-4">
         <select class="form-control select2" style="width: 100%" id="empresa" name="empresa"  required="required">
           <option value="">Empresa</option>
            <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option 
                    value="<?php echo e($tipo->id); ?>" 
               ><?php echo e($tipo->razon_social); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
         </select>
    </div>
     <div class="form-group col-sm-4">
        <select class="form-control select2" style="width: 100%" id="auditor" name="auditor"  required="required">
             <option value="">Auditor</option>
              <?php $__currentLoopData = $auditor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <option 
                      value="<?php echo e($tipo->id); ?>" 
                 ><?php echo e($tipo->usuario); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
           </select> 
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control select2" style="width: 100%" id="gerente" name="gerente"  required="required">
             <option value="">Gerente</option>
              <?php $__currentLoopData = $gerentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <option 
                      value="<?php echo e($tipo2->id); ?>" 
                 ><?php echo e($tipo2->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
           </select>
    </div> 
</div>
<div class="row">
   
   
    
    <div class="form-group col-sm-12">
        <br>

         <button title="Cargar Informe" type="submit" class="btn btn_gris pull-right"><i class="fa fa-upload"></i> Cargar Informe</button>
  
</div>

</form>
<hr>
<div class="col-md-12" style="overflow-x: auto;">
    <table class="table table-striped table-bordered zero-configuration display small" >
        <thead>
            <tr>
                <!--<th>Archivo</th>
                <th>Localidad</th>
                <th>Empresa</th>
                <th>Año</th>
                <th>Trimestre</th>--->
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
               <!-- <td><?php echo e($hallazgos->archivo); ?></td>
                <td><?php echo e($hallazgos->localidad); ?></td>
                <td><?php echo e($hallazgos->empresa); ?></td>
                <td><?php echo e($hallazgos->anio); ?></td>
                <td><?php echo e($hallazgos->trimestre); ?></td>--->
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