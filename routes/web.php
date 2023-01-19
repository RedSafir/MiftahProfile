<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/main', [MahasiswaController::class,'index']);

Route::get('/tambah', [MahasiswaController::class,'create']);

Route::post('/tambah/store', [MahasiswaController::class,'store']);

Route::get('/main/{id}/edit', [MahasiswaController::class,'edit']);

Route::put('/main/{id}', [MahasiswaController::class,'update']);

Route::delete('/main/{id}', [MahasiswaController::class,'destroy']);