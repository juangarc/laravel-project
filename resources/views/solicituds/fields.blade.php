<!-- Fecha Registro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_registro', 'Fecha Registro:') !!}
    {!! Form::date('fecha_registro', null, ['class' => 'form-control']) !!}
</div>

<!-- Identificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente', 'Cliente:') !!}
    {!! Form::select('cliente', $cliente, null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Fecha Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    {!! Form::date('fecha_cita', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_cita', 'Hora Cita:') !!}
    {!! Form::time('hora_cita', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Institucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_institucion', 'Institución:') !!}
    {!! Form::select('cod_institucion', $instituciones, null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Tipo Examen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_tipo_examen', 'Tipo de Examen:') !!}
    {!! Form::select('cod_tipo_examen', $tipoExamen, null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Examen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_examen', 'Examen:') !!}
    {!! Form::select('cod_examen', $examenes, null, ['class' => 'form-control']) !!}
</div>

<!-- Observacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacion', 'Observacion:') !!}
    {!! Form::text('observacion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    <label>Estado </label>
    <select name="estado" id="estado" class="form-control">
    <option value="Aprobado">APROBADO</option>
    <option value="Pendiente">PENDIENTE</option>
    <option value="Rechazado">RECHAZADO</option>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('solicituds.index') !!}" class="btn btn-default">Cancel</a>
</div>
