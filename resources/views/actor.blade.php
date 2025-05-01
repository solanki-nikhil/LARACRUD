 @extends('layouts.layout')
 @section('title','Actor')
 @section('content')
 <div class="pt-4 d-flex justify-content-between">
    <a href="{{route('actorall.delete')}}" class="btn btn-danger">Delete All List</a>
    <a href="{{route('actor.create')}}" class="btn btn-primary">Add</a>
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
        @foreach ($data as $id => $actor)
      <tr>
        <th scope="row">{{$actor->id}}</th>
        <td>{{$actor->name}}</td>
        <td>{{$actor->email}}</td>
        <td>{{$actor->contact}}</td>
        <td>{{$actor->age}}</td>
        <td>{{$actor->city}}</td>
        <td><a href="{{route('actor.view',$actor->id)}}" class="btn btn-primary">View</a> <a href="{{route('actor.edit',$actor->id)}}" class="btn btn-warning">Edit</a> <a href="{{route('actor.delete',$actor->id)}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="mt-5  d-flex justify-content-end">
    {{$data->links()}}
  </div>
 @endsection