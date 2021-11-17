@extends('layouts\main')

@section('container')
    <h1>Aoba Johsai</h1>
    <p>Aoba Johsai High (Japanese: 青葉あおば城西じょうさい高校こうこう Aoba Jōsai Kōkō), also known as Seijoh (Japanese: 青城せいじょう Seijō), is a private high school in Miyagi Prefecture.</p>

        @foreach ($aboutValue as $item)
        <h2><a href="/about/{{$item["link"]}}">{{ $item["judul"] }}</a></h2>
        <p>{{$item["deskripsi"]}}</p>
        @endforeach
        
@endsection