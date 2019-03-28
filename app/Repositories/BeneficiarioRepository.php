<?php

namespace App\Repositories;

use App\Models\Beneficiario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BeneficiarioRepository
 * @package App\Repositories
 * @version March 24, 2019, 2:53 pm UTC
 *
 * @method Beneficiario findWithoutFail($id, $columns = ['*'])
 * @method Beneficiario find($id, $columns = ['*'])
 * @method Beneficiario first($columns = ['*'])
*/
class BeneficiarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'identificacion',
        'name',
        'parentesco',
        'edad',
        'cod_cupo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Beneficiario::class;
    }
}
