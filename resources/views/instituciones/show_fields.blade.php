<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $instituciones->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $instituciones->name !!}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{!! $instituciones->direccion !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{!! $instituciones->telefono !!}</p>
</div>

<!-- Correo Electronico Field -->
<div class="form-group">
    {!! Form::label('correo_electronico', 'Correo Electronico:') !!}
    <p>{!! $instituciones->correo_electronico !!}</p>
</div>

<!-- Cod Ciudad Field -->
<div class="form-group">
    {!! Form::label('cod_ciudad', 'Cod Ciudad:') !!}
    <p>{!! $instituciones->cod_ciudad !!}</p>
</div>

<!-- Creado en Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado en:') !!}
    <p>{!! $instituciones->created_at !!}</p>
</div>

<!-- Actualizado en Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado en:') !!}
    <p>{!! $instituciones->updated_at !!}</p>
</div>

