@extends('layouts.app')
@section('titulo')Nuevo carga @endsection

@section('content')
<form method="post" action="{{ route('upload.informe')}}" class="form-horizontal" enctype='multipart/form-data'>
    @csrf
<div class="row">
    <div class="form-group col-sm-4">
        <select class="form-control" name="archivo">
            <option value="">Archivo...</option>
            <option value="Cedis">Cedis</option>
            <option value="Plantas">Plantas</option>
        </select>
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control" name="localidad">
            <option value="">Localidad</option>
            <option value="Acuña">Acuña</option>
            <option value="Colima">Colima</option>
        </select>
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control" name="">
            <option value="Empresa">Empresa...</option>
            <option value="Qualtia">Qualtia</option>
            <option value="XO">XO</option>
        </select>
    </div>
    <div class="form-group form-inline col-sm-5">
        <label class="">Informe &nbsp;</label>
        <input type="file" class="form-control" name="archivo">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success">
    </div>  
</div>

</form>
<hr>
<div class="col-md-12" style="overflow-x: auto;">
    <table class="table table-bordered table-striped small">
        <thead>
            <tr>
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
