<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $examenInstitucion->id !!}</p>
</div>

<!-- Cod Examen Field -->
<div class="form-group">
    {!! Form::label('cod_examen', 'Examen:') !!}
    <p>{!! $examenInstitucion->examen->name !!}</p>
</div>

<!-- Cod Institucion Field -->
<div class="form-group">
    {!! Form::label('cod_institucion', 'Institución:') !!}
    <p>{!! $examenInstitucion->institucion->name !!}</p>
</div>

<!-- Valor Particular Field -->
<div class="form-group">
    {!! Form::label('valor_particular', 'Valor Particular:') !!}
    <p>{!! $examenInstitucion->valor_particular !!}</p>
</div>

<!-- Valor Previser Field -->
<div class="form-group">
    {!! Form::label('valor_previser', 'Valor Previser:') !!}
    <p>{!! $examenInstitucion->valor_previser !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $examenInstitucion->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $examenInstitucion->updated_at !!}</p>
</div>

