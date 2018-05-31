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

Route::resource('appointments', 'AppointmentController');
Route::get('appointment/{id}/accept',[
	'uses' => 'AppointmentController@accept'
]);
Route::get('appointment/{id}/refuse',[
	'uses' => 'AppointmentController@refuse'
]);

Route::resource('actions', 'ComactionController');
Route::resource('meetings', 'MeetingController');
Route::resource('deadlines', 'DeadlineController');
Route::resource('users', 'UserController');

Route::resource('feedbacks', 'FeedbackController');



Route::get('/tables/{name}', 'TableController@index');
Route::get('/tables/{name}/{year}', 'TableController@show');

Route::get('/projects/edit',function(){
	return view('projects.edit');
});


Route::get('/tablefin',function(){
	return view('tables.fin');
});


Route::resource('projects', 'ProjectController');



Route::resource('tableaux_eval', 'GeneralEvaluationTableController');
