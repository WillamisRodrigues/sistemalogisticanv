<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoImugi extends Model
{
    protected $primaryKey = 'idCod';
    protected $table = 'codigo';
    protected $connection = 'imugi';

    protected $fillable = [
        'idCod','codUnidade','nivel','matricula','unidade','curso'
    ];
}
