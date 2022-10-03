<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MrtController;
use App\Http\Controllers\OchertController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UzeController;
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
Route::get('live_admin', [AuthController::class, 'live_admin'])->name('live_admin');
Route::get('showadmin/{id}', [AuthController::class, 'showadmin']);
Route::post('deleteadmin/{id}', [AuthController::class, 'deleteadmin']);
Route::post('storeadmin', [AuthController::class, 'storeadmin'])->name('storeadmin');
Route::get('mrtbolim', [AuthController::class, 'mrtbolim'])->name('mrtbolim');

Route::get('dok.php', [SistemaController::class, 'dok'])->name('dok.php');
Route::get('userlar', [SistemaController::class, 'userlar'])->name('userlar');
Route::get('live_dok', [SistemaController::class, 'live_dok'])->name('live_dok');
Route::post('dokstor', [SistemaController::class, 'dokstor'])->name('dokstor');
Route::post('dokpost', [SistemaController::class, 'dokpost'])->name('dokpost');

Route::get('uze.php', [UzeController::class, 'uze'])->name('uze.php');
Route::get('live_uze', [UzeController::class, 'live_uze'])->name('live_uze');
Route::post('uzestor', [UzeController::class, 'uzestor'])->name('uzestor');
Route::post('delpost', [UzeController::class, 'delpost'])->name('delpost');

Route::get('mrt.php', [MrtController::class, 'mrt'])->name('mrt.php');
Route::get('live_mrt', [MrtController::class, 'live_mrt'])->name('live_mrt');
Route::post('mrtstor', [MrtController::class, 'mrtstor'])->name('mrtstor');
Route::post('del2post', [MrtController::class, 'del2post'])->name('del2post');

Route::get('user_live', [UserController::class, 'user_live'])->name('user_live');
Route::get('live_belgi', [UserController::class, 'live_belgi'])->name('live_belgi');
Route::post('userstore', [UserController::class, 'userstore'])->name('userstore');
Route::post('brlgila', [UserController::class, 'brlgila'])->name('brlgila');
Route::get('hozirgiuchurt', [UserController::class, 'hozirgiuchurt'])->name('hozirgiuchurt');
Route::get('itogs', [UserController::class, 'itogs'])->name('itogs');
Route::get('uchurt', [UserController::class, 'uchurt'])->name('uchurt');
Route::get('doctor', [UserController::class, 'doctor'])->name('doctor');
Route::get('editus', [UserController::class, 'editus'])->name('editus');
Route::get('ddd3', [UserController::class, 'ddd3'])->name('ddd3');
Route::get('clear', [UserController::class, 'clear'])->name('clear');
Route::get('keyi', [UserController::class, 'keyi'])->name('keyi');

Route::get('live_belgim', [MrtController::class, 'live_belgim'])->name('live_belgim');
Route::post('userstorem', [MrtController::class, 'userstorem'])->name('userstorem');
Route::post('brlgilam', [MrtController::class, 'brlgilam'])->name('brlgilam');
Route::get('hozirgiuchurtm', [MrtController::class, 'hozirgiuchurtm'])->name('hozirgiuchurtm');
Route::get('itogsm', [MrtController::class, 'itogsm'])->name('itogsm');
Route::get('uchurtm', [MrtController::class, 'uchurtm'])->name('uchurtm');
Route::get('doctorm', [MrtController::class, 'doctorm'])->name('doctorm');
Route::get('editusm', [MrtController::class, 'editusm'])->name('editusm');
Route::get('ddd3m', [MrtController::class, 'ddd3m'])->name('ddd3m');
Route::get('clearm', [MrtController::class, 'clearm'])->name('clearm');
Route::get('keyim', [MrtController::class, 'keyim'])->name('keyim');

Route::get('hoz', [OchertController::class, 'hoz'])->name('hoz');
Route::get('hozm', [OchertController::class, 'hozm'])->name('hozm');
Route::get('toast', [OchertController::class, 'toast'])->name('toast');
