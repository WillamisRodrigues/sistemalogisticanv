<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lancamentos extends Model
{
    protected $table = "lancamentos";
    protected $fillable = [
        'qtd_kit','kit_id','unidade_id','numero_ecomeerce'
    ];
}
