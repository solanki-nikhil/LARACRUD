@extends('layouts.layout')
@section('title','Actor View')
@section('content')
@foreach ($data as $id => $actor)

<h3>{{$actor->name}}</h3>
<h3>{{$actor->email}}</h3>
<h3>{{$actor->contact}}</h3>
<h3>{{$actor->age}}</h3>
<h3>{{$actor->city}}</h3>
@endforeach
@endsection