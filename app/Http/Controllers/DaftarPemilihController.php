<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarPemilihController extends Controller
{
    public function index(Request $request)
    {
        return view('daftarpemilih');
    }
    public function input()
    {
        return view('inputpemilih');
    }
}
