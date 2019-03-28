<?php

namespace App\DataTables;

use App\Models\Ausentismo;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class AusentismoDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'ausentismos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Ausentismo $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Ausentismo $model)
    {
<<<<<<< HEAD
        return $model->newQuery()->with(['empleado']);
=======
        return $model->newQuery()->with(['empleado','tipoausentismo']);
>>>>>>> 2d91977f2035de81e7ae5e49d1d0f2b49e9b2e96
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
            'fecha_registro',
            //'id_empleado',
             ['title' => 'Empleado',
             'data' => 'empleado.name',
             'name' => 'empleado.name'],
            //'id_tipoausentismo',
            ['title' => 'Tipo de Ausentismo',
            'data' => 'tipoausentismo.name',
            'name' => 'tipoausentismo.name'],
            'fecha_inicio',
            'tiempo_ausencia',
            'costo_ausencia',
            'Grado',
            'observacion'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ausentismosdatatable_' . time();
    }
}
