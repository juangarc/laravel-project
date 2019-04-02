<li class="treeview">
        <a href="#">

            <i class="fa fa-cog"></i> <span>Parametrizacion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('cargos*') ? 'active' : '' }}">
                <a href="{!! route('cargos.index') !!}"><i class="fa fa-edit"></i><span>Cargos</span></a>
            </li>
            <li class=" {{ Request::is('sedes*') ? 'active' : '' }}">
            <a href="{!! route('sedes.index') !!}"><i class="fa fa-edit"></i><span>Sedes</span></a>
            </li>
            <li class=" {{ Request::is('tipoAusentismos*') ? 'active' : '' }}">
            <a href="{!! route('tipoAusentismos.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Ausentismo</span></a>
            </li>
            <li class="{{ Request::is('tipoVinculacions*') ? 'active' : '' }}">
            <a href="{!! route('tipoVinculacions.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Vinculacion</span></a>
            </li>
        </ul>
</li>
<li class="treeview">
        <a href="#">
            <i class="fa fa-clock-o"></i> <span>Modulo de ausentismos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class=" {{ Request::is('ausentismos*') ? 'active' : '' }}">
                <a href="{!! route('ausentismos.index') !!}"><i class="fa fa-edit"></i><span>Ausentismos</span></a>
            </li>
            <li class=" {{ Request::is('prorrogas*') ? 'active' : '' }}">
                <a href="{!! route('prorrogas.index') !!}"><i class="fa fa-calendar-plus-o"></i><span>Prorrogas</span></a>
            </li>
        </ul>
</li>
@hasanyrole('admin')
<li class="{{ Request::is('empleados*') ? 'active' : '' }}">
    <a href="{!! route('empleados.index') !!}"><i class="fa fa-group"></i><span>Empleados</span></a>
</li>
@endhasanyrole
<li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Modulo de citas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <!--<li class="nav-item {{ Request::is('tipoEspecialidads*') ? 'active' : '' }}">
                <a href="{!! route('tipoEspecialidads.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Especialidad</span></a>
            </li>-->
            <li class="{{ Request::is('clientes*') ? 'active' : '' }}">
                <a href="{!! route('clientes.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
            </li>
            
            <li class=" {{ Request::is('tipoExamens*') ? 'active' : '' }}">
                <a href="{!! route('tipoExamens.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Examen</span></a>
            </li>

            <li class=" {{ Request::is('instituciones*') ? 'active' : '' }}">
                <a href="{!! route('instituciones.index') !!}"><i class="fa fa-edit"></i><span>Instituciones</span></a>
            </li>

            <li class=" {{ Request::is('examenes*') ? 'active' : '' }}">
                <a href="{!! route('examenes.index') !!}"><i class="fa fa-edit"></i><span>Examenes</span></a>
            </li>

            <li class="{{ Request::is('examenInstitucions*') ? 'active' : '' }}">
                <a href="{!! route('examenInstitucions.index') !!}"><i class="fa fa-edit"></i><span>Examen Institucions</span></a>
            </li>

            <li class="{{ Request::is('productos*') ? 'active' : '' }}">
                <a href="{!! route('productos.index') !!}"><i class="fa  fa-cube"></i><span>Productos</span></a>
            </li>
            <li class="{{ Request::is('cupos*') ? 'active' : '' }}">
                <a href="{!! route('cupos.index') !!}"><i class="fa fa-edit"></i><span>Cupos</span></a>
            </li>

            <li class="{{ Request::is('beneficiarios*') ? 'active' : '' }}">
                <a href="{!! route('beneficiarios.index') !!}"><i class="fa fa-edit"></i><span>Beneficiarios</span></a>
            </li>
          </ul>
</li>
<li class="{{ Request::is('estadisticas*') ? 'active' : '' }}">
    <a href="{!! route('estadisticas.index') !!}"><i class="fa fa-edit"></i><span>Estadisticas</span></a>
<li class="{{ Request::is('solicituds*') ? 'active' : '' }}">
    <a href="{!! route('solicituds.index') !!}"><i class="fa fa-edit"></i><span>Solicituds</span></a>
</li>

