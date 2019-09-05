@extends('layouts.app1')
@section('title','Daftar Pemilih')
@section('content')
<div class="section justify-content-center py-5">
    <h2 class="mb-0">Daftar Pemilih</h2>
    <a href="{{route('inputpemilih')}}" class="btn btn-primary m-2">Input Pemilih</a>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nomor Induk Mahasiswa</th>
                            <th>Nama</th>
                            <th>Counter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>G64170085</td>
                            <td>Rian Ardiana Prapanca</td>
                            <td>C2</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nomor Induk Mahasiswa</th>
                            <th>Nama</th>
                            <th>Counter</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
