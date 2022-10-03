<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KlentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/
Route::get('/login2', [AuthController::class,'login2']);
Route::get('a', [AuthController::class,'typpe'])->name('typpe');
Route::get('exports', [AuthController::class,'exports'])->name('exports');
Route::get('exports2', [AuthController::class,'exports2'])->name('exports2');
Route::get('exports2dok', [AuthController::class,'exports2dok'])->name('exports2dok');
Route::get('exports3', [AuthController::class,'exports3'])->name('exports3');
Route::get('exports4', [AuthController::class,'exports4'])->name('exports4');
Route::get('exports5', [AuthController::class,'exports5'])->name('exports5');
Route::get('exports5dok', [AuthController::class,'exports5dok'])->name('exports5dok');
Route::get('exports6', [AuthController::class,'exports6'])->name('exports6');
Route::post('imports', [AuthController::class,'imports'])->name('imports');
Route::post('import2', [AuthController::class,'import2'])->name('import2');
Route::post('import2dok', [AuthController::class,'import2dok'])->name('import2dok');
Route::post('import3', [AuthController::class,'import3'])->name('import3');
Route::post('import4', [AuthController::class,'import4'])->name('import4');
Route::post('import5', [AuthController::class,'import5'])->name('import5');
Route::post('import5dok', [AuthController::class,'import5dok'])->name('import5dok');
Route::post('import6', [AuthController::class,'import6'])->name('import6');
Route::get('srocrow', [AuthController::class,'srocrow'])->name('srocrow');
Route::post('storeishchi', [KlentController::class, 'storeishchi'])->name('storeishchi');
Route::post('storeadmin', [KlentController::class, 'storeadmin'])->name('storeadmin');
Route::get('live_ishchi', [KlentController::class, 'live_ishchi'])->name('live_ishchi');
Route::get('live_admin', [KlentController::class, 'live_admin'])->name('live_admin');
Route::get('showishchi/{id}', [KlentController::class, 'showishchi']);
Route::get('showadmin/{id}', [KlentController::class, 'showadmin']);
Route::post('deleteishchi/{id}', [KlentController::class, 'deleteishchi']);
Route::post('deleteadmin/{id}', [KlentController::class, 'deleteadmin']);

Route::resource('posts', KlentController::class);
Route::post('login-user', [AuthController::class,'loginuser'])->name('login-user');
Route::get('/logaut', [AuthController::class,'logaut']);
// Route::get('/profil', [AuthController::class,'profil'])->name('profil');
Route::get('/setting', [AuthController::class,'setting'])->name('setting');


Route::group(['middleware'=>['isLog']], function (){
    Route::get('/', [AuthController::class,'login']);
    Route::get('/glavninachal', [AuthController::class,'dashbord']);
});

Route::get('tavar_live', [KlentController::class, 'tavar_live'])->name('tavar_live');
Route::get('tavar2_live', [KlentController::class, 'tavar2_live'])->name('tavar2_live');
Route::get('live_adress', [KlentController::class, 'live_adress'])->name('live_adress');
Route::get('live_clent', [KlentController::class, 'live_clent'])->name('live_clent');
Route::get('ichkitavartbody', [KlentController::class, 'ichkitavartbody'])->name('ichkitavartbody');
Route::get('tiklaslar', [KlentController::class, 'tiklaslar'])->name('tiklaslar');
Route::get('live_clentdok', [KlentController::class, 'live_clentdok'])->name('live_clentdok');
Route::get('index', [KlentController::class, 'index'])->name('index');
Route::get('indextip', [KlentController::class, 'indextip'])->name('indextip');
Route::get('tidtolov', [KlentController::class, 'tidtolov'])->name('tidtolov');
Route::post('tolash', [KlentController::class, 'tolash'])->name('tolash');
Route::post('storead', [KlentController::class, 'storead'])->name('storead');
Route::post('storedok', [KlentController::class, 'storedok'])->name('storedok');
Route::get('show/{id}', [KlentController::class, 'show']);
Route::get('showdok/{id}', [KlentController::class, 'showdok']);
Route::post('update', [KlentController::class, 'update'])->name('update');
Route::post('delete/{id}', [KlentController::class, 'destroy']);
Route::post('deletedok/{id}', [KlentController::class, 'destroydok']);

