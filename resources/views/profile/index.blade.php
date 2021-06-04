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
                            <p class="col-12 greeting text-center mt-2 p-0">{{$name}}</p>
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
        
        <div class="row">&nbsp;</div>
        
        <hr>
        <div class="row ml-3 mb-3 mt-2">
           
            <div class="col-2 p-0 m-0"><img class="col-12 icon " src="{{asset('assets/img/user.png')}}" alt=""></div> 
            <div class="col-6 p-0"> <a href="{{Route('profile.create')}}" class=""><span class="text-decor-none">Ubah Data Diri</span></a></div> 
           </a>
        </div>       
        <div class="row ml-3 mb-3">
           <div class="col-2 p-0 m-0"><img class="col-12 icon " src="{{asset('assets/img/car-key.png')}}" alt=""></div> 
            <a href="" class=""><span class="text-decor-none">Ubah Password</span></a>
        </div>


    </div>

@endsection