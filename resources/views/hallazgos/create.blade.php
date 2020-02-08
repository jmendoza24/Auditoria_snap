@extends('layouts.app')
@section('titulo')Nuevo carga @if($valido==1) <br><br> <span class="pull-right btn btn-primary" onclick="guardar_informe()">Guardar</span> @endif @endsection

@section('content')
@if($valido==0)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Tu informe cuenta con algunos errores, favor de corregir para poder guardarlo
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<form method="post" action="{{ route('upload.informe')}}" class="form-horizontal" enctype='multipart/form-data'>
    @csrf
<div class="row">
    <div class=" col-sm-4">
        <input type="file" class="form-control" name="archivo" required="">
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control" name="narchivo" required="">
            <option value="">Archivo...</option>
            <option value="Cedis">Cedis</option>
            <option value="Plantas">Plantas</option>
        </select>
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control" name="localidad" required="">
            <option value="">Localidad</option>
            <option value="Acuña">Acuña</option>
            <option value="Colima">Colima</option>
        </select>
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control" name="empresa" required="">
            <option value="">Empresa...</option>
            <option value="Qualtia">Qualtia</option>
            <option value="XO">XO</option>
        </select>
    </div> 
</div>
<div class="row">
    <div class="form-group col-sm-4">
        <input type="text" name="pais" id="pais" class="form-control" placeholder="País">
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control" name="auditor" required="">
            <option value="">Auditor...</option>
            <option value="1">Jacob</option>
            <option value="2">Auditor 2</option>
        </select>
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control" name="gerente" required="">
            <option value="">Gerente...</option>
            <option value="1">Jacob</option>
            <option value="2">Gte 2</option>
        </select>
    </div>
    
    <div class="form-group col-sm-4" style="text-align: left;">
        <br>
        <input type="submit" class="btn btn-success" value="Cargar informe">
    </div>  
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
            @foreach($hallazgos as $hallazgos)
            <tr>
               <!-- <td>{{ $hallazgos->archivo}}</td>
                <td>{{ $hallazgos->localidad}}</td>
                <td>{{ $hallazgos->empresa}}</td>
                <td>{{ $hallazgos->anio}}</td>
                <td>{{ $hallazgos->trimestre}}</td>--->
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
