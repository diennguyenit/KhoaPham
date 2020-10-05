<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    public function configType()
    {
        return $this->belongsTo('App\Models\ConfigType');
    }

    public function getConfigType()
    {
        return $this->hasOne('App\Models\ConfigType');
    }
}
