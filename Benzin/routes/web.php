<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BenzinController;
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
Route::post('login-user', [AuthController::class,'loginuser'])->name('login-user');
Route::get('/logaut', [AuthController::class,'logaut']);
Route::get('/setting', [AuthController::class,'setting'])->name('setting');
Route::group(['middleware'=>['isLog']], function (){
    Route::get('/', [AuthController::class,'login']);
    Route::get('/glavninachal', [AuthController::class,'dashbord']);
});
Route::get('/create.php', [AuthController::class,'createphp'])->name('create.php');
Route::get('/perexod.php', [AuthController::class,'perexodphp'])->name('perexod.php');
Route::get('/savdo.php', [AuthController::class,'savdo'])->name('savdo.php');
Route::get('/summa.php', [AuthController::class,'summa'])->name('summa.php');
Route::get('showadmin/{id}', [AuthController::class, 'showadmin']);
Route::get('live_admin', [AuthController::class, 'live_admin'])->name('live_admin');
Route::get('lishni.php', [AuthController::class, 'lishni'])->name('lishni.php');
Route::get('kassa.php', [AuthController::class, 'kassa'])->name('kassa.php');
Route::get('perexodistoriya.php', [AuthController::class, 'perexodistoriya'])->name('perexodistoriya.php');
Route::post('deleteadmin/{id}', [AuthController::class, 'deleteadmin']);
Route::post('storeadmin', [AuthController::class, 'storeadmin'])->name('storeadmin');
Route::get('/index', [BenzinController::class,'index'])->name('index');
Route::get('/benzin_idras', [BenzinController::class,'benzin_idras'])->name('benzin_idras');
Route::get('/index2', [BenzinController::class,'index2'])->name('index2');
Route::get('/tbperex', [BenzinController::class,'tbperex'])->name('tbperex');
Route::get('/index3', [BenzinController::class,'index3'])->name('index3');
Route::get('/index5', [BenzinController::class,'index5'])->name('index5');
Route::get('/index6', [BenzinController::class,'index6'])->name('index6');
Route::post('/store', [BenzinController::class,'store'])->name('store');
Route::post('/delete', [BenzinController::class,'delete'])->name('delete');
Route::post('/deleteper', [BenzinController::class,'deleteper'])->name('deleteper');
Route::post('/perexod', [BenzinController::class,'perexod'])->name('perexod');
Route::post('/rasxod', [BenzinController::class,'rasxod'])->name('rasxod');
Route::get('/idsumma', [BenzinController::class,'idsumma'])->name('idsumma');
Route::get('/sotuv2', [BenzinController::class,'sotuv2'])->name('sotuv2');
Route::post('/summos', [BenzinController::class,'summos'])->name('summos');
Route::post('/sumcontdel', [BenzinController::class,'sumcontdel'])->name('sumcontdel');
Route::get('/klentqarzfun', [BenzinController::class,'klentqarzfun'])->name('klentqarzfun');
Route::post('/klentqarz', [BenzinController::class,'klentqarz'])->name('klentqarz');
Route::post('/delster22', [BenzinController::class,'delster22'])->name('delster22');
Route::get('/rassem', [BenzinController::class,'rassem'])->name('rassem');
Route::post('/rasdelform', [BenzinController::class,'rasdelform'])->name('rasdelform');
Route::post('/radelfor', [BenzinController::class,'radelfor'])->name('radelfor');
Route::get('/pribl', [BenzinController::class,'pribl'])->name('pribl');
Route::get('/kassaden', [BenzinController::class,'kassaden'])->name('kassaden');
