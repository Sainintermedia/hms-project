<?php

namespace App\Http\Controllers;

use App\Models\HistoryKenaikanGaji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryKenaikanGajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Historykg = DB::table('history_kenaikan_gaji')->get();
        return view('MasterData.DataHistoryKenaikanGaji.historykenaikangaji', compact('Historykg'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MasterData.DataHistoryKenaikanGaji.tambahhistorykenaikangaji');
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
        'bulan' => 'required',
        'tahun' => 'required',
        'gaji_pokok_lama' => 'required',
        'persentase_kenaikan' => 'required',
        'gaji_pokok_baru' => 'required',

        ]);

            HistoryKenaikanGaji::create($request->all());
            return redirect('/historykenaikangaji')->with('status','Data History Kenaikan Gaji Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoryKenaikanGaji  $historyKenaikanGaji
     * @return \Illuminate\Http\Response
     */
    public function show(HistoryKenaikanGaji $historyKenaikanGaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryKenaikanGaji  $historyKenaikanGaji
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $his = HistoryKenaikanGaji::find($id);
        return view('MasterData.DataHistoryKenaikanGaji.edithistorykenaikangaji',compact('his'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistoryKenaikanGaji  $historyKenaikanGaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $his = HistoryKenaikanGaji::find($id);
        $his->nomor_induk = $request->nomor_induk;
        $his->bulan = $request->bulan;
        $his->tahun = $request->tahun;
        $his->gaji_pokok_lama = $request->gaji_pokok_lama;
        $his->persentase_kenaikan = $request->persentase_kenaikan;
        $his->gaji_pokok_baru = $request->gaji_pokok_baru;
        $his->save();
        return redirect('/historykenaikangaji')->with('status','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryKenaikanGaji  $historyKenaikanGaji
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoryKenaikanGaji $historyKenaikanGaji)
    {
        //
    }

    public function hapusdata($id)
    {
        HistoryKenaikanGaji::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }

}
