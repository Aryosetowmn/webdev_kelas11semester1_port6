@extends('layouts\main')

@section('container')
<h2>
    {{$post["judul"]}}
</h2>
<p>
    {{$post["deskripsi"]}}
</p>

<a href="/home">back to menu</a>

@endsection