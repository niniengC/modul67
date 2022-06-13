<?php

use App\Http\Controllers\mahasiswaController;
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

Route::get('/data_mahasiswa', [mahasiswaController::class, 'data_mahasiswa']);
Route::get('/input_data', [mahasiswaController::class, 'input_data']);
Route::get('/about_me', [mahasiswaController::class, 'about_me']);
Route::post('/submit_data', [mahasiswaController::class, 'submit_data']);
Route::delete('/data_mahasiswa/{id}', [mahasiswaController::class, 'destroy']);
Route::get('/data_mahasiswa/{id}/edit', [mahasiswaController::class, 'edit']);
Route::put('/data_mahasiswa/{id}', [mahasiswaController::class, 'update']);;
