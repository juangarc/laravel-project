<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bieneficiario
 * @package App\Models
 * @version March 15, 2019, 3:03 am UTC
 *
 * @property string nombre
 * @property string Parenteso
 * @property string Edad
 * @property integer cod_cupo
 */
class Bieneficiario extends Model
{
    use SoftDeletes;

    public $table = 'bieneficiarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'Parenteso',
        'Edad',
        'cod_cupo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'Parenteso' => 'string',
        'Edad' => 'string',
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
