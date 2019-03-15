<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Parenteso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Parenteso', 'Parenteso:') !!}
    {!! Form::text('Parenteso', null, ['class' => 'form-control']) !!}
</div>

<!-- Edad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Edad', 'Edad:') !!}
    {!! Form::text('Edad', null, ['class' => 'form-control']) !!}
</div>

<!-- Cupo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_cupo', 'Cupo:') !!}
    {!! Form::select('cod_cupo', $cupo , null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bieneficiarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
