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
                @include('ausentismos.fields1')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script>
    /*  $('#resultingTeams li').on('click', function() {
        console.log('algo'); // gets text contents of clicked li
    }); */

    /*     $(document).on('click', '.modal', function() {
        $('#msgError').html("");
            console.log("hola")
    });
     */

    function getCie10() {
            var codigo = document.getElementById('codigoCie')
            product_id = String(codigo.value);
            $.ajax({
                //headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'GET',
                url: '/cie/'+ product_id,
                dataType: 'json',
                success: function(data) {
                    //console.log(data.name)
                    $('#descripcionCie').val(data.descripcion);
                    $('#ci').val(data.id);
                }
            });
    }
        

    function getMessage() {
        if ($('#check1').prop('checked')) {
            var codigo = document.getElementById('codigo')
            product_id = parseInt(codigo.value);
            $.ajax({
                //headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'GET',
                url: '/prueba/' + product_id,
                dataType: 'json',
                success: function(data) {
                    //console.log(data.name)
                    $('#id_emple').val(data.name + " " + data.apellido);
                    $('#costo_ausencia').val(data.salario);
                    $('#iden').val(data.id);

                }
            });
        } else {
            var name = document.getElementById('id_emple')
            nameFinal = name.value;
            $.ajax({
                //headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'GET',
                url: '/prueba3/' + nameFinal,
                dataType: 'json',
                success: function(data) {
                    for (var prop in data) {
                        var item = data[prop];
                        console.log(item.name)
                        var codLi = prop;
                        f = parseInt(codLi) + 1;
                        $('#resultingTeams').append($("<li id='" + f + "'/>").text(item.identificacion +
                            '-' + item.name + ' ' + item.apellido));
                    }
                    $('#myModal').modal('show');
                    $('#resultingTeams').find('li').on('click', function() {
                        var name = $(this).text(); // gets text contents of clicked li
                        var separator = "-";
                        limite = 2;
                        arreglo = name.split(separator, limite);
                        //$('#costo_ausencia').val(arreglo[0]);
                        idFinish = parseInt(arreglo[0])
                        $.ajax({
                            //headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'GET',
                            url: '/prueba/' + idFinish,
                            dataType: 'json',
                            success: function(data) {
                                //console.log(data.name)
                                $('#codigo').val(data.identificacion);
                                $('#id_emple').val(data.name + " " + data.apellido);
                                $('#costo_ausencia').val(data.salario);
                                $('#iden').val(data.id);
                                $('#myModal').modal('hide');
                            }
                        });
                    });
                }
            });

        }
        $('#resultingTeams li').remove();
    }

    function sumar() {
        var diasAusencia = document.getElementById('tiempo_ausencia').value;
        var costoAusencia = document.getElementById('costo_ausencia').value;
        if (parseInt(diasAusencia) > 16) {
            var diasmenos = parseInt(diasAusencia) - 16;
            // console.log(diasmenos);
            var totalPago3 = (((parseInt(costoAusencia) / 30) / 8) * 16);
            var totalPago2 = (((parseInt(costoAusencia) / 30) / 8) * parseInt(diasmenos) * 0.666);
            var totalPago = totalPago3 + totalPago2;
        } else {
            var totalPago = (((parseInt(costoAusencia) / 30) / 8) * parseInt(diasAusencia));
        }


        //total = parseInt(diasAusencia) * parseInt(costoAusencia);
        document.getElementById('costo_ausencia').value = parseInt(totalPago);

    }
</script>
<script type="text/javascript">
    function Disable(id) {
        if (id === 1) {
            document.getElementById("check1").checked = 1;
            $('#codigo').val("");
            $('#id_emple').val("");
            $('#costo_ausencia').val("");
            $('#iden').val("");
            $("#codigo").prop('disabled', false);
            $("#id_emple").prop('disabled', true);
            /* document.getElementById("nameSearch").innerHTML='Ingrese Identificación'; */
            document.getElementById("check2").checked = 0;
        } else if (id === 2) {
            $('#codigo').val("");
            $('#id_emple').val("");
            $('#costo_ausencia').val("");
            $('#iden').val("");
            $("#codigo").prop('disabled', true);
            $("#id_emple").prop('disabled', false);
            document.getElementById("check2").checked = 1;
            /*    document.getElementById("nameSearch").innerHTML='Ingrese Nombre y Apellido'; */
            document.getElementById("check1").checked = 0;
        }
    }
</script>
@endsection