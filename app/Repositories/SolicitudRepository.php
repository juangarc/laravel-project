<?php

namespace App\Repositories;

use App\Models\Solicitud;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SolicitudRepository
 * @package App\Repositories
 * @version March 31, 2019, 9:57 pm UTC
 *
 * @method Solicitud findWithoutFail($id, $columns = ['*'])
 * @method Solicitud find($id, $columns = ['*'])
 * @method Solicitud first($columns = ['*'])
*/
class SolicitudRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_inicio',
        'id_serial',
        'estado',
        'nombre',
        'id_institucion',
        'id_examen',
        'id_examen_institucion',
        'progreso',
        'observacion',
        'hora'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Solicitud::class;
    }
}
