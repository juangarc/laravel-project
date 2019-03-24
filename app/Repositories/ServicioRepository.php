<?php

namespace App\Repositories;

use App\Models\Servicio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServicioRepository
 * @package App\Repositories
 * @version March 24, 2019, 3:23 pm UTC
 *
 * @method Servicio findWithoutFail($id, $columns = ['*'])
 * @method Servicio find($id, $columns = ['*'])
 * @method Servicio first($columns = ['*'])
*/
class ServicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'identificacion',
        'fecha_registro',
        'cod_cupo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Servicio::class;
    }
}
