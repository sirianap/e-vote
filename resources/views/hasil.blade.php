@extends('layouts.app1')
@section('title','Hasil Pemilihan')
@section('content')
<div class="section justify-content-center">
    <div class="container ">
        <h1 class="mb-4 text-center">Hasil Pemilihan</h1>
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header">
                        <h6>Grafik Hasil (Belum)</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-pie ">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Direct
                            </span>
                            <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Social
                            </span>
                            <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Referral
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <div class="card-header">
                        <h6>Table Hasil</h6>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pasangan</th>
                                    <th class="text-right">Perolehan</th>
                                    <th class="text-right">Persentase</th>
                                </tr>  
                            </thead>
                            <tbody>
                            <?php
                                $sum = [];
                                foreach($hasil as $pas)
                                    $sum[] = $pas->count;
                            ?>
                            @foreach($hasil as $pas)
                                <tr>
                                    <td>{{$pas->pasangan}}</td>
                                    <td class="text-right">{{$pas->count}}</td>
                                    <td class="text-right">{{number_format(($pas->count)/(array_sum($sum))*100,2)}}%</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
@endsection