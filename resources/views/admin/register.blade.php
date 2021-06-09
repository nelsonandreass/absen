@extends('layout.layoutnotlogin')

@section('content')

<div class="container">
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row title m-2 text-color-primary">Halo! <br> Daftar menjadi <br> Admin untuk <br> memulai</div>
    <div class="row">&nbsp;</div>
    @if(Session::has('error'))
           <span class="error mb-2"> {{ Session::get('error') }}</span>
    @endif
    <form action="{{route('registeradmin.store')}}" method="post">
    @csrf
        <input type="text" name="name" placeholder="Nama" class="form-control mb-3">
        <input type="text" name="email" placeholder="Email Address" class="form-control mb-3">
        <input type="password" name="password" placeholder="Password" class="form-control mb-3">
        <input type="password" name="repassword" placeholder="Re-Password" class="form-control mb-3">

        <button class="btn color-primary btn-primary mb-3">Daftar</button>
        <div class="row">
        <div class="col-5"></div>
            <div class="col-7 text-right login-text-help">
                <a href="{{route('loginadmin.index')}}" class="text-decor-none">Sudah punya akun?</a>
            </div>
        </div>
    </form>
    <div class="row hero fixed-bottom">
        <img src="{{asset('assets/img/hero.png')}}" alt="">
    </div>
    <!-- <div class="login-form">
        <span class="title ml-3 mt-3">Register</span>
        <hr>
        <form action="{{route('register.store')}}" method="post" class="m-3">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="handphone">No. Handphone</label>
                <input type="text" class="form-control" name="handphone">
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="repassword">Re-Password</label>
                <input type="password" class="form-control" name="repassword">
            </div>
            <button class="btn btn-primary mb-3">Login</button>
        </form>
    </div> -->

</div>
@endsection