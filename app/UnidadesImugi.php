<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadesImugi extends Model
{
    protected $table = "unidades";
    protected $fillable = [
        'nome_unidade', 'cidade_id','estado_id','cod_sophia_id','empresa_id'
    ];
}
