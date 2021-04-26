<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Depa = DB::table('departemen')->get();
        return view('MasterData.Departemen.departemen', compact('Depa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode_departemen = autonumber('departemen','kode_departemen','D-');
        return view ('MasterData.Departemen.tambahdepartemen', compact('kode_departemen'));
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

            'kode_departemen' => 'required|max:10',
            'nama_departemen' => 'required',

        ]);

            Departemen::create($request->all());
            return redirect('/departemen')->with('status','Data Departemen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function show(Departemen $departemen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $dep = Departemen::find($id);
        return view('MasterData.Departemen.editdepartemen',compact('dep'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $dep = Departemen::find($id);
        $dep->kode_departemen = $request->kode_departemen;
        $dep->nama_departemen = $request->nama_departemen;
        $dep->save();
        return redirect('/departemen')->with('status','Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departemen $departemen)
    {
        //
    }

    public function hapusdata($id)
    {
        Departemen::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }
}
