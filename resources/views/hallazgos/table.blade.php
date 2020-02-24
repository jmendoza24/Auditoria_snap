<table class="table table-striped table-bordered zero-configuration display small" >
        <thead>
         <tr class="gris">
            <th>Folio</th>
            <th>Año</th>
            <th>Detalle</th>
            <th>Solicitante</th>
            <th>Aprobación</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($hallazgos as $hallazgos)
        <tr>
            <td>{{ $hallazgos->id }}</td>
            <td>{{ $hallazgos->anio }} ({{ $hallazgos->trimestre }})</td>
            <td><label style="cursor: pointer;" data-toggle="modal" data-backdrop="false" data-target="#primary" onclick="muestra_hallazgo({{ $hallazgos->id }})"> {{ substr($hallazgos->hallazgo,0,100) }}</label></td>
            <td>
                {{ $hallazgos->archivo }} : {{ $hallazgos->proceso }} <br>
                {{ $hallazgos->depto }}
            </td>
            <td>{{ $hallazgos->estatus }}</td>
            <td style="text-align: center;">                 
                <div class="btn-group" role="group" aria-label="Second Group">   
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a title="Ver"  href="{{ route('auditaHallazgos2', ['id'=>$hallazgos->id]) }}" class="btn  btn_azul  btn-group-sm btn" href="#"><i class="fa fa-eye"></i></a>
                      <a title="Editar" href="{{ route('auditaHallazgos.edit', [$hallazgos->id]) }}"  class="btn  btn_gris  btn-group-sm btn" href="#"><i class="fa fa-pencil"></i></a>
                      <a title="Eliminar" class="btn  btn_rojo btn-group-sm btn" href="#" onclick="crf_borrafase()"><i class="fa fa-trash"></i></a>
                  </div>                
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

