<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Parentesco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentesco', 'Parentesco:') !!}
    {!! Form::text('parentesco', null, ['class' => 'form-control']) !!}
</div>

<!-- Edad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edad', 'Edad:') !!}
    {!! Form::text('edad', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Cupo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_cupo', 'Cod Cupo:') !!}
    {!! Form::select('cod_cupo', $cupo, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('beneficiarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
