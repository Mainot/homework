<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('welcome');
});


Route::get('/clinics', ['as' => 'clinics_list', function () {
    $clinics = DB::table('clinics')->paginate(15);

    return View::make('clinics_list', ['clinics' => $clinics]);
}]);