<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = "entrada";
    protected $fillable = [
        'kit_1','kit_2','kit_3','unidade_id','empresa_id'
    ];
}
