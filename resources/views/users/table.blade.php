  
  <table class="table table-striped table-bordered zero-configuration display" >
        <thead>
         <tr class="gris">
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{!! $user->name !!}</td>
                <td>{!! $user->email !!}</td>
                <td>
                    @if($user->tipo==0)
                      {{ 'S/n' }}
                    @elseif($user->tipo==1)
                      {{ 'Responsable' }}
                    @elseif($user->tipo==2)
                      {{ 'Auditor' }}
                    @elseif($user->tipo==3)
                     {{ 'Gerente' }}
                    @elseif($user->tipo==4)
                     {{ 'Administrador' }}
                    @endif
                </td>
                <td style="text-align: center;">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete','id'=>'us']) !!}

                    <div class="btn-group" role="group" aria-label="Second Group">   
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a class="btn  btn_gris" href="{!! route('users.edit', [$user->id]) !!}"><i class="fa fa-pencil"></i></a>
                          <a class="btn  btn_rojo" href="#"  onclick="borra_usuario({{ $user->id }})"><i class="fa fa-trash"></i></a>
                        </div>                
                    </div>
                </td>                 
        
            </tr>
        @endforeach
        </tbody>
    </table>

