@extends('layouts.root')

@section('header')
  <h2>Home</h2>
  @include('sidemenu')
@endsection('header')



@section('maincontent')
  <a href="{{ route('testpage') }}">Test page</a>

  <form action="{{ route('sign-in') }}" method="post">
    @csrf  

    <label for="email">Enter Email</label>
    <input type="text" name="email" id="email" placeholder="example@gmail.com" required />

    <br>

    <label for="password">enter Password</label>
    <input type="password" placeholder="Enter Password" required />

    <br>

    <button type="submit">Continue</button>
  </form>

  <img src="{{ asset('images/tech.jpg') }}" alt="Tech Image">
@endsection('maincontent')

  