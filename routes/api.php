<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
JsonApi::register('default')->routes(function ($api) {
    $api->resource('categorias')->relationships(function ($relations) {
        $relations->hasMany('exames');
        // $relations->hasOne('advertisements');
      });

      $api->resource('locais')->relationships(function ($relations) {
        $relations->hasMany('funcionarios');
        $relations->hasMany('exames');
      });

      $api->resource('funcionarios')->relationships(function ($relations) {
        $relations->hasMany('local');
        // $relations->hasOne('advertisements');
      });
      $api->resource('exames')->relationships(function ($relations) {
        $relations->hasOne('local');
        $relations->hasOne('categoria');
        $relations->hasOne('paciente');

      });

      $api->resource('paciente')->relationships(function ($relations) {
        $relations->hasMany('exames');

      });
});

