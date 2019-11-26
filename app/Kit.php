<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Kit extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'nome_kit','empresa_id','numero_kit'
    ];
    protected $dates = ['deleted_at'];
}
