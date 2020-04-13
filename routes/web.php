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

//notes-//routes can be post, put, delete, get, any 

// Route::get('/', function () {
//     return view('welcome');
// });
//or
Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index');


Route::resource('/contact_request_reports', 'ContactRequestReportController');

Route::get('/contact_request_reports/{id}/confirmDelete', 'ContactRequestReportController@confirmDelete');

Route::get('/contact_request_reports/{contact_request_report}/notes/create', 'NoteController@create');
Route::post('/contact_request_reports/{contact_request_report}/notes', 'NoteController@store');

Route::get('/contact_request_reports/{id}/confirmSendMail', 'ContactRequestReportController@confirmSendMail');
Route::post('/contact_request_reports/{id}/sendMail', 'JobController@sendOneMail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//your opportunity routes

Route::get('/opportunity', 'ProspectViewController@index');

Route::post('/opportunity', 'ProspectViewController@store');

//text message routes

Route::get('/textsms', 'smsController@index');
Route::post('/textsms', 'smsController@sendSms');

Route::get('/contact_request_reports/{id}/oneTextSms', 'smsController@confirmSendSms');
Route::post('/contact_request_reports/{id}/oneTextSms', 'smsController@oneText');

//send bulk emails
Route::get('/sendEmails', 'JobController@index');
// Route::post('/storeCookie', 'JobController@storeCookie');
Route::post('/sendEmails', 'JobController@sendEmails');

Route::get('/sendEmail', 'JobController@enqueue');

Route::get('/emailConfirmation', 'JobController@confirmationPage');

//user profile routes to allow user upload a profile picture
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');