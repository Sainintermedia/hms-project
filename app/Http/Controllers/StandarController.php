<?php

namespace App\Http\Controllers;

use App\Models\Standar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StandarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Std = DB::table('standar')->get();
        return view ('Pendukung.Standar.standar', compact ('Std'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pendukung.Standar.standartambah');
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
            'bulan' => 'required',
            'tahun'=> 'required',
            'jumlah_hari_kerja' => 'required'
            ]);

            Standar::create($request->all());
            return redirect('/standar')->with('status','Data standar Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Standar  $standar
     * @return \Illuminate\Http\Response
     */
    public function show(Standar $standar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Standar  $standar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $st = Standar::find($id);
        return view('Pendukung.Standar.standaredit',compact('st'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Standar  $standar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $st = Standar::find($id);
        $st->bulan = $request->bulan;
        $st->tahun = $request->tahun;
        $st->jumlah_hari_kerja = $request->jumlah_hari_kerja;

        $st->save();
        return redirect('/standar')->with('status','Data Standar Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Standar  $standar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Standar::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }
}
