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
    Route::post('/karyawan', [KaryawanController::class, 'store']);
    Route::get('/karyawantambah', [KaryawanController::class, 'create']);
    Route::put('/karyawanupdate/{id}', [KaryawanController::class, 'update']);
    Route::get('/karyawanedit/{id}', [KaryawanController::class, 'edit']);
    Route::get('/karyawanhapus/{id}', [KaryawanController::class, 'hapusdata']);


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

    // //Departemen
    // Route::get('/dep',[DepartemenContoller::class, 'tampil'])->name('dep');
    // Route::get('/tambahdep',[DepartemenContoller::class, 'create'])->name('dep');
    // Route::post('/dep', [DepartemenContoller::class, 'store']);
    // Route::put('/depupdate/{id}', [DepartemenContoller::class, 'update']);
    // Route::get('/depedit/{id}', [DepartemenContoller::class, 'edit']);
    // Route::get('/hapusdep/{id}', [DepartemenContoller::class,'hapusdata']);

    // //karyawan/PEGAWAI
    // // Route::get('/karyawan',[PegawaiController::class, 'index']);
    // Route::get('/karyawan/{id}',[PegawaiController::class, 'show']);
    // Route::get('/tambahpeg',[PegawaiController::class, 'create']);
    // Route::post('/simpanpeg', [PegawaiController::class, 'store']);
    // Route::put('/pegupdate/{id}', [PegawaiController::class, 'update']);
    // Route::get('/editpeg/{id}', [PegawaiController::class, 'edit']);
    // Route::get('/hapuspeg/{id}', [PegawaiController::class, 'destroy']);
    // Route::get('/export_excel', [PegawaiController::class, 'export_excel']);

    // //PEKERJA NEW////////////////////////////////////////////////////////////
    // Route::get('/pekerja',[PekerjaController::class, 'index']);
    // Route::get('/tambahpekerja',[PekerjaController::class, 'create']);
    // Route::post('/simpanpekerja',[PekerjaController::class, 'store']);
    // Route::put('/updatepekerja/{id}',[PekerjaController::class, 'update']);
    // Route::get('/editpekerja/{id}',[PekerjaController::class, 'edit']);



    // //Jabatan
    // Route::get('/datajabatan',[JabatanController::class, 'index']);
    // Route::get('/tambahjab', [JabatanController::class, 'create']);
    // Route::post('/simpanjabatan',[JabatanController::class, 'store']);
    // Route::put('/jabupdate/{id}', [JabatanController::class, 'update']);
    // Route::get('/editjab/{id}', [JabatanController::class, 'edit']);
    // Route::get('/hapusjab/{id}', [JabatanController::class, 'hapusdata']);

    // //Cabang
    // Route::get('/cabang',[CabangController::class, 'index']);
    // Route::get('/tambahcab',[CabangController::class, 'create']);
    // Route::post('/simpancabang',[CabangController::class, 'store']);
    // Route::put('/cabupdate/{id}',[CabangController::class, 'update']);
    // Route::get('/editcab/{id}',[CabangController::class, 'edit']);
    // Route::get('/hapuscab/{id}',[CabangController::class, 'destroy']);

    // //Gaji
    // Route::get('/datagaji',[GajiController::class, 'index']);
    // Route::get('/tambahgaji',[GajiController::class, 'create']);
    // Route::post('/simpangaji',[GajiController::class, 'store']);
    // Route::put('/gajiupdate/{id}',[GajiController::class, 'update']);
    // Route::get('/editgaji/{id}',[GajiController::class, 'edit']);
    // Route::get('/hapusgaji/{id}',[GajiController::class, 'destroy']);

    // //Lembur
    // Route::get('/lembur',[LemburController::class, 'index']);
    // Route::post('/simpanlembur',[LemburController::class, 'store']);
    // Route::get('/tambahlembur',[LemburController::class, 'create']);
    // Route::put('/lemburupdate/{id}',[LemburController::class, 'update']);
    // Route::get('/editlembur/{id}',[LemburController::class, 'edit']);
    // Route::get('/hapuslembur/{id}',[LemburController::class, 'destroy']);

    // //Cuti
    // Route::get('/cuti',[CutiController::class, 'index']);
    // Route::post('/simpancuti',[CutiController::class, 'store']);
    // Route::get('/tambahcuti',[CutiController::class, 'create']);
    // Route::put('/cutiupdate/{id}',[CutiController::class, 'update']);
    // Route::get('/editcuti/{id}',[CutiController::class, 'edit']);
    // Route::get('/hapuscuti/{id}',[CutiController::class, 'destroy']);

    // //Potongan Lain
    // Route::get('/potongan',[PotonganLainController::class, 'index']);
    // Route::post('/simpanpotongan',[PotonganLainController::class, 'store']);
    // Route::get('/tambahpot',[PotonganLainController::class, 'create']);

    // //User-Pengguna
    // Route::get('/pengguna',[PenggunaController::class, 'index']);
    // // Route::get('/tambahpengguna',[PenggunaController::class, 'create']);
    // // Route::post('/simpanpengguna',[PenggunaController::class, 'store']);
    // // Route::put('/penggunapdate/{id}',[PenggunaController::class, 'update']);
    // // Route::get('/penggunacab/{id}',[PenggunaController::class, 'edit']);

    // //Penggajihan/TrxGaji
    // Route::get('/transaksigaji',[PenggajihanController::class, 'index']);
    // Route::post('/simpantrans',[PenggajihanController::class, 'store']);
    // Route::get('/tambahtrans',[PenggajihanController::class, 'create']);



});

// Route::get('/send-email',[MailController::class, 'sendEmail']);
// Route::view('/send-email', 'emails.SainMail');
