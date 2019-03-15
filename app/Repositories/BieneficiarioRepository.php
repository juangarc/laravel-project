<?php

namespace App\Repositories;

use App\Models\Bieneficiario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BieneficiarioRepository
 * @package App\Repositories
 * @version March 15, 2019, 3:03 am UTC
 *
 * @method Bieneficiario findWithoutFail($id, $columns = ['*'])
 * @method Bieneficiario find($id, $columns = ['*'])
 * @method Bieneficiario first($columns = ['*'])
*/
class BieneficiarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'Parenteso',
        'Edad',
        'cod_cupo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Bieneficiario::class;
    }
}
