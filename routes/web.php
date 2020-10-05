<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ConfigController
Route::get('/get-all-configs', 'ConfigController@getAllConfig');

Route::get('/test', function() {
    echo 'test controller';
});

Route::get('/test-controller', 'ConfigController@configWelcome');

Route::get('/config-type-by-id', 'Configcontroller@getConfigTypeByID');

//ConfigTypeController
Route::get('/get-configs/{config_type_id}', 'ConfigTypeController@getConfig');

Route::get('/get-one-config/{config_type_id}', 'ConfigTypeController@getOneConfig');

//ClassController
Route::get('/get-students/{class_id}', 'ClassController@getStudentsByClassID');

//DoiTuong
Route::get('/get-doi-tuong', 'ClassController@getDoiTuong');

//return json
Route::get('/get-json', 'ClassController@getJson');

//DB facade
Route::get('/db-config-types', function() {
    // $config_types = DB::select('select * from config_types');
    // $config_types = DB::statement('select * from config_types');
    // $config_types = DB::table('config_types')->get();
    // $config_types = DB::table('config_types')->where('parent_id', 1)->value('name');
    // $config_types = DB::table('config_types')->find(3);
    // $config_type = $config_types->where('parent_id', 1)->first();
    $config_types = DB::table('config_types')->pluck('name');

    var_dump($config_types);
});
