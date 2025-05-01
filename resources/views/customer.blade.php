@extends('layouts.layout')
@section('title','Customers')
@section('content')
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
        @foreach ($customers as $customer)
      <tr>
        <th scope="row">{{$customer->id}}</th>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->contact}}</td>
        <td>{{$customer->age}}</td>
        <td>{{$customer->city}}</td>
        <td>
            {{-- <a href="{{route('customer.show')}}">Show</a>
            <a href="{{route('customer.create')}}">Edit</a>
            <a href="{{route('customer.destroy')}}">Delete</a> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

    


@endsection