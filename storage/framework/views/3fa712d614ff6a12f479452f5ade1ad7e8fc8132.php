<div class="row">
  <div class="col-md-6">
    <table class="table table-bordered table-striped small" >
      <tr>
        <td>Periodo</td>
        <td>Año: <?php echo e($auditaHallazgo->anio); ?>, Trimestre: <?php echo e($auditaHallazgo->trimestre); ?>, Calificación: <?php echo e($auditaHallazgo->calificacion); ?>, Folio <?php echo e($auditaHallazgo->id); ?> </td>
      </tr>
      <tr>
        <td>Responsable:</td>
        <td><?php echo e($auditaHallazgo->nresponsable); ?></td>
      </tr>
      <tr>
        <td>Auditor:</td>
        <td><?php echo e($auditaHallazgo->nauditor); ?></td>
      </tr>
      <tr>
        <td>Auditor 2:</td>
        <td><?php echo e($auditaHallazgo->nauditor2); ?></td>
      </tr>
      <tr>
        <td>Jefatura/Ger. (Del responsable):</td>
        <td><?php echo e($auditaHallazgo->njefatura); ?></td>
      </tr>
      <tr>
        <td>Gerencia/Dir.(Del responsable): </td>
        <td><?php echo e($auditaHallazgo->ngerencia); ?></td>
      </tr>
      <tr>
        <td>Region: </td>
        <td><?php echo e($auditaHallazgo->region); ?></td>
      </tr>
      <tr>
        <td>Dirección: </td>
        <td><?php echo e($auditaHallazgo->direccion); ?></td>
      </tr>
      <tr>
         <td>Tipo de revisión: </td>
         <td><?php echo e($auditaHallazgo->archivo); ?></td>
      </tr>
      <tr>
        <td>Localidad auditada:</td>
        <td><?php echo e($auditaHallazgo->proceso); ?></td>
      </tr>
      <tr>
        <td>Area: </td>
        <td><?php echo e($auditaHallazgo->area); ?></td>
      </tr>
      <tr>
        <td>Estatus:</td>
        <td></td>
      </tr>
    </table>
    
  </div>
  <div class="col-md-6">
    <table class="table table-bordered table-striped small">
      <tr>
         <td>Hallazgo: </td> 
         <td><?php echo e($auditaHallazgo->hallazgo); ?></td>
       </tr>
       <tr>
         <td>Recomendación: </td>
         <td><?php echo e($auditaHallazgo->recomendacion); ?></td>   
       </tr>
       <tr>
         <td>Acción solicitada:</td>
         <td><?php echo e($auditaHallazgo->accion); ?></td>
       </tr>
       <!--<tr>
         <td>Fecha notificación:</td>
         <td><?php echo e($auditaHallazgo->fecha_inf); ?></td>
        </tr>-->
        <tr>
         <td>Fecha compromiso:</td>
         <td><?php echo e($auditaHallazgo->fecha_com); ?></td>
        </tr>
        <!--<tr>
         <td>Fecha estatus:</td>
         <td><?php echo e($auditaHallazgo->estatus); ?></td>
       </tr>-->
       <tr>
         <td>Situación Actual </td>
         <td><?php echo e($auditaHallazgo->situacion); ?></td>
       </tr>
       <tr>
         <td>Acción realizada Correctiva </td>
         <td><?php echo e($auditaHallazgo->accion2); ?></td>
       </tr>
       <tr>
         <td>Acción realizada Preventiva </td>
         <td><?php echo e($auditaHallazgo->comentarios); ?></td>
       </tr>
    </table>
  </div>
</div>
<h5>Comentarios</h5>
<hr>
<form method="POST" action=""  enctype="multipart/form-data" id="formUpload">
<div class="row">
  <input type="hidden" name="id_hallazgo" value="<?php echo e($auditaHallazgo->id); ?>">
    <?php echo csrf_field(); ?>
      <div class="col-md-4">
        <textarea style="" class="form-control" id="comentarios" name="comentarios" placeholder="Comentarios"></textarea>
      </div>
      <div class="col-md-3">
        <input type="file" name="archivo" id="archivo" class="form-control">
      </div>        
      <div class="col-md-3">
        <select class="form-control" name="estatus">
          <option value="">Seleccione...</option>
          <option value="0">Rechazar</option>
          <option value="1">Autorizar</option>
        </select>
      </div>
      <div class="col-md-1">
        <span class="btn btn-success" onclick="guarda_comentario()">Guardar</span>
      </div>
</div>
</form>
<br>
<div class="row">
  <div class="col-md-12" id="comentarios_table">
    <?php echo $__env->make('info_comentarios.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</div>
            
<?php /**PATH C:\wamp64\www\laravel\Auditoria_snap\resources\views/audita_hallazgos/show_fields.blade.php ENDPATH**/ ?>