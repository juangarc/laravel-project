<?php

namespace App\Repositories;

use App\Models\ExamenInstitucion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExamenInstitucionRepository
 * @package App\Repositories
 * @version March 26, 2019, 7:29 pm UTC
 *
 * @method ExamenInstitucion findWithoutFail($id, $columns = ['*'])
 * @method ExamenInstitucion find($id, $columns = ['*'])
 * @method ExamenInstitucion first($columns = ['*'])
*/
class ExamenInstitucionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cod_examen',
        'cod_institucion',
        'valor_particular',
        'valor_previser'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ExamenInstitucion::class;
    }
}
