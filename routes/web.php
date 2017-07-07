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
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/downloads', 'StaticPagesController@downloads');
Route::get('/refs', 'StaticPagesController@refs');
Route::get('/research', 'StaticPagesController@research');
Route::get('/support', 'StaticPagesController@support');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'ProfileController@index');
Route::get('/settings', 'SettingsController@index');
Route::post('/settings', 'SettingsController@changes');
Route::get('/blog', 'BlogController@index');

Route::get('/api/dashboard', 'ApiController@index');


// Service Routes
Route::get('/bioprinting', 'BioprintingController@index');
Route::get('/third-party/accounting', 'ThirdPartyController@accounting');
Route::get('/third-party/bpm', 'ThirdPartyController@index');
Route::get('/third-party/business', 'ThirdPartyController@index');
Route::get('/communication', 'CommunicationController@index');
Route::get('/communication/messages', 'CommunicationController@messages');
Route::get('/communication/video-chat', 'CommunicationController@video_chat');
Route::get('/third-party/collaboration', 'ThirdPartyController@index');
Route::get('/third-party/crm', 'ThirdPartyController@index');
Route::get('/diagnosis', 'DiagnosisController@index');
Route::get('/third-party/doc-manage', 'ThirdPartyController@index');
Route::get('/edu', 'EduController@index');
Route::get('/emergency', 'EmergencyController@index');
Route::get('/first-aid', 'FirstAidController@index');
Route::get('/third-party/email', 'ThirdPartyController@index');
Route::get('/third-party/erp', 'ThirdPartyController@index');
Route::get('/genetics', 'GeneticsController@index');
Route::get('/health-policies', 'HealthcareController@index');
Route::get('/health-services', 'HealthcareController@index');
Route::get('/third-party/human-resources', 'ThirdPartyController@index');

Route::get('/med-gis', 'MedGisController@index');
Route::get('/med-gis/maps', 'MedGisController@maps');

Route::get('/reports', 'MedReportsController@index');
Route::get('/med-lab', 'MedLabController@index');
Route::get('/third-party/marketing', 'ThirdPartyController@index');
Route::get('/patients', 'PatientsController@index');
Route::get('/patient-med-profile', 'PatientHealthProfileController@index');
Route::get('/patient-monitor', 'PatientMonitorController@index');
Route::get('/pharmacy-lab', 'PharmaLabController@index');
Route::get('/physical-treats', 'PhysicalTreatsController@index');
Route::get('/prescriptions', 'PrescriptionsController@index');
Route::get('/postop', 'PostopController@index');
Route::get('/third-party/pim', 'ThirdPartyController@index');
Route::get('/third-party/project-manage', 'ThirdPartyController@index');
Route::get('/qa', 'QAController@index');
Route::get('/radio-lab', 'RadioLabController@index');
Route::get('/research-platform', 'ResearchController@index');
Route::get('/robotics', 'RoboticsController@index');
Route::get('/symptoms', 'SymptomsController@index');

// Surgery
Route::get('/surgery', 'SurgeryController@index');
Route::get('/surgery/surgery-design', 'SurgeryController@surgery_design');
Route::get('/surgery/custom-surgery', 'SurgeryController@custom_surgery');
Route::get('/surgery/surgery-sample-tasks', 'SurgeryController@surgery_sample_tasks');
Route::get('/surgery/samples/robotic_arm_test', 'SurgeryController@robotic_arm_test');
Route::get('/surgery/samples/simple_incision_01', 'SurgeryController@simple_incision_1');
Route::get('/surgery/samples/stiches_test_1', 'SurgeryController@stiches_test_1');

Route::get('/surgery-ops', 'SurgeryOpsController@index');
Route::get('/tissue-sample', 'TissueController@index');


// Routes with closure functionality
Route::get('/api', $closures['api_index']);
Route::post('/avatar', $closures['avatar_post']);
