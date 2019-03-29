<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $empleado->id !!}</p>
</div>

<!-- Identificacion Field -->
<div class="form-group">
    {!! Form::label('identificacion', 'Identificacion:') !!}
    <p>{!! $empleado->identificacion !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $empleado->name !!}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{!! $empleado->apellido !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{!! $empleado->telefono !!}</p>
</div>

<!-- Correoelectronico Field -->
<div class="form-group">
    {!! Form::label('correoelectronico', 'Correoelectronico:') !!}
    <p>{!! $empleado->correoelectronico !!}</p>
</div>

<!-- Id Tipovinculacion Field -->
<div class="form-group">
    {!! Form::label('id_tipovinculacion', 'Tipo de Vinculación:') !!}
    <p>{!! $empleado->tipovinculacion->name !!}</p>
</div>

<!-- Fechadenacimiento Field -->
<div class="form-group">
    {!! Form::label('fechadenacimiento', 'Fechadenacimiento:') !!}
    <p>{!! $empleado->fechadenacimiento !!}</p>
</div>

<!-- Salario Field -->
<div class="form-group">
    {!! Form::label('salario', 'Salario:') !!}
    <p>{!! $empleado->salario !!}</p>
</div>

<!-- Id Cargo Field -->
<div class="form-group">
    {!! Form::label('id_cargo', 'Cargo:') !!}
    <p>{!! $empleado->cargo->name !!}</p>
</div>

<!-- Id Sede Field -->
<div class="form-group">
    {!! Form::label('id_sede', 'Sede') !!}
    <p>{!! $empleado->sede->name !!}</p>
</div>

<!-- Fechadeingreso Field -->
<div class="form-group">
    {!! Form::label('fechadeingreso', 'Fechadeingreso:') !!}
    <p>{!! $empleado->fechadeingreso !!}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $empleado->estado !!}</p>
</div>

<!-- Genero Field -->
<div class="form-group">
    {!! Form::label('genero', 'Genero:') !!}
    <p>{!! $empleado->genero !!}</p>
</div>

<!-- Creado en Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado en:') !!}
    <p>{!! $empleado->created_at !!}</p>
</div>

<!-- Actualizado en Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado en:') !!}
    <p>{!! $empleado->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $empleado->deleted_at !!}</p>
</div>

