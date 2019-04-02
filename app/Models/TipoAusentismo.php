<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoAusentismo
 * @package App\Models
 * @version February 24, 2019, 5:04 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Ausentismo
 * @property string name
 */
class TipoAusentismo extends Model
{
    use SoftDeletes;

    public $table = 'tipoausentismos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ausentismos()
    {
        return $this->hasMany(\App\Models\Ausentismo::class);
    }
}
