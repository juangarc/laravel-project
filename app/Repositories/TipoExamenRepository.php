<?php

namespace App\Repositories;

use App\Models\TipoExamen;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoExamenRepository
 * @package App\Repositories
 * @version February 24, 2019, 5:12 pm UTC
 *
 * @method TipoExamen findWithoutFail($id, $columns = ['*'])
 * @method TipoExamen find($id, $columns = ['*'])
 * @method TipoExamen first($columns = ['*'])
*/
class TipoExamenRepository extends BaseRepository
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
        return TipoExamen::class;
    }
}
