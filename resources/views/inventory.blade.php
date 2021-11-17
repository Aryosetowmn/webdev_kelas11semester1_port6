@extends('layouts\main')

@section('container')
    <h1>Title-Inventory</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        @foreach ($inventoryValue as $item)
        <h2><a href="/inventory/{{$item["link"]}}">{{ $item["judul"] }}</a></h2>
        <p>{{$item["deskripsi"]}}</p>

        @endforeach
@endsection