<table class="table table-striped table-bordered zero-configuration display small" >
        <thead>
         <tr class="gris">
        <th>Id</th>
        <th>Año</th>
        <th>Trimestre</th>
        <th>Región</th>
        <th>Dirección</th>
        <th>Auditor</th>
        <th>Auditor2</th>
        <th>Proceso</th>
        <th>Depto</th>
        <th>Area</th>
        <th>Responsable</th>
        <th>Calificacion</th>
        <th>Hallazgo</th>
        <th>Recomendación</th>
        <th>Riesgo</th>
        <th>Accion</th>
        <th>Fecha Inf</th>
        <th>Fecha Com</th>
        <th>Estatus</th>
        <th>Archivo</th>
        <th>Fila</th>
        <th>Fila Id</th>
        <th>Anexo</th>
        <th>Comentarios</th>
        <th>Accion2</th>
        <th>Situación</th>
        <th># Apoyo</th>
        <th>Jefatura</th>
        <th>Gerencia</th>
        <th>Fec Usr</th>
        <th>Aud Tip Val</th>
        <th>Aud Monto</th>
        <th>Ano Folio</th>
        <th>Aud Reincidente</th>
        <th>Aud Com Anexo</th>
        <th>Aud Fir Val</th>
        <th>Aud Fec Asignado</th>
        <th>Aud Fec Revisado</th>
        <th>Aud Fec Final</th>
        <th>User Id</th>
        <th>Enviar Mail</th>
        <th>User Id Resp</th>
        <th>Tipo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($auditaHallazgos as $auditaHallazgo)
            <tr>
                <td>{{ $auditaHallazgo->id }}</td>
            <td>{{ $auditaHallazgo->anio }}</td>
            <td>{{ $auditaHallazgo->trimestre }}</td>
            <td>{{ $auditaHallazgo->region }}</td>
            <td>{{ $auditaHallazgo->direccion }}</td>
            <td>{{ $auditaHallazgo->auditor }}</td>
            <td>{{ $auditaHallazgo->auditor2 }}</td>
            <td>{{ $auditaHallazgo->proceso }}</td>
            <td>{{ $auditaHallazgo->depto }}</td>
            <td>{{ $auditaHallazgo->area }}</td>
            <td>{{ $auditaHallazgo->responsable }}</td>
            <td>{{ $auditaHallazgo->calificacion }}</td>
            <td>{{ $auditaHallazgo->hallazgo }}</td>
            <td>{{ $auditaHallazgo->recomendacion }}</td>
            <td>{{ $auditaHallazgo->riesgo }}</td>
            <td>{{ $auditaHallazgo->accion }}</td>
            <td>{{ $auditaHallazgo->fecha_inf }}</td>
            <td>{{ $auditaHallazgo->fecha_com }}</td>
            <td>{{ $auditaHallazgo->estatus }}</td>
            <td>{{ $auditaHallazgo->archivo }}</td>
            <td>{{ $auditaHallazgo->fila }}</td>
            <td>{{ $auditaHallazgo->fila_id }}</td>
            <td>{{ $auditaHallazgo->anexo }}</td>
            <td>{{ $auditaHallazgo->comentarios }}</td>
            <td>{{ $auditaHallazgo->accion2 }}</td>
            <td>{{ $auditaHallazgo->situacion }}</td>
            <td>{{ $auditaHallazgo->num_apoyo }}</td>
            <td>{{ $auditaHallazgo->jefatura }}</td>
            <td>{{ $auditaHallazgo->gerencia }}</td>
            <td>{{ $auditaHallazgo->fec_usr }}</td>
            <td>{{ $auditaHallazgo->aud_tip_val }}</td>
            <td>{{ $auditaHallazgo->aud_monto }}</td>
            <td>{{ $auditaHallazgo->ano_folio }}</td>
            <td>{{ $auditaHallazgo->aud_reincidente }}</td>
            <td>{{ $auditaHallazgo->aud_com_anexo }}</td>
            <td>{{ $auditaHallazgo->aud_fir_val }}</td>
            <td>{{ $auditaHallazgo->aud_fec_asignado }}</td> 
            <td>{{ $auditaHallazgo->aud_fec_revisado }}</td>
            <td>{{ $auditaHallazgo->aud_fec_final }}</td>
            <td>{{ $auditaHallazgo->user_id }}</td>
            <td>{{ $auditaHallazgo->enviar_mail }}</td>
            <td>{{ $auditaHallazgo->user_id_resp }}</td>
            <td>{{ $auditaHallazgo->tipo }}</td>
                <td>
                    {!! Form::open(['route' => ['auditaHallazgos.destroy', $auditaHallazgo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('auditaHallazgos.show', [$auditaHallazgo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('auditaHallazgos.edit', [$auditaHallazgo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
