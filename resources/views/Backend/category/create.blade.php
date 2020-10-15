@extends('layout.master')
@section('title','Create Cat')
@section('content')
<div class="container my-5">
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
    <div class="form-group">
      <legend>Category Name</legend>
      <input type="text" name="name" class="form-control">
    </div>
    <button class="btn btn-success btn-block">Create Category</button>
  </form>

</div>
@endsection