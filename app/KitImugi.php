<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KitImugi extends Model
{
    protected $table = "kits";
    protected $connection = 'imugi';
}
