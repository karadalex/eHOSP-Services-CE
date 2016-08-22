<?php

Route::get('/api', function () {
    return 'eHOSP API';
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
|  API methods (v1)
|  version: 1
|
*/

Route::resource('/api/v1/users', 'API\v1\UserApi');
Route::resource('/api/v1/gis-nodes', 'API\v1\MedGis');
Route::resource('/api/v1/emergency-contacts', 'API\v1\EmergencyContacts');
