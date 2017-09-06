<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table    = 'imoveis';
    protected $fillable = ['nm_imovel', 'ds_imovel', 'ds_imovel', 'nm_logradouro', 'nm_cidade', 'nm_estado', 'usuario_id', 'created_at', 'updated_at'];
    protected $dates    = ['created_at', 'updated_at'];
    
    public function usuario() {
        return $this->belongsTo('App\Models\Usuario', 'id', 'usuario_id');
    }
}
