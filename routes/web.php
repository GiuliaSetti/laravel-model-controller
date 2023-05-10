<?php

use App\Http\Controllers\Movie\MovieController;
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
Route::get('/', [MovieController::class, 'index'])->name('home');

Route::get('/about', [MovieController::class, 'about'])->name('about');

Route::get('/contacts', [MovieController::class, 'contacts'])->name('contacts');