<?php

namespace App\Repositories;

use App\Models\Cupo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CupoRepository
 * @package App\Repositories
 * @version March 13, 2019, 10:18 pm UTC
 *
 * @method Cupo findWithoutFail($id, $columns = ['*'])
 * @method Cupo find($id, $columns = ['*'])
 * @method Cupo first($columns = ['*'])
*/
class CupoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'cod_cliente',
        'cod_producto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cupo::class;
    }
}
