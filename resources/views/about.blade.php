@extends('layouts.main')



@section('container')
<center>
    <h1> {{ $name }} </h1>
    <h3>{{ $saya }}</h3>
    <h2>  {{ $email }}  </h2>
    <img src="img/{{ $image }}" alt="" width="200px" class="rounded-circle img-thumbnail">
</center>
@endsection