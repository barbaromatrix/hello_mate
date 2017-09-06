<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoUsuario extends Model
{
    protected $table    = 'foto_usuarios';
    protected $fillable = ['nm_foto', 'nm_fisico_foto', 'ic_imagem_principal', 'imovel_id'];
    protected $dates    = ['created_at', 'updated_at'];
    
}
