@extends('layout.layoutsuperadmin')

@section('content')

    <div class="page-wrapper p-3">  
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- title -->
                        <div class="d-md-flex">
                            <div>
                                <h1>
                                    @php    
                                        $string = strtoupper($ibadah);
                                        if($string == 'IBADAH1'){
                                            $string = 'IBADAH 1';
                                        }
                                        else if($string == 'IBADAH2'){
                                            $string = 'IBADAH 2';
                                        }
                                        echo ($string);
                                    @endphp
                                </h1>
                                <h2>
                                    {{$tanggal}}
                                </h2>
                            </div>
                            
                        </div>
                        <!-- title -->
                    </div>
                    <div class="table-responsive">
                        <table class="table v-middle table-striped">
                            <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">No</th>
                                    <th class="border-top-0">Nama</th>
                                    <th class="border-top-0">Nomor Telepon</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
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
                    <div class="row">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection