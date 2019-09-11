@extends('layouts.app1')
@section('title','Input Pemilih')
@section('content')
<div class="section justify-content-center py-5">
    <h2 class="">Edit Pemilih</h2>
    <div class="row justify-content-center">
    @if ($errors->has('nama_pemilih'))
        <div class="error col-10 alert alert-danger">Nama pemilih sudah terdaftar.</div>
    @endif
    @if ($errors->has('nim'))
        <div class="error col-10 alert alert-danger">NIM sudah terdaftar.</div>
    @endif
    </div>
    <form method="post" action="{{route('updatepemilih')}}">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        <div class="form-group row">
            <label for="nama" class="col-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" value="{{$data->nama_pemilih}}" name="nama_pemilih">
            </div>
        </div>
        <div class="form-group row">
            <label for="nim" class="col-sm-3 col-form-label">NIM</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nim" value="{{$data->nim}}" name="nim">
            </div>
        </div>
        <div class="form-group row">
            <label for="counter" class="col-3 col-form-label">Counter</label>
            <div class="col-9">
            <select id="counter" class="form-control" name="counter">
                @foreach($counter as $c)
                <option>{{$c->counter}}</option>
                @endforeach
            </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mb-2 float-right">EDIT</button>
    </form>
</div>
@endsection
