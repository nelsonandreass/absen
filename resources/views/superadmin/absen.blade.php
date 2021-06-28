@extends('layout.layoutsuperadmin')

@section('content')
   
    <div class="page-wrapper ">
        <div class="container-fluid">
            <center>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <img class="col-12 no-absen" src="{{asset('/assets/img/user-black.png')}}" alt="">
                        </div>
                        <div class="col-4"></div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <input type="text" name="jenis" value="{{$jenis}}">
                            <input type="text" class="form-control " name="absen">
                        </div>
                        <div class="col-4"></div>
                        
                    </div>
            </center>
        </div>
    </div>
@endsection