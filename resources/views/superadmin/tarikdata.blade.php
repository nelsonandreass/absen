@extends('layout.layoutsuperadmin')

@section('content')
<div class="page-wrapper p-3">  
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title">Tarik Data</h4>
                            <h5 class="card-subtitle">Get Data</h5>
                        </div>
                    </div>
                    <!-- title -->

                    <form action="{{url('/tarikdataprocess')}}" method="get">
                     
                        <select name="tanggal" id="">
                            @foreach($dates as $date)
                                <option value="{{$date->tanggal}}">{{$date->tanggal}}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary">Tarik</button>

                    </form>
                  
                </div>
              
            </div>
        </div>
    </div>
</div>
@endsection