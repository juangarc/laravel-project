@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ausentismo
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'ausentismos.store']) !!}

                        @include('ausentismos.fields')

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
        url:'/prueba/'+product_id,
        dataType: 'json',
        success:function(data){
            //console.log(data.name)
            $('#id_emple').val(data.name + " " + data.apellido);
            $('#costo_ausencia').val(data.salario);
            $('#iden').val(data.id);
            
        }
    });
}
    </script>
@endsection
