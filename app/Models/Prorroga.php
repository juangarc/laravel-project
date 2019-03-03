<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Prorroga
 * @package App\Models
 * @version February 24, 2019, 5:21 pm UTC
 *
 * @property \App\Models\Ausentismo ausentismo
 * @property time cantidad_dia_prorroga
 * @property date fechainicio
 * @property string incapacidad
 * @property float %incapacidad
 * @property string seguimiento_incapacidad
 * @property integer id_ausentismo
 */
class Prorroga extends Model
{
    use SoftDeletes;

    public $table = 'prorrogas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'cantidad_dia_prorroga',
        'fechainicio',
        'incapacidad',
        '%incapacidad',
        'seguimiento_incapacidad',
        'id_ausentismo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fechainicio' => 'date',
        'incapacidad' => 'string',
        '%incapacidad' => 'float',
        'seguimiento_incapacidad' => 'string',
        'id_ausentismo' => 'integer'
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
    public function ausentismo()
    {
        return $this->belongsTo(\App\Models\Ausentismo::class);
    }
}
