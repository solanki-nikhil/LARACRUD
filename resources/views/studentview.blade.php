@extends('layouts.layout')
@section('title','Student View')
@section('content')
@foreach ($data as $id => $student)

<h3>{{$student->name}}</h3>
<h3>{{$student->email}}</h3>
<h3>{{$student->contact}}</h3>
<h3>{{$student->age}}</h3>
<h3>{{$student->city}}</h3>
@endforeach
@endsection