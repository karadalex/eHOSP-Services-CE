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

Route::get('/v1/user', 'API\v1\UserApi@index');
Route::resource('/v1/gis-nodes', 'API\v1\MedGis');
Route::resource('/v1/emergency-contacts', 'API\v1\EmergencyContacts');

Route::post('/v1/bot', 'API\v1\Bot@index');
