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
Route::get('/blog/{slug}', 'BlogController@news')->name('news');
Route::get('/bloglist', 'BlogController@news_list')->name('news_list');

Route::get('page/{slug}', 'PageController@news')->name('news_page');
// Route::post('/login/user', 'Auth\LoginController@custom_login')->name('custom_login');


// admin
Route::group([
    'prefix' => 'admin',
    'middleware' => 'superadmin',
],
function(){
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('patient', 'PatientController');
    Route::get('/patientRecord', 'PatientController@index')->name('pat_rec');
    // Route::get('/', 'AdminController@index')->name('dashboard');

    Route::get('/printPdf/{id}', 'ReportController@printPdf')->name('print_pdf');
    Route::get('/downloadPdf/{id}', 'ReportController@downloadPdf')->name('down_pdf');
    // Route::get('/pdfview', 'AdminController@testpdf')->name('pdfview');
    Route::get('/send-email/{id}', 'ReportController@send_mail_pdf')->name('mail_pdf');
    Route::post('/send-sms', 'ReportController@send_sms')->name('sms_report');

    Route::resource('user', 'UserController');
    Route::resource('report', 'ReportController');
    Route::resource('blog', 'BlogController');
    Route::resource('page', 'PageController', ['except' => ['news']]);

    Route::post('fetch/sample_coll', 'AdminController@fetch_sample_collection')->name('fetch_sample');
    Route::post('fetch/report_coll', 'ReportController@fetch_report_collection')->name('fetch_report');

    Route::post('updateSample/{id}/report', 'ReportController@update_report')->name('update_report');
    Route::get('show/report', 'ReportController@show_report')->name('show_report');

    Route::post('send/bulk-email', 'ReportController@send_bulk_email')->name('bulk_email');
    Route::post('send/bulk-sms', 'ReportController@send_bulk_sms')->name('bulk_sms');
});



Route::group([
    'prefix' => 'normal',
    'middleware' => 'auth',
],
function(){
    Route::get('/dash', 'AdminController@index')->name('dash.normal');
    // Route::get('/', 'HomeController@test')->name('test');
    Route::get('/', 'ReportController@index')->name('report.index.user'); 
    Route::get('/printPdf/{id}', 'ReportController@printPdf')->name('print_pdf'); 
    Route::get('/downloadPdf/{id}', 'ReportController@downloadPdf')->name('down_pdf');
    Route::get('/send-email/{id}', 'ReportController@send_mail_pdf')->name('mail_pdf');
    Route::post('/send-sms', 'ReportController@send_sms')->name('sms_report');
});

// lab
Route::group([
    'prefix' => 'lab',
    'middleware' => 'lab',
],
function(){
    Route::get('/admin', 'AdminController@index')->name('dash.lab');
    Route::get('/', 'ReportController@show_report')->name('report.show.lab');
    Route::get('/home', 'ReportController@index')->name('report.index.lab');
    // Route::get('/show/report', 'ReportController@show_report');
});


// Auth::routes();
