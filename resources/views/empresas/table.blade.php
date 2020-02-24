  
<table class="table table-striped table-bordered zero-configuration display" >
        <thead>
         <tr class="gris">
                <th>Empresa</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($empresas as $empresas)
            <tr>
                <td>{{ $empresas->razon_social }}</td>
                <td style="text-align: center;">
                    {!! Form::open(['route' => ['empresas.destroy', $empresas->id], 'method' => 'delete','id'=>'emp']) !!}
                    <div class="btn-group" role="group" aria-label="Second Group">   
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a class="btn  btn_gris" href="{!! route('empresas.edit', [$empresas->id]) !!}"><i class="fa fa-pencil"></i></a>
                          <a class="btn  btn_rojo" href="#"  onclick="borra_empresa({{ $empresas->id }})"><i class="fa fa-trash"></i></a>
                        </div>                
                    </div>
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

