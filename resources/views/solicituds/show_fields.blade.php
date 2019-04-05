<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $solicitud->id !!}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{!! $solicitud->fecha_inicio !!}</p>
</div>

<!-- Id Serial Field -->
<div class="form-group">
    {!! Form::label('id_serial', 'Serial:') !!}
    <p>{!! $solicitud->cupo->serial !!}</p>
</div>


<!-- Estado Field -->
<!-- <div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $solicitud->estado !!}</p>
</div> -->

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $solicitud->nombre !!}</p>
</div>

<!-- Id Examen Field -->
<div class="form-group">
    {!! Form::label('id_examen', 'Examen:') !!}
    <p>{!! $solicitud->examen->name !!}</p>
</div>

<!-- Id Institucion Field -->
<div class="form-group">
    {!! Form::label('id_institucion', 'Institucion:') !!}
    <p>{!! $solicitud->institucion->name !!}</p>
</div>

<!-- Id Examen Institucion Field -->
<div class="form-group">
    {!! Form::label('id_examen_institucion', 'Costo:') !!}
    <p>{!! $solicitud->exameninstitucion->valor_previser !!}</p>
</div>

<!-- Progreso -->
<div class="form-group">
    {!! Form::label('progreso', 'Progreso:') !!}
    <p>{!! $solicitud->progreso !!}</p>
</div>

<!-- Hora Field -->
<div class="form-group">
    {!! Form::label('fecha_cita', 'Fecha cita:') !!}
    <p>{!! $solicitud->fecha_cita !!}</p>
</div>

<!-- Hora Field -->
<div class="form-group">
    {!! Form::label('hora', 'Hora:') !!}
    <p>{!! $solicitud->hora !!}</p>
</div>

<!-- Observacion Field -->
<div class="form-group">
    {!! Form::label('observacion', 'Observacion:') !!}
    <p>{!! $solicitud->observacion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $solicitud->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $solicitud->updated_at !!}</p>
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('solicituds.index') !!}" class="btn btn-default">Cancel</a>
</div>

<a href="#" class="btn btn-primary pull-right"   id="btn-enviar" >Enviar Solicitud</a>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>     
    $('#btn-enviar').click(function(){
        $.ajax({                        
           type: "GET",                 
           url: '/solicituds1',                     
           //data: $("#formulario").serialize(), 
           success: function(data)             
           {
               alert("Solicitud aprobada y enviada");
        }
       });
    });
    </script>