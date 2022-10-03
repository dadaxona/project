<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\PraductController;
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
Route::get('postdata', [ApiController::class,'postdata'])->name('postdata');
Route::post('login-user', [ApiController::class,'loginuser'])->name('login-user');
Route::get('/logaut', [ApiController::class,'logaut']);
Route::get('create', [ApiController::class, 'create'])->name('create');

Route::group(['middleware'=>['isLog']], function (){
    Route::get('/', [ApiController::class,'login']);
    Route::get('/glavninachal', [ApiController::class,'dashbord']);
});
Route::get('ind', [PraductController::class, 'ind'])->name('ind');
Route::get('ind2', [PraductController::class, 'ind2'])->name('ind2');
Route::get('inde0', [PraductController::class, 'inde0'])->name('inde0');
Route::get('index', [PraductController::class, 'index'])->name('index');
Route::post('store', [PraductController::class, 'store'])->name('store');
Route::get('createtovar', [PraductController::class, 'createtovar'])->name('createtovar');
Route::get('tavartip', [PraductController::class, 'tavartip'])->name('tavartip');
Route::get('edit', [PraductController::class, 'edit'])->name('edit');
Route::post('update', [PraductController::class, 'update'])->name('update');
Route::post('delete', [PraductController::class, 'delete'])->name('delete');

Route::get('index2', [PraductController::class, 'index2'])->name('index2');
Route::post('store2', [PraductController::class, 'store2'])->name('store2');;
Route::get('edit2', [PraductController::class, 'edit2'])->name('edit2');
Route::get('praduct', [PraductController::class, 'praduct'])->name('praduct');
Route::post('update2', [PraductController::class, 'update2'])->name('update2');
Route::post('delete2', [PraductController::class, 'delete2'])->name('delete2');

Route::get('index3', [PraductController::class, 'index3'])->name('index3');
Route::get('index3sel', [PraductController::class, 'index3sel'])->name('index3sel');
Route::get('index3selct', [PraductController::class, 'index3selct'])->name('index3selct');
Route::post('store3', [PraductController::class, 'store3'])->name('store3');
Route::post('store31', [PraductController::class, 'store31'])->name('store31');
Route::get('edit3', [PraductController::class, 'edit3'])->name('edit3');
Route::post('update3', [PraductController::class, 'update3'])->name('update3');
Route::post('delete3', [PraductController::class, 'delete3'])->name('delete3');

Route::get('postreklama', [PraductController::class, 'postreklama'])->name('postreklama');
Route::get('getreklama', [PraductController::class, 'getreklama'])->name('getreklama');
Route::post('store3img', [PraductController::class, 'store3img'])->name('store3img');
Route::post('deleteimages', [PraductController::class, 'deleteimages'])->name('deleteimages');
