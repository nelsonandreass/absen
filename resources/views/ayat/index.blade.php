@extends('layout.layout')

@section('content')
<div class="container vertical-scrollable" data-spy="scroll">
    <div class="row">&nbsp;</div>
    <h3 class="ml-3 title">Renungan</h3>
    <div class="row">&nbsp;</div>
    <?php $id = 1;?>
    @foreach($datas as $data)
        <a href="{{route('ayat.show',$data->id)}}" id="{{$id}}" class="card text-decor-none mx-auto mb-3" style="display:none;">    
            <div class="card-body">
                {{$data->judul}}
            </div>
        </a>  
        <?php $id++;?>
    @endforeach
   <div class="row-blank">
   
   </div>
</div> 
<script>

    $(document).ready(function(){
        var id = [];
        $("a").each(function(){ id.push(this.id); });
        for(i = 4 ; i <= id.length-3 ; i++){
            console.log(id[i]);
            $("#"+id[i]).show((i+1)*300);
        }
    });
</script>
@endsection

