<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/evote.css')}}">
    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="nav nav-pills navbar-expand-lg py-2 navbar-light bg-light px-4 justify-content-between">
      <ul class="navbar-nav mr-auto">
        <div class="nav-item">
          <a class="navbar-brand" href="">E-Vote Himpunan Mahasiswa Ilmu Komputer</a>
        </div>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Counter</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('nim')}}">Input NIM</a>
            <a class="dropdown-item" href="{{route('pilihkahim')}}">Pilih Kahim</a>
          </div>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cakahim</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('cakahim')}}">List Kahim</a>
            <a class="dropdown-item" href="">Input Kahim</a>
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
            <a class="dropdown-item" href="">Counter</a>
            <a class="dropdown-item" href="">Logout</a>
          </div>
        </li>
      </ul>
    </nav>

    
    <div class="py-2"></div> 
    @yield('content')
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>