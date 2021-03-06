<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Gaji;
use App\Models\karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Options;
use App\Models\Cabang;
use App\Models\Departemen;
use App\Models\Jabatan;


class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Gaj = DB::table('gaji as a')
        ->get();
        return view ('Transaksi.Gaji.gaji', compact ('Gaj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Bulan = bulan(date('Y-m-d'));
        $Tahun = tahun(date('Y-m-d'));
        $Option = DB::table('options')->first();
        $Gj = DB::table('karyawan as a')
        ->join('cabang as b', 'a.kode_cabang', '=', 'b.kode_cabang')
        ->join('jabatan as c','a.kode_jabatan','=','c.kode_jabatan')
        ->join('departemen as d','a.kode_departemen','=','d.kode_departemen')
        ->select(
            'a.nomor_induk',
            'a.nama',
            'a.nama_bank',
            'a.nomor_rekening',
            'a.rekening_atas_nama',
            'b.nama_cabang',
            'b.uang_makan',
            'c.nama_jabatan',
            'a.gaji_pokok',
            'c.tunjangan_jabatan',
            'd.nama_departemen',
            )
        ->get();
        return view ('Transaksi.Gaji.tambahgaji', compact ('Gj','Bulan','Tahun','Option'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cekgaji()
    {

        $Bulan = bulan(date('Y-m-d'));
            $Slipgaji = DB::table('users as a')
            ->join('karyawan as c','a.nik','=','c.nik')
            ->join('gaji as b','b.nomor_induk','=','c.nomor_induk')
            ->select('a.id','c.nama','b.nama_jabatan','b.bulan', 'b.tahun', 'c.nomor_induk', 'b.nama_departemen',
                    'b.gaji_pokok',)
             ->where('a.id','=',Auth::user()->id)
             ->where('b.bulan', '=', $Bulan )->first();
        //    ->first();
                //   dd($Slipgaji);
            // Auth::user()->id)->get();
             return view ('Transaksi.Gaji.slipgaji', compact ('Slipgaji', 'Bulan'));
        }
    public function store(Request $request)
    {
        $request->validate([
            'nomor_induk' => 'required|max:10',
            'bulan' => 'required',
            'tahun'=> 'required',
            'gaji_pokok'=> 'required',
            'tunjangan_jabatan'=> 'required',
            'tunjangan_keluarga'=> 'required',
            'uang_makan'=> 'required',
            'uang_lembur'=> 'required',
            'persen_pph'=> 'required',
            'ptkp'=> 'required',
            'persen_pot_jamsostek'=> 'required',
            'pot_lain_lain'=> 'required',
            'nama_jabatan'=> 'required',
            'nama_cabang'=> 'required',
            'nama_departemen'=> 'required',
            'nama_bank'=> 'required',
            'nomor_rekening'=> 'required',
            'rekening_atas_nama'=> 'required'
        ]);

            Gaji::create($request->all());
            return redirect('/gaji')->with('status','Data jabatan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show(Gaji $gaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gaj = Gaji::find($id);
        return view ('Transaksi.Gaji.editgaji', compact ('gaj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $gaj = Gaji::find($id);
        $gaj->nomor_induk = $request->nomor_induk;
        $gaj->bulan = $request->bulan;
        $gaj->tahun = $request->tahun;
        $gaj->gaji_pokok = $request->gaji_pokok;
        $gaj->tunjangan_jabatan = $request->tunjangan_jabatan;
        $gaj->tunjangan_keluarga = $request->tunjangan_keluarga;
        $gaj->uang_makan = $request->uang_makan;
        $gaj->uang_lembur = $request->uang_lembur;
        $gaj->persen_pph = $request->persen_pph;
        $gaj->ptkp = $request->ptkp;
        $gaj->persen_pot_jamsostek = $request->persen_pot_jamsostek;
        $gaj->pot_lain_lain = $request->pot_lain_lain;
        $gaj->nama_jabatan = $request->nama_jabatan;
        $gaj->nama_cabang = $request->nama_cabang;
        $gaj->nama_departemen = $request->nama_departemen;
        $gaj->nama_bank = $request->nama_bank;
        $gaj->nomor_rekening = $request->nomor_rekening;
        $gaj->rekening_atas_nama = $request->rekening_atas_nama;
        $gaj->save();
        return redirect ('/gaji')->with('status','Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gaji $gaji)
    {
        //
    }

    public function hapusdata($id)
    {
        Gaji::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }

}
