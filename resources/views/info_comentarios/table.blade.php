<table class="table table-striped table-bordered zero-configuration display" >
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
            <td>{{ $infoComentarios->usuario }}</td>
            <td>{{ $infoComentarios->comentarios }}</td>
            <td>{{ $infoComentarios->nom_doc }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Second Group">   
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a data-toggle="modal" data-target="#cometarios2" onclick="edita_com({{ $infoComentarios->id }})" class="btn  btn_gris" href="#"><i class="fa fa-pencil"></i></a>
                          <a class="btn  btn_rojo" href="#"  onclick="borra_com({{ $infoComentarios->id }},{{ $id }})"><i class="fa fa-trash"></i></a>
                        </div>                
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
