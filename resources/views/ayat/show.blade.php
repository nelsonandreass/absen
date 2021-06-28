@extends('layout.layout')
@section('content')
<div class="container" style="display:none;">
        <div class="row">&nbsp;</div>
        <h3 class="ml-3 title" id="judul-firman">Renungan</h3>
        <div class="row">&nbsp;</div>
        <div class="ml-3 mr-3" id="content-firman">    
                {{$data->judul}}
                <hr>
                {{$data->firman}}
        </div>  
        <div class="row-blank"></div>
</div>

<script>
         $(document).ready(function(){
                $(".container").show(400);
        });
</script>

@endsection
