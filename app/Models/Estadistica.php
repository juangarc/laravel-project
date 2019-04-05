<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estadistica
 * @package App\Models
 * @version April 5, 2019, 4:49 am UTC
 *
 * @property integer ano
 * @property double ta
 * @property double is
 * @property double if
 * @property double ma
 * @property double ili
 */
class Estadistica extends Model
{
    use SoftDeletes;

    public $table = 'estadisticas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ano',
        'ta',
        'is',
        'if',
        'ma',
        'ili'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ano' => 'integer',
        'ta' => 'double',
        'is' => 'double',
        'if' => 'double',
        'ma' => 'double',
        'ili' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
