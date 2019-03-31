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
    <script>
        function getMessage(){
        var codigo = document.getElementById('codigo')
        product_id = parseInt(codigo.value);
        $.ajax({
            //headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type:'GET',
            url:'/prueba2/'+product_id,
            dataType: 'json',
            success:function(data){
                //console.log(data.name)
                $('#cod_client').val(data.nombre + " " + data.apellido);
                $('#iden').val(data.id);
                
            }
        });
    }

        </script>
@endsection
