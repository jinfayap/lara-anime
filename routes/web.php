<?php

use App\Http\Controllers\AnimeController;
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

Route::get('/', [AnimeController::class, 'index'])->name('anime.index');
Route::get('/anime/current', [AnimeController::class, 'current'])->name('anime.current');
Route::get('/anime/{id}', [AnimeController::class, 'show'])->name('anime.show');