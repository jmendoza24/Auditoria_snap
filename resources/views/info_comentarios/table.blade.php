<table class="table table-striped table-bordered small" >
    <thead>
        <tr class="gris">
            <th>Usuario</th>
            <th>Comentarios</th>
            <th>Archivo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($infoComentarios as $infoComentarios)
        <tr>
            <td>
                <b>{{ $infoComentarios->tipo_user}}</b><br/>
                {{ $infoComentarios->nombre_user }}</td>
            <td>{{ $infoComentarios->comentarios }} <br/> - ({{ substr($infoComentarios->fecha,0,10) }})</td>
            <td><a href="{{ $infoComentarios->archivo }}" target="_blank">{{ str_replace('storage/hallazgos/', '', $infoComentarios->archivo ) }} </td>
            <td>
                @if(Auth::user()->id==$infoComentarios->id_usuario or Auth::user()->tipo==1)
                <span class="btn btn-danger btn-sm" onclick="borra_comentario({{ $infoComentarios->id }},{{ $infoComentarios->id_hallazgo }})"><i class="fa fa-trash"></i></span>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
