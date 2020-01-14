<!-- Identificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('identificacion', 'Identificacion:') !!}
    {!! Form::number('identificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Correoelectronico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correoelectronico', 'Correo electronico:') !!}
    {!! Form::text('correoelectronico', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Tipovinculacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tipovinculacion', 'Tipo de vinculacion:') !!}
    {!! Form::select('id_tipovinculacion', $tipoVinculacion ,null, ['class' => 'form-control']) !!}
</div>

<!-- Fechadenacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechadenacimiento', 'Fecha de nacimiento:') !!}
    {!! Form::date('fechadenacimiento', $empleado->fechadenacimiento, ['class' => 'form-control']) !!}
</div>
@section('scripts')
    <script type="text/javascript">
        $('#fechadenacimiento').datetpicker({
            format: 'YYYY-MM-DD',
            useCurrent: true    

        })
    </script>
@endsection

<!-- Salario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salario', 'Salario:') !!}
    {!! Form::number('salario', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cargo', 'Cargo:') !!}
    {!! Form::select('id_cargo', $cargo ,null, ['class' => 'form-control']) !!}
</div>

<!-- Id Sede Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_sede', 'Sede:') !!}
    {!! Form::select('id_sede', $sede ,null, ['class' => 'form-control']) !!}
</div>

<!-- Fechadeingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechadeingreso', 'Fecha de ingreso:') !!}
    {!! Form::date('fechadeingreso', $empleado->fechadeingreso, ['class' => 'form-control']) !!}
</div>
@section('scripts')
    <script type="text/javascript">
        $('#fechadeingreso').datetpicker({
            format: 'YYYY-MM-DD',
            useCurrent: true    

        })
    </script>
@endsection


<!-- Estado Field -->
<div class="form-group col-sm-6">
        <label>Estado </label>
        <select name="estado" id="estado" class="form-control">
        <option value="{{$empleado->estado}}">{{$empleado->estado}}</option>
        <option value="ACTIVO">ACTIVO</option>
        <option value="INACTIVO">INACTIVO</option>
        </select>
</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
        <label>Genero </label>
        <select name="genero" id="genero" value="{{$empleado->genero}}" class="form-control">
      <!  <option value=""></option>
        <option value="{{$empleado->genero}}">{{$empleado->genero}}</option>
        <option value="MASCULINO">MASCULINO</option>
        <option value="FEMENINO">FEMENINO</option>
        </select>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('empleados.index') !!}" class="btn btn-default">Cancelar</a>
</div>
