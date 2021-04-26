<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Caba = DB::table('cabang')->get();
        return view ('MasterData.DataCabang.cabang', compact ('Caba'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('MasterData.DataCabang.tambahcabang');
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

            'kode_cabang' => 'required|max:10',
            'nama_cabang' => 'required',
            'uang_makan' => 'required',

        ]);

            Cabang::create($request->all());
            return redirect('/cabang')->with('status','Data Cabang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function show(Cabang $cabang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cab = Cabang::find($id);
        return view ('MasterData.DataCabang.editcabang', compact('cab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cab = Cabang::find($id);
        $cab->kode_cabang = $request->kode_cabang;
        $cab->nama_cabang = $request->nama_cabang;
        $cab->uang_makan = $request->uang_makan;
        $cab->save();
        return redirect('/cabang')->with('status','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cabang $cabang)
    {
        //
    }

    public function hapusdata($id)
    {
        Cabang::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }

}
