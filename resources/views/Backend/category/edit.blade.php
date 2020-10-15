@extends('layout.master')
@section('title','Category')
@section('content')
<div class="container my-5">
  <form method="post">
    @csrf
    @if(session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
    @endif
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
    @endforeach
    <div class="form-group">
      <legend>Edit Category Name</legend>
      <input type="text" name="name" class="form-control" value="{{$category->name}}">
    </div>
    <button type="submit" class="btn btn-success btn-block">Edit Category</button>
  </form>
</div>
@endsection