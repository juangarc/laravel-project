<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Servicio
 * @package App\Models
 * @version March 24, 2019, 3:23 pm UTC
 *
 * @property string identificacion
 * @property date fecha_registro
 * @property integer cod_cupo
 */
class Servicio extends Model
{
    use SoftDeletes;

    public $table = 'servicios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'identificacion',
        'fecha_registro',
        'cod_cupo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'identificacion' => 'string',
        'fecha_registro' => 'date',
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
