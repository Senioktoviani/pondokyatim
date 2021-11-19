<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $donatur = Donatur::all();
        return view('donatur.index', compact('donatur'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('donatur.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        //
        // validasi data
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        $donatur = new Donatur;
        $donatur->nama = $request->nama;
        $donatur->nominal = $request->nominal;
        $donatur->tanggal = $request->tanggal;
        $donatur->telepon = $request->telepon;
        $donatur->save();
        return redirect()->route('donatur.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $donatur = Donatur::findOrFail($id);
        return view('donatur.show', compact('donatur'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $donatur = Donatur::findOrFail($id);
        return view('donatur.edit', compact('donatur'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        $donatur = new Donatur;
        $donatur->nama = $request->nama;
        $donatur->nominal = $request->nominal;
        $donatur->tanggal = $request->tanggal;
        $donatur->telepon = $request->telepon;
        $donatur->save();
        return redirect()->route('donatur.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $donatur = Donatur::findOrFail($id);
        $donatur->delete();
        return redirect()->route('donatur.index');

    }
}
