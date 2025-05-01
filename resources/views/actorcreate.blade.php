@extends('layouts.layout')
@section('title','Create Actor')
@section('content')
<form action="{{route('actor.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
        <div id="nameHelp" class="form-text">We'll never share your Name with anyone else.</div>
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail" class="form-label">Email</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputContact" class="form-label">Contact</label>
        <input name="contact" type="text" class="form-control" id="exampleInputContact" aria-describedby="contactHelp">
        <div id="contactHelp" class="form-text">We'll never share your contact with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputAge" class="form-label">Age</label>
        <input name="age" type="number" class="form-control" id="exampleInputAge" aria-describedby="ageHelp">
        <div id="ageHelp" class="form-text">We'll never share your Age with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputCity" class="form-label">City</label>
        <input name="city" type="text" class="form-control" id="exampleInputCity" aria-describedby="cityHelp">
        <div id="cityHelp" class="form-text">We'll never share your City with anyone else.</div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection