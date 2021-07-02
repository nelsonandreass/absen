@extends('layout.layoutsuperadmin')

@section('content')
   
    <div class="page-wrapper ">
        <div class="container-fluid">
            <center>
                    <form action="{{url('/testprocess')}}" method="post">
                    @csrf
                        <input type="text" name="kartu" class="form-control">
                        <button>submit</button>
                    </form>
            </center>
        </div>
    </div>
@endsection