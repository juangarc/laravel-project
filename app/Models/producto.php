<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class producto
 * @package App\Models
 * @version March 13, 2019, 1:51 pm UTC
 *
 * @property string nombre
 * @property date fecha_inicio
 * @property date fecha_final
 * @property integer valor
 */
class producto extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_final',
        'valor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'fecha_inicio' => 'date',
        'fecha_final' => 'date',
        'valor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
