<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $ausentismo->id !!}</p>
</div>

<!-- Fecha Registro Field -->
<div class="form-group">
    {!! Form::label('fecha_registro', 'Fecha Registro:') !!}
    <p>{!! $ausentismo->fecha_registro !!}</p>
</div>

<!-- Id Empleado Field -->
<div class="form-group">
    {!! Form::label('id_empleado', 'Id Empleado:') !!}
    <p>{!! $ausentismo->id_empleado !!}</p>
</div>

<!-- Id Tipoausentismo Field -->
<div class="form-group">
    {!! Form::label('id_tipoausentismo', 'Id Tipoausentismo:') !!}
    <p>{!! $ausentismo->id_tipoausentismo !!}</p>
</div>

<!-- Id Cargo Field -->
<div class="form-group">
    {!! Form::label('id_cargo', 'Id Cargo:') !!}
    <p>{!! $ausentismo->id_cargo !!}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{!! $ausentismo->fecha_inicio !!}</p>
</div>

<!-- Tiempo Ausencia Field -->
<div class="form-group">
    {!! Form::label('tiempo_ausencia', 'Tiempo Ausencia:') !!}
    <p>{!! $ausentismo->tiempo_ausencia !!}</p>
</div>

<!-- Costo Ausencia Field -->
<div class="form-group">
    {!! Form::label('costo_ausencia', 'Costo Ausencia:') !!}
    <p>{!! $ausentismo->costo_ausencia !!}</p>
</div>

<!-- Grado Field -->
<div class="form-group">
    {!! Form::label('Grado', 'Grado:') !!}
    <p>{!! $ausentismo->Grado !!}</p>
</div>

<!-- Observacion Field -->
<div class="form-group">
    {!! Form::label('observacion', 'Observacion:') !!}
    <p>{!! $ausentismo->observacion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $ausentismo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $ausentismo->updated_at !!}</p>
</div>

