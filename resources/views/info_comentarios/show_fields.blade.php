<!-- Id Usuario Field -->
<div class="form-group">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    <p>{{ $infoComentarios->id_usuario }}</p>
</div>

<!-- Id Hallazgo Field -->
<div class="form-group">
    {!! Form::label('id_hallazgo', 'Id Hallazgo:') !!}
    <p>{{ $infoComentarios->id_hallazgo }}</p>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{{ $infoComentarios->comentarios }}</p>
</div>

<!-- Archivo Field -->
<div class="form-group">
    {!! Form::label('archivo', 'Archivo:') !!}
    <p>{{ $infoComentarios->archivo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $infoComentarios->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $infoComentarios->updated_at }}</p>
</div>

