<!-- Nombre Documento Field -->
<div class="form-group">
    {!! Form::label('nombre_documento', 'Nombre Documento:') !!}
    <p>{{ $documentos->nombre_documento }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $documentos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $documentos->updated_at }}</p>
</div>

