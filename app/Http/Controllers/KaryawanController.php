<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Karya = DB::table('karyawan')->get();
        return view('MasterData.DataKaryawan.karyawan', compact('Karya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MasterData.DataKaryawan.tambahkaryawan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

        'nomor_induk' => 'required|max:10',
        'nama' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'jenis_kelamin' => 'required',
        'agama' => 'required',
        'status_pernikahan' => 'required',
        'jumlah_anak' => 'required',
        'alamat' => 'required',
        'nomor_telepon' => 'required',
        'pendidikan_terakhir' => 'required',
        'kode_jabatan' => 'required',
        'kode_cabang' => 'required',
        'kode_departemen' => 'required',
        'gaji_pokok' => 'required',
        'tanggal_diangkat' => 'required',
        'tanggal_keluar' => 'required',
        'nama_bank' => 'required',
        'nomor_rekening' => 'required',
        'rekening_atas_nama' => 'required',

        ]);

        Karyawan::create($request->all());
        return redirect('/karyawan')->with('status','Data Karyawan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kar = Karyawan::find($id);
        return view('MasterData.DataKaryawan.editkaryawan',compact('kar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $kar = Karyawan::find($id);
        $kar->nomor_induk = $request->nomor_induk;
        $kar->nama = $request->nama;
        $kar->tempat_lahir = $request->tempat_lahir;
        $kar->tanggal_lahir = $request->tanggal_lahir;
        $kar->jenis_kelamin = $request->jenis_kelamin;
        $kar->agama = $request->agama;
        $kar->status_pernikahan = $request->status_pernikahan;
        $kar->jumlah_anak = $request->jumlah_anak;
        $kar->alamat = $request->alamat;
        $kar->nomor_telepon = $request->nomor_telepon;
        $kar->pendidikan_terakhir = $request->pendidikan_terakhir;
        $kar->kode_jabatan = $request->kode_jabatan;
        $kar->kode_cabang = $request->kode_cabang;
        $kar->kode_departemen = $request->kode_departemen;
        $kar->gaji_pokok = $request->gaji_pokok;
        $kar->tanggal_diangkat = $request->tanggal_diangkat;
        $kar->tanggal_keluar = $request->tanggal_keluar;
        $kar->nama_bank = $request->nama_bank;
        $kar->nomor_rekening = $request->nomor_rekening;
        $kar->rekening_atas_nama = $request->rekening_atas_nama;
        $kar->save();
        return redirect('/karyawan')->with('status','Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        //
    }

    public function hapusdata($id)
    {
        Karyawan::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }
}
