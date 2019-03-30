<?php

namespace App\DataTables;

use App\Models\Empleado;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class EmpleadoDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'empleados.datatables_actions');
    }
    
    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Empleado $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Empleado $model)
    {
        //$tipoVinculacion = TipoVinculacion::all();
        return $model->newQuery()->with(['tipoVinculacion','cargo','sede']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'language' => [
                    'url' => url('http://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'),//<--here
                ],
                'buttons' => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['title' => 'Identificación',
             'data' => 'identificacion',
             'name' => 'identificacion'],
            ['title' => 'Nombre',
             'data' => 'name',
             'name' => 'name'],
            'apellido',
            'telefono',
            'correoelectronico',
            ['title' => 'Tipo Vinculacion',
             'data' => 'tipo_vinculacion.name',
             'name' => 'tipo_vinculacion.name'],
            'fechadenacimiento',
            'salario',
            ['title' => 'Cargo',
            'data' => 'cargo.name',
            'name' => 'cargo.name'],
            ['title' => 'Sede',
            'data' => 'sede.name',
            'name' => 'sede.name'],
            'fechadeingreso',
            'estado',
            'genero'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'empleadosdatatable_' . time();
    }
}
