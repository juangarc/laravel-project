<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Beneficiario
 * @package App\Models
 * @version March 17, 2019, 3:57 pm UTC
 *
 * @property string name
 * @property string parentesco
 * @property string edad
 * @property integer cod_cupo
 */
class Beneficiario extends Model
{
    use SoftDeletes;

    public $table = 'beneficiarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'parentesco',
        'edad',
        'cod_cupo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'parentesco' => 'string',
        'edad' => 'string',
        'cod_cupo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
