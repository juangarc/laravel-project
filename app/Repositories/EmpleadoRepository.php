<?php

namespace App\Repositories;

use App\Models\Empleado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmpleadoRepository
 * @package App\Repositories
 * @version February 24, 2019, 7:21 pm UTC
 *
 * @method Empleado findWithoutFail($id, $columns = ['*'])
 * @method Empleado find($id, $columns = ['*'])
 * @method Empleado first($columns = ['*'])
*/
class EmpleadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'identificacion',
        'name',
        'apellido',
        'telefono',
        'correoelectronico',
        'id_tipovinculacion',
        'fechadenacimiento',
        'salario',
        'id_cargo',
        'id_sede',
        'fechadeingreso',
        'estado',
        'genero'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Empleado::class;
    }
}
