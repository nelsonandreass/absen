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
                     
                        <div class="row">
                            <div class="col-6">
                                <select name="tanggal" id="tanggal" onchange="change()" class="form-control">
                                    <option value="default" style="color: #DBDBDB">Pilih Tanggal...</option>    
                                    @foreach($dates as $date)
                                        <option value="{{$date->tanggal}}">{{$date->tanggal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-primary" id='tarik'>Tarik</button>
                            </div>
                        </div>
                    </form>

                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                        </thead>
                        <tbody id="body-table">
                          
                        </tbody>
                </table> 



                </div>
              
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
    <script>
        var tanggal;    
        function change(){
            tanggal = $("#tanggal").val();
        }
        $(document).ready(function(){
            $("#tarik").click(function(e){
                e.preventDefault();
                var http = new XMLHttpRequest();
                var url = '/tarikdataprocess';
                var params = 'tanggal='+tanggal+'&_token={{csrf_token()}}';
                http.open('POST', url, true);
                http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                http.send(params);
                http.onreadystatechange = function() {
                    $(this).parents('.row-table').remove();
                    var data= JSON.parse(http.responseText);
                    for(var i = 0 ; i < data.data.length ; i++){
                        $('#body-table').append('<tr class="row-table"><td>'+(i+1)+'</td><td>'+data.data[i].name+'</td><td>'+data.data[i].nomor_telepon+'</td><td>'+data.data[i].alamat+'</td></tr>');;
                    }
                }
            });
        });
    </script>
@endsection