<div class="form-group col-sm-6">
                    
                        {!! Form::label('fechaderegistro1', 'Fecha de registro:') !!}
                        {!! Form::date('fechaderegistro', $ausentismo->fecha_registro, ['class' => 'form-control']) !!}
                   <!-- <label>Fecha de Registro* </label>
                    <input type="date" id="fechaderegistro" name="fechaderegistro" value="{{$ausentismo->fecha_registro}}" class="form-control"> -->
                    <label>Consultar Empleado por:* </label><br>
                    <label for="" style="margin-right:20px;"><input type="checkbox" id="check1" OnClick="Disable(1);" > Cedula</label>  <label for=""><input type="checkbox" id="check2" OnClick="Disable(2);" > Nombre y apellido</label><br>
                    <label id="nameSearch">Identificacion del empleado* </label>
                    <input type="number" value="{{$empleado['identificacion']}}" class="form-control" id="codigo">
                    <input type="button" class="btn btn-primary" value="Buscar" onclick="getMessage();">
                    <br>
                    <label>Nombre de Empleado* </label>
                    <input type="text" name="id_ident" value="{{$empleado['name'] . ' ' . $empleado['apellido']}}" class="form-control" id="id_emple" disabled>
                    <input name="id_empleado" value="{{$empleado['id']}}" type="hidden"  id="iden">
                    <label>Tipo de Ausentismo* </label>
                    {{-- <input type="select" name="id_tipoausentismo" class="form-control"> --}}
                     <select name="id_tipoausentismo" id="id_tipoausentismo" class="form-control">
                        @foreach ($tipoausentismos as $tipoausentismo) 
                        <option value="{{ $tipoausentismo['id'] }}">{{ $tipoausentismo['name'] }}</option>
                        @endforeach
                        </select> -->
                    <label>Fecha de Inicio* </label>
                    <input type="date" name="fecha_inicio" class="form-control">
                    <label>Tiempo de Ausencia / Horas* </label>
                    <input type="text" name="tiempo_ausencia" value="{{$ausentismo->tiempo_ausencia}}" id="tiempo_ausencia" class="form-control">
                    <input type="button" class="btn btn-primary" value="Calcular" onclick="sumar();">
                    <br>
                    <label>Costo de Ausencia / $ </label>
                    <input  type="number" name="costo_ausencia" id="costo_ausencia" class="form-control">
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
                    @section('scripts')
                <script type="text/javascript">
                    $('#fechaderegistro').datetpicker({
                    format: 'YYYY-MM-DD',
                    useCurrent: true    
                    })
                </script>
                <script type="text/javascript">
             function Disable(id){
                 if (id === 1) {
                document.getElementById("check1").checked=1;
                document.getElementById("nameSearch").innerHTML='Ingrese Identificación';
                document.getElementById("check2").checked=0;
                }else if(id === 2) {
                    document.getElementById("check2").checked=1;
                    document.getElementById("nameSearch").innerHTML='Ingrese Nombre y Apellido';
                document.getElementById("check1").checked=0;
                }
                }
                                </script>
@endsection
                    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('ausentismos.index') !!}" class="btn btn-default">Cancelar</a>
    </div>
