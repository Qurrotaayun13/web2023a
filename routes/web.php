<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApotekerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::prefix('/')->middleware('auth')->group(function() {
Route::get('/apoteker', [ApotekerController::class,'index']);
Route::get('/apoteker/create', [ApotekerController::class,'create']);
Route::post('/apoteker/store', [ApotekerController::class,'store']);
Route::get('/apoteker/{id}/edit', [ApotekerController::class,'edit']);
Route::put('/apoteker/{id}', [ApotekerController::class,'update']);
Route::delete('/apoteker/{id}', [ApotekerController::class,'destroy']);
});

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
