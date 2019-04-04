<!-- Año Field -->
<div class="form-group col-sm-6">
    {!! Form::label('año', 'Año:') !!}
    {!! Form::number('año', null, ['class' => 'form-control']) !!}
</div>

<!-- Ia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ta', 'Ta:') !!}
    {!! Form::number('ta', $totalTasaAccidentalidad,null, ['class' => 'form-control']) !!}
</div>

<!-- Is Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is', 'Is:') !!}
    {!! Form::number('is', $totalSeveridadAccidente,null, ['class' => 'form-control']) !!}
</div>

<!-- If Field -->
<div class="form-group col-sm-6">
    {!! Form::label('if', 'If:') !!}
    {!! Form::number('if', $totalFrecuenciaAccidentes,null, ['class' => 'form-control']) !!}
</div>

<!-- Ma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ma', 'Ma:') !!}
    {!! Form::number('ma', $TotalMortalidadAccidente,null, ['class' => 'form-control']) !!}
</div>

<!-- Ili Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ili', 'Ili:') !!}
    {!! Form::number('ili', $indiceLeccionesIncapacitantes, null, ['class' => 'form-control']) !!}
</div>

<!-- Iel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iel', 'Iel:') !!}
    {!! Form::number('iel', null, ['class' => 'form-control']) !!}
</div>

<!-- Pel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pel', 'Pel:') !!}
    {!! Form::number('pel', null, ['class' => 'form-control']) !!}
</div>

<!-- Ieg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ieg', 'Ieg:') !!}
    {!! Form::number('ieg', null, ['class' => 'form-control']) !!}
</div>

<!-- Peg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('peg', 'Peg:') !!}
    {!! Form::number('peg', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('estadisticas.index') !!}" class="btn btn-default">Cancel</a>
</div>
