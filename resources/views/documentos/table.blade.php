  
<table class="table table-striped table-bordered zero-configuration display" >
        <thead>
         <tr class="gris">
                <th>Nombre Documento</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($documentos as $documentos)
            <tr>
                <td>{{ $documentos->nombre_documento }}</td>
                <td style="text-align: center;">
                    {!! Form::open(['route' => ['documentos.destroy', $documentos->id], 'method' => 'delete','id'=>'doc']) !!}
                    <div class="btn-group" role="group" aria-label="Second Group">   
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a class="btn  btn_gris" href="{!! route('documentos.edit', [$documentos->id]) !!}"><i class="fa fa-pencil"></i></a>
                          <a class="btn  btn_rojo" href="#"  onclick="borra_doc({{ $documentos->id }})"><i class="fa fa-trash"></i></a>
                        </div>                
                    </div>
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

