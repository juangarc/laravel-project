<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $beneficiario->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
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
    {!! Form::label('cod_cupo', 'Cod Cupo:') !!}
    <p>{!! $beneficiario->cod_cupo !!}</p>
</div>

<!-- Creado en Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado en:') !!}
    <p>{!! $beneficiario->created_at !!}</p>
</div>

<!-- Actualizado en Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado en:') !!}
    <p>{!! $beneficiario->updated_at !!}</p>
</div>

