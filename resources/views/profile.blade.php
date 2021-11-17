@extends('layouts\main')

@section('container')
    <style>
    .center {
        margin-left: auto;
        padding: 10px;
        width: 100px;
        height: 100px;    
        border-radius: 30px;
    }
    </style>

    
    </br>
    <h1>SMK Raden Umar Said Kudus</h1>
    <p>SMK Raden Umar Said memiliki SDM kependidikan yang professional, memiliki manajemen yang efektif dan professional, memiliki lingkungan pendidikan yang kondusif, dan mampu membangun kepercayaan kepada masyarakat.</p>

        @foreach ($profileValue as $item)
        <h2><a href="/profile/{{$item["link"]}}">{{ $item["judul"] }}</a></h2>
        <p>{{$item["deskripsi"]}}</p>
        @endforeach
        
@endsection