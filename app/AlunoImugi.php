<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoImugi extends Model
{
    protected $primaryKey = 'idCod';
    protected $table = "alunosimugi";
    protected $connection = 'imugi';
}
