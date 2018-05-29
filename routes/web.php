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
Auth::routes();

Route::get('/', function () { return redirect('home'); })->middleware('auth');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('feedbacks', 'FeedbackController');
Route::resource('convocations', 'ConvocationController');
Route::resource('users', 'UserController');
Route::resource('projets', 'ProjetController');
Route::resource('documents', 'DocumentController');
Route::resource('appointment', 'AppointmentController');
Route::resource('reports', 'ReportController');
Route::resource('plancom', 'PlanComController');
Route::resource('tableaux_tech', 'TechnicalTableController');
Route::resource('tableaux_finances', 'FinancialTableController');
Route::resource('tableaux_eval', 'GeneralEvaluationTableController');
Route::resource('cmo_tables', 'CmoTableController');
Route::post('com', 'AppointmentController@comm');
Route::get('ok/{id}', 'AppointmentController@ok');
Route::get('show', 'FinancialTableController@showh');
