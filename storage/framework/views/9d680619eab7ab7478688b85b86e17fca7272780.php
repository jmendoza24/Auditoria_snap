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
</div><?php /**PATH /var/www/html/auditoria/resources/views/audita_hallazgos/fields.blade.php ENDPATH**/ ?>