@extends('layouts.app1')
@section('title','Masukan NIM')
@section('content')
<div class="section justify-content-center py-5">
    <h2 class="">Masukan Nomor Induk Mahasiswa</h2>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="card col-8">
                <div class="card-body py-2">
                    <form class="form-inline justify-content-center">
                        <div class="form-group mx-1">
                            <label for="nim" class="col-form-label mx-1">G6 </label>
                            <input type="number" class="form-control" id="nim" placeholder="4170001">
                        </div>
                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center py-2">
            <div class="alert alert-danger" role="alert">
                Maaf anda tidak bisa memilih. Silahkan menghubungi administrator.
            </div>
        </div>
    </div>
</div>
@endsection
