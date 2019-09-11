@extends('layouts.counter')
@section('title','Daftar Cakahim')
@section('content')
<div class="section justify-content-center py-4">
    <h5>Rian Ardiana Prapanca G64170085</h5>
    <h2 class="">Calon Ketua Himpunan Mahasiswa Ilmu Komputer</h2>
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
                <small class=""><a href="" class="btn btn-primary px-5">PILIH</a></small>
                </div>
            </div>
            @endforeach        
        </div>
    </div>
</div>
@endsection
