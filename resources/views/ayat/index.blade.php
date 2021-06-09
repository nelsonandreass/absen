@extends('layout.layout')

@section('content')
<div class="container vertical-scrollable" data-spy="scroll">
    <div class="row">&nbsp;</div>
    <h3 class="ml-3 title">Renungan</h3>
    <div class="row">&nbsp;</div>
    @foreach($datas as $data)
        <a href="{{route('ayat.show',$data->id)}}" id="{{$data->id}}" class="card text-decor-none mx-auto mb-3" style="display:none;">    
            <div class="card-body">
                {{$data->judul}}
            </div>
        </a>  
    @endforeach
   
</div>
<script>
//  $(".container").show(400);

    $(document).ready(function(){
        
        var id = [];
        $("a").each(function(){ id.push(this.id); });
        console.log(id.length-3)
        for(i = 0 ; i <= id.length-3 ; i++){
            $("#"+id[i]).show((i+1)*300);
        }
    });
</script>
@endsection

