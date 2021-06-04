@extends('layout.layout')

@section('content')

    <div class="container">
        <div class="row">&nbsp;</div>
        <h3 class="ml-3 title">Profile</h3>
        <div class="row">&nbsp;</div>

        <div class="row m-3">
            <div class="profile">
                <div class="row p-0 mt-3">
                    <div class="col-4"></div>
                    <div class="col-4 2-100">
                        <div class="row">
                            <img class="col-12 barcode" src="{{asset('assets/img/user.png')}}" alt="">
                        </div>
                        <div class="row">
                            <p class="col-12 greeting text-center mt-2 p-0">{{$user->name}}</p>
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
        

       <form action="{{route('profile.update',$user->id)}}" method="patch">
        @csrf
            <input type="text" name="name" placeholder="{{$user->name}}" class="form-control mb-3" disabled>
            <input type="text" name="name" placeholder="{{$user->email}}" class="form-control mb-3" disabled>
            @if($user->nomor_telepon == null)
                <input type="text" name="nomortelepon" placeholder= "Nomor Telepon" class="form-control mb-3">
            @else
                <input type="text" name="nomortelepon" placeholder= "{{$user->nomor_telepon}}" class="form-control mb-3">
            @endif
            
            <button class="btn btn-primary color-primary">Ubah</button>
       </form>

    </div>

@endsection