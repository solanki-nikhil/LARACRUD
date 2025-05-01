@extends('layouts.layout')
@section('title','Student')
@section('content')
<div class="d-flex justify-content-between">
  <a href="{{route('student.create')}}" class="btn btn-primary">Add</a>
  <a href="{{route('deleteall.student')}}" class="btn btn-danger">Delete All Student</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">contact</th>
        <th scope="col">Enroll</th>
        <th scope="col">Age</th>
        <th scope="col">City</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
          @foreach ($students as $data)
      <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->contact}}</td>
        <td>{{$data->enroll}}</td>
        <td>{{$data->age}}</td>
        <td>{{$data->city_name}}</td>
        <td>
          <a href="{{route('student.view',$data->id)}}"class="btn btn-primary">View</a>
           <a href="{{route('student.edit',$data->id)}}"class="btn btn-warning">Edit</a> <a href="{{route('student.delete',$data->id)}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="mt-5 justify-content-end">{{$students->links()}}</div>
@endsection