<?php

namespace App\Http\Controllers;

use App\Models\Lembur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lem = DB::table('lembur')->get();
        return view ('Transaksi.Lembur.lembur', compact ('Lem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Transaksi.Lembur.tambahlembur');
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
        'jumlah_jam_lembur' => 'required',

        ]);

        Lembur::create($request->all());
        return redirect('/lembur')->with('status','Data Lembur Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function show(Lembur $lembur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lemb = Lembur::find($id);
        return view('Transaksi.Lembur.editlembur',compact('lemb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lemb = Lembur::find($id);
        $lemb->nomor_induk = $request->nomor_induk;
        $lemb->bulan = $request->bulan;
        $lemb->tahun = $request->tahun;
        $lemb->jumlah_jam_lembur = $request->jumlah_jam_lembur;

        $lemb->save();
        return redirect('/lembur')->with('status','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lembur $lembur)
    {
        //
    }

    public function hapusdata($id)
    {
        Lembur::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }
}
