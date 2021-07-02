@extends('layout.layoutsuperadmin')

@section('content')
   
    <div class="page-wrapper ">
        <div class="container-fluid">
            <center>
                    <form action="{{url('/uploadfotoprocess')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <input type="file" name="foto" class="form-control">
                        <button>submit</button>
                    </form>
            </center>
        </div>
    </div>
@endsection