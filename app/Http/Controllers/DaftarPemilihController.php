<?php

namespace App\Http\Controllers;

use App\DaftarPemilih;
use App\Counter;
use Illuminate\Http\Request;

class DaftarPemilihController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $daftarpemilih = DaftarPemilih::all();
        return view('daftarpemilih',compact('daftarpemilih'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counter = Counter::all();
        return view('inputpemilih', compact('counter'));
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
            'nama_pemilih' => ['required', 'unique:daftarpemilihs,nama_pemilih'],
            'nim' => ['required', 'unique:daftarpemilihs,nim']
        ]);

        DaftarPemilih::create($request->all());
        return redirect(route('daftarpemilih'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DaftarPemilih  $daftarPemilih
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarPemilih $daftarPemilih)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DaftarPemilih  $daftarPemilih
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
        $data = DaftarPemilih::find($request->id);
        $counter = Counter::all();
        return view('editpemilih', compact('counter','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DaftarPemilih  $daftarPemilih
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarPemilih $daftarPemilih)
    {
        $request->validate([
            'nama_pemilih' => ['required'],
            'nim' => ['required']
        ]);
        
        $pemilih = DaftarPemilih::find($request->id);
        $pemilih->nama_pemilih = $request->nama_pemilih;
        $pemilih->nim = $request->nim;
        $pemilih->counter = $request->counter;
        $pemilih->save();
        return redirect(route('daftarpemilih'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DaftarPemilih  $daftarPemilih
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarPemilih $daftarPemilih)
    {
        //
    }
}
