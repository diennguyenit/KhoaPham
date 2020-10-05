<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

class ConfigController extends Controller
{
    public function getAllConfig(Request $myRequest)
    {
        // dd(';config controller');
        // $configs = new Config();
        vardump($myRequest); dd();
        return Config::find(1)->configType()->get();
    }

    public function configWelcome() {
        return 'config welcome';
    }

    //get config-type by id
    public function getConfigTypeByID()
    {
        return Config::find(1)->getConfigType()->get();
    }
}
