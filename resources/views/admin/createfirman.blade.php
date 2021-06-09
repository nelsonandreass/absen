@extends('layout.layout')

@section('content')

<div class="container mx-auto">
    <div class="row">&nbsp;</div>
        <div class="col-12">
            <span class="title m-0">Tulis Firman</span>
        </div>
    @if(Session::has('success'))
        <div class="alert alert-success mr-3 ml-3">
            <span class=""> {{ Session::get('success') }}</span>
        </div>
    @endif
    <form action="{{route('tulisfirman.store')}}" method="post" class="m-3">
        @csrf
        <label for="">Judul</label>
        <input type="text" name="judul" placeholder="Judul Firman" class="form-control mb-3">
        <label for="">Isi</label>
        <textarea name="firman" id="" cols="30" rows="10" class="form-control mb-3"></textarea>
        <button class="btn color-primary btn-primary mb-3">Simpan</button>

        
    </form>

    <!-- <div class="login-form">
        <span class="title m-3 mt-5">Login</span>
        @if(Session::has('error'))
           <span class="error ml-3"> {{ Session::get('error') }}</span>
        @endif
        <form action="{{route('login.store')}}" method="post" class="m-3">
            @csrf
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button class="btn btn-primary mb-3">Login</button>
        </form>
    </div> -->

</div>
@endsection