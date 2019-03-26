<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Servicio_Examen
 * @package App\Models
 * @version March 24, 2019, 3:56 pm UTC
 *
 * @property integer cod_servicio
 * @property integer cod_examen_institucions
 * @property date fecha_cita
 * @property time hora_cita
 * @property enum estado
 */
class Servicio_Examen extends Model
{
    use SoftDeletes;

    public $table = 'servicio__examens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cod_servicio',
        'cod_examen_institucions',
        'fecha_cita',
        'hora_cita',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cod_servicio' => 'integer',
        'cod_examen_institucions' => 'integer',
        'fecha_cita' => 'date',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
