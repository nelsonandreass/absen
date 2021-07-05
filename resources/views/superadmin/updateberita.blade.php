@extends('layout.layoutsuperadmin')

@section('content')
   
    <div class="page-wrapper ">
        <div class="container-fluid">
            <form action="{{url('/updateberitaprocess')}}" method="post">
            @csrf
                <input type="hidden" value="{{$berita->id}}" name="id">
                <label for="">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{$berita->judul}}">  
                <label for="">Berita</label>
                <textarea name="berita" id="" cols="30" rows="10" class="form-control" >{{$berita->berita}}</textarea>
                <label for="">Wadah</label>
                <select name="wadah" id="" class="form-control">
                    <option value="umum" class="form-control" <?= $berita->wadah == 'umum' ?  'selected'  : "" ?>>Umum</option>
                   
                    <option value="bic" class="form-control" <?= $berita->wadah == 'bic' ?  'selected'  : "" ?>>BIC</option>
                  
                    <option value="youth" class="form-control" <?= $berita->wadah == 'youth' ?  'selected'  : "" ?>>Youth</option>
                   
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