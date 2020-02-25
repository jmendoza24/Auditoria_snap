<div class="row">
  <div class="col-md-6">
    <table class="table table-bordered table-striped small" >
      <tr>
        <td>Periodo</td>
        <td>Año: {{ $auditaHallazgo->anio }}, Trimestre: {{ $auditaHallazgo->trimestre }}, Calificación: {{ $auditaHallazgo->calificacion}}, Folio {{ $auditaHallazgo->id }} </td>
      </tr>
      <tr>
        <td>Responsable:</td>
        <td></td>
      </tr>
      <tr>
        <td>Auditor:</td>
        <td></td>
      </tr>
      <tr>
        <td>Jefatura/Ger. (Del responsable):</td>
        <td></td>
      </tr>
      <tr>
        <td>Gerencia/Dir.(Del responsable): </td>
        <td></td>
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
          <td>{{ $auditaHallazgo->direccion }}</td>
          <td>Region: </td>
          <td>{{ $auditaHallazgo->region }}
        </td>
      </tr>
      <tr>
          <td>Auditor 1: </td>
          <td>{{ $auditaHallazgo->auditor }}</td>
          <td>Auditor 2: </td>
         <td>{{ $auditaHallazgo->auditor2 }}</td>
      </tr>
       <tr>
         <td>Proceso: </td>
         <td>{{ $auditaHallazgo->proceso }}</td>
         <td>Depto: </td>
         <td>{{ $auditaHallazgo->depto }}</td>
       </tr>
       <tr>
         <td>Area: </td>
         <td>{{ $auditaHallazgo->area }}</td>
         <td>Responsable: </td>
         <td>{{ $auditaHallazgo->responsable }}</td>
       </tr>
       <tr>
         <td>Calificacion: </td>
         <td>{{ $auditaHallazgo->calificacion }}</td>
         <td>Responsable: </td>
         <td>{{ $auditaHallazgo->responsable }}</td>
       </tr>
       <tr>
         <td>Fecha Inf: </td>
         <td>{{ $auditaHallazgo->fecha_inf }}</td>
         <td>Fecha Com: </td>
         <td>{{ $auditaHallazgo->fecha_com }}</td>
       </tr>
       <tr>
         <td>Estatus: </td>
         <td>{{ $auditaHallazgo->estatus }}</td>
         <td>Archivo: </td>
         <td>{{ $auditaHallazgo->archivo }}</td>
       </tr>

       <tr>
         <td>Fila: </td>
         <td>{{ $auditaHallazgo->fila }}</td>
         <td>Fila Id: </td>
         <td>{{ $auditaHallazgo->fila_id }}</td>
       </tr>
    </table>
  </div>
  <div class="col-md-6">
    <table class="table table-bordered table-striped small">
       <tr>
         <td>Anexo: </td>
         <td>{{ $auditaHallazgo->anexo }}</td>
         <td>Comentarios: </td>
         <td>{{ $auditaHallazgo->comentarios }}</td>
       </tr>
       
       <tr>
         <td>Num Apoyo: </td>
         <td>{{ $auditaHallazgo->num_apoyo }}</td>
         <td>Jefatura: </td>
         <td>{{ $auditaHallazgo->jefatura }}</td>
       </tr>
       <tr>
         <td>Gerencia: </td>
         <td>{{ $auditaHallazgo->gerencia }}</td>
         <td>Fec Usr: </td>
         <td>{{ $auditaHallazgo->fec_usr }}</td>
       </tr>
       <tr>
         <td>Aud Tip Val: </td>
         <td>{{ $auditaHallazgo->aud_tip_val }}</td>
         <td>Aud Monto: </td>
         <td>{{ $auditaHallazgo->aud_monto }}</td>
       </tr>
       <tr>
         <td>Año Folio: </td>
         <td>{{ $auditaHallazgo->ano_folio }}</td>
         <td>Aud Reincidente: </td>
         <td>{{ $auditaHallazgo->aud_reincidente }}</td>
       </tr>
       <tr>
         <td>Aud Com Anexo: </td>
         <td>{{ $auditaHallazgo->aud_com_anexo }}</td>
         <td>Aud Fir Val: </td>
         <td>{{ $auditaHallazgo->aud_fir_val }}</td>
       </tr>
       <tr>
         <td>Aud Fec Asignado: </td>
         <td>{{ $auditaHallazgo->aud_fec_asignado }}</td>
         <td>Aud Fec Revisado: </td>
         <td>{{ $auditaHallazgo->aud_fec_revisado }}</td>
       </tr>
       <tr>
         <td>Aud Fec Final: </td>
         <td>{{ $auditaHallazgo->aud_fec_final }}</td>
         <td>User Id: </td>
         <td>{{ $auditaHallazgo->user_id }}</td>
       </tr>
       <tr>
         <td>Enviar Mail: </td>
         <td>{{ $auditaHallazgo->enviar_mail }}</td>
         <td>User Id Resp: </td>
         <td>{{ $auditaHallazgo->user_id_resp }}</td>
       </tr>
       <tr>
         <td>Tipo: </td>
         <td>{{ $auditaHallazgo->tipo }}</td>
         
         <td>Situación: </td>
         <td>{{ $auditaHallazgo->situacion }}</td>
        </tr>                     
    </table>  
  </div>
  <div class="col-md-12">
    <table class="table table-striped table-bordered small">
      <tr>
         <td colspan="2">Hallazgo: </td> 
         <td colspan="2">{{ $auditaHallazgo->hallazgo }}</td>
       
       </tr>
       <tr>
         <td colspan="2">Recomendacion: </td>
         <td colspan="2">{{ $auditaHallazgo->recomendacion }}</td>   
       </tr>
       <tr>
         <td colspan="2">Riesgo: </td>
         <td colspan="2">{{ $auditaHallazgo->riesgo }}</td>
       </tr>
       <tr>
         <td colspan="2">Accion: </td>
         <td colspan="2">{{ $auditaHallazgo->accion }}</td>
       </tr>
       <tr>
         <td colspan="2">Accion2: </td>
         <td colspan="2">{{ $auditaHallazgo->accion2 }}</td>
       </tr> 
    </table>
  </div>
</div>
            
