@extends('layout.layoutsuperadmin')
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
   <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" /> -->
@section('content') 
    <div class="page-wrapper">
        <div class="container-fluid">
           
            <div class="card p-3">  
                    <!-- <div class="row">
                        <div class="col-4">
                            <input type="input" class="form-control rounded" placeholder="Search" id="search"  autocomplete="off"/>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-outline-primary">search</button>
                        </div>
                    </div>
                    <div class="row px-3" style="display:none" id="autocomplete">
                        <div class="col-3 " style="height: 4rem; background-color:white; overflow-y: auto" id="data">


                        </div>
                    </div> -->
                <div class="col-2 mb-3">
                    <a href="/jemaatbaru" class="btn btn-secondary ml-auto"><span class="mdi mdi-account-multiple-plus"> Tambah Jemaat</span></a>
                </div>

                <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>No Kartu</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $i = 1?>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->nomor_telepon}}</td>
                                    <td>{{$user->alamat}}</td>
                                    <td>{{$user->kartu}}</td>
                                    <td><img src="{{asset('storage/'.$user->foto)}}" class="icon" alt="{{$user->foto}}"></td>
                                    <td>
                                        <a href="{{url('/showjemaat', $user->id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    
                                </tr>
                                <?php $i++?>
                            @endforeach
                        </tbody>
                </table> 
                {{$users->links()}} 
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function(){
           
            $('#search').keyup(function(event){
                $('li').remove();
                var search = $('#search').val();
                var http = new XMLHttpRequest();
                var url = '/searchjemaat';
                var params = 'jemaat='+search+'&_token={{csrf_token()}}';
                http.open('POST', url, true);
                http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                http.send(params);
                http.onreadystatechange = function() {
                    var datajemaat = JSON.parse(http.responseText);
                    console.log(datajemaat);
                if(search == ''){
                    var autocomplete = $('#autocomplete').hide();
                }
                else{
                    var autocomplete = $('#autocomplete').show();
                    for(var i = 0 ; i < datajemaat.length ; i++){
                        $('#data').append(' <li class="" value="'+datajemaat[i].id+'">'+datajemaat[i].name+'</li> ');
                    }
                    
                }
                }
               
                console.log(search);
               
            });
        });

    </script>
@endsection



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
