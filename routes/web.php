<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [TaskController::class, 'index']);
Route::get('/task/{task}/delete', [DetailsController::class, 'delete']);
Route::get('/task/{task}', [DetailsController::class, 'show']);
Route::get('/', [OrderController::class, 'index']);
