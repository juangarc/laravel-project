<?php

namespace App\Repositories;

use App\Models\Examenes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExamenesRepository
 * @package App\Repositories
 * @version March 10, 2019, 11:45 am UTC
 *
 * @method Examenes findWithoutFail($id, $columns = ['*'])
 * @method Examenes find($id, $columns = ['*'])
 * @method Examenes first($columns = ['*'])
*/
class ExamenesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'cod_tipoexamen'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Examenes::class;
    }
}
