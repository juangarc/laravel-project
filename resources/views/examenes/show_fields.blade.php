<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $examenes->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $examenes->name !!}</p>
</div>

<!-- Cod Tipoexamen Field -->
<div class="form-group">
    {!! Form::label('cod_tipoexamen', 'Cod Tipoexamen:') !!}
    <p>{!! $examenes->tipoexamen->name !!}</p>
</div>

<!-- Creado en Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado en:') !!}
    <p>{!! $examenes->created_at !!}</p>
</div>

<!-- Actualizado en Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado en:') !!}
    <p>{!! $examenes->updated_at !!}</p>
</div>

