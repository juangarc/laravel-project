<!-- Cantidad Dia Prorroga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_dia_prorroga', 'Cantidad Dia Prorroga:') !!}
    {!! Form::text('cantidad_dia_prorroga', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechainicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechainicio', 'Fechainicio:') !!}
    {!! Form::date('fechainicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Incapacidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incapacidad', 'Incapacidad:') !!}
    {!! Form::text('incapacidad', null, ['class' => 'form-control']) !!}
</div>

<!-- %incapacidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('%incapacidad', '%incapacidad:') !!}
    {!! Form::number('%incapacidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Seguimiento Incapacidad Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('seguimiento_incapacidad', 'Seguimiento Incapacidad:') !!}
    {!! Form::textarea('seguimiento_incapacidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Ausentismo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_ausentismo', 'Id Ausentismo:') !!}
    {!! Form::number('id_ausentismo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('prorrogas.index') !!}" class="btn btn-default">Cancel</a>
</div>
