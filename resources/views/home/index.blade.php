@extends('layout.layout')

@section('content')

    <div class="container">   
        <div class="row">&nbsp;</div>
        <div class="col-12">
            <span class="title m-0">Hi, <span class="text-color-primary">{{$name}}</span></span>
        </div>

        @include('parts.carousel')
        
    </div>
    
   
   
@endsection