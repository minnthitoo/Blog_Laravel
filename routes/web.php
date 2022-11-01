<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\NewsController;

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
//home
Route::get('/home', [HomeController::class, 'home'])->name('admin#home');

//entertainment
Route::get('/entertainment', [EntertainmentController::class, 'home'])->name('admin#entertainment');

//health
Route::get('/health', [HealthController::class, 'home'])->name('admin#health');

//sports
Route::get('/sports', [SportsController::class, 'home'])->name('admin#sports');

//new
Route::get('/news', [NewsController::class, 'home'])->name('admin#news');
