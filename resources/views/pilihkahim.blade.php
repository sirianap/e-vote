@extends('layouts.counter')
@section('title','Daftar Cakahim')
@section('content')
<div class="section justify-content-center py-4">
    <h5>{{$pemilih->nama_pemilih}} {{$pemilih->nim}}</h5>
    <h3 class="">Calon Ketua Himpunan Mahasiswa Ilmu Komputer</h3>
    <div class="container mx-1">
        <div class="card-deck mx-0 px-0">
        @foreach($cakahim as $cak)
            <div class="card">
                <img src="{{asset('img/default_profile.svg')}}" class="card-img-top py-1 mx-auto" style="width: 10rem;" alt="Pasangan 1">
                <div class="card-body">
                <h5 class="card-title text-center">{{$cak->namapasangan}}</h5>
                <h6 class="text-center">{{$cak->namakahim}} - {{$cak->nimkahim}}</h5>
                <h6 class="text-center">{{$cak->namawakahim}} - {{$cak->nimwakahim}}</h5>
                <p class="card-text text-center">{{$cak->motto}}</p>
                </div>
                <div class="card-footer text-center">
                <form action="{{route('pilih')}}" method="POST" >
                    @csrf
                    <input type="hidden" name="nama_pemilih" value="{{$pemilih->nama_pemilih}}">
                    <input type="hidden" name="nim" value="{{$pemilih->nim}}">
                    <input type="hidden" name="counter" value="{{session('counter')}}">
                    <input type="hidden" name="id_pemilih" value="{{$pemilih->id}}">
                    <input type="hidden" name="id_cakahim" value="{{$cak->id}}">
                    <button class="btn btn-primary px-5" type="submit">
                        Pilih
                    </button>
                </form>
                </div>
            </div>
            @endforeach        
        </div>
        
    </div>
</div>

@endsection
