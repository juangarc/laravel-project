<?php

namespace App\Repositories;

use App\Models\Cargo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CargoRepository
 * @package App\Repositories
 * @version February 24, 2019, 4:24 pm UTC
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
