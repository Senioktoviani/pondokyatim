<?php

namespace App\Http\Controllers;

use App\Models\AnakAsuh;
use Illuminate\Http\Request;

class AnakAsuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anak = AnakAsuh::all();
        return view('anakasuh.index', compact('anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('anakasuh.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // validasi data
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        $anak = new AnakAsuh;
        $anak->nama = $request->nama;
        $anak->tempat_lahir = $request->tempat_lahir;
        $anak->tgl_lahir = $request->tgl_lahir;
        $anak->jenis_kelamin = $request->jenis_kelamin;
        $anak->pendidikan = $request->pendidikan;
        $anak->nama_ortu_wali = $request->nama_ortu_wali;
        $anak->alamat_tinggal = $request->alamat_tinggal;
        $anak->save();
        return redirect()->route('anakasuh.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnakAsuh  $anakAsuh
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $anak = AnakAsuh::findOrFail($id);
        return view('anakasuh.show', compact('anak'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnakAsuh  $anakAsuh
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $anak = AnakAsuh::findOrFail($id);
        return view('anakasuh.edit', compact('anak'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnakAsuh  $anakAsuh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // validasi data
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        $anak = new AnakAsuh;
        $anak->nama = $request->nama;
        $anak->tempat_lahir = $request->tempat_lahir;
        $anak->tgl_lahir = $request->tgl_lahir;
        $anak->jenis_kelamin = $request->jenis_kelamin;
        $anak->pendidikan = $request->pendidikan;
        $anak->nama_ortu_wali = $request->nama_ortu_wali;
        $anak->alamat_tinggal = $request->alamat_tinggal;
        $anak->save();
        return redirect()->route('anakasuh.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnakAsuh  $anakAsuh
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $anak = AnakAsuh::findOrFail($id);
        $anak->delete();
        return redirect()->route('anakasuh.index');

    }
}
