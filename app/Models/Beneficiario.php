<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Beneficiario
 * @package App\Models
 * @version March 24, 2019, 2:53 pm UTC
 *
 * @property string identificacion
 * @property string name
 * @property string parentesco
 * @property string edad
 * @property integer cod_cupo
 */
class Beneficiario extends Model
{
    use SoftDeletes;

    public $table = 'beneficiarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'identificacion',
        'name',
        'parentesco',
        'edad',
        'cod_cupo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'identificacion' => 'string',
        'name' => 'string',
        'parentesco' => 'string',
        'edad' => 'string',
        'cod_cupo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function cupo()
    {
        return $this->belongsTo(\App\Models\Cupo::class, 'cod_cupo');
    }


    
}
