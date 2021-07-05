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
                    <input type="text" readonly class="form-control"  value="{{$datas->name}}">
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
                    <label for="" class="col-sm-2 col-form-label">Nomor Keluarga</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nokeluarga"  value="{{$datas->no_keluarga}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control" name="foto" value="{{$datas->foto}}">
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