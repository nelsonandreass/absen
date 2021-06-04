@extends('layout.layout')

<div class="container">
    
    <li class="nav nav-item">Umum</li>
    <li class="nav nav-item">BIC</li>
    <li class="nav nav-item">Youth</li>
    @foreach($datas as $data)
        <div class="container">
            {{$data->firman}}
        </div>
    @endforeach
</div>