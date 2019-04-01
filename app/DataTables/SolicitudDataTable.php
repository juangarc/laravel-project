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
        return $model->newQuery()->with([]);
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
            'fecha_inicio',
            'id_serial',
            // ['title' => 'Cupo',
            // 'data' => 'cupo.serial',
            // 'name' => 'cupo.serial'],
            'estado',
            // ['title' => 'Estado',
            // 'data' => 'cupo.estado',
            // 'name' => 'cupo.estado'],
            // 'nombre',
            'id_institucion',
            // ['title' => 'Institucion',
            // 'data' => 'institucion.name',
            // 'name' => 'institucion.name'],
            'id_examen',
            // ['title' => 'Examen',
            // 'data' => 'examen.name',
            // 'name' => 'iexamen.name'],
            'id_examen_institucion',
            // ['title' => 'Costo',
            // 'data' => 'exameninstitucion.valor_previser',
            // 'name' => 'exameninstitucion.valor_previser'],
            'fecha_cita',
            'progreso',
            'observacion',
            'hora'
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
