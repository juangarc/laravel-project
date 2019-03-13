<?php

namespace App\Repositories;

use App\Models\Cargo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CargoRepository
 * @package App\Repositories
 * @version March 13, 2019, 7:34 pm UTC
 *
 * @method Cargo findWithoutFail($id, $columns = ['*'])
 * @method Cargo find($id, $columns = ['*'])
 * @method Cargo first($columns = ['*'])
*/
class CargoRepository extends BaseRepository
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
        return Cargo::class;
    }
}