Route::post('store2', [KlentController::class, 'store2'])->name('store2');
Route::post('store2tip', [KlentController::class, 'store2tip'])->name('store2tip');
Route::post('update2', [KlentController::class, 'update2'])->name('update2');
Route::post('updateer2', [KlentController::class, 'updateer2'])->name('updateer2');
Route::get('iidd3', [KlentController::class, 'iidd3'])->name('iidd3');
Route::get('iidd4', [KlentController::class, 'iidd4'])->name('iidd4');
Route::get('show2', [KlentController::class, 'show2'])->name('show2');
Route::get('shower2/{id}', [KlentController::class, 'shower2']);
Route::post('delete2/{id}', [KlentController::class, 'delete2']);
Route::post('deleteer2/{id}', [KlentController::class, 'deleteer2']);
Route::get('edit3', [KlentController::class, 'edit3'])->name('edit3');

Route::post('store3', [KlentController::class, 'store3'])->name('store3');
Route::post('storedd3', [KlentController::class, 'storedd3'])->name('storedd3');
Route::post('store3dok', [KlentController::class, 'store3dok'])->name('store3dok');
Route::post('updates', [KlentController::class, 'updates'])->name('updates');
Route::post('updatesdok', [KlentController::class, 'updatesdok'])->name('updatesdok');
Route::get('edit4', [KlentController::class, 'edit4'])->name('edit4');
Route::get('edit4dok', [KlentController::class, 'edit4dok'])->name('edit4dok');
Route::post('delete3/{id}', [KlentController::class, 'delete3']);
Route::post('delete3dok/{id}', [KlentController::class, 'delete3dok']);
Route::post('tiklash/{id}', [KlentController::class, 'tiklash']);
Route::post('tiklashdok/{id}', [KlentController::class, 'tiklashdok']);
Route::post('deleetemnu/{id}', [KlentController::class, 'deleetemnu']);
Route::post('deleetemnudok/{id}', [KlentController::class, 'deleetemnudok']);
Route::get('edit5', [KlentController::class, 'edit5'])->name('edit5');
Route::post('store4', [KlentController::class, 'store4'])->name('store4');

Route::get('adress', [KlentController::class, 'adress'])->name('adress');
Route::get('ombor', [KlentController::class, 'ombor'])->name('ombor');
Route::get('index2', [KlentController::class, 'index2'])->name('index2');

Route::post('pastavka', [KlentController::class, 'pastavka'])->name('pastavka');
Route::get('past', [KlentController::class, 'past'])->name('past');
Route::get('show3/{id}', [KlentController::class, 'show3']);
Route::post('pastavkaupdate', [KlentController::class, 'pastavkaupdate'])->name('pastavkaupdate');
Route::post('delete4/{id}', [KlentController::class, 'delete4']);

Route::get('clents', [KlentController::class, 'clents'])->name('clents');
Route::post('sazdat', [KlentController::class, 'sazdat'])->name('sazdat');
Route::post('sazdatdok', [KlentController::class, 'sazdatdok'])->name('sazdatdok');
Route::post('belgila', [KlentController::class, 'belgila'])->name('belgila');
Route::post('belgiladok', [KlentController::class, 'belgiladok'])->name('belgiladok');
Route::get('kursm', [KlentController::class, 'kursm'])->name('kursm');
Route::get('kursmdok', [KlentController::class, 'kursmdok'])->name('kursmdok');
Route::get('belgi2', [KlentController::class, 'belgi2'])->name('belgi2');
Route::get('belgi2dok', [KlentController::class, 'belgi2dok'])->name('belgi2dok');
Route::get('usdkurd2', [KlentController::class, 'usdkurd2'])->name('usdkurd2');
Route::get('usdkurd2dok', [KlentController::class, 'usdkurd2dok'])->name('usdkurd2dok');
Route::get('/sotuv',[KlentController::class, 'sotuv'])->name('sotuv');
Route::get('/sotuvdok',[KlentController::class, 'sotuvdok'])->name('sotuvdok');
Route::get('/live_search',[KlentController::class, 'live_search'])->name('live_search');
Route::get('/live_searchdokon',[KlentController::class, 'live_searchdokon'])->name('live_searchdokon');
Route::get('/live_searchdok',[KlentController::class, 'live_searchdok'])->name('live_searchdok');
Route::get('/sqladiskizapas',[KlentController::class, 'sqladiskizapas'])->name('sqladiskizapas');
Route::get('/sqladiskizapas2',[KlentController::class, 'sqladiskizapas2'])->name('sqladiskizapas2');
Route::get('/tbody3table',[KlentController::class, 'tbody3table'])->name('tbody3table');
Route::get('/tbody3table2',[KlentController::class, 'tbody3table2'])->name('tbody3table2');
Route::post('plus', [KlentController::class, 'plus'])->name('plus');
Route::post('plusdok', [KlentController::class, 'plusdok'])->name('plusdok');
Route::post('minus', [KlentController::class, 'minus'])->name('minus');
Route::post('minusdok', [KlentController::class, 'minusdok'])->name('minusdok');
Route::post('udalit', [KlentController::class, 'udalit'])->name('udalit');
Route::post('udalitdok', [KlentController::class, 'udalitdok'])->name('udalitdok');
Route::post('yangilash', [KlentController::class, 'yangilash'])->name('yangilash');
Route::post('yangilashdok', [KlentController::class, 'yangilashdok'])->name('yangilashdok');
Route::post('tugle', [KlentController::class, 'tugle'])->name('tugle');
Route::post('tugledok', [KlentController::class, 'tugledok'])->name('tugledok');
Route::get('rachot', [KlentController::class, 'rachot'])->name('rachot');
Route::get('rachotdok', [KlentController::class, 'rachotdok'])->name('rachotdok');
Route::post('oplata', [KlentController::class, 'oplata'])->name('oplata');
Route::post('bot', [KlentController::class, 'bot'])->name('bot');
Route::get('bot2', [KlentController::class, 'bot2'])->name('bot2');
Route::post('oplatadok', [KlentController::class, 'oplatadok'])->name('oplatadok');
Route::post('zakazayt', [KlentController::class, 'zakazayt'])->name('zakazayt');
Route::post('zakazaytdok', [KlentController::class, 'zakazaytdok'])->name('zakazaytdok');

