<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigType extends Model
{
    use HasFactory;

    public function configs()
    {
        // dd('model configType');
        return $this->hasMany('App\Models\Config');
    }

    public function getOneConfig()
    {
        return $this->hasOne('App\Models\Config');
    }
}
