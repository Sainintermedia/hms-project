<?php

namespace App\Http\Controllers;

use App\Models\PotonganLainLain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PotonganLainLainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PTLL = DB::table('potongan_lain_lain')->get();
        return view ('Transaksi.PotonganLainLain.potonganlainlain', compact ('PTLL'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Transaksi.PotonganLainLain.tambahpotonganlainlain');
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
            'nomor_induk' => 'required|max:10',
            'bulan' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        PotonganLainLain::create($request->all());
        return redirect('/potonganlainlain')->with('status','Data Potongan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PotonganLainLain  $potonganLainLain
     * @return \Illuminate\Http\Response
     */
    public function show(PotonganLainLain $potonganLainLain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PotonganLainLain  $potonganLainLain
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ptl = PotonganLainLain::find($id);
        return view ('Transaksi.PotonganLainLain.editpotonganlainlain', compact ('ptl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PotonganLainLain  $potonganLainLain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $ptl = PotonganLainLain::find($id);
        $ptl->nomor_induk = $request->nomor_induk;
        $ptl->bulan = $request->bulan;
        $ptl->tahun = $request->tahun;
        $ptl->jumlah = $request->jumlah;
        $ptl->keterangan = $request->keterangan;
        $ptl->save();
        return redirect ('/potonganlainlain')->with('status','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PotonganLainLain  $potonganLainLain
     * @return \Illuminate\Http\Response
     */
    public function destroy(PotonganLainLain $potonganLainLain)
    {
        //
    }

    public function hapusdata($id)
    {
        PotonganLainLain::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }

}
