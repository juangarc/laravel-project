<!-- A O Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano', 'ano:') !!}
    {!! Form::number('ano', null, ['class' => 'form-control']) !!}
</div>

<!-- Ta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ta', 'Ta:') !!}
    {!! Form::number('ta', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is', 'Is:') !!}
    {!! Form::number('is', null, ['class' => 'form-control']) !!}
</div>

<!-- If Field -->
<div class="form-group col-sm-6">
    {!! Form::label('if', 'If:') !!}
    {!! Form::number('if', null, ['class' => 'form-control']) !!}
</div>

<!-- Ma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ma', 'Ma:') !!}
    {!! Form::number('ma', null, ['class' => 'form-control']) !!}
</div>

<!-- Ili Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ili', 'Ili:') !!}
    {!! Form::number('ili', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('estadisticas.index') !!}" class="btn btn-default">Cancel</a>
</div>
