@extends('layout.layoutsuperadmin')

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
        
            <form action="{{url('/update/jemaat')}}" method="post" enctype="multipart/form-data">
            @csrf
                <input type="hidden" value="{{$datas->id}}" name="id">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control" name="name" value="{{$datas->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control" name="jenis_kelamin" value="{{$datas->jenis_kelamin}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Status Pernikahan</label>
                    <div class="col-sm-10">
                    <input type="text"  class="form-control" name="status_pernikahan" value="{{$datas->status_pernikahan}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$datas->tempat_lahir}}" name="tempatlahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" value="{{$datas->tanggal_lahir}}" name="tgllahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                    <input type="text"  class="form-control" name="telepon"  value="{{$datas->nomor_telepon}}">
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                    <input type="text"  class="form-control" name="email"  value="{{$datas->email}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat"  value="{{$datas->alamat}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nomor Kartu</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nokartu"  value="{{$datas->kartu}}">
                    </div>
                </div>
                @php    

                    if(is_null($datas->foto)){
                        echo ('
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto">
                            </div>
                        </div>
                        ');
                      

                    }
                    

                @endphp
                <div class="form-group row" style="">
                    <label for="" class="col-sm-2 col-form-label" style="<?php if(!is_null($datas->foto ) ?  print('display: block;') : print('display: none;') )?>">Foto</label>
                    <div class="col-sm-10 h-50">
                        <img class="col-12 no-absen " style="width: 15%;<?php if(!is_null($datas->foto ) ?  print('display: block;') : print('display: none;') )?>" src="{{asset('storage/'.$datas->foto)}}" id="foto-jemaat" alt="{{$datas->foto}}">

                    </div>
                </div>
                <div class="row">
                    <center>
                        <div class="col-4">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </center>
                </div>
            </form>
                           
          
        </div>
    </div>
@endsection