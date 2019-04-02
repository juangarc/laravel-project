<?php

namespace App\Repositories;

use App\Models\Estadistica;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstadisticaRepository
 * @package App\Repositories
 * @version March 31, 2019, 10:35 pm UTC
 *
 * @method Estadistica findWithoutFail($id, $columns = ['*'])
 * @method Estadistica find($id, $columns = ['*'])
 * @method Estadistica first($columns = ['*'])
*/
class EstadisticaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'año',
        'ia',
        'is',
        'if',
        'ma',
        'ili',
        'iel',
        'pel',
        'ieg',
        'peg'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estadistica::class;
    }
}
