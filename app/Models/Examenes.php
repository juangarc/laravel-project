<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Examenes
 * @package App\Models
 * @version March 10, 2019, 11:45 am UTC
 *
 * @property string name
 * @property integer cod_tipoexamen
 */
class Examenes extends Model
{
    use SoftDeletes;

    public $table = 'examenes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'cod_tipoexamen'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'cod_tipoexamen' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
