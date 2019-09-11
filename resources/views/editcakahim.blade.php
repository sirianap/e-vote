@extends('layouts.app1')
@section('title','Input Cakahim')
@section('content')
<div class="section justify-content-center py-5">
    <h2 class="mb-4">Edit Kahim</h2>
    <form method="post" action="{{route('updatecakahim')}}" enctype = "multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="namapasangan" class="h6">Nama Pasangan</label>
            <input type="text" class="form-control" id="pasangan" placeholder="Lorem ipsum" name="namapasangan" value="{{$cakahim->namapasangan}}">
        </div>
        <div class="row">
            <div class="col">
                <h6 class="text-center">Kahim</h6>
                <div class="form-group row">
                    <label for="namakahim" class="col-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="namakahim" placeholder="Lorem ipsum" name="namakahim" value="{{$cakahim->namakahim}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nimkahim" class="col-sm-3 col-form-label">NIM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nimkahim" placeholder="G64100000" name="nimkahim" value="{{$cakahim->nimkahim}}">
                    </div>
                </div>
            </div>
            <div class="col">
                <h6 class="text-center">Wakahim</h6>
                <div class="form-group row">
                    <label for="namawakahim" class="col-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="namawakahim" placeholder="Lorem ipsum" name="namawakahim" value="{{$cakahim->namawakahim}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nimwakahim" class="col-sm-3 col-form-label">NIM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nimwakahim" placeholder="G64100000" name="nimwakahim" value="{{$cakahim->nimwakahim}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <h6 for="motto" class="text-center">Motto</h6>
            <textarea class="form-control" id="motto" rows="5" name="motto" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo provident ut veniam, minus ipsum hic voluptatem fugit cupiditate repudiandae recusandae similique nesciunt obcaecati alias culpa ipsa voluptas distinctio quia quasi?">{{$cakahim->motto}}</textarea>
        </div>
        <div class="form-group row d-flex justify-content-between">
            <label for="img-cakahim" class="col-form-label">Gambar Cakahim</label>
            <div class="col">
                <input type="file" class="form-control-file" id="img-cakahim" name="img-cakahim">
            </div>
        </div>
        <input type="hidden" name="id" value="{{$cakahim->id}}">
        <button type="submit" class="btn btn-primary mb-2 float-right">EDIT</button>
    </form>
</div>
@endsection
