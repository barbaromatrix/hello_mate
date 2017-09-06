<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreferenciaUsuario extends Model
{
    protected $table    = 'preferencia_usuarios';
    protected $fillable = ['imovel_id', 'usuario_id'];
    protected $dates    = ['created_at', 'updated_at'];
    
    public function usuario() {
        return $this->belongsTo('App\Models\Usuario', 'usuario_id');
    }
    
    public function preferencia() {
        return $this->belongsTo('App\Models\Preferencia', 'preferencia_id');
    }
}
