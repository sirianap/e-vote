@extends('layouts.app1')
@section('title','Input Pemilih')
@section('content')
<div class="section justify-content-center py-5">
    <h2 class="">Input Pemilih</h2>
    <form>
        <div class="form-group row">
            <label for="nama" class="col-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" placeholder="Nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="nim" class="col-sm-3 col-form-label">NIM</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nim" placeholder="G64170001">
            </div>
        </div>
        <div class="form-group row">
            <label for="counter" class="col-3 col-form-label">Counter</label>
            <div class="col-9">
            <select id="counter" class="form-control">
                <option selected>Counter C1</option>
                <option>Counter C2</option>
                <option>Counter C3</option>
                <option>Counter C4</option>
            </select>
            </div>
        </div>
        

        <button type="submit" class="btn btn-primary mb-2 float-right">Input</button>
    </form>
</div>
@endsection
