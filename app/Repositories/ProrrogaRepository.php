<?php

namespace App\Repositories;

use App\Models\Prorroga;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProrrogaRepository
 * @package App\Repositories
 * @version February 24, 2019, 5:21 pm UTC
 *
 * @method Prorroga findWithoutFail($id, $columns = ['*'])
 * @method Prorroga find($id, $columns = ['*'])
 * @method Prorroga first($columns = ['*'])
*/
class ProrrogaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cantidad_dia_prorroga',
        'fechainicio',
        'incapacidad',
        '%incapacidad',
        'seguimiento_incapacidad',
        'id_ausentismo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Prorroga::class;
    }
}