Route::post('data', [KlentController::class, 'data'])->name('data');
Route::get('tavar', [KlentController::class, 'tavar'])->name('tavar');
Route::get('tavardok', [KlentController::class, 'tavardok'])->name('tavardok');
Route::get('tavar_tip', [KlentController::class, 'tavar_tip'])->name('tavar_tip');
Route::get('tavar_tipdok', [KlentController::class, 'tavar_tipdok'])->name('tavar_tipdok');
Route::post('limither', [KlentController::class, 'limither'])->name('limither');
Route::get('statistika', [KlentController::class, 'statistika'])->name('statistika');
Route::get('getel', [KlentController::class, 'getel'])->name('getel');
Route::get('pribl.php', [KlentController::class, 'pribl'])->name('pribl.php');
Route::get('statistik', [KlentController::class, 'statistik'])->name('statistik');
Route::get('statistik2', [KlentController::class, 'statistik2'])->name('statistik2');
Route::get('zzzz', [KlentController::class, 'zzzz'])->name('zzzz');
Route::get('zzzzdok', [KlentController::class, 'zzzzdok'])->name('zzzzdok');
Route::get('zzzzcli', [KlentController::class, 'zzzzcli'])->name('zzzzcli');
Route::get('zzzzclidok', [KlentController::class, 'zzzzclidok'])->name('zzzzclidok');
Route::get('zzzzaaaadok', [KlentController::class, 'zzzzaaaadok'])->name('zzzzaaaadok');
Route::get('zzzzaaaa', [KlentController::class, 'zzzzaaaa'])->name('zzzzaaaa');
Route::get('tavarvse', [KlentController::class, 'tavarvse'])->name('tavarvse');
Route::get('tavarvsedok', [KlentController::class, 'tavarvsedok'])->name('tavarvsedok');
Route::get('zzzzclick', [KlentController::class, 'zzzzclick'])->name('zzzzclick');
Route::get('zzzzclickdok', [KlentController::class, 'zzzzclickdok'])->name('zzzzclickdok');
Route::post('submitckicked', [KlentController::class, 'submitckicked'])->name('submitckicked');
Route::post('submitckickeddok', [KlentController::class, 'submitckickeddok'])->name('submitckickeddok');
Route::get('datasearche', [KlentController::class, 'datasearche'])->name('datasearche');
Route::get('datasearchedok', [KlentController::class, 'datasearchedok'])->name('datasearchedok');
Route::post('search', [KlentController::class, 'search'])->name('search');
Route::post('searchdok', [KlentController::class, 'searchdok'])->name('searchdok');
Route::get('clent2', [KlentController::class, 'clent2'])->name('clent2');
Route::post('vseclent', [KlentController::class, 'vseclent'])->name('vseclent');
Route::post('vseclentdok', [KlentController::class, 'vseclentdok'])->name('vseclentdok');
Route::get('clent_tip', [KlentController::class, 'clent_tip'])->name('clent_tip');
Route::get('clent_tipdok', [KlentController::class, 'clent_tipdok'])->name('clent_tipdok');
Route::get('savdobirlamchi', [KlentController::class, 'savdobirlamchi'])->name('savdobirlamchi');
Route::get('savdobirlamchidok', [KlentController::class, 'savdobirlamchidok'])->name('savdobirlamchidok');
Route::get('clents2', [KlentController::class, 'clents2'])->name('clents2');
Route::post('otmetka', [KlentController::class, 'otmetka'])->name('otmetka');
Route::get('chd', [KlentController::class, 'chd'])->name('chd');
Route::get('chd2', [KlentController::class, 'chd2'])->name('chd2');
Route::post('otmetka2', [KlentController::class, 'otmetka2'])->name('otmetka2');
Route::get('chb', [KlentController::class, 'chb'])->name('chb');
Route::get('chb2', [KlentController::class, 'chb2'])->name('chb2');
Route::get('clents2aniq', [KlentController::class, 'clents2aniq'])->name('clents2aniq');
Route::get('clents2dok', [KlentController::class, 'clents2dok'])->name('clents2dok');
Route::post('clents3', [KlentController::class, 'clents3'])->name('clents3');
Route::post('clents3dok', [KlentController::class, 'clents3dok'])->name('clents3dok');
Route::post('brlamclient', [KlentController::class, 'brlamclient'])->name('brlamclient');
Route::post('brlamclientdok', [KlentController::class, 'brlamclientdok'])->name('brlamclientdok');

