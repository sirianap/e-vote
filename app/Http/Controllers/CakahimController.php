<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cakahim;

class CakahimController extends Controller
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
        $cakahim = Cakahim::all();
        return view('cakahim',compact('cakahim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inputcakahim');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cakahim::create($request->all());
        return redirect('cakahim');
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
    public function edit(Request $request)
    {
        $cakahim = Cakahim::find($request->id);
        return view('editcakahim',compact('cakahim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cakahim $cakahim)
    {
        $cakahim = Cakahim::find($request->id);
        $cakahim->namapasangan = $request->namapasangan;
        $cakahim->namakahim = $request->namakahim;
        $cakahim->nimkahim = $request->nimkahim;
        $cakahim->namawakahim = $request->namawakahim;
        $cakahim->nimwakahim = $request->nimwakahim;
        $cakahim->motto = $request->motto;
        $cakahim->save();
        return redirect(route('cakahim'));
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
