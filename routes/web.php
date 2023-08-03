<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RickAndMortyController;

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

Route::get('/',[RickAndMortyController::class,'index'])->name('index');
Route::get('/search',[RickAndMortyController::class,'search'])->name('search');
Route::get('/search//result/{id}',[RickAndMortyController::class,'show'])->name('show');
