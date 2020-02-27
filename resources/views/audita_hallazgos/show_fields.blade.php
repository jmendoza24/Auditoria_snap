<div class="row">
  <div class="col-md-6">
    <table class="table table-bordered table-striped small" >
      <tr>
        <td>Periodo</td>
        <td>Año: {{ $auditaHallazgo->anio }}, Trimestre: {{ $auditaHallazgo->trimestre }}, Calificación: {{ $auditaHallazgo->calificacion}}, Folio {{ $auditaHallazgo->id }} </td>
      </tr>
      <tr>
        <td>Responsable:</td>
        <td>{{$auditaHallazgo->nresponsable}}</td>
      </tr>
      <tr>
        <td>Auditor:</td>
        <td>{{ $auditaHallazgo->nauditor}}</td>
      </tr>
      <tr>
        <td>Auditor 2:</td>
        <td>{{ $auditaHallazgo->nauditor2}}</td>
      </tr>
      <tr>
        <td>Jefatura/Ger. (Del responsable):</td>
        <td>{{ $auditaHallazgo->njefatura}}</td>
      </tr>
      <tr>
        <td>Gerencia/Dir.(Del responsable): </td>
        <td>{{ $auditaHallazgo->ngerencia}}</td>
      </tr>
      <tr>
        <td>Region: </td>
        <td>{{ $auditaHallazgo->region }}</td>
      </tr>
      <tr>
        <td>Dirección: </td>
        <td>{{ $auditaHallazgo->direccion }}</td>
      </tr>
      <tr>
         <td>Tipo de revisión: </td>
         <td>{{ $auditaHallazgo->archivo }}</td>
      </tr>
      <tr>
        <td>Localidad auditada:</td>
        <td>{{ $auditaHallazgo->proceso}}</td>
      </tr>
      <tr>
        <td>Area: </td>
        <td>{{ $auditaHallazgo->area }}</td>
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
         <td>{{ $auditaHallazgo->hallazgo }}</td>
       </tr>
       <tr>
         <td>Recomendación: </td>
         <td>{{ $auditaHallazgo->recomendacion }}</td>   
       </tr>
       <tr>
         <td>Acción solicitada:</td>
         <td>{{ $auditaHallazgo->accion}}</td>
       </tr>
       <!--<tr>
         <td>Fecha notificación:</td>
         <td>{{ $auditaHallazgo->fecha_inf}}</td>
        </tr>-->
        <tr>
         <td>Fecha compromiso:</td>
         <td>{{ $auditaHallazgo->fecha_com}}</td>
        </tr>
        <!--<tr>
         <td>Fecha estatus:</td>
         <td>{{ $auditaHallazgo->estatus}}</td>
       </tr>-->
       <tr>
         <td>Situación Actual </td>
         <td>{{ $auditaHallazgo->situacion}}</td>
       </tr>
       <tr>
         <td>Acción realizada Correctiva </td>
         <td>{{ $auditaHallazgo->accion2}}</td>
       </tr>
       <tr>
         <td>Acción realizada Preventiva </td>
         <td>{{$auditaHallazgo->comentarios}}</td>
       </tr>
    </table>
  </div>
</div>
<h5>Comentarios</h5>
<hr>
<form method="POST" action=""  enctype="multipart/form-data" id="formUpload">
<div class="row">
  <input type="hidden" name="id_hallazgo" value="{{ $auditaHallazgo->id}}">
    @csrf
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
    @include('info_comentarios.table')
  </div>
</div>
            
