<?php

namespace App\Repositories;

use App\Models\TipoAusentismo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoAusentismoRepository
 * @package App\Repositories
 * @version February 24, 2019, 5:04 pm UTC
 *
 * @method TipoAusentismo findWithoutFail($id, $columns = ['*'])
 * @method TipoAusentismo find($id, $columns = ['*'])
 * @method TipoAusentismo first($columns = ['*'])
*/
class TipoAusentismoRepository extends BaseRepository
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
        return TipoAusentismo::class;
    }
}
