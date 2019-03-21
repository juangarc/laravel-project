<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $prorroga->id !!}</p>
</div>

<!-- Cantidad Dia Prorroga Field -->
<div class="form-group">
    {!! Form::label('cantidad_dia_prorroga', 'Cantidad Dia Prorroga:') !!}
    <p>{!! $prorroga->cantidad_dia_prorroga !!}</p>
</div>

<!-- Fechainicio Field -->
<div class="form-group">
    {!! Form::label('fechainicio', 'Fechainicio:') !!}
    <p>{!! $prorroga->fechainicio !!}</p>
</div>

<!-- Incapacidad Field -->
<div class="form-group">
    {!! Form::label('incapacidad', 'Incapacidad:') !!}
    <p>{!! $prorroga->incapacidad !!}</p>
</div>

<!-- %incapacidad Field -->
<div class="form-group">
    {!! Form::label('%incapacidad', '%incapacidad:') !!}
    <p>{!! $prorroga->%incapacidad !!}</p>
</div>

<!-- Seguimiento Incapacidad Field -->
<div class="form-group">
    {!! Form::label('seguimiento_incapacidad', 'Seguimiento Incapacidad:') !!}
    <p>{!! $prorroga->seguimiento_incapacidad !!}</p>
</div>

<!-- Id Ausentismo Field -->
<div class="form-group">
    {!! Form::label('id_ausentismo', 'Id Ausentismo:') !!}
    <p>{!! $prorroga->id_ausentismo !!}</p>
</div>

<!-- Creado en Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado en:') !!}
    <p>{!! $prorroga->created_at !!}</p>
</div>

<!-- Actualizado en Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado en:') !!}
    <p>{!! $prorroga->updated_at !!}</p>
</div>

