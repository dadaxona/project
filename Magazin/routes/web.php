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
    return view('sotuv');
});

Route::get('sicl1', [ApiController::class, 'sicl1'])->name('sicl1');
Route::get('sicl2', [ApiController::class, 'sicl2'])->name('sicl2');
Route::get('sicl3', [ApiController::class, 'sicl3'])->name('sicl3');
Route::get('home', [ApiController::class, 'index'])->name('home');
Route::get('praduct', [ApiController::class, 'praduct'])->name('praduct');
Route::get('create', [ApiController::class, 'create'])->name('create');
Route::post('store', [ApiController::class, 'store'])->name('store');

Route::get('sotuv', [ApiController::class, 'sotuv'])->name('sotuv');
Route::get('getdata', [ApiController::class, 'getdata'])->name('getdata');
Route::get('getdgla', [ApiController::class, 'getdgla'])->name('getdgla');
Route::get('getdtip', [ApiController::class, 'getdtip'])->name('getdtip');
Route::get('getprod', [ApiController::class, 'getprod'])->name('getprod');
Route::get('getprodgla', [ApiController::class, 'getprodgla'])->name('getprodgla');
Route::get('link', [ApiController::class, 'link'])->name('link');
Route::get('toggler', [ApiController::class, 'toggler'])->name('toggler');
Route::get('sele', [ApiController::class, 'sele'])->name('sele');
Route::get('izobr', [ApiController::class, 'izobr'])->name('izobr');
