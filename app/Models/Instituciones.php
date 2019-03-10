<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Instituciones
 * @package App\Models
 * @version March 10, 2019, 10:31 am UTC
 *
 * @property string name
 * @property string direccion
 * @property string telefono
 * @property string correo_electronico
 * @property integer cod_ciudad
 */
class Instituciones extends Model
{
    use SoftDeletes;

    public $table = 'instituciones';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'direccion',
        'telefono',
        'correo_electronico',
        'cod_ciudad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'correo_electronico' => 'string',
        'cod_ciudad' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
