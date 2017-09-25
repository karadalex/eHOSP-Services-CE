<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

$closures = include config('global.methods').'/WebRoutesClosures.php';


// Root Routes (Simple Static Pages)
Route::get('/', 'StaticPagesController@index');
Route::get('/about', 'StaticPagesController@about');
Route::get('/doc', 'StaticPagesController@doc');
Route::get('/downloads', 'StaticPagesController@downloads');
Route::get('/refs', 'StaticPagesController@refs');
Route::get('/research', 'StaticPagesController@research');
Route::get('/support', 'StaticPagesController@support');

Route::get('/contact', 'ContactController@contact');
Route::post('/contact', 'ContactController@contact_send_email');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'ProfileController@index');
Route::get('/settings', 'SettingsController@index');
Route::post('/settings', 'SettingsController@changes');
Route::get('/blog', 'BlogController@index');

Route::get('/api/dashboard', 'ApiController@index');


// Service Routes
Route::group(['prefix' => '/third-party'], function () {
    Route::get('/accounting', 'ThirdPartyController@accounting');
    Route::get('/bpm', 'ThirdPartyController@index');
    Route::get('/business', 'ThirdPartyController@index');
    Route::get('/collaboration', 'ThirdPartyController@index');
    Route::get('/crm', 'ThirdPartyController@index');
    Route::get('/doc-manage', 'ThirdPartyController@index');
    Route::get('/email', 'ThirdPartyController@index');
    Route::get('/erp', 'ThirdPartyController@index');
    Route::get('/human-resources', 'ThirdPartyController@index');
    Route::get('/marketing', 'ThirdPartyController@index');
    Route::get('/pim', 'ThirdPartyController@index');
    Route::get('/project-manage', 'ThirdPartyController@index');
});
Route::get('/bioprinting', 'BioprintingController@index');
Route::get('/communication', 'CommunicationController@index');
Route::get('/communication/messages', 'CommunicationController@messages');
Route::get('/communication/video-chat', 'CommunicationController@video_chat');
Route::get('/diagnosis', 'DiagnosisController@index');
Route::get('/edu', 'EduController@index');
Route::get('/emergency', 'EmergencyController@index');
Route::get('/first-aid', 'FirstAidController@index');
Route::get('/genetics', 'GeneticsController@index');
Route::get('/health-policies', 'HealthcareController@index');
Route::get('/health-services', 'HealthcareController@index');
Route::get('/med-gis', 'MedGisController@index');
Route::get('/med-gis/maps', 'MedGisController@maps');
Route::get('/reports', 'MedReportsController@index');
Route::get('/med-lab', 'MedLabController@index');
Route::get('/patients', 'PatientsController@index');
Route::get('/patient-med-profile', 'PatientHealthProfileController@index');
Route::get('/patient-monitor', 'PatientMonitorController@index');
Route::get('/pharmacy-lab', 'PharmaLabController@index');
Route::get('/physical-treats', 'PhysicalTreatsController@index');
Route::get('/prescriptions', 'PrescriptionsController@index');
Route::get('/postop', 'PostopController@index');
Route::get('/qa', 'QAController@index');
Route::get('/radio-lab', 'RadioLabController@index');
Route::get('/research-platform', 'ResearchController@index');
Route::get('/robotics', 'RoboticsController@index');
Route::get('/symptoms', 'SymptomsController@index');

// Surgery
Route::group(['prefix' => '/surgery'], function () {
    Route::get('/', 'SurgeryController@index');
    Route::get('/surgery-design', 'SurgeryController@surgery_design');
    Route::get('/custom-surgery', 'SurgeryController@custom_surgery');
    Route::get('/surgery-sample-tasks', 'SurgeryController@surgery_sample_tasks');
    Route::get('/samples/robotic_arm_test', 'SurgeryController@robotic_arm_test');
    Route::get('/samples/simple_incision_01', 'SurgeryController@simple_incision_1');
    Route::get('/samples/stiches_test_1', 'SurgeryController@stiches_test_1');    
});

Route::get('/surgery-ops', 'SurgeryOpsController@index');
Route::get('/tissue-sample', 'TissueController@index');

// VR Pages
Route::group(['prefix' => '/vr'], function () {
    Route::get('/ehosp-surgical', 'VRController@ehospSurgicalModel');
});


// Routes with closure functionality
Route::get('/api', $closures['api_index']);
Route::post('/avatar', $closures['avatar_post']);

// Blog posts
include 'includes/blog.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
