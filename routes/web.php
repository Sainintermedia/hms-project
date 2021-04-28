<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\HistoryKenaikanGajiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LemburController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\StandarController;
use App\Http\Controllers\PotonganLainController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PenggajihanController;
use App\Models\Karyawan;
use Illuminate\Http\Response;
use App\Exports\KaryawanExport;
use App\Http\Controllers\PotonganLainLainController;
use App\Models\HistoryKenaikanGaji;

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

Route::view('/', 'frontend.home.main');
//



Auth::routes();
Route::group(['middleware' => 'auth' ], function(){

    Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware('is_admin');
    Route::view('/dashboard', 'dashboard');


    /////////////////////////                MASTER DATA                  /////////////////////////////


    //Karyawan Master
    Route::get('/karyawan', [KaryawanController::class, 'index']);
    Route::get('/show/{id}',[KaryawanController::class, 'show']);
    Route::post('/karyawan', [KaryawanController::class, 'store']);
    Route::get('/karyawantambah', [KaryawanController::class, 'create']);
    Route::put('/karyawanupdate/{id}', [KaryawanController::class, 'update']);
    Route::get('/karyawanedit/{id}', [KaryawanController::class, 'edit']);
    Route::get('/karyawanhapus/{id}', [KaryawanController::class, 'hapusdata']);
    Route::get('/export_excel', [KaryawanController::class, 'export_excel']);


    //Jabatan Master
    Route::get('/jabatan', [JabatanController::class, 'index']);
    Route::post('/jabatan', [JabatanController::class, 'store']);
    Route::get('/jabatantambah', [JabatanController::class, 'create']);
    Route::put('/jabatanupdate/{id}', [JabatanController::class, 'update']);
    Route::get('/jabatanedit/{id}', [JabatanController::class, 'edit']);
    Route::get('/jabatanhapus/{id}', [JabatanController::class, 'hapusdata']);


    //Departemen Master
    Route::get('/departemen', [DepartemenController::class, 'index']);
    Route::post('/departemen', [DepartemenController::class, 'store']);
    Route::get('/departementambah', [DepartemenController::class, 'create']);
    Route::put('/departemenupdate/{id}', [DepartemenController::class, 'update']);
    Route::get('/departemenedit/{id}', [DepartemenController::class, 'edit']);
    Route::get('/departemenhapus/{id}', [DepartemenController::class, 'hapusdata']);


    //Cabang Master
    Route::get('/cabang', [CabangController::class, 'index']);
    Route::post('/cabang', [CabangController::class, 'store']);
    Route::get('/cabangtambah', [CabangController::class, 'create']);
    Route::put('/cabangupdate/{id}', [CabangController::class, 'update']);
    Route::get('/cabangedit/{id}', [CabangController::class, 'edit']);
    Route::get('/cabanghapus/{id}', [CabangController::class, 'hapusdata']);


    //History Kenaikan gaji Master
    Route::get('/historykenaikangaji', [HistoryKenaikanGajiController::class, 'index']);
    Route::post('/historykenaikangaji', [HistoryKenaikanGajiController::class, 'store']);
    Route::get('/historykenaikangajitambah', [HistoryKenaikanGajiController::class, 'create']);
    Route::put('/historykenaikangajiupdate/{id}', [HistoryKenaikanGajiController::class, 'update']);
    Route::get('/historykenaikangajiedit/{id}', [HistoryKenaikanGajiController::class, 'edit']);
    Route::get('/historykenaikangajihapus/{id}', [HistoryKenaikanGajiController::class, 'hapusdata']);


    //Cuti Master
    Route::get('/cuti',[CutiController::class, 'index']);
    Route::post('/cuti',[CutiController::class, 'store']);
    Route::get('/cutitambah',[CutiController::class, 'create']);
    Route::put('/cutiupdate/{id}',[CutiController::class, 'update']);
    Route::get('/editcuti/{id}',[CutiController::class, 'edit']);
    Route::get('/hapuscuti/{id}',[CutiController::class, 'hapusdata']);

    //Master Option
    Route::get('/option',[OptionsController::class, 'index']);
    Route::post('/option',[OptionsController::class, 'store']);
    Route::get('/optiontambah',[OptionsController::class, 'create']);
    Route::put('/option/{id}',[OptionsController::class, 'update']);
    Route::get('/optionedit/{id}',[OptionsController::class, 'edit']);
    Route::get('/optionhapus/{id}',[OptionsController::class, 'destroy']);

    //Master Standar
    Route::get('/standar',[StandarController::class, 'index']);
    Route::post('/standar',[StandarController::class, 'store']);
    Route::get('/standartambah',[StandarController::class, 'create']);
    Route::put('/standar/{id}',[StandarController::class, 'update']);
    Route::get('/standaredit/{id}',[StandarController::class, 'edit']);
    Route::get('/standarhapus/{id}',[StandarController::class, 'destroy']);






    ///////////////////////////             TRANSAKSI                        ////////////////////////////


    //Lembur Transaksi
    Route::get('/lembur', [LemburController::class, 'index']);
    Route::post('/lembur', [LemburController::class, 'store']);
    Route::get('/lemburtambah', [LemburController::class, 'create']);
    Route::put('/lemburupdate/{id}', [LemburController::class, 'update']);
    Route::get('/lemburedit/{id}', [LemburController::class, 'edit']);
    Route::get('/lemburhapus/{id}', [LemburController::class, 'hapusdata']);


    //Potngan Lain Lain
    Route::get('/potonganlainlain', [PotonganLainLainController::class, 'index']);
    Route::post('/potonganlainlain', [PotonganLainLainController::class, 'store']);
    Route::get('/potonganlainlaintambah', [PotonganLainLainController::class, 'create']);
    Route::put('/potonganlainlainupdate/{id}', [PotonganLainLainController::class, 'update']);
    Route::get('/potonganlainlainedit/{id}', [PotonganLainLainController::class, 'edit']);
    Route::get('/potonganlainlainhapus/{id}', [PotonganLainLainController::class, 'hapusdata']);


    //Gaji
    Route::get('/gaji', [GajiController::class, 'index']);
    Route::post('/gaji', [GajiController::class, 'store']);
    Route::get('/gajitambah', [GajiController::class, 'create']);
    Route::put('/gajiupdate/{id}', [GajiController::class, 'update']);
    Route::get('/gajiedit/{id}', [GajiController::class, 'edit']);
    Route::get('/gajihapus/{id}', [GajiController::class, 'hapusdata']);
    Route::get('/cekgaji', [GajiController::class, 'cekgaji']);




});

// Route::get('/send-email',[MailController::class, 'sendEmail']);
// Route::view('/send-email', 'emails.SainMail');
