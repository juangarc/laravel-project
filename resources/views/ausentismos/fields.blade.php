<div class="form-group col-sm-6">
                    <label>Fecha de Registro* </label>
                    <input type="date" name="fecha_registro" class="form-control">
                    <label>Identificacion del empleado* </label>
                    <input type="number"  class="form-control" id="codigo">
                    <input type="button" class="btn btn-primary" value="Buscar" onclick="getMessage();">
                    <br>
                    <label>Nombre de Empleado* </label>
                    <input type="text" name="id_ident" class="form-control" id="id_emple" disabled>
                    <input name="id_empleado" type="hidden" id="iden">
                    <label>Tipo de Ausentismo* </label>
                    {{-- <input type="select" name="id_tipoausentismo" class="form-control"> --}}
                     <select name="id_tipoausentismo" id="id_tipoausentismo" class="form-control">
                        @foreach ($tipoausentismos as $tipoausentismo) 
                        <option value="{{ $tipoausentismo['id'] }}">{{ $tipoausentismo['name'] }}</option>
                        @endforeach
                        </select> -->
                    <label>Fecha de Inicio* </label>
                    <input type="date" name="fecha_inicio" class="form-control">
                    <label>Tiempo de Ausencia / Dias* </label>
                    <input type="text" name="tiempo_ausencia" id="tiempo_ausencia" class="form-control">
                    <input type="button" class="btn btn-primary" value="Calcular" onclick="sumar();">
                    <br>
                    <label>Costo de Ausencia / $ </label>
                    <input  type="number" name="costo_ausencia" id="costo_ausencia" class="form-control">
                    <label>Grado* </label>
                    <select name="Grado" id="grado" class="form-control">
                    <option value="LEVE">LEVE</option>
                    <option value="SEVERO">SEVERO</option>
                    </select>                
                    <label>Observacion* </label>
                    <input type="text" name="observacion" class="form-control">
                    </div>
                    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('ausentismos.index') !!}" class="btn btn-default">Cancel</a>
    </div>
