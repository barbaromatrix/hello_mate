<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table    = 'usuarios';
    protected $fillable = ['nm_usuario', 'nm_email', 'nm_senha', 'cd_cpf', 'ds_usuario', 'dt_nascimento', 'ic_rede_social'];
    protected $dates    = ['created_at', 'updated_at'];
    
    public function imovel() {
        return $this->hasMany('App\Models\Imovel', 'usuario_id');
    }
}