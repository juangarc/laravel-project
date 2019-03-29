<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipoVinculacion->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $tipoVinculacion->name !!}</p>
</div>

<!-- Creado en Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado en:') !!}
    <p>{!! $tipoVinculacion->created_at !!}</p>
</div>

<!-- Actualizado en Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado en:') !!}
    <p>{!! $tipoVinculacion->updated_at !!}</p>
</div>

