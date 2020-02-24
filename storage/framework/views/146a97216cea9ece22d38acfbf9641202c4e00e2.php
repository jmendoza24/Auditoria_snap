<div class="row">
  <?php echo Form::hidden('id', null, ['class' => 'form-control']); ?>


  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Año:</label>
      <div class="col-md-9">
      <?php echo Form::number('anio', null, ['min'=>'0','step'=>'any','class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Trimestre:</label>
      <div class="col-md-9">
        <select class="form-control" name="trimestre" required="">
          <option value="">Seleccione...</option>
          <?php for($i=1; $i<=4; $i++): ?>
            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
          <?php endfor; ?>
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Dirección:</label>
      <div class="col-md-9">
      <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Region:</label>
      <div class="col-md-9">
        <?php echo Form::text('region', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Auditor 1:</label>
      <div class="col-md-9">
        <select class="form-control" id="auditor" name="auditor" style="width: 100%">
          <option value="0">selecciona una opción</option>
          <?php $__currentLoopData = $auditores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auditores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($auditores->id); ?>"><?php echo e($auditores->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Auditor 2:</label>
      <div class="col-md-9">
        <select class="form-control" id="auditor2" name="auditor2" style="width: 100%">
          <option value="0">selecciona una opción</option>
          <?php $__currentLoopData = $auditores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auditores2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($auditores2->id); ?>"><?php echo e($auditores2->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Proceso:</label>
      <div class="col-md-9">
        <?php echo Form::text('proceso', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Depto:</label>
      <div class="col-md-9">
        <?php echo Form::text('depto', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Area:</label>
      <div class="col-md-9">
        <?php echo Form::text('area', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Responsable:</label>
      <div class="col-md-9">
        <select class="form-control" id="responsable" name="responsable" style="width: 100%">
         <option value="0">selecciona una opción</option>
         <?php $__currentLoopData = $responsables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $responsable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($responsable->id); ?>"><?php echo e($responsable->name); ?></option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Fecha Inf:</label>
      <div class="col-md-9">
        <?php echo Form::text('fecha_inf', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Fecha Com:</label>
      <div class="col-md-9">
        <?php echo Form::text('fecha_com', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Estatus:</label>
      <div class="col-md-9">
        <?php echo Form::text('estatus', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Gerencia:</label>
      <div class="col-md-9">
        <select class="form-control" id="gerencia" name="gerencia" style="width: 100%">
         <option value="0">selecciona una opción</option>
         <?php $__currentLoopData = $gerentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gerente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($gerente->id); ?>"><?php echo e($gerente->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Calificacion:</label>
      <div class="col-md-9">
        <?php echo Form::text('calificacion', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Calificacion Num:</label>
      <div class="col-md-9">
        <?php echo Form::number('calificacion_num', null, ['min'=>'0','step'=>'any','class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Tipo:</label>
      <div class="col-md-9">
        <?php echo Form::text('tipo', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Empresa:</label>
      <div class="col-md-9">
        <?php echo Form::text('empresa', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Hallazgo:</label>
      <div class="col-md-9">
        <?php echo Form::textarea('hallazgo', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Acción solicitada:</label>
      <div class="col-md-9">
        <?php echo Form::textarea('recomendacion', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Riesgo:</label>
      <div class="col-md-9">
        <?php echo Form::textarea('riesgo', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Acción Preventiva:</label>
      <div class="col-md-9">
        <?php echo Form::textarea('accion', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Acción  Correctiva:</label>
      <div class="col-md-9">
        <?php echo Form::textarea('accion2', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Causa raiz:</label>
      <div class="col-md-9">
        <?php echo Form::textarea('causa_raiz', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-md-3 label-control" for="userinput2">Situacion:</label>
      <div class="col-md-9">
        <?php echo Form::textarea('situacion', null, ['class' => 'form-control']); ?>

      </div>
    </div>
  </div>
  <hr>
<div class="col-md-12">
  <div class=" pull-right">
    <!--<a href="/hallazgos"><span class="btn btn-warning">Cancelar</span></a>--->
    <button type="submit" class="btn btn_azul" ><i class="fa fa-check-square-o"></i> Guardar</button>
  </div>
</div>


</div>
<!---
 <div class="card-content">
      <div class="table-responsive">
           <table class="table-responsive table table-bordered" >
             <tr><?php echo Form::hidden('id', null, ['class' => 'form-control']); ?>

               <td><h5 class="">Año: </h5></td>
               <td><?php echo Form::number('anio', null, ['min'=>'0','step'=>'any','class' => 'form-control']); ?></td>
               <td><h5 class="">Trimestre: </h5></td>
               <td><?php echo Form::number('trimestre', null, ['min'=>'0','step'=>'any','class' => 'form-control']); ?></td>
             </tr>
             <tr>
                <td><h5 class="">Dirección: </h5></td>
               <td><?php echo Form::text('direccion', null, ['class' => 'form-control']); ?></td>
                <td><h5 class="">Region: </h5></td>
               <td><?php echo Form::text('region', null, ['class' => 'form-control']); ?></td>
            </tr>
              
            <tr>
               <td><h5 class="">Auditor 1: </h5></td>
               <td>
                   <select class="form-control" id="auditor" name="auditor" style="width: 100%">
                     <option value="0">selecciona una opción</option>
                   </select>
               <td><h5>Auditor 2: </h5></td>
               <td>
                    <select class="form-control" id="auditor2" name="auditor2" style="width: 100%">
                     <option value="0">selecciona una opción</option>
                   </select>
            </tr>
             <tr>
               <td><h5 class="">Proceso: </h5></td>
               <td><?php echo Form::text('proceso', null, ['class' => 'form-control']); ?></td>
               <td><h5 class="">Depto: </h5></td>
               <td><?php echo Form::text('depto', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td><h5 class="">Area: </h5></td>
               <td><?php echo Form::text('area', null, ['class' => 'form-control']); ?></td>
               <td><h5 class="">Responsable: </h5></td>
               <td>
                    <select class="form-control" id="responsable" name="responsable" style="width: 100%">
                     <option value="0">selecciona una opción</option>
                    </select>
               </td>
             </tr>
             <tr>
               <td><h5 class="">Fecha Inf: </h5></td>
               <td><?php echo Form::text('fecha_inf', null, ['class' => 'form-control']); ?></td>
               <td><h5 class="">Fecha Com: </h5></td>
               <td><?php echo Form::text('fecha_com', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td><h5 class="">Estatus: </h5></td>
               <td><?php echo Form::text('estatus', null, ['class' => 'form-control']); ?></td>
               <td><h5 class="">Archivo: </h5></td>
               <td><?php echo Form::text('archivo', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td><h5 class="">Fila: </h5></td>
               <td><?php echo Form::number('fila', null, ['min'=>'0','step'=>'any','class' => 'form-control']); ?></td>
               <td><h5 class="">Fila Id: </h5></td>
               <td><?php echo Form::text('fila_id', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td><h5 class="">Anexo: </h5></td>
               <td><?php echo Form::text('anexo', null, ['class' => 'form-control']); ?></td>
               <td><h5 class="">Comentarios: </h5></td>
               <td><?php echo Form::textarea('comentarios', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td><h5 class="">Num Apoyo: </h5></td>
               <td><?php echo Form::number('num_apoyo', null, ['min'=>'0','step'=>'any','class' => 'form-control']); ?></td>
               <td><h5 class="">Jefatura: </h5></td>
               <td>
                  <select class="form-control" id="jefatura" name="jefatura" style="width: 100%">
                     <option value="0">selecciona una opción</option>
                    </select>
                </td>
             </tr>
             <tr>
               <td><h5 class="">Gerencia: </h5></td>
               <td>
                    <select class="form-control" id="gerencia" name="gerencia" style="width: 100%">
                     <option value="0">selecciona una opción</option>
                    </select>
                </td>
               <td><h5 class="">Fec Usr: </h5></td>
               <td><?php echo Form::text('fec_usr', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td><h5 class="">Aud Tip Val: </h5></td>
               <td><?php echo Form::text('aud_tip_val', null, ['class' => 'form-control']); ?></td>
               <td><h5 class="">Aud Monto: </h5></td>
               <td><?php echo Form::number('aud_monto', null, ['min'=>'0','step'=>'any','class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td><h5 class="">Año Folio: </h5></td>
               <td><?php echo Form::number('ano_folio', null, ['min'=>'0','step'=>'any','class' => 'form-control']); ?></td>
               <td><h5 class="">Aud Reincidente: </h5></td>
               <td><?php echo Form::text('aud_reincidente', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td><h5 class="">Aud Com Anexo: </h5></td>
               <td><?php echo Form::text('aud_com_anexo', null, ['class' => 'form-control']); ?></td>
               <td><h5 class="">Aud Fir Val: </h5></td>
               <td><?php echo Form::number('aud_fir_val', null, ['min'=>'0','step'=>'any','class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td><h5 class="">Aud Fec Asignado: </h5></td>
               <td><?php echo Form::text('aud_fec_asignado', null, ['class' => 'form-control']); ?></td>
               <td><h5 class="">Aud Fec Revisado: </h5></td>
               <td><?php echo Form::text('aud_fec_revisado', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td><h5 class="">Aud Fec Final: </h5></td>
               <td><?php echo Form::text('aud_fec_final', null, ['class' => 'form-control']); ?></td>
               <td><h5 class="">User Id: </h5></td>
               <td><?php echo Form::text('user_id', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td><h5 class="">Enviar Mail: </h5></td>
               <td>
                    <select class="form-control" id="enviar_mail" name="enviar_mail" style="width: 100%">
                     <option value="0">No</option>
                     <option value="1">Si</option>
                    </select>
               </td>
               <td><h5 class="">User Id Resp: </h5></td>
               <td><?php echo Form::text('user_id_resp', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
                 <td><h5 class="">Tipo: </h5></td>
                 <td><?php echo Form::text('tipo', null, ['class' => 'form-control']); ?></td>
                 <td><h5 class="">Calificacion: </h5></td>
                 <td><?php echo Form::text('calificacion', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
                 <td><h5 class="">Calificacion Num: </h5></td>
                 <td><?php echo Form::number('calificacion_num', null, ['min'=>'0','step'=>'any','class' => 'form-control']); ?></td>
                 <td><h5 class="">Empresa: </h5></td>
                 <td><?php echo Form::text('empresa', null, ['class' => 'form-control']); ?></td>
             </tr>

             <tr>
               <td colspan="2"><h5 class="">Hallazgo: </h5></td> 
               <td colspan="2"><?php echo Form::textarea('hallazgo', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td colspan="2"><h5 class="">Recomendacion: </h5></td>
               <td colspan="2"><?php echo Form::textarea('recomendacion', null, ['class' => 'form-control']); ?></td>   
             </tr>
             <tr>
               <td colspan="2"><h5 class="">Riesgo: </h5></td>
               <td colspan="2"><?php echo Form::textarea('riesgo', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td colspan="2"><h5 class="">Accion: </h5></td>
               <td colspan="2"><?php echo Form::textarea('accion', null, ['class' => 'form-control']); ?></td>
             </tr>
             
             <tr>
               <td colspan="2"><h5 class="">Accion2: </h5></td>
               <td colspan="2"><?php echo Form::textarea('accion2', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
                 <td colspan="2"><h5 class="">causa raiz: </h5></td>
                 <td colspan="2"><?php echo Form::textarea('causa_raiz', null, ['class' => 'form-control']); ?></td>
             </tr>
             <tr>
               <td colspan="2"><h5 class="">Situacion: </h5></td>
               <td colspan="2"><?php echo Form::textarea('situacion', null, ['class' => 'form-control']); ?></td>
             </tr>
                
          </table>    

        <div class="modal-footer" id="footer_clientes_cuentas">
              <button type="submit" class="btn btn_azul" ><i class="fa fa-check-square-o"></i> Guardar</button>
          </div>
        
    </div>
</div>---><?php /**PATH C:\wamp64\www\laravel\Auditoria_snap\resources\views/audita_hallazgos/fields.blade.php ENDPATH**/ ?>