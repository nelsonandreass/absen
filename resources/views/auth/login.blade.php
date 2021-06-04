@extends('layout.layoutnotlogin')

@section('content')

<div class="container">
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row title text-color-primary m-2">Selamat Datang <br> Kembali</div>
    <div class="row">&nbsp;</div>
    @if(Session::has('error'))
           <span class="error mb-2"> {{ Session::get('error') }}</span>
    @endif
    <form action="{{route('login.store')}}" method="post" class="form">
        @csrf
        <input type="text" name="email" placeholder="Email Address" class="form-control mb-3">
        <input type="password" name="password" placeholder="Password" class="form-control mb-3">
        <button class="btn color-primary btn-primary mb-3">Masuk</button>

        <div class="row">
            <div class="col-9 login-text-help">Lupa Password?</div>
            <div class="col-3 text-right login-text-help">
                <a href="{{route('register.index')}}" class="text-decor-none">Daftar</a>
            </div>
        </div>
    </form>
    <div class="row hero fixed-bottom">
        <img src="{{asset('assets/img/hero.png')}}" alt="">
    </div>

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