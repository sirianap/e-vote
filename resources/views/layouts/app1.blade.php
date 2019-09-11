<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/evote.css')}}">
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="nav nav-pills navbar-expand-lg py-2 navbar-light bg-light px-4 justify-content-between">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="navbar-brand" href="">E-Vote Himpunan Mahasiswa Ilmu Komputer</a>
        </li> 
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cakahim</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('cakahim')}}">List Kahim</a>
            <a class="dropdown-item" href="{{route('inputcakahim')}}">Input Kahim</a>
          </div>
        </li>
        <div class="nav-item">
          <a class="nav-link" href="{{route('daftarpemilih')}}">Daftar Pemilih</a>
        </div>
        <div class="nav-item">
          <a class="nav-link disabled" href="">Hasil</a>
        </div>
        
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown mr-4">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Rian Ardiana Prapanca</a>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Counter</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </li>
      </ul>
    </nav>

    
    <div class="py-2"></div> 
    @yield('content')
    
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
  </body>
</html>