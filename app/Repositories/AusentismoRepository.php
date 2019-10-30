<?php

namespace App\Repositories;

use App\Models\Ausentismo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AusentismoRepository
 * @package App\Repositories
 * @version February 24, 2019, 5:21 pm UTC
 *
 * @method Ausentismo findWithoutFail($id, $columns = ['*'])
 * @method Ausentismo find($id, $columns = ['*'])
 * @method Ausentismo first($columns = ['*'])
*/
class AusentismoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_registro',
        'id_empleado',
        'id_tipoausentismo',
        'id_cargo',
        'fecha_inicio',
        'tiempo_ausencia',
        'costo_ausencia',
        'Grado',
        'observacion',
        'id_cie10'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ausentismo::class;
    }
}
