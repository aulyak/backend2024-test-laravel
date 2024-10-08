<?php

use App\Http\Controllers\ClientController;
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

Route::get('/', ClientController::class . '@index')->name('clients.index');
Route::get('/clients/create', ClientController::class . '@create')->name('clients.create');
Route::post('/clients', ClientController::class . '@store')->name('clients.store');
Route::put('/clients/delete/{client}', ClientController::class . '@destroy')->name('clients.destroy');
