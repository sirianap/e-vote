@extends('layouts.app1')
@section('title','Daftar Pemilih')
@section('content')
<div class="section justify-content-center py-5">
    <h2 class="mb-0">Daftar Pemilih</h2>
    <a href="{{route('inputpemilih')}}" class="btn btn-primary m-2">Input Pemilih</a>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table" id="pemilih">
                    <thead>
                        <tr>
                            <th>Nomor Induk Mahasiswa</th>
                            <th>Nama</th>
                            <th>Counter</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($daftarpemilih as $pemilih)
                        <tr>
                            <td>{{$pemilih->nim}}</td>
                            <td>{{$pemilih->nama_pemilih}}</td>
                            <td>{{$pemilih->counter}} 
                            @if($pemilih->vote ==0)
                                <a class="badge badge-secondary" href="{{route('editpemilih')}}?id={{$pemilih->id}}">
                                    EDIT
                                </a>
                            @endif</td>
                            <td>@if($pemilih->vote !=0)
                                    Telah memilih
                                @else
                                    Belum memilih
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nomor Induk Mahasiswa</th>
                            <th>Nama</th>
                            <th>Counter</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
