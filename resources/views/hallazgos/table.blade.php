<table class="table table-striped table-bordered zero-configuration display small" >
        <thead>
         <tr class="gris">
            <th>Folio</th>
            <th>Año</th>
            <th>Trimestre</th>
            <th>Región</th>
            <th>Dirección</th>
            <th>Auditor</th>
            <th>Proceso</th>
            <th>Responsable</th>
            <th>Calificación</th>
            <th>Estatus</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($hallazgos as $hallazgos)
        <tr>
            <td>{{ $hallazgos->id }}</td>
            <td>{{ $hallazgos->anio }}</td>
            <td>{{ $hallazgos->trimestre }}</td>
            <td>{{ $hallazgos->region }}</td>
            <td>{{ $hallazgos->direccion }}</td>
            <td>{{ $hallazgos->auditor }}</td>
            <td>{{ $hallazgos->responsable }}</td>
            <td>{{ $hallazgos->calificacion }}</td>
            <td>{{ $hallazgos->estatus }}</td>
            <td></td>
            <td>
                {!! Form::open(['route' => ['hallazgos.destroy', $hallazgos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('hallazgos.show', [$hallazgos->id]) }}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{{ route('hallazgos.edit', [$hallazgos->id]) }}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>