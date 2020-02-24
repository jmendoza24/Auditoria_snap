<!-- Nombre Loc Field -->
<div class="form-group">
    {!! Form::label('nombre_loc', 'Nombre Loc:') !!}
    <p>{{ $localidad->nombre_loc }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $localidad->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $localidad->updated_at }}</p>
</div>

