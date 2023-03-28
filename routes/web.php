<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/ingredientes', [HomeController::class, 'receita']);
Route::post('/ingredientes', [HomeController::class, 'ingredientes'])->name('ingredientes');
Route::get('/copy', [HomeController::class, 'copy']);
Route::post('/copy', [HomeController::class, 'copySearch'])->name('copySearch');
Route::get('/movie', [HomeController::class, 'movie']);
Route::post('/movie', [HomeController::class, 'movieSearch'])->name('movieSearch');
