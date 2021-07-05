@extends('layout.layoutsuperadmin')

@section('content')
   
    <div class="page-wrapper ">
        <div class="container-fluid">
            <form action="{{url('/createberitaprocess')}}" method="post">
            @csrf
                <label for="">Judul</label>
                <input type="text" name="judul" class="form-control">  
                <label for="">Berita</label>
                <textarea name="berita" id="" cols="30" rows="10" class="form-control"></textarea>
                <label for="">Wadah</label>
                <select name="wadah" id="" class="form-control">
                    <option value="umum" class="form-control">Umum</option>
                    <option value="bic" class="form-control">BIC</option>
                    <option value="youth" class="form-control">Youth</option>
                </select> 
                <center>
                    <div class="col-4 mt-3">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </center>
            </form>
        </div>
    </div>
@endsection