<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empleado
 * @package App\Models
 * @version February 24, 2019, 7:21 pm UTC
 *
 * @property \App\Models\Cargo cargo
 * @property \App\Models\Sede sede
 * @property \App\Models\TipoVinculacion tipoVinculacion
 * @property \Illuminate\Database\Eloquent\Collection Ausentismo
 * @property integer identificacion
 * @property string name
 * @property string apellido
 * @property integer telefono
 * @property string correoelectronico
 * @property integer id_tipovinculacion
 * @property date fechadenacimiento
 * @property float salario
 * @property integer id_cargo
 * @property integer id_sede
 * @property date fechadeingreso
 * @property string estado
 * @property string genero
 */
class Empleado extends Model
{
    use SoftDeletes;

    public $table = 'empleados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'identificacion',
        'name',
        'apellido',
        'telefono',
        'correoelectronico',
        'id_tipovinculacion',
        'fechadenacimiento',
        'salario',
        'id_cargo',
        'id_sede',
        'fechadeingreso',
        'estado',
        'genero'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identificacion' => 'integer',
        'name' => 'string',
        'apellido' => 'string',
        'telefono' => 'integer',
        'correoelectronico' => 'string',
        'id_tipovinculacion' => 'integer',
        'fechadenacimiento' => 'datetime:m-d-Y',
        'salario' => 'float',
        'id_cargo' => 'integer',
        'id_sede' => 'integer',
        'fechadeingreso' => 'datetime:m-d-Y',
        'estado' => 'string',
        'genero' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'identificacion' => 'required',
        'name' => 'required',
        'apellido' => 'required',
        'telefono' => 'numeric',
        'correoelectronico' => 'required',
        'id_tipovinculacion' => 'required',
        'fechadenacimiento' => 'required',
        'salario' => 'numeric',
        'id_cargo' => 'required',
        'id_sede' => 'required',
        'fechadeingreso' => 'required',
        'estado' => 'required',
        'genero' => 'required'
        
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
    public function sede()
    {
        return $this->belongsTo(\App\Models\Sede::class, 'id_sede');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoVinculacion()
    {
        return $this->belongsTo(\App\Models\TipoVinculacion::class, 'id_tipovinculacion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ausentismos()
    {
        return $this->hasMany(\App\Models\Ausentismo::class);
    }
}
