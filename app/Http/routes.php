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

// Root Routes (Simple Static Pages)
Route::get('/', 'StaticPagesController@index');
Route::get('/about', 'StaticPagesController@about');
Route::get('/doc', 'StaticPagesController@doc');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/downloads', 'StaticPagesController@downloads');
Route::get('/refs', 'StaticPagesController@refs');
Route::get('/research', 'StaticPagesController@research');
Route::get('/support', 'StaticPagesController@support');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'ProfileController@index');
Route::get('/settings', 'SettingsController@index');
Route::get('/blog', 'BlogController@index');



// Service Routes
Route::get('/services/bioprinting', 'BioprintingController@index');
Route::get('/services/third-party/accounting', 'ThirdPartyController@index');
Route::get('/services/third-party/bpm', 'ThirdPartyController@index');
Route::get('/services/third-party/business', 'ThirdPartyController@index');
Route::get('/services/communication', 'CommunicationController@index');
Route::get('/services/communication/messages', 'CommunicationController@messages');
Route::get('/services/communication/video-chat', 'CommunicationController@video_chat');
Route::get('/services/third-party/collaboration', 'ThirdPartyController@index');
Route::get('/services/third-party/crm', 'ThirdPartyController@index');
Route::get('/services/diagnosis', 'DiagnosisController@index');
Route::get('/services/third-party/doc-manage', 'ThirdPartyController@index');
Route::get('/services/edu', 'EduController@index');
Route::get('/services/emergency', 'EmergencyController@index');
Route::get('/services/first-aid', 'FirstAidController@index');
Route::get('/services/third-party/email', 'ThirdPartyController@index');
Route::get('/services/third-party/erp', 'ThirdPartyController@index');
Route::get('/services/genetics', 'GeneticsController@index');
Route::get('/services/health-policies', 'HealthcareController@index');
Route::get('/services/health-services', 'HealthcareController@index');
Route::get('/services/third-party/human-resources', 'ThirdPartyController@index');

Route::get('/services/med-gis', 'MedGisController@index');
Route::get('/services/med-gis/maps', 'MedGisController@maps');

Route::get('/services/reports', 'MedReportsController@index');
Route::get('/services/med-lab', 'MedLabController@index');
Route::get('/services/third-party/marketing', 'ThirdPartyController@index');
Route::get('/services/patients', 'PatientsController@index');
Route::get('services/patient-med-profile', 'PatientHealthProfileController@index');
Route::get('/services/patient-monitor', 'PatientMonitorController@index');
Route::get('/services/pharmacy-lab', 'PharmaLabController@index');
Route::get('/services/physical-treats', 'PhysicalTreatsController@index');
Route::get('/services/prescriptions', 'PrescriptionsController@index');
Route::get('/services/postop', 'PostopController@index');
Route::get('/services/third-party/pim', 'ThirdPartyController@index');
Route::get('/services/third-party/project-manage', 'ThirdPartyController@index');
Route::get('/services/qa', 'QAController@index');
Route::get('/services/radio-lab', 'RadioLabController@index');
Route::get('/services/research-platform', 'ResearchController@index');
Route::get('/services/robotics', 'RoboticsController@index');
Route::get('/services/symptoms', 'SymptomsController@index');

Route::get('/services/surgery', 'SurgeryController@index');
Route::get('/services/surgery-printing/custom-surgery', 'SurgeryController@custom_surgery');

Route::get('/services/surgery-ops', 'SurgeryOpsController@index');
Route::get('/services/tissue-sample', 'TissueController@index');


// API Routes
include_once 'ApiRoutes.php';
