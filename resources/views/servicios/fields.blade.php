<!-- Identificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('identificacion', 'Identificacion:') !!}
    {!! Form::text('identificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Registro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_registro', 'Fecha Registro:') !!}
    {!! Form::date('fecha_registro', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Cupo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_cupo', 'Cod Cupo:') !!}
    {!! Form::select('cod_cupo', $cupo ,null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('servicios.index') !!}" class="btn btn-default">Cancel</a>
</div>
