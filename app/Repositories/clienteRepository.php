<?php

namespace App\Repositories;

use App\Models\cliente;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class clienteRepository
 * @package App\Repositories
 * @version March 13, 2019, 4:05 am UTC
 *
 * @method cliente findWithoutFail($id, $columns = ['*'])
 * @method cliente find($id, $columns = ['*'])
 * @method cliente first($columns = ['*'])
*/
class clienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'identificacion',
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'correo',
        'genero',
        'cod_ciudad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return cliente::class;
    }
}
