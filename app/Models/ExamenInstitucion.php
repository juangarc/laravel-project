<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ExamenInstitucion
 * @package App\Models
 * @version March 26, 2019, 7:29 pm UTC
 *
 * @property integer cod_examen
 * @property integer cod_institucion
 * @property integer valor_particular
 * @property integer valor_previser
 */
class ExamenInstitucion extends Model
{
    use SoftDeletes;

    public $table = 'examen_institucions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cod_examen',
        'cod_institucion',
        'valor_particular',
        'valor_previser'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cod_examen' => 'integer',
        'cod_institucion' => 'integer',
        'valor_particular' => 'integer',
        'valor_previser' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
