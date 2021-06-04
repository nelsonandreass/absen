@extends('layout.layout')

@section('content')

    <div class="container">   
        <div class="row">&nbsp;</div>
        <div class="col-6">
            <span class="title m-0">Hi, <span class="text-color-primary">{{$name}}</span></span>
        </div>
        <div class="col-4">
             
        </div>
        
    </div>
    
   
    @include('parts.carousel')
@endsection