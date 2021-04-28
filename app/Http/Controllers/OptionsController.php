<?php

namespace App\Http\Controllers;

use App\Models\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Opt = DB::table('options')->get();
        return view ('Pendukung.Option.option', compact ('Opt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pendukung.Option.optiontambah');
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
            'persen_pph' => 'required',
            'ptkp'=> 'required',
            'persen_jamsostek'=> 'required',
            'tunjangan_keluarga' => 'required'

            ]);

            Options::create($request->all());
            return redirect('/option')->with('status','Data Options Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Options  $options
     * @return \Illuminate\Http\Response
     */
    public function show(Options $options)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Options  $options
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $op = Options::find($id);
        return view('Pendukung.Option.optionedit',compact('op'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Options  $options
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $op = Options::find($id);
        $op->persen_pph = $request->persen_pph;
        $op->ptkp = $request->ptkp;
        $op->persen_jamsostek = $request->persen_jamsostek;
        $op->tunjangan_keluarga= $request->tunjangan_keluarga;

        $op->save();
        return redirect('/option')->with('status','Data Cuti Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Options  $options
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Options::find($id)->delete();
        return back()->with('success','Post deleted successfully');
    }
}
