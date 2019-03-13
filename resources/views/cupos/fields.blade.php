<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    {!! Form::date('fecha_fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_cliente', 'Cliente:') !!}
    {!! Form::select('cod_cliente', $cliente , null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_producto', 'Producto:') !!}
    {!! Form::select('cod_producto', $producto , null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cupos.index') !!}" class="btn btn-default">Cancel</a>
</div>
