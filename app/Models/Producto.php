<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * @package App\Models
 * @version March 13, 2019, 9:45 pm UTC
 *
 * @property string nombre
 * @property date fecha_inicio
 * @property date fecha_fin
 * @property integer valor
 */
class Producto extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_fin',
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
        'fecha_fin' => 'date',
        'valor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required',
        'valor' => 'numeric'
        
    ];

    
}
