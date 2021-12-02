@extends('layout.layoutsuperadmin')

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <h1 class="mb-1">
                @php    
                    $string = strtoupper($ibadah);
                    echo ($string);
                @endphp
            </h1>
            <h5 class="mb-5">
                {{$tanggal}}
            </h5>
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
                                <td>{{$user->nomor_telepon}}</td>
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