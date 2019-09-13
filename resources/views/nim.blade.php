@extends('layouts.counter')
@section('title','Masukan NIM')
@section('content')
@if(session('popup-status'))
    <script>
        alert('{{session('popup-status')}}');
    </script>
@endif
<div class="section justify-content-center py-5">
    <h3 class="mb-0">Counter {{session('counter')}}</h3>
    <h2 >Masukan Nomor Induk Mahasiswa</h2>
    <div class="container">
        <div class="row d-flex justify-content-center">
            @if (session('status'))
                <div class="alert alert-success col-8 text-center">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="row d-flex justify-content-center">
            <div class="card col-8">
                <div class="card-body py-2">
                    <form class="form-inline justify-content-center" action="{{route('ceknim')}}" method="POST">
                        @csrf
                        <input type="hidden" name="counter" value="{{session('counter')}}">
                        <div class="form-group row">
                            <label for="nim" class="col-2">NIM </label>
                            <input type="text" class="form-control col-5" id="nim" name="nim" placeholder="G64100000">
                            <button type="submit" class=" col-4 btn btn-primary mx-1">Konfirmasi</button>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
