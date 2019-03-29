<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ausentismo
 * @package App\Models
 * @version February 24, 2019, 5:21 pm UTC
 *
 * @property \App\Models\Cargo cargo
 * @property \App\Models\Empleado empleado
 * @property \App\Models\Tipoausentismo tipoausentismo
 * @property \Illuminate\Database\Eloquent\Collection Prorroga
 * @property date fecha_registro
 * @property integer id_empleado
 * @property integer id_tipoausentismo
 * @property integer id_cargo
 * @property date fecha_inicio
 * @property integer tiempo_ausencia
 * @property float costo_ausencia
 * @property string Grado
 * @property string observacion
 */
class Ausentismo extends Model
{
    use SoftDeletes;

    public $table = 'ausentismos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha_registro',
        'id_empleado',
        'id_tipoausentismo',
        'fecha_inicio',
        'tiempo_ausencia',
        'costo_ausencia',
        'Grado',
        'observacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_registro' => 'date',
        'id_empleado' => 'integer',
        'id_tipoausentismo' => 'integer',
        'fecha_inicio' => 'date',
        'tiempo_ausencia' => 'integer',
        'costo_ausencia' => 'float',
        'Grado' => 'string',
        'observacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cargo()
    {
        return $this->belongsTo(\App\Models\Cargo::class, 'id_cargo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function empleado()
    {
        return $this->belongsTo(\App\Models\Empleado::class, 'id_empleado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoausentismo()
    {
        return $this->belongsTo(\App\Models\Tipoausentismo::class,'id_tipoausentismo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function prorrogas()
    {
        return $this->hasMany(\App\Models\Prorroga::class);
    }
}
