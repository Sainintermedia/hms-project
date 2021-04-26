<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Jab = DB::table('jabatan')->get();
        return view('MasterData.DataJabatan.jabatan', compact('Jab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MasterData.DataJabatan.tambahjabatan');
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

            'kode_jabatan' => 'required|max:10',
            'nama_jabatan' => 'required',
            'tunjangan_jabatan' => 'required',
            'level_jabatan' => 'required',

        ]);

            Jabatan::create($request->all());
            return redirect('/jabatan')->with('status','Data jabatan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jaba = Jabatan::find($id);
        return view('MasterData.DataJabatan.editjabatan',compact('jaba'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jaba = Jabatan::find($id);
        $jaba->kode_jabatan = $request->kode_jabatan;
        $jaba->nama_jabatan = $request->nama_jabatan;
        $jaba->tunjangan_jabatan = $request->tunjangan_jabatan;
        $jaba->level_jabatan = $request->level_jabatan;

        $jaba->save();
        return redirect('/jabatan')->with('status','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jabatan $jabatan)
    {
        //
    }

    public function hapusdata($id)
    {
        Jabatan::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }
}
