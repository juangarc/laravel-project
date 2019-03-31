<?php

namespace App\DataTables;

use App\Models\Solicitud;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class SolicitudDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'solicituds.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Solicitud $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Solicitud $model)
    {
        return $model->newQuery()->with(['clientes', 'instituciones', 'tipoExamen', 'examenes']);
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
            ['title' => 'Cliente',
            'data' => 'clientes.nombre',
            'name' => 'clientes.nombre'],
            'fecha_cita',
            'hora_cita',
            ['title' => 'Institucion',
            'data' => 'instituciones.name',
            'name' => 'instituciones.name'],
            ['title' => 'Tipo Examen',
            'data' => 'tipo_examen.name',
            'name' => 'tipoExamen.name'],
            ['title' => 'Examen',
            'data' => 'examenes.name',
            'name' => 'examenes.name'],
            'observacion',
            'estado'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'solicitudsdatatable_' . time();
    }
}
