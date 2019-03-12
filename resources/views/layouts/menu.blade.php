<li class="nav-item nav-dropdown">
    <a class="dropdown-btn"href="#"> Parametrizacion <i class="fa fa-caret-down"></i> </a>
        <ul class="nav-dropdown-items">
            <li class="nav-item {{ Request::is('cargos*') ? 'active' : '' }}">
            <a href="{!! route('cargos.index') !!}"><i class="fa fa-edit"></i><span>Cargos</span></a>
            </li>
            <li class="nav-item {{ Request::is('sedes*') ? 'active' : '' }}">
            <a href="{!! route('sedes.index') !!}"><i class="fa fa-edit"></i><span>Sedes</span></a>
            </li>
            <li class="nav-item {{ Request::is('tipoAusentismos*') ? 'active' : '' }}">
            <a href="{!! route('tipoAusentismos.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Ausentismo</span></a>
            </li>
            <!-- <li class="{{ Request::is('tipoVinculacions*') ? 'active' : '' }}">
            <a href="{!! route('tipoVinculacions.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Vinculacion</span></a>
            </li> -->
        </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="dropdown-btn" href="#"> Registrar de ausentismo <i class="fa fa-caret-down"></i> </a>
        <ul class="nav-dropdown-items">
            <li class="nav-item {{ Request::is('ausentismos*') ? 'active' : '' }}">
                <a href="{!! route('ausentismos.index') !!}"><i class="fa fa-edit"></i><span>Ausentismos</span></a>
            </li>
            <li class="nav-item {{ Request::is('prorrogas*') ? 'active' : '' }}">
                <a href="{!! route('prorrogas.index') !!}"><i class="fa fa-edit"></i><span>Prorrogas</span></a>
            </li>
        </ul>
</li>

<li class="{{ Request::is('empleados*') ? 'active' : '' }}">
    <a href="{!! route('empleados.index') !!}"><span>Empleados</span></a>
</li>

<li class="nav-item nav-dropdown">
    <a class="dropdown-btn" href="#"> Modulo citas <i class="fa fa-caret-down"></i></a>
        <ul class="nav-dropdown-items">
            <li class="nav-item {{ Request::is('tipoEspecialidads*') ? 'active' : '' }}">
                <a href="{!! route('tipoEspecialidads.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Especialidad</span></a>
            </li>

            <li class="nav-item {{ Request::is('tipoExamens*') ? 'active' : '' }}">
                <a href="{!! route('tipoExamens.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Examen</span></a>
            </li>

            <li class="nav-item {{ Request::is('instituciones*') ? 'active' : '' }}">
                <a href="{!! route('instituciones.index') !!}"><i class="fa fa-edit"></i><span>Instituciones</span></a>
            </li>

            <li class="nav-item {{ Request::is('examenes*') ? 'active' : '' }}">
                <a href="{!! route('examenes.index') !!}"><i class="fa fa-edit"></i><span>Examenes</span></a>
            </li>

            <li class="{{ Request::is('examenInstitucions*') ? 'active' : '' }}">
                <a href="{!! route('examenInstitucions.index') !!}"><i class="fa fa-edit"></i><span>Examen  Institucions</span></a>
            </li>
          </ul>
</li>
<style>
    .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width:100%;
    text-align: left;
    cursor: pointer;
    outline: none;
    }

    .fa-caret-down {
    float: right;
    padding-right: 8px;
    }
    .nav-dropdown-items  {
    display: none;
    background-color: #262626;
    padding-left: 8px;
    }
}
</style>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>




