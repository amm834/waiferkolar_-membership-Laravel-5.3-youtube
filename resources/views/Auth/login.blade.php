@extends('layout.master')
@section('title','Login')
@section('content')
<div class="container">
  <form method="post" class="my-5">
    {!! csrf_field() !!}
    <legend class="text-center">Login</legend>
        @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {!! $error !!}
    </div>
    @endforeach
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
</div>
@endsection