<div class="row">
  <div class="col-md-6">
    <table class="table table-bordered table-striped small" >
      <tr>
        <td>Periodo</td>
        <td>Año: <?php echo e($auditaHallazgo->anio); ?>, Trimestre: <?php echo e($auditaHallazgo->trimestre); ?>, Calificación: <?php echo e($auditaHallazgo->calificacion); ?>, Folio <?php echo e($auditaHallazgo->id); ?> </td>
      </tr>
    </table>
    <table class="table table-bordered table-striped small" >

       <tr>
         <td>Año: </td>
         <td></td>
         <td>Trimestre: </td>
         <td></td>
       </tr>
       <tr>
          <td>Dirección: </td>
          <td><?php echo e($auditaHallazgo->direccion); ?></td>
          <td>Region: </td>
          <td><?php echo e($auditaHallazgo->region); ?>

        </td>
      </tr>
      <tr>
          <td>Auditor 1: </td>
          <td><?php echo e($auditaHallazgo->auditor); ?></td>
          <td>Auditor 2: </td>
         <td><?php echo e($auditaHallazgo->auditor2); ?></td>
      </tr>
       <tr>
         <td>Proceso: </td>
         <td><?php echo e($auditaHallazgo->proceso); ?></td>
         <td>Depto: </td>
         <td><?php echo e($auditaHallazgo->depto); ?></td>
       </tr>
       <tr>
         <td>Area: </td>
         <td><?php echo e($auditaHallazgo->area); ?></td>
         <td>Responsable: </td>
         <td><?php echo e($auditaHallazgo->responsable); ?></td>
       </tr>
       <tr>
         <td>Calificacion: </td>
         <td><?php echo e($auditaHallazgo->calificacion); ?></td>
         <td>Responsable: </td>
         <td><?php echo e($auditaHallazgo->responsable); ?></td>
       </tr>
       <tr>
         <td>Fecha Inf: </td>
         <td><?php echo e($auditaHallazgo->fecha_inf); ?></td>
         <td>Fecha Com: </td>
         <td><?php echo e($auditaHallazgo->fecha_com); ?></td>
       </tr>
       <tr>
         <td>Estatus: </td>
         <td><?php echo e($auditaHallazgo->estatus); ?></td>
         <td>Archivo: </td>
         <td><?php echo e($auditaHallazgo->archivo); ?></td>
       </tr>

       <tr>
         <td>Fila: </td>
         <td><?php echo e($auditaHallazgo->fila); ?></td>
         <td>Fila Id: </td>
         <td><?php echo e($auditaHallazgo->fila_id); ?></td>
       </tr>
    </table>
  </div>
  <div class="col-md-6">
    <table class="table table-bordered table-striped small">
       <tr>
         <td>Anexo: </td>
         <td><?php echo e($auditaHallazgo->anexo); ?></td>
         <td>Comentarios: </td>
         <td><?php echo e($auditaHallazgo->comentarios); ?></td>
       </tr>
       
       <tr>
         <td>Num Apoyo: </td>
         <td><?php echo e($auditaHallazgo->num_apoyo); ?></td>
         <td>Jefatura: </td>
         <td><?php echo e($auditaHallazgo->jefatura); ?></td>
       </tr>
       <tr>
         <td>Gerencia: </td>
         <td><?php echo e($auditaHallazgo->gerencia); ?></td>
         <td>Fec Usr: </td>
         <td><?php echo e($auditaHallazgo->fec_usr); ?></td>
       </tr>
       <tr>
         <td>Aud Tip Val: </td>
         <td><?php echo e($auditaHallazgo->aud_tip_val); ?></td>
         <td>Aud Monto: </td>
         <td><?php echo e($auditaHallazgo->aud_monto); ?></td>
       </tr>
       <tr>
         <td>Año Folio: </td>
         <td><?php echo e($auditaHallazgo->ano_folio); ?></td>
         <td>Aud Reincidente: </td>
         <td><?php echo e($auditaHallazgo->aud_reincidente); ?></td>
       </tr>
       <tr>
         <td>Aud Com Anexo: </td>
         <td><?php echo e($auditaHallazgo->aud_com_anexo); ?></td>
         <td>Aud Fir Val: </td>
         <td><?php echo e($auditaHallazgo->aud_fir_val); ?></td>
       </tr>
       <tr>
         <td>Aud Fec Asignado: </td>
         <td><?php echo e($auditaHallazgo->aud_fec_asignado); ?></td>
         <td>Aud Fec Revisado: </td>
         <td><?php echo e($auditaHallazgo->aud_fec_revisado); ?></td>
       </tr>
       <tr>
         <td>Aud Fec Final: </td>
         <td><?php echo e($auditaHallazgo->aud_fec_final); ?></td>
         <td>User Id: </td>
         <td><?php echo e($auditaHallazgo->user_id); ?></td>
       </tr>
       <tr>
         <td>Enviar Mail: </td>
         <td><?php echo e($auditaHallazgo->enviar_mail); ?></td>
         <td>User Id Resp: </td>
         <td><?php echo e($auditaHallazgo->user_id_resp); ?></td>
       </tr>
       <tr>
         <td>Tipo: </td>
         <td><?php echo e($auditaHallazgo->tipo); ?></td>
         
         <td>Situación: </td>
         <td><?php echo e($auditaHallazgo->situacion); ?></td>
        </tr>                     
    </table>  
  </div>
  <div class="col-md-12">
    <table class="table table-striped table-bordered small">
      <tr>
         <td colspan="2">Hallazgo: </td> 
         <td colspan="2"><?php echo e($auditaHallazgo->hallazgo); ?></td>
       
       </tr>
       <tr>
         <td colspan="2">Recomendacion: </td>
         <td colspan="2"><?php echo e($auditaHallazgo->recomendacion); ?></td>   
       </tr>
       <tr>
         <td colspan="2">Riesgo: </td>
         <td colspan="2"><?php echo e($auditaHallazgo->riesgo); ?></td>
       </tr>
       <tr>
         <td colspan="2">Accion: </td>
         <td colspan="2"><?php echo e($auditaHallazgo->accion); ?></td>
       </tr>
       <tr>
         <td colspan="2">Accion2: </td>
         <td colspan="2"><?php echo e($auditaHallazgo->accion2); ?></td>
       </tr> 
    </table>
  </div>
</div>
            
<?php /**PATH C:\wamp64\www\laravel\Auditoria_snap\resources\views/audita_hallazgos/show_fields.blade.php ENDPATH**/ ?>