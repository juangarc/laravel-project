@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Solicitud
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'solicituds.store']) !!}

                        @include('solicituds.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function getMessage(){
    var codigo = document.getElementById('codigo')
    product_id = codigo.value;
    $.ajax({
        //headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type:'GET',
        url:'/prueba2/'+product_id,
        dataType: 'json',
        success:function(data){
            //console.log(data.name)
            $('#id_serial').val(data.estado);
            $('#iden').val(data.id);
            
            }
        });
    }
</script>

<script>
    $("#examen").change(function(event){
        $.get('/prueba3/'+event.target.value+"",function(response,state){
            $("#institucion").empty();
            for(i=0; i<response.length; i++) {
                $("#institucion").append("<option value='"+response[i].cod_institucion+"'> "+response[i].nameInstitucion+"</option>");
            }
        });
    });

</script>
@endsection
