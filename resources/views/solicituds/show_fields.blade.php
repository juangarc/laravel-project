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
    {!! Form::label('id_serial', 'Id Serial:') !!}
    <p>{!! $solicitud->id_serial !!}</p>
</div>


<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $solicitud->estado !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $solicitud->nombre !!}</p>
</div>

<!-- Id Institucion Field -->
<div class="form-group">
    {!! Form::label('id_institucion', 'Id Institucion:') !!}
    <p>{!! $solicitud->id_institucion !!}</p>
</div>

<!-- Id Examen Field -->
<div class="form-group">
    {!! Form::label('id_examen', 'Id Examen:') !!}
    <p>{!! $solicitud->id_examen !!}</p>
</div>

<!-- Id Examen Institucion Field -->
<div class="form-group">
    {!! Form::label('id_examen_institucion', 'Id Examen Institucion:') !!}
    <p>{!! $solicitud->id_examen_institucion !!}</p>
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