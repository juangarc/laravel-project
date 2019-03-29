<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $solicitud->id !!}</p>
</div>

<!-- Fecha Registro Field -->
<div class="form-group">
    {!! Form::label('fecha_registro', 'Fecha Registro:') !!}
    <p>{!! $solicitud->fecha_registro !!}</p>
</div>

<!-- Identificacion Field -->
<div class="form-group">
    {!! Form::label('cliente', 'Cliente:') !!}
    <p>{!! $solicitud->clientes->nombre !!}</p>
</div>

<!-- Nombre Field
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $solicitud->nombre !!}</p>
</div> -->

<!-- Fecha Cita Field -->
<div class="form-group">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    <p>{!! $solicitud->fecha_cita !!}</p>
</div>

<!-- Hora Cita Field -->
<div class="form-group">
    {!! Form::label('hora_cita', 'Hora Cita:') !!}
    <p>{!! $solicitud->hora_cita !!}</p>
</div>

<!-- Cod Institucion Field -->
<div class="form-group">
    {!! Form::label('cod_institucion', 'Institución:') !!}
    <p>{!! $solicitud->instituciones->name !!}</p>
</div>

<!-- Cod Tipo Examen Field -->
<div class="form-group">
    {!! Form::label('cod_tipo_examen', 'Tipo de Examen:') !!}
    <p>{!! $solicitud->tipoExamen->name !!}</p>
</div>

<!-- Cod Examen Field -->
<div class="form-group">
    {!! Form::label('cod_examen', 'Examen:') !!}
    <p>{!! $solicitud->examenes->name !!}</p>
</div>

<!-- ObservacioN Field -->
<div class="form-group">
    {!! Form::label('observacion', 'ObservacioN:') !!}
    <p>{!! $solicitud->observacion !!}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $solicitud->estado !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $solicitud->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $solicitud->updated_at !!}</p>
</div>

