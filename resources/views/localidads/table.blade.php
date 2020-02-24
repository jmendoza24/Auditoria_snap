
<table class="table table-striped table-bordered zero-configuration display" >
        <thead>
         <tr class="gris">
                <th>Localidad</th>
                <th ></th>
            </tr>
        </thead>
        <tbody>
        @foreach($localidads as $localidads)
            <tr>
                <td>{{ $localidads->nombre_loc }}</td>
                <td style="text-align: center;">
                    {!! Form::open(['route' => ['localidads.destroy', $localidads->id], 'method' => 'delete','id'=>'emp']) !!}
                    <div class="btn-group" role="group" aria-label="Second Group">   
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a class="btn  btn_gris" href="{!! route('localidads.edit', [$localidads->id]) !!}"><i class="fa fa-pencil"></i></a>
                          <a class="btn  btn_rojo" href="#"  onclick="borra_localidad({{ $localidads->id }})"><i class="fa fa-trash"></i></a>
                        </div>                
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
