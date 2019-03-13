<?php

namespace App\Repositories;

use App\Models\producto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class productoRepository
 * @package App\Repositories
 * @version March 13, 2019, 1:51 pm UTC
 *
 * @method producto findWithoutFail($id, $columns = ['*'])
 * @method producto find($id, $columns = ['*'])
 * @method producto first($columns = ['*'])
*/
class productoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'fecha_inicio',
        'fecha_final',
        'valor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return producto::class;
    }
}
