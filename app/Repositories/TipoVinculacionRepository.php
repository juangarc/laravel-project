<?php

namespace App\Repositories;

use App\Models\TipoVinculacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoVinculacionRepository
 * @package App\Repositories
 * @version February 24, 2019, 5:14 pm UTC
 *
 * @method TipoVinculacion findWithoutFail($id, $columns = ['*'])
 * @method TipoVinculacion find($id, $columns = ['*'])
 * @method TipoVinculacion first($columns = ['*'])
*/
class TipoVinculacionRepository extends BaseRepository
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
        return TipoVinculacion::class;
    }
}
