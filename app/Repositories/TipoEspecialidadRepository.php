<?php

namespace App\Repositories;

use App\Models\TipoEspecialidad;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoEspecialidadRepository
 * @package App\Repositories
 * @version February 24, 2019, 5:11 pm UTC
 *
 * @method TipoEspecialidad findWithoutFail($id, $columns = ['*'])
 * @method TipoEspecialidad find($id, $columns = ['*'])
 * @method TipoEspecialidad first($columns = ['*'])
*/
class TipoEspecialidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoEspecialidad::class;
    }
}
