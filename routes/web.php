<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApotekerController;

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
Route::get('/apoteker', [ApotekerController::class,'index']);
Route::get('/apoteker/create', [ApotekerController::class,'create']);
Route::post('/apoteker/store', [ApotekerController::class,'store']);
Route::get('/apoteker/{id}/edit', [ApotekerController::class,'edit']);
Route::put('/apoteker/{id}', [ApotekerController::class,'update']);
Route::delete('/apoteker/{id}', [ApotekerController::class,'destroy']);
