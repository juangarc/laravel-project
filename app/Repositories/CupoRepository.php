<?php

namespace App\Repositories;

use App\Models\Cupo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CupoRepository
 * @package App\Repositories
 * @version March 17, 2019, 3:27 pm UTC
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
        'serial',
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
