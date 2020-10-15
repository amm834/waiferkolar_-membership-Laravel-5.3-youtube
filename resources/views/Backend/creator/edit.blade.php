@extends('layout.master')
@section('title','Edit Post')
@section('content')
<div class="container my-5">
  <form method="post" class="table table-bodered">
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
    <input type="hidden" name="user_id" value="{{$user->id}}">
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name="title" value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label>Choose Category</label>
      <select name="category_id"  class="form-control">
        @foreach($categories as $category)
        <option value="{{$category->id}}"
        @if($category->id == $post->category_id )
        selected
        @endif
        >{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Content</label>
      <textarea type="text" class="form-control" name="content" rows="5">
        {{$post->content}}
      </textarea>
    </div>
    <button class="btn btn-success btn-block">Edit</button>
  </form>
</div>
@endsection