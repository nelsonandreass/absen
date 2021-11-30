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
                        @foreach($data->users as $user)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->telepon}}</td>
                                <td><img src="{{asset('storage/'.$user->foto)}}" class="icon" alt="{{$user->foto}}"></td>
                            </tr>
                            <?php $i++?>
                        @endforeach
                    @endforeach
                </tbody>
           </table> 
        </div>
    </div>
@endsection