<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version March 13, 2019, 9:22 pm UTC
 *
 * @property integer identificacion
 * @property string nombre
 * @property string apellido
 * @property string telefono
 * @property string direccion
 * @property string correo
 * @property enum genero
 * @property integer cod_ciudad
 */
class Cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'identificacion',
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'correo',
        'genero',
        'cod_ciudad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'identificacion' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'telefono' => 'string',
        'direccion' => 'string',
        'correo' => 'string',
        'genero' => 'string',
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
