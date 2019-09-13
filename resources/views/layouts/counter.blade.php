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
      </ul>
      <ul class="navbar-nav ml-auto my-auto">
        <li class="nav-item">
          <a class="align-middle nav-link" href="{{route('counter')}}">Counter {{session('counter')}}</a>     
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