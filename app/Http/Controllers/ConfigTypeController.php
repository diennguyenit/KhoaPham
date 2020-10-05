<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigType;

class ConfigTypeController extends Controller
{
    public function getConfig(Request $myRequest)
    {
        // dd('config type controller');
        // dd($myRequest);
        // $configs = ConfigType::find($myRequest->config_type_id)->getConfig()->get();
        // dd($myRequest->config_type_id);
        // dd(ConfigType::find($myRequest->config_type_id));
        $configs = ConfigType::find($myRequest->config_type_id)->configs->jsonSerialize();
        // dd('controller config type');
        // dd($configs);
        return view('accept-data')->with('configs', $configs);
        // var_dump($configs); dd();
        // return view('accept-data')->with('configs', $configs);
    }

    public function getOneConfig(Request $myRequest)
    {
        $configs = ConfigType::find($myRequest->config_type_id)->getOneConfig()->get();
        return view('accept-data')->with('configs', $configs);
    }
}
