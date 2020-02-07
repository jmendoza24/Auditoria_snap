@extends('layouts.app')
@section('titulo')Asginacion @endsection
@section('content')
  <div class="col-md-12" style="overflow-x: auto;">
    <table class="table table-bordered table-striped small">
        <thead>
            <tr>
                <th>Año</th>
                <th>Trimestre</th>
                <th>Hallazgo</th>
                <th>Tipo</th>
                <th>Recomendacion</th>
                <th>Riesgo</th>
                <th>Responsable</th>
                <th>Causa raiz</th>
                <th>Accion</th>
                <th>Compromiso</th>
                <th>Calificación</th>
                <th>Calif. Num</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hallazgos as $hallazgos)
            <tr>
                <td>{{ $hallazgos->anio}}</td>
                <td>{{ $hallazgos->trimestre}}</td>
                <td><?php echo substr(nl2br($hallazgos->hallazgo),0,150); ?>...</td>
                <td>{{$hallazgos->tipo}}</td>
                <td><?php echo substr(nl2br($hallazgos->recomendacion),0,150); ?>...</td>
                <td>{{$hallazgos->riesgo}}</td>
                <td><span class="badge badge-{{($hallazgos->valida==1)?'success':'danger'}}">{{$hallazgos->responsable}}</span></td>
                <td><?php echo substr(nl2br($hallazgos->causa_raiz),0,150); ?>...</td>
                <td><?php echo substr(nl2br($hallazgos->accion),0,150);?>...</td>
                <td>{{$hallazgos->compromiso}}</td>
                <td>{{$hallazgos->calificacion}}</td>
                <td><span class="badge badge-{{($hallazgos->calif_numerico*1>0)?'success':'danger'}}">{{$hallazgos->calif_numerico}}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
@endsection

