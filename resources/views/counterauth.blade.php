@extends('layouts.counter')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Counter Auth</div>

                <div class="card-body">
                    <form method="POST" action="{{route('authcounter')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="counter" class="col-md-4 col-form-label text-md-right">Counter</label>

                            <div class="col-md-6">
                                <input id="counter" type="counter" class="form-control" name="counter" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="key" class="col-md-4 col-form-label text-md-right">Key</label>
                            <div class="col-md-6">
                                <input id="key" type="password" class="form-control" name="key" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Auth
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
