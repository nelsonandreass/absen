@extends('layout.layoutsuperadmin')

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
           <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>No Keluarga</th>
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
                            <td>{{$user->no_keluarga}}</td>
                            <td><img src="{{asset('storage/'.$user->foto)}}" class="icon" alt="{{$user->foto}}"></td>
                            <td>
                                <a href="{{url('/showjemaat', $user->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                        <?php $i++?>
                    @endforeach
                </tbody>
           </table> 
        </div>
    </div>
@endsection