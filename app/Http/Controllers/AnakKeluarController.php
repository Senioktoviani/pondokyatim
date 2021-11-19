<?php

namespace App\Http\Controllers;

use App\Models\AnakKeluar;
use Illuminate\Http\Request;

class AnakKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $anak2 = AnakKeluar::all();
        return view('anakkeluar.index', compact('anak2'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('anakkeluar.create');

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

        $anak2 = new AnakKeluar;
        $anak2->nama = $request->nama;
        $anak2->jenis_kelamin = $request->jenis_kelamin;
        $anak2->keterangan = $request->keterangan;
        $anak2->save();
        return redirect()->route('anakkeluar.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnakKeluar  $anakKeluar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $anak2 = AnakKeluar::findOrFail($id);
        return view('anakkeluar.show', compact('anak2'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnakKeluar  $anakKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $anak2 = AnakKeluar::findOrFail($id);
        return view('anakkeluar.edit', compact('anak2'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnakKeluar  $anakKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // validasi data
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        $anak2 = new AnakKeluar;
        $anak2->nama = $request->nama;
        $anak2->jenis_kelamin = $request->jenis_kelamin;
        $anak2->keterangan = $request->keterangan;
        $anak2->save();
        return redirect()->route('anakkeluar.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnakKeluar  $anakKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $anak2 = AnakKeluar::findOrFail($id);
        $anak2->delete();
        return redirect()->route('anakkeluar.index');

    }
}
