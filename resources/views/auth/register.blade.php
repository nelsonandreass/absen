@extends('layout.layoutnotlogin')

@section('content')

<div class="container">
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>

    <div class="login-form">
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
    </div>

</div>
@endsection