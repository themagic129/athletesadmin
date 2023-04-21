<?php

use App\Http\Controllers\AthletesController;
use App\Http\Controllers\CalenderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalendarController;

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

Auth::routes();



Route::resource('athletes', 'AthletesController');

Route::resource('coaches', 'CoachController');
Route::resource('programs', 'ProgramController');
Route::resource('workouts', 'WorkoutsController');
Route::resource('exercises', 'ExercisesController');
Route::resource('athletemetrics', 'AthleteMetricsController');
Route::resource('schedule', 'ScheduleController');
Route::resource('exercisestats', 'ExercisestatsController');
Route::resource('pruebas', 'PruebasController');

Route::get('/searchuser', 'AthletesController@searchUser')->name('searchuser');
Route::get('/searchathlete', 'AthleteMetricsController@searchAthlete')->name('searchathlete');
Route::get('/coachsearchuser', 'CoachController@searchUser')->name('coachsearchuser');
Route::get('/no-profile', function () {
    return view('myprofile.noprofile');
});

Route::get('/no-profilecoach', function () {
    return view('myprofilecoach.noprofile');
});
Route::get('/my-profile', 'ProfileController@show')->name('my-profile')->middleware('auth');
Route::get('/my-profilecoach', 'CoachProfileController@show')->name('my-profilecoach')->middleware('auth');

Route::put('/profile-update/{id}', 'ProfileController@update')->name('myprofile.update');
Route::put('/coachprofile-update/{id}', 'CoachProfileController@update')->name('my-profilecoach.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('calendar-event', [CalenderController::class, 'index'])->name('schedule');
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);
