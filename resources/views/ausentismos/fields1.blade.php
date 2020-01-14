<div class="container">
    <label>Fecha de Registro* </label>
    <input type="date" name="fecha_registro" id="datePicker" value="fecha_registro" class="form-control"><br>
    <label>Consultar Empleado por:* </label><br>
    <label for="" style="margin-right:20px;"><input type="checkbox" id="check1" OnClick="Disable(1);"> Cedula</label> <label for=""><input type="checkbox" id="check2" OnClick="Disable(2);"> Nombre</label><br>
    <div class="form-group col-sm-3">
        <label id="nameSearch">Identificacion del empleado* </label>
        <input type="number" class="form-control" id="codigo">
    </div>
    <div class="form-group col-sm-9">
        <label>Nombre de Empleado* </label>
        <input type="text" name="id_ident" class="form-control" id="id_emple" onkeyup="this.value = this.value.toUpperCase();">
    </div>
    <input type="button" class="btn btn-primary openBtn" value="Buscar" onclick="getMessage();">
    <br>
    <input name="id_empleado" type="hidden" id="iden">
    <label>Tipo de Ausentismo* </label>
    {{-- <input type="select" name="id_tipoausentismo" class="form-control"> --}}
    <select name="id_tipoausentismo" id="id_tipoausentismo" class="form-control">
        @foreach ($tipoausentismos as $tipoausentismo)
        <option value="{{ $tipoausentismo['id'] }}">{{ $tipoausentismo['name'] }}</option>
        @endforeach
    </select>
    <br>
    <div class="form-group col-sm-3">
        <label>Codigo CIE10* </label>
        <input type="text" class="form-control" id="codigoCie" onkeyup="this.value = this.value.toUpperCase();">
    </div>
    <div class="form-group col-sm-9">
        <label>Descripción* </label>
        <input type="text" class="form-control" id="descripcionCie" onkeyup="this.value = this.value.toUpperCase();" disabled>
    </div>
    <input type="button" class="btn btn-primary openBtn" value="Buscar" onclick="getCie10();">
    <br>
    <input name="id_cie10" type="hidden" id="ci">
    <br>
    <label>Fecha de Inicio* </label>
    <input type="date" name="fecha_inicio" class="form-control">
    <label>Tiempo de Ausencia / Horas* </label>
    <input type="text" name="tiempo_ausencia" id="tiempo_ausencia" class="form-control">
    <input type="button" class="btn btn-primary" value="Calcular" onclick="sumar();">
    <br>
    <label>Costo de Ausencia / $ </label>
    <input type="number" name="costo_ausencia" id="costo_ausencia" class="form-control">
    <label>Grado* </label>
    <select name="Grado" id="grado" class="form-control">
        <option value=""></option>
        <option value="LEVE">N/A</option>
        <option value="LEVE">LEVE</option>
        <option value="SEVERO">SEVERO</option>
        <option value="MORTAL">MORTAL</option>
    </select>
    <label>Observacion</label>
    <input type="text" name="observacion" class="form-control">
</div>
<br>
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
                <div>
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
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ausentismos.index') !!}" class="btn btn-default">Cancelar</a>
</div>