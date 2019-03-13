<?php

namespace App\Repositories;

use App\Models\Producto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductoRepository
 * @package App\Repositories
 * @version March 13, 2019, 9:45 pm UTC
 *
 * @method Producto findWithoutFail($id, $columns = ['*'])
 * @method Producto find($id, $columns = ['*'])
 * @method Producto first($columns = ['*'])
*/
class ProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'fecha_inicio',
        'fecha_fin',
        'valor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Producto::class;
    }
}
