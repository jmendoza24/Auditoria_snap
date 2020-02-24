@extends('layouts.app')
@section('titulo')Nuevo carga @if($valido==1) <br><br>
<a title="Regresar" class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('hallazgos.index') !!}"> <i class="fa fa-undo"></i> Regresar</a><br><br><br>
<a title="Guardar Formato" class="btn btn_gris pull-right" style="margin-top: -10px;margin-bottom: 5px" href="#" onclick="guardar_informe()"> <i class="fa fa-floppy-o"></i> Guardar</a>

 @endif @endsection

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
         <select class="form-control select2" style="width: 100%" id="narchivo" name="narchivo"  required="required">
           <option value="">Selecciona Documento</option>
            @foreach($documentos as $tipo)
               <option 
                    value="{{ $tipo->id }}" 
               >{{ $tipo->nombre_documento }}</option>
            @endforeach   
         </select>
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control select2" style="width: 100%" id="localidad" name="localidad"  required="required">
           <option value="">Localidad</option>
            @foreach($localidad as $tipo)
               <option 
                    value="{{ $tipo->id }}" 
               >{{ $tipo->nombre_loc }}</option>
            @endforeach   
         </select>

    </div>
    <div class="form-group col-sm-4">
         <select class="form-control select2" style="width: 100%" id="empresa" name="empresa"  required="required">
           <option value="">Empresa</option>
            @foreach($empresas as $tipo)
               <option 
                    value="{{ $tipo->id }}" 
               >{{ $tipo->razon_social }}</option>
            @endforeach   
         </select>
    </div>
     <div class="form-group col-sm-4">
        <select class="form-control select2" style="width: 100%" id="auditor" name="auditor"  required="required">
             <option value="">Auditor</option>
              @foreach($auditor as $tipo)
                 <option 
                      value="{{ $tipo->id }}" 
                 >{{ $tipo->usuario }}</option>
              @endforeach   
           </select> 
    </div>
    <div class="form-group col-sm-4">
        <select class="form-control select2" style="width: 100%" id="gerente" name="gerente"  required="required">
             <option value="">Gerente</option>
              @foreach($gerentes as $tipo2)
                 <option 
                      value="{{ $tipo2->id }}" 
                 >{{ $tipo2->name }}</option>
              @endforeach   
           </select>
    </div> 
</div>
<div class="row">
   
   
    
    <div class="form-group col-sm-12">
        <br>

         <button title="Cargar Informe" type="submit" class="btn btn_gris pull-right"><i class="fa fa-upload"></i> Cargar Informe</button>
  
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
