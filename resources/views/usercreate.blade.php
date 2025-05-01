@extends('layouts.layout')
@section('title','User Create')
@section('content')
{{-- <pre>
@php
  print_r($errors->all())
@endphp
</pre> --}}
{{-- @if ($errors->any())
<ul class="alert alert-danger">
  @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
  @endforeach
@endif
</ul> --}}
<form action="{{route('user.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Name</label>
        <input name="name" value="{{old('name')}}" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" aria-describedby="nameHelp">
       <span class="text-danger">
        @error('name')
          {{$message}}
        @enderror
       </span>
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail" class="form-label">Email</label>
      <input name="email" value="{{old('email')}}" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp">
     <span class="text-danger">
      @error('email')
        {{$message}}
      @enderror
     </span>
    </div>


    {{-- <div class="mb-3">
      <label for="exampleInputPassword" class="form-label">Password</label>
      <input name="password" value="{{old('password')}}" type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" aria-describedby="emailHelp">
     <span class="text-danger">
      @error('password')
        {{$message}}
      @enderror
     </span>
    </div> --}}

    <div class="mb-3">
        <label for="exampleInputContact" class="form-label">Contact</label>
        <input name="contact" value="{{old('contact')}}" type="text" class="form-control @error('contact') is-invalid @enderror" id="exampleInputContact" aria-describedby="contactHelp">
       <span class="text-danger">
        @error('contact')
          {{$message}}
        @enderror
       </span>
      </div>
      <div class="mb-3">
        <label for="exampleInputAge" class="form-label">Age</label>
        <input name="age" value="{{old('age')}}" type="number" class="form-control @error('age') is-invalid @enderror" id="exampleInputAge" aria-describedby="ageHelp">
       <span class="text-danger">
        @error('age')
          {{$message}}
        @enderror
       </span>
      </div>
      <div class="mb-3">
        <label for="exampleInputCity" class="form-label">City</label>
        <input name="city" value="{{old('city')}}" type="text" class="form-control @error('city') is-invalid @enderror" id="exampleInputCity" aria-describedby="cityHelp">
       <span class="text-danger">
        @error('city')
          {{$message}}
        @enderror
       </span>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection