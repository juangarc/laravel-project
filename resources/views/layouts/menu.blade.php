<li class="{{ Request::is('cargos*') ? 'active' : '' }}">
    <a href="{!! route('cargos.index') !!}"><i class="fa fa-edit"></i><span>Cargos</span></a>
</li>

<li class="{{ Request::is('sedes*') ? 'active' : '' }}">
    <a href="{!! route('sedes.index') !!}"><i class="fa fa-edit"></i><span>Sedes</span></a>
</li>

<li class="{{ Request::is('tipoAusentismos*') ? 'active' : '' }}">
    <a href="{!! route('tipoAusentismos.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Ausentismo</span></a>
</li>

<li class="{{ Request::is('tipoEspecialidads*') ? 'active' : '' }}">
    <a href="{!! route('tipoEspecialidads.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Especialidad</span></a>
</li>

<li class="{{ Request::is('tipoExamens*') ? 'active' : '' }}">
    <a href="{!! route('tipoExamens.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Examen</span></a>
</li>

<li class="{{ Request::is('tipoVinculacions*') ? 'active' : '' }}">
    <a href="{!! route('tipoVinculacions.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Vinculacion</span></a>
</li>

<li class="{{ Request::is('ausentismos*') ? 'active' : '' }}">
    <a href="{!! route('ausentismos.index') !!}"><i class="fa fa-edit"></i><span>Ausentismos</span></a>
</li>

<li class="{{ Request::is('prorrogas*') ? 'active' : '' }}">
    <a href="{!! route('prorrogas.index') !!}"><i class="fa fa-edit"></i><span>Prorrogas</span></a>
</li>

<li class="{{ Request::is('empleados*') ? 'active' : '' }}">
    <a href="{!! route('empleados.index') !!}"><i class="fa fa-edit"></i><span>Empleados</span></a>
</li>

