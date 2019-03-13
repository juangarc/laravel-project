<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
                <h4>Anadir Prorroga</h4>
            </div>
            <div class="modal-body">
            <form id="formulario">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Cantidad de Dias* </label>
                    <input type="number" name="cantidad_dia_prorroga" class="form-control">
                    <input name="id_ausentismo" type="hidden" id="iden" value={{$ausentismo->id}}>
                </div>            
                <div class="form-group">
                    <label>Fecha de incio* </label>
                    <input type="date" name="fechainicio" class="form-control">
                </div>
                <div class="form-group">
                    <label>Incapacidad* </label>
                    <select name="incapacidad" id="incapacidad" class="form-control">
                    <option value="PERMANENTE">PERMANENTE</option>
                    <option value="PARCIAL">PARCIAL</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>%Incapacidad* </label>
                    <input type="number" name="%incapacidad" class="form-control">
                </div>
                <div class="form-group">
                    <label>Seguimiento de incapacidad* </label>
                    <input type="text" name="seguimiento_incapacidad" class="form-control">
                </div>
            </form>
            </div>
            <div class="modal-footer">
            <a href="{{ route('ausentismos.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-primary" id="btn-crear">Crear</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   