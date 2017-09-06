<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImovelCategoria extends Model
{
    protected $table    = 'imovel_categorias';
    protected $fillable = ['imovel_id', 'categoria_id'];
    protected $dates    = ['created_at', 'updated_at'];
    
    public function imovel() {
        return $this->belongsTo('App\Models\Imovel', 'imovel_id');
    }
    
    public function categoria() {
        return $this->belongsTo('App\Models\Categoria', 'categoria_id');
    }
}
