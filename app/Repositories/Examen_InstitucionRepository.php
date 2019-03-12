<?php

namespace App\Repositories;

use App\Models\Examen_Institucion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Examen_InstitucionRepository
 * @package App\Repositories
 * @version March 12, 2019, 9:21 am UTC
 *
 * @method Examen_Institucion findWithoutFail($id, $columns = ['*'])
 * @method Examen_Institucion find($id, $columns = ['*'])
 * @method Examen_Institucion first($columns = ['*'])
*/
class Examen_InstitucionRepository extends BaseRepository
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
        return Examen_Institucion::class;
    }
}
