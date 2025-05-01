@extends('layouts.layout')
@section('title','User View')
@section('content')
@foreach ($data as $id => $user)

<h3>{{$user->name}}</h3>
<h3>{{$user->email}}</h3>
<h3>{{$user->contact}}</h3>
<h3>{{$user->age}}</h3>
<h3>{{$user->city}}</h3>
@endforeach
@endsection