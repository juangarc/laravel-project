<?php

namespace App\Repositories;

use App\Models\Sede;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SedeRepository
 * @package App\Repositories
 * @version February 24, 2019, 4:42 pm UTC
 *
 * @method Sede findWithoutFail($id, $columns = ['*'])
 * @method Sede find($id, $columns = ['*'])
 * @method Sede first($columns = ['*'])
*/
class SedeRepository extends BaseRepository
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
        return Sede::class;
    }
}
