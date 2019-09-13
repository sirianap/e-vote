@extends('layouts.app1')
@section('title','Daftar Counter')
@section('content')
<div class="section justify-content-center">
    <div class="container mb-4">
        <div class="card shadow ">
            <div class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
                <h6 class="mb-0">Daftar Counter</h6>
                <a href="{{route('counters.create')}}" class="btn btn-primary m-2">Input</a>
            </div>
            <div class="card-body">
                <table class="table" id="pemilih">
                    <thead>
                        <tr>
                            <th>Counter</th>
                            <th>Key</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($counters as $counter)
                        <tr>
                            <td>{{$counter->counter}}</td>
                            <td class="d-flex flex-row align-items-center justify-content-between">
                                <a>{{$counter->key}}</a>
                                <a class="badge badge-secondary" href="{{route('counters.edit',$counter->id)}}">EDIT</a>
                            </td>           
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Counter</th>
                            <th>Key</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
