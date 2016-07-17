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


Route::get('/ajax/clinics', ['as' => 'clinics_list', function () {
    return View::make(
        'ajax.clinics_list', [
            'clinics' => DB::table('clinics')->paginate(15)
        ]
    );
}]);

Route::get(
    '/ajax/clinics/{clinicId}/doctors',
    [
        'as' => 'doctors_list',
        function ($clinicId) {
            $tableName = app('ShardManager')->table('doctors')->clinicId($clinicId)->get();
            $doctors = DB::table($tableName)->paginate(15);

            return View::make('ajax.doctors_list', ['doctors' => $doctors]);
        }
    ]
);


Route::get('clinics/{clinicId}', ['as' => 'clinics', function($clinic_id) {
    return View::make(
        'clinic',
        [
            'clinic_id' => $clinic_id,
            'clinic'    => DB::table('clinics')->where('id', $clinic_id)->first()
        ]
    );
}]);


