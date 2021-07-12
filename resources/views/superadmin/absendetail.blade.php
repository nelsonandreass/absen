@extends('layout.layoutsuperadmin')

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
           <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Foto</th>
                </thead>
                <tbody>
                    <?php $i = 1?>
                    @foreach($datas as $data)
                        
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->telepon}}</td>
                                <td><img src="{{asset('storage/'.$data->foto)}}" class="icon" alt="{{$data->foto}}"></td>
                            </tr>
                            <?php $i++?>
                        
                    @endforeach
                </tbody>
           </table> 
        </div>
    </div>
@endsection