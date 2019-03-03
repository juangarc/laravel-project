<!-- Fecha Registro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_registro', 'Fecha Registro:') !!}
    {!! Form::date('fecha_registro', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Empleado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_empleado', 'Id Empleado:') !!}
    {!! Form::number('id_empleado', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Tipoausentismo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tipoausentismo', 'Id Tipoausentismo:') !!}
    {!! Form::number('id_tipoausentismo', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cargo', 'Id Cargo:') !!}
    {!! Form::number('id_cargo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Tiempo Ausencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tiempo_ausencia', 'Tiempo Ausencia:') !!}
    {!! Form::number('tiempo_ausencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Ausencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo_ausencia', 'Costo Ausencia:') !!}
    {!! Form::number('costo_ausencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Grado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Grado', 'Grado:') !!}
    {!! Form::text('Grado', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacion', 'Observacion:') !!}
    {!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ausentismos.index') !!}" class="btn btn-default">Cancel</a>
</div>
