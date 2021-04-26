<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KaryawanExport;


class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export_excel()
	{
		return Excel::download(new karyawanExport, 'karyawan.xlsx');
	}

    public function index()
    {
        $Karya = DB::table('karyawan as a')
        ->join('jabatan as b','a.kode_jabatan','=','b.kode_jabatan')
        ->join('departemen as c','a.kode_departemen','=','c.kode_departemen')
        ->join('cabang as d','a.kode_cabang','=','d.kode_cabang')
        ->select('a.id','a.nomor_induk','a.nama', 'a.tempat_lahir', 'a.tanggal_lahir', 'a.jenis_kelamin', 'a.agama', 'a.status_pernikahan', 'a.jumlah_anak',
        'a.alamat','a.nomor_telepon','a.pendidikan_terakhir', 'd.nama_cabang', 'b.nama_jabatan',
         'c.nama_departemen','a.gaji_pokok','a.tanggal_diangkat','a.tanggal_keluar','a.nama_bank','a.nomor_rekening','a.rekening_atas_nama','a.created_at')
        ->get();
        return view('MasterData.Karyawan.karyawan', compact('Karya'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jab = DB::table('jabatan')->get();

        $cab = DB::table('cabang')->get();

        $dep = DB::table('departemen')->get();

        $nomor_induk = autonumber('karyawan','nomor_induk','NK-');

        return view('MasterData.Karyawan.tambahkaryawan', compact ('jab','cab','dep','nomor_induk'));
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
    public function show($id)
    {
        $karyawan= karyawan::find($id);
        return view('MasterData.Karyawan.show', compact('karyawan'));
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
        return view('MasterData.Karyawan.editkaryawan',compact('kar'));
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
