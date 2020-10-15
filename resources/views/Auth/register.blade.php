@extends('layout.master')
@section('title','Register')
@section('content')
<div class="container">
  <form method="post" class="my-5">
    <h1 class="text-center">Register Account</h1>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
    @endforeach
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
      <label>Confirm Password</label>
      <input type="password" name="password_confirmation" class="form-control">
    </div>


    <button type="submit" class="btn btn-primary float-right">Submit</button>


  </form>
</div>
@endsection