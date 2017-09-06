<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoImovel extends Model
{
    protected $table    = 'foto_imoveis';
    protected $fillable = ['nm_foto', 'nm_fisico_foto', 'ic_imagem_principal', 'imovel_id'];
    protected $dates    = ['created_at', 'updated_at'];
    
    public function imovel() {
        return $this->belongsTo('App\Models\Imovel', 'imovel_id');
    }
}
