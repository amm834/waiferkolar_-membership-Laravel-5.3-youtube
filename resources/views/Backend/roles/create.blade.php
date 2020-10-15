@extends('layout.master')
@section('title','Create Roles')
@section('content')
<div class="container my-5">
  <div class="col-md-8 offset-md-2">
    <form method="post">
      @csrf
      @foreach($errors->all() as $error)
      <div class="alert alert-danger">
        {{$error}}
      </div>
      @endforeach
      @if(session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div>
      @endif
      <legend>Create Roles</legend>
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <button type="submit" class="btn btn-primary float-right">Create</button>
    </form>
  </div>
</div>
@endsection