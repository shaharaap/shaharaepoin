@extends('outh.layouts')

@section('content')

<h1>Login</h1>
<a href="{{route('register) }}">Daftar</a>
<br></b>
<form action="{{ route('authenticate) }}" method="post">
  @csrf
  <label>Email Address</label> 
  <input type="email" id="email" name="email" value="{{ old('email') }}"><br><br>
  <label>Password</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Login">
</form>

@endsection