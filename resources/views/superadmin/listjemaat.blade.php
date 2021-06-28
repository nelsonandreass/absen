@extends('layout.layoutsuperadmin')

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
           <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>No Keluarga</th>
                    <th>Foto</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->nomor_telepon}}</td>
                            <td>{{$user->no_keluarga}}</td>
                            <td>{{$user->foto}}</td>
                            <td>
                                <a href="" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
           </table> 
        </div>
    </div>
@endsection