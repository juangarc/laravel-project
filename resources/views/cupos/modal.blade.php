<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
                <h4>Anadir Beneficiario</h4>
            </div>
            <div class="modal-body">
            <form id="formulario">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Identificación* </label>
                    <input type="text" name="identificacion" class="form-control">
                    <input name="cod_cupo" type="hidden"  value={{$cupo->id}}>
                </div> 
                <div class="form-group">
                    <label>Nombre* </label>
                    <input type="text" name="name" class="form-control">
                </div>            
                <div class="form-group">
                    <label>Parentesco* </label>
                    <input type="text" name="parentesco" class="form-control">
                </div>
                <div class="form-group">
                    <label>Edad* </label>
                    <input type="text" name="edad" class="form-control">
                </div>
            </form>
            </div>
            <div class="modal-footer">
            <a href="{{ route('cupos.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-primary" id="btn-crear">Crear</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   