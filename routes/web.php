<?php

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
    return view('auth.login');
});
// Route::get('/', 'LoginController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontController@index')->name('home');

// Route::post('/patientUpdate', 'PatientController@update')->name('patientUpdate');

Route::post('/createUser', 'UserController@store')->name('create_user');
// Route::put('/updateUser/{id}', 'UserController@update')->name('update_user');
// Route::post('fetch/sample_coll', 'AdminController@fetch_sample_collection')->name('fetch_sample');
Route::get('fetch/patient_record/{id}', 'AdminController@fetch_patient_record')->name('get_sample');

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
],
function(){
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('patient', 'PatientController');
    Route::get('/patientRecord', 'PatientController@index')->name('pat_rec');
    // Route::get('/', 'AdminController@index')->name('dashboard');

    Route::get('/printPdf/{id}', 'AdminController@printPdf')->name('print_pdf');
    Route::get('/downloadPdf/{id}', 'AdminController@downloadPdf')->name('down_pdf');
    // Route::get('/pdfview', 'AdminController@testpdf')->name('pdfview');

    Route::resource('user', 'UserController');
    Route::resource('report', 'ReportController');
    
    Route::post('fetch/sample_coll', 'AdminController@fetch_sample_collection')->name('fetch_sample');
    Route::post('fetch/report_coll', 'PatientController@fetch_report_collection')->name('fetch_report');

    Route::post('updateSample/{id}/report', 'PatientController@update_report')->name('update_report');
    Route::get('show/report', 'ReportController@show_report')->name('show_report');
});

Route::group([
    'prefix' => 'user',
    'middleware' => 'auth',
],
function(){
    Route::get('/', 'HomeController@test')->name('test');
  
});


Auth::routes();
