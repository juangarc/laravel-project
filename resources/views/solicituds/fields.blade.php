<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Serial -->
<div class="form-group col-sm-6">
    {!! Form::label('id_serial', 'Serial:') !!}
    {!! Form::select('id_serial', $cupo ,null, ['class' => 'form-control']) !!}
</div>


<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Instituicon -->
<div class="form-group col-sm-6">
    {!! Form::label('id_institucion', 'Institucion:') !!}
    {!! Form::select('id_institucion', $instituciones ,null, ['class' => 'form-control']) !!}
</div>

<!-- Id Examenes -->
<div class="form-group col-sm-6">
    {!! Form::label('id_examen', 'Examen :') !!}
    {!! Form::select('id_examen', $examenes ,null, ['class' => 'form-control']) !!}
</div>

<!-- Id ExamenInsticion -->
<div class="form-group col-sm-6">
    {!! Form::label('id_examen_institucion', 'Valor:') !!}
    {!! Form::select('id_examen_institucion', $exameninstitucion ,null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    {!! Form::date('fecha_cita', null, ['class' => 'form-control']) !!}
</div>

<!-- Progreso -->
<div class="form-group col-sm-6">
    <label>Progreso </label>
    <select name="progreso" id="progreso" class="form-control">
    <option value="DESAPROBADO">DESAPROBADO</option>
    <option value="PENDIENTE">PENDIENTE</option>
    <option value="APROBADO">APROBADO</option>
    </select>
</div>

<!-- Observacion -->
<div class="form-group col-sm-6">
    {!! Form::label('observacion', 'Observacion :') !!}
    {!! Form::text('observacion',null, ['class' => 'form-control']) !!}
</div>

<!-- Hora -->
<div class="form-group col-sm-6">
    {!! Form::label('hora', 'Hora :') !!}
    {!! Form::time('hora',null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('solicituds.index') !!}" class="btn btn-default">Cancel</a>
</div>
