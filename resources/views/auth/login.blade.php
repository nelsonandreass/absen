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
        <span class="title ml-3 mt-3">Login</span>
        <hr>
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
    </div>

</div>
@endsection