<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $beneficiario->id !!}</p>
</div>

<!-- Identificacion Field -->
<div class="form-group">
    {!! Form::label('identificacion', 'Identificacion:') !!}
    <p>{!! $beneficiario->identificacion !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $beneficiario->name !!}</p>
</div>

<!-- Parentesco Field -->
<div class="form-group">
    {!! Form::label('parentesco', 'Parentesco:') !!}
    <p>{!! $beneficiario->parentesco !!}</p>
</div>

<!-- Edad Field -->
<div class="form-group">
    {!! Form::label('edad', 'Edad:') !!}
    <p>{!! $beneficiario->edad !!}</p>
</div>

<!-- Cod Cupo Field -->
<div class="form-group">
    {!! Form::label('cod_cupo', 'Serial de Cupo') !!}
    <p>{!! $beneficiario->cupo->serial !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $beneficiario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $beneficiario->updated_at !!}</p>
</div>