Route::get('prodacha', [KlentController::class, 'prodacha'])->name('prodacha');
Route::get('sqlad.php', [KlentController::class, 'sqladiski'])->name('sqlad.php');
Route::post('otkazish', [KlentController::class, 'otkazish'])->name('otkazish');
Route::get('malumotolish', [KlentController::class, 'malumotolish'])->name('malumotolish');
Route::post('plussqlad', [KlentController::class, 'plussqlad'])->name('plussqlad');
Route::post('minussqlad', [KlentController::class, 'minussqlad'])->name('minussqlad');
Route::post('udalitsqlad', [KlentController::class, 'udalitsqlad'])->name('udalitsqlad');
Route::get('yangilashsqlad', [KlentController::class, 'yangilashsqlad'])->name('yangilashsqlad');
Route::post('saqlashsqlad', [KlentController::class, 'saqlashsqlad'])->name('saqlashsqlad');
Route::post('tayyorsqlad', [KlentController::class, 'tayyorsqlad'])->name('tayyorsqlad');
Route::get('iidd', [KlentController::class, 'iidd'])->name('iidd');

Route::get('/mijozlar.php', [AuthController::class, 'mijozlar'])->name('mijozlar');
Route::get('/usta.php', [AuthController::class, 'usta'])->name('usta');
Route::post('/usracreate.php', [AuthController::class, 'usracreate'])->name('usracreate');
Route::get('/editusta', [AuthController::class, 'editusta'])->name('editusta');
Route::post('/updateusta', [AuthController::class, 'updateusta'])->name('updateusta');
Route::post('/deleteusta', [AuthController::class, 'deleteusta'])->name('deleteusta');
Route::post('/store.php', [AuthController::class, 'store'])->name('store');
Route::get('/edit', [AuthController::class, 'edit'])->name('edit');
Route::post('/update', [AuthController::class, 'update'])->name('update');
Route::get('/search22.php', [AuthController::class, 'search22'])->name('search22');
Route::get('/mijozsearch.php', [AuthController::class, 'mijozsearch'])->name('mijozsearch');
Route::post('/aloqa', [AuthController::class, 'aloqa'])->name('aloqa');
Route::post('/otkazish', [AuthController::class, 'otkazish'])->name('otkazish');
Route::get('/tayyor', [AuthController::class, 'tugatilgan'])->name('bajarilgan');
Route::get('/searchb', [AuthController::class, 'searchb'])->name('searchb');

Route::get('/mijjozz', [AuthController::class, 'mijjozz'])->name('mijjozz');
Route::get('/mijjozz2', [AuthController::class, 'mijjozz2'])->name('mijjozz2');
Route::get('/mijjozz3', [AuthController::class, 'mijjozz3'])->name('mijjozz3');
Route::get('/servislar', [AuthController::class, 'servislar'])->name('servislar');
Route::post('/aloxida', [AuthController::class, 'aloxida'])->name('aloxida');
Route::get('/usersumma', [AuthController::class, 'usersumma'])->name('usersumma');
Route::get('/vazvratspisk', [AuthController::class, 'vazvratspisk'])->name('vazvratspisk');
Route::get('qaytaredit', [KlentController::class, 'qaytaredit'])->name('qaytaredit');
Route::post('qaytar', [KlentController::class, 'qaytar'])->name('qaytar');
Route::get('qaytareditbirlam', [KlentController::class, 'qaytareditbirlam'])->name('qaytareditbirlam');
Route::post('qaytarbirlamchini', [KlentController::class, 'qaytarbirlamchini'])->name('qaytarbirlamchini');
Route::get('vazvradspi', [KlentController::class, 'vazvradspi'])->name('vazvradspi');
