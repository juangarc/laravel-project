<?php

namespace App\Repositories;

use App\Models\Instituciones;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InstitucionesRepository
 * @package App\Repositories
 * @version March 10, 2019, 10:31 am UTC
 *
 * @method Instituciones findWithoutFail($id, $columns = ['*'])
 * @method Instituciones find($id, $columns = ['*'])
 * @method Instituciones first($columns = ['*'])
*/
class InstitucionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'direccion',
        'telefono',
        'correo_electronico',
        'cod_ciudad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Instituciones::class;
    }
}
