<?php

use App\Http\Controllers\AthletesController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('athletes', 'AthletesController');

Route::resource('coaches', 'CoachController');
Route::resource('programs', 'ProgramController');
Route::resource('workouts', 'WorkoutsController');
Route::resource('exercises', 'ExercisesController');
Route::resource('athletemetrics', 'AthleteMetricsController');
Route::resource('schedule', 'ScheduleController');

Route::get('/searchuser', 'AthletesController@searchUser')->name('searchuser');
Route::get('/searchathlete', 'AthleteMetricsController@searchAthlete')->name('searchathlete');
Route::get('/coachsearchuser', 'CoachController@searchUser')->name('coachsearchuser');

Route::get('/my-profile', 'ProfileController@show')->name('my-profile')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
