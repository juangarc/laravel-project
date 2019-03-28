<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Solicitud
 * @package App\Models
 * @version March 26, 2019, 8:29 pm UTC
 *
 * @property date fecha_registro
 * @property integer identificacion
 * @property string nombre
 * @property date fecha_cita
 * @property time hora_cita
 * @property integer cod_institucion
 * @property integer cod_tipo_examen
 * @property integer cod_examen
 * @property string observacion
 * @property enum estado
 */
class Solicitud extends Model
{
    use SoftDeletes;

    public $table = 'solicituds';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha_registro',
        'cliente',
        'fecha_cita',
        'hora_cita',
        'cod_institucion',
        'cod_tipo_examen',
        'cod_examen',
        'observacion',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha_registro' => 'date',
        'identificacion' => 'integer',
        'fecha_cita' => 'date',
        'cod_institucion' => 'integer',
        'cod_tipo_examen' => 'integer',
        'cod_examen' => 'integer',
        'observacion' => 'string',
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
