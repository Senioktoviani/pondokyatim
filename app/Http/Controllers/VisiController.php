<?php

namespace App\Http\Controllers;

class VisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('visi');
    }

}
