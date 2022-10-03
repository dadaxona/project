<?php

use App\Http\Controllers\BesicController;
use App\Http\Controllers\SrokController;
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

Route::get('datasrokdb', [SrokController::class,'datasrokdb'])->name('datasrokdb');
Route::post('aktivstatus', [SrokController::class,'aktivstatus'])->name('aktivstatus');
Route::post('login-user', [BesicController::class,'loginuser'])->name('login-user');
Route::get('/logaut', [BesicController::class,'logaut']);
Route::group(['middleware'=>['isLog']], function (){
    Route::get('/', [BesicController::class, 'login'])->name('login');
    Route::get('/glavninachal', [BesicController::class,'dashbord']);
});
Route::get('/parol.php', [BesicController::class, 'nastroyka'])->name('nastroyka');
Route::post('/storeishchi', [BesicController::class, 'storeishchi'])->name('storeishchi');
Route::get('/live_ishchi', [BesicController::class, 'live_ishchi'])->name('live_ishchi');
Route::post('deleteishchi/{id}', [KlentController::class, 'deleteishchi']);
Route::get('/index', [BesicController::class, 'index'])->name('index');
Route::get('/log', [BesicController::class, 'log'])->name('log');
Route::get('/index1', [BesicController::class, 'index1'])->name('index1');
Route::get('/dash', [BesicController::class, 'dash'])->name('dash');
Route::post('store', [BesicController::class, 'store'])->name('store');
Route::post('store2', [BesicController::class, 'store2'])->name('store2');
Route::get('getdate', [BesicController::class, 'getdate'])->name('getdate');
Route::get('getdate2', [BesicController::class, 'getdate2'])->name('getdate2');
Route::get('getdate2a', [BesicController::class, 'getdate2a'])->name('getdate2a');
Route::get('getdate3', [BesicController::class, 'getdate3'])->name('getdate3');
Route::get('store3', [BesicController::class, 'store3'])->name('store3');
Route::post('delet', [BesicController::class, 'delet'])->name('delet');
Route::post('delet2', [BesicController::class, 'delet2'])->name('delet2');
Route::post('delete', [BesicController::class, 'delete'])->name('delete');
Route::get('buyurtma', [BesicController::class, 'buyurtma'])->name('buyurtma');
Route::get('buyurtma2', [BesicController::class, 'buyurtma2'])->name('buyurtma2');
Route::get('aler', [BesicController::class, 'aler'])->name('aler');
Route::get('zakaz', [BesicController::class, 'zakaz'])->name('zakaz');
Route::get('toast', [BesicController::class, 'toast'])->name('toast');
Route::get('zakazsd', [BesicController::class, 'zakazsd'])->name('zakazsd');
Route::get('tayyorzakaz', [BesicController::class, 'tayyorzakaz'])->name('tayyorzakaz');
Route::post('status0', [BesicController::class, 'status0'])->name('status0');
Route::get('signaler', [BesicController::class, 'signaler'])->name('signaler');
Route::get('buymal', [BesicController::class, 'buymal'])->name('buymal');
Route::post('jonatish', [BesicController::class, 'jonatish'])->name('jonatish');
Route::get('buyurtmasiz', [BesicController::class, 'buyurtmasiz'])->name('buyurtmasiz');
Route::get('formres', [BesicController::class, 'formres'])->name('formres');
Route::post('formresxod', [BesicController::class, 'formresxod'])->name('formresxod');
Route::get('iiid', [BesicController::class, 'iiid'])->name('iiid');
Route::get('tushum', [BesicController::class, 'tushum'])->name('tushum');
Route::post('izoh', [BesicController::class, 'izoh'])->name('izoh');
Route::get('counters', [BesicController::class, 'counters'])->name('counters');
