<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $cupo->id !!}</p>
</div>

<!-- Serial Field -->
<div class="form-group">
    {!! Form::label('serial', 'Serial:') !!}
    <p>{!! $cupo->serial !!}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{!! $cupo->fecha_inicio !!}</p>
</div>

<!-- Fecha Fin Field -->
<div class="form-group">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    <p>{!! $cupo->fecha_fin !!}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $cupo->estado !!}</p>
</div>

<!-- Cod Cliente Field -->
<div class="form-group">
    {!! Form::label('cod_cliente', 'Cod Cliente:') !!}
    <p>{!! $cupo->cod_cliente !!}</p>
</div>

<!-- Cod Producto Field -->
<div class="form-group">
    {!! Form::label('cod_producto', 'Cod Producto:') !!}
    <p>{!! $cupo->cod_producto !!}</p>
</div>

<!-- Creado en Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado en:') !!}
    <p>{!! $cupo->created_at !!}</p>
</div>

<!-- Actualizado en Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado en:') !!}
    <p>{!! $cupo->updated_at !!}</p>
</div>

<a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create" id="botonBeneficiario" >Añadir Beneficiario</a>
@include('cupos.modal')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script>
         
</script>
     <script>     
     $('#btn-crear').click(function(){
         $.ajax({                        
            type: "POST",                 
            url: '/beneficiarios',                     
            data: $("#formulario").serialize(), 
            success: function(data)             
            {
                alert("Beneficiario añadido");
         }
        });
     });
    </script>

