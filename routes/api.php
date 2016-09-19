<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes - version: 1 (v1)
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('/v1/users', 'API\v1\UserApi');
Route::resource('/v1/gis-nodes', 'API\v1\MedGis');
Route::resource('/v1/emergency-contacts', 'API\v1\EmergencyContacts');
