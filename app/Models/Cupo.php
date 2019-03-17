<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cupo
 * @package App\Models
 * @version March 17, 2019, 3:27 pm UTC
 *
 * @property string serial
 * @property date fecha_inicio
 * @property date fecha_fin
 * @property enum estado
 * @property integer cod_cliente
 * @property integer cod_producto
 */
class Cupo extends Model
{
    use SoftDeletes;

    public $table = 'cupos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'serial',
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'cod_cliente',
        'cod_producto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'serial' => 'string',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'estado' => 'string',
        'cod_cliente' => 'integer',
        'cod_producto' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
