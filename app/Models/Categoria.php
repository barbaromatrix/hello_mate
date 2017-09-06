<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table    = 'categorias';
    protected $fillable = ['nm_categoria'];
    protected $dates    = ['created_at', 'updated_at'];
}
