<?php

namespace App\Http\Controllers;

class GaleriController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('galeri');
    }
}
