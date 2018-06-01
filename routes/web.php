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

Route::resource('projectgroups', 'ProjectGroupeController');
Route::resource('actions', 'ComactionController');
Route::resource('meetings', 'MeetingController');
Route::resource('deadlines', 'DeadlineController');
Route::resource('users', 'UserController');
Route::resource('feedbacks', 'FeedbackController');

Route::resource('projects', 'ProjectController');

Route::get('/tables/{name}', 'TableController@index');
Route::get('/tables/{name}/{year}', 'TableController@show');
Route::get('/tables/{name}/{year}/generate/{lang}', 'TableController@generate');



Route::get('/docs/{name}/{year}', function($name,$year){
	switch($name){
		case 'fin':
			$groups = App\Projectgroup::where('year',$year)->get();
			return view('tables.docs.'.$name.'pdfar')->with('year',$year)->with('groups',$groups);
		case 'tech':
			$groups = App\Projectgroup::where('year',$year)->get();
			$projects = App\Project::where('year',$year)->get();
			return view('tables.docs.'.$name.'pdfar')->with('year',$year)->with('groups',$groups)->with('projects',$projects);
		case 'res' :
			$groups =  App\Projectgroup::where('year',$year);
            $total_self = $groups->pluck('self_monetization')->sum();
            $total_loan = $groups->pluck('loan')->sum();
            $total_assist = $groups->pluck('assistance')->sum();
            $total = $total_assist + $total_loan + $total_self;
            return view('tables.docs.'.$name."pdfar")->with('year',$year)->with('total_self',$total_self)->with('total_loan',$total_loan)->with('total_assist',$total_assist)->with('total',$total);
	}
	
});


Route::resource('tableaux_eval', 'GeneralEvaluationTableController');
