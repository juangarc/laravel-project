<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $servicio->id !!}</p>
</div>

<!-- Identificacion Field -->
<div class="form-group">
    {!! Form::label('identificacion', 'Identificacion:') !!}
    <p>{!! $servicio->identificacion !!}</p>
</div>

<!-- Fecha Registro Field -->
<div class="form-group">
    {!! Form::label('fecha_registro', 'Fecha Registro:') !!}
    <p>{!! $servicio->fecha_registro !!}</p>
</div>

<!-- Cod Cupo Field -->
<div class="form-group">
    {!! Form::label('cod_cupo', 'Cod Cupo:') !!}
    <p>{!! $servicio->cod_cupo !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $servicio->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $servicio->updated_at !!}</p>
</div>

