<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoGracom extends Model
{
    protected $primaryKey = 'idCod';
    protected $table = "codigo";
    protected $connection = 'gracom';

    protected $fillable = [
        'nivel'
    ];
}
