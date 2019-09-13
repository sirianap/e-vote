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
    <form method="post" action="{{route('counters.update',$counter->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="counter" class="col-3 col-form-label">Counter</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="counter" placeholder="Lorem ipsum" name="counter" value="{{$counter->counter}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="key" class="col-sm-3 col-form-label">Key</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="key" placeholder="bpcounter" name="key" value="{{$counter->key}}">
            </div>
        </div>
        <a class="btn btn-danger" href="{{route('counters.destroy',$counter->id)}}"
                onclick="event.preventDefault();
                                document.getElementById('destroy').submit();">
            Hapus        
        </a>
        <button type="submit" class="btn btn-primary mb-2 float-right">Edit</button>
    </form>
    <form action="{{route('counters.destroy',$counter->id)}}" method="post" id="destroy">
        @csrf
        @method('DELETE')
    </form>
</div>
@endsection
