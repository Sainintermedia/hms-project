<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cut = DB::table('cuti')->get();
        return view ('Transaksi/lembur.Cuti.cuti', compact ('Cut'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Transaksi/lembur.Cuti.cutitambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate ([
            'nomor_induk'=> 'required|max:10',
            'bulan' => 'required',
            'tahun'=> 'required',
            'jumlah_cuti' => 'required',
    
            ]);
    
            Cuti::create($request->all());
            return redirect('/cuti')->with('status','Data Cuti Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function show(Cuti $cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ct = Cuti::find($id);
        return view('Transaksi/lembur.Cuti.editcuti',compact('ct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ct = Cuti::find($id);
        $ct->nomor_induk = $request->nomor_induk;
        $ct->bulan = $request->bulan;
        $ct->tahun = $request->tahun;
        $ct->jumlah_cuti = $request->jumlah_cuti;

        $ct->save();
        return redirect('/cuti')->with('status','Data Cuti Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cuti::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }
}
