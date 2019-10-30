<div class="container">

    {!! Form::label('fechaderegistro', 'Fecha de registro:') !!}
    {!! Form::date('fecha_registro', $ausentismo->fecha_registro, ['class' => 'form-control']) !!}
    <!-- <label>Fecha de Registro* </label>
                    <input type="date" id="fechaderegistro" name="fechaderegistro" value="{{$ausentismo->fecha_registro}}" class="form-control"> -->
    <label>Consultar Empleado por:* </label><br>
    <label for="" style="margin-right:20px;"><input type="checkbox" id="check1" OnClick="Disable(1);"> Cedula</label> <label for=""><input type="checkbox" id="check2" OnClick="Disable(2);"> Nombre y apellido</label><br>
    <div class="form-group col-sm-3">
        <label id="nameSearch">Identificacion del empleado* </label>
        <input type="number" value="{{$empleado['identificacion']}}" class="form-control" id="codigo">
    </div>
    <div class="form-group col-sm-9">
        <label>Nombre de Empleado* </label>
        <input type="text" name="id_ident" value="{{$empleado['name'] . ' ' . $empleado['apellido']}}" class="form-control" id="id_emple">
    </div>
    <input type="button" class="btn btn-primary openBtn" value="Buscar" onclick="getMessage(1);">
    <br>

    <input name="id_empleado" value="{{$empleado['id']}}" type="hidden" id="iden">
    <br>
    <label>Tipo de Ausentismo* </label>
    {{-- <input type="select" name="id_tipoausentismo" class="form-control"> --}}
    <select name="id_tipoausentismo" id="id_tipoausentismo" value="id_tipoausentismo" class="form-control">
        <option value="{{$tipoAusentismo['id']}}">{{$tipoAusentismo['name']}}</option>
        @foreach ($tipoausentismos as $tipoausentismo)
        <option value="{{ $tipoausentismo['id'] }}">{{ $tipoausentismo['name'] }}</option>
        @endforeach
    </select>
    <br>
    <div class="form-group col-sm-3">
        <label>Codigo CIE10* </label>
        <input type="text" value="{{$cie['codigo']}}"  class="form-control" id="codigoCie" onkeyup="this.value = this.value.toUpperCase();">
    </div>
    <div class="form-group col-sm-9">
        <label>Descripción* </label>
        <input type="text" value="{{$cie['descripcion']}}" class="form-control" 
        id="descripcionCie">
    </div>
    <input type="button" class="btn btn-primary openBtn" value="Buscar" onclick="getCie10();">
    <br>
    <input name="id_cie10" type="hidden" id="ci" value="{{$ausentismo->id_cie10}}">
    <!--  <label>Fecha de Inicio* </label>
                    <input type="date" name="fecha_inicio" class="form-control"> -->
    {!! Form::label('fechadeinicio', 'Fecha de inicio:') !!}
    {!! Form::date('fecha_inicio', $ausentismo->fecha_inicio, ['class' => 'form-control']) !!}

    <label>Tiempo de Ausencia / Horas* </label>
    <input type="text" name="tiempo_ausencia" value="{{$ausentismo->tiempo_ausencia}}" id="tiempo_ausencia" class="form-control">
    <input type="button" class="btn btn-primary" value="Calcular" onclick="sumar();">
    <br>
    <label>Costo de Ausencia / $ </label>
    <input type="number" name="costo_ausencia" value="{{$ausentismo->costo_ausencia}}" id="costo_ausencia" class="form-control">
    <label>Grado* </label>
    <select name="Grado" id="grado" class="form-control">
        <option value="{{$ausentismo['Grado']}}">{{$ausentismo['Grado']}}</option>
        <option value="LEVE">N/A</option>
        <option value="LEVE">LEVE</option>
        <option value="SEVERO">SEVERO</option>
        <option value="MORTAL">MORTAL</option>
    </select>
    <label>Observacion</label>
    <input type="text" name="observacion" value="{{$ausentismo->observacion}}" class="form-control">
</div>
<br>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Empleados</h4>
            </div>
            <div class="modal-body" id="getCode">
                <div >
                <ul id="resultingTeams" style="cursor:pointer">

                </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script type="text/javascript">
    $('#fechaderegistro').datetpicker({
        format: 'YYYY-MM-DD',
        useCurrent: true
    })
</script>
<script type="text/javascript">
    $('#fechadeinicio').datetpicker({
        format: 'YYYY-MM-DD',
        useCurrent: true
    })
</script>
<script type="text/javascript">
    function getCie10() {
        var codigo = document.getElementById('codigoCie')
        product_id = String(codigo.value);
        $.ajax({
            //headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'GET',
            url: '/cie/' + product_id,
            dataType: 'json',
            success: function(data) {
                //console.log(data.name)
                $('#descripcionCie').val(data.descripcion);
                $('#ci').val(data.id);
            }
        });
    }


    function Disable(id) {
        if (id === 1) {
            document.getElementById("check1").checked = 1;
            /* document.getElementById("nameSearch").innerHTML='Ingrese Identificación'; */
            document.getElementById("check2").checked = 0;
        } else if (id === 2) {
            document.getElementById("check2").checked = 1;
            /*    document.getElementById("nameSearch").innerHTML='Ingrese Nombre y Apellido'; */
            document.getElementById("check1").checked = 0;
        }
    }
</script>
<script>
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
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ausentismos.index') !!}" class="btn btn-default">Cancelar</a>
</div>