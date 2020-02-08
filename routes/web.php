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