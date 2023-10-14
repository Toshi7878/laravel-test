<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HelloController::class, 'index']);
Route::get('/one', [HelloController::class, 'one']);
Route::get('/two', [HelloController::class, 'two']);
Route::get('/three', [HelloController::class, 'three']);
