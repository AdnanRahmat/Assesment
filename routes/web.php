<?php

use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MataKuliahController;
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

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/create', [UserController::class, 'create']);
// Route::post('/users', [UserController::class, 'store']);
// Route::get('/users/{user}', [UserController::class, 'show']);
// Route::get('/users/{user}/edit', [UserController::class, 'edit']);
// Route::put('/users/{user}', [UserController::class, 'update']);
// Route::delete('/users/{user}', [UserController::class, 'destroy']);

Route::resource('mahasiswa', mahasiswaController::class);
Route::resource('dosen', DosenController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('mata_kuliah', MataKuliahController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');