<?php

use App\Http\Controllers\ApiController;
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
Route::get('/p', function () {
    return view('priz');
});
Route::get('home', [ApiController::class, 'index'])->name('home');
Route::get('praduct', [ApiController::class, 'praduct'])->name('praduct');
Route::get('create', [ApiController::class, 'create'])->name('create');
Route::post('store', [ApiController::class, 'store'])->name('store');
