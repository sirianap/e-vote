<?php

namespace App\Http\Controllers;

use App\Nim;
use Illuminate\Http\Request;

class NimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nim');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nim  $nim
     * @return \Illuminate\Http\Response
     */
    public function show(Nim $nim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nim  $nim
     * @return \Illuminate\Http\Response
     */
    public function edit(Nim $nim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nim  $nim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nim $nim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nim  $nim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nim $nim)
    {
        //
    }
}
