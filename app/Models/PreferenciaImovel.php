<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreferenciaImovel extends Model
{
    protected $table    = 'preferencia_imoveis';
    protected $fillable = ['imovel_id', 'preferencia_id'];
    protected $dates    = ['created_at', 'updated_at'];
    
    public function imovel() {
        return $this->belongsTo('App\Models\Imovel', 'imovel_id');
    }
    
    public function preferencia() {
        return $this->belongsTo('App\Models\Preferencia', 'preferencia_id');
    }
}
