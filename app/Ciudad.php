<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
 protected $fillable = ['id', 'name', 'id_departamento'];
}
