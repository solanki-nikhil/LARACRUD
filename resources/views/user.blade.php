@extends('layouts.layout')
@section('title','user')
@section('content')
<div class="d-flex justify-content-between">
  <a href="{{route('user.create')}}" class="btn btn-primary">Add</a>
  <a href="{{route('deleteall.user')}}" class="btn btn-danger">Delete All Student</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">Age</th>
        <th scope="col">City</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $id => $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->contact}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->city}}</td>
        <td>
          <a href="{{route('user.view',$user->id)}}" class="btn btn-primary">view</a>
          <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning">Edit</a> 
          <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>{{$data->links()}}</div>
@endsection