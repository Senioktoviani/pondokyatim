<?php

namespace App\Http\Controllers;

class GuruController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('guru');
    }
}
