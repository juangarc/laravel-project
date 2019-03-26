<!-- Cod Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_servicio', 'Cod Servicio:') !!}
    {!! Form::select('cod_servicio', $servicio, null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Examen Institucions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_examen_institucions', 'Cod Examen Institucions:') !!}
    {!! Form::select('cod_examen_institucions', $examen_institucion, null, ['class' => 'form-control']) !!}
</div>

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

<!-- Estado Field -->
<div class="form-group col-sm-6">
        <label>Estado </label>
        <select name="estado" id="estado" class="form-control">
        <option value="Aprobado">Aprobado</option>
        <option value="Pendiente">Pendiente</option>
        <option value="Rechazado">Rechazado</option>
        </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('servicioExamens.index') !!}" class="btn btn-default">Cancel</a>
</div>
