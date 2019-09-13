@extends('layouts.app1')
@section('title','Create Counter')
@section('content')
<div class="section justify-content-center py-5">
    <h2 class="">Create Counter</h2>
    <div class="row justify-content-center">
    @if ($errors->has('nama_pemilih'))
        <div class="error col-10 alert alert-danger">Nama pemilih sudah terdaftar.</div>
    @endif
    @if ($errors->has('nim'))
        <div class="error col-10 alert alert-danger">NIM sudah terdaftar.</div>
    @endif
    </div>
    <form method="post" action="{{route('counters.store')}}">
        @csrf
        <div class="form-group row">
            <label for="counter" class="col-3 col-form-label">Counter</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="counter" placeholder="Lorem ipsum" name="counter">
            </div>
        </div>
        <div class="form-group row">
            <label for="key" class="col-sm-3 col-form-label">Key</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="key" placeholder="bpcounter" name="key">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-2 float-right">Input</button>
    </form>
</div>
@endsection
