<?php

namespace App\Repositories;

use App\Models\Servicio_Examen;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Servicio_ExamenRepository
 * @package App\Repositories
 * @version March 24, 2019, 3:56 pm UTC
 *
 * @method Servicio_Examen findWithoutFail($id, $columns = ['*'])
 * @method Servicio_Examen find($id, $columns = ['*'])
 * @method Servicio_Examen first($columns = ['*'])
*/
class Servicio_ExamenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cod_servicio',
        'cod_examen_institucions',
        'fecha_cita',
        'hora_cita',
        'estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Servicio_Examen::class;
    }
}
