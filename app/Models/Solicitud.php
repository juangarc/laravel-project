<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Solicitud
 * @package App\Models
 * @version March 26, 2019, 8:29 pm UTC
 *
 * @property \App\Models\cliente cliente
 * @property \App\Models\Instituciones instituciones
 * @property \App\Models\TipoExamen tipoExamen
 * @property \App\Models\Examenes examenes
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

    public function clientes()
    {
        return $this->belongsTo(\App\Models\cliente::class, 'cliente');
    }

    public function instituciones()
    {
        return $this->belongsTo(\App\Models\Instituciones::class, 'cod_institucion');
    }

    public function tipoExamen()
    {
        return $this->belongsTo(\App\Models\TipoExamen::class, 'cod_tipo_examen');
    }

    public function examenes()
    {
        return $this->belongsTo(\App\Models\Examenes::class, 'cod_examen');
    }
}
