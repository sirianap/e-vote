@extends('layouts.app1')
@section('title','Masukan NIM')
@section('content')
<div class="section justify-content-center py-5">
    <h3 class="mb-0">Counter C1</h3>
    <h2 >Masukan Nomor Induk Mahasiswa</h2>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="card col-8">
                <div class="card-body py-2">
                    <form class="form-inline justify-content-center" action="{{route('pilihkahim')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="nim" class="col-2">NIM </label>
                            <input type="text" class="form-control col-5" id="nim" placeholder="G64100000">
                            <button type="submit" class=" col-4 btn btn-primary mx-1">Konfirmasi</button>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center py-2">
            <!-- <div class="alert alert-danger" role="alert">
                Maaf anda tidak bisa memilih. Silahkan menghubungi administrator.
            </div> -->
        </div>
    </div>
</div>
@endsection
