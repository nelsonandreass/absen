@extends('layout.layout')

<div class="container">
    <div class="row">&nbsp;</div>
    <h3 class="ml-3 title">Renungan</h3>
    <div class="row">&nbsp;</div>
    @foreach($datas as $data)
        <a href="{{route('ayat.show',$data->id)}}" class="card text-decor-none mx-auto mb-3">    
            <div class="card-body">
                {{$data->judul}}
            </div>
        </a>  
    @endforeach
</div>