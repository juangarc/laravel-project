<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $examenes->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $examenes->name !!}</p>
</div>

<!-- Cod Tipoexamen Field -->
<div class="form-group">
    {!! Form::label('cod_tipoexamen', 'Cod Tipoexamen:') !!}
    <p>{!! $examenes->cod_tipoexamen !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $examenes->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $examenes->updated_at !!}</p>
</div>

