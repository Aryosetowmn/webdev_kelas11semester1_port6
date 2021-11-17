@extends('layouts\main')

@section('container')

<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 300px;
  height: 400px;
  border-radius: 30px;
}

.centertext {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  width: 600px;
  height: auto;
}
</style>

<img src="/images/{{$post["foto"]}}" alt="Profile Picture" class="center">

</br>
</br>

<h2 class="centertext">
    {{$post["judul"]}}
</h2>

</br>

<p>
    {{$post["deskripsi"]}}
</p>
<a href="/profile">back to menu</a>

@endsection