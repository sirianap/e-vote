<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Counter;
use App\Cakahim;
use App\DaftarPemilih;


class PilihKahimController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function counterauth()
    {
        return view('counterauth');    
    }
    public function auth(Request $request)
    {
        if( $data = Counter::where('counter',$request->counter)->first() ){
            if( $data->key == $request->key){
                session(['counter' => $data->counter]);
                return redirect(route('nim'));
            }
            else
                return redirect('counter');
        }
        return redirect('counter');
    }
    
    public function nim(Request $request)
    {
        if ($request->session()->has('counter')) {
            return view('nim');
        }
        else
            return redirect('counter');
    }
    
    public function index(Request $request)
    {
        if($request->session()->has('pemilih')){
            $pemilih = DB::table('daftarpemilihs')->where('nim',session('pemilih'))->first();
            if( $pemilih->counter != session('counter'))
                return redirect(route('nim'))->with('status','NIM anda tidak terdaftar di counter ini.');
            if( $pemilih->vote == 0){
                $cakahim = Cakahim::all();
                return view('pilihkahim',compact('cakahim','pemilih'));
            }
            else 
                return redirect(route('nim'))->with('status','Anda telah memilih.');
        }
        else
            return redirect(route('nim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ceknim(Request $request)
    {
        $request->validate([
            'nim' => ['required']
        ]);
        if($pemilih = DB::table('daftarpemilihs')->where('nim',$request->nim)->first()){
            return redirect('pilihkahim')->with('pemilih',$request->nim);
        }
        else
            return redirect('nim')->with('status','NIM tidak ditemukan. Silahkan hubungi administrator.');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemilih = DaftarPemilih::find($request->id_pemilih);
        $pemilih->counter = $request->counter;
        $pemilih->vote = $request->id_cakahim;
        $pemilih->save();
        return redirect('nim')->with('popup-status','Terima kasih sudah memilih.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
