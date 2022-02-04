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
                            <h4 class="card-title">Absen</h4>
                            <h5 class="card-subtitle">Detail absen</h5>
                        </div>
                        
                    </div>
                    <!-- title -->
                </div>
                <div class="table-responsive">
                    <table class="table v-middle table-striped">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">No</th>
                                <th class="border-top-0">Ibadah</th>
                                <th class="border-top-0">Tanggal</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            @foreach($absens as $absen)
                                <tr>
                                    <td>
                                        {{$i}}
                                    </td>
                                    <td>{{$absen->jenis}}</td>
                                    <td>
                                        {{$absen->tanggal}}
                                    </td>
                                    <td><a href="{{url('/absen',[$absen->jenis,$absen->tanggal])}}" class="btn btn-primary">Detail</a></td>
                                   
                                </tr>
                                <?php $i++?>
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