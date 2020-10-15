@extends('layout.master')
@section('title','Show All Post')
@section('content')
<div class="container my-5">
  <h3 class="text-center">Show All Posts Details</h3>
  <table class="table table-bodered">
    <thead>
      <th>ID</th>
      <th>Title</th>
      <th>Content</th>
    </thead>
    <tbody>
      @foreach($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td>
          <a href="{{action('postcreator\PostController@show',$post->id)}}" class="text-info">
            {{$post->title}}
          </a>
        </td>
        <td>{{$post->content}}</td>
        <td>
          <a href="{{action('postcreator\PostController@edit',$post->id)}}" class="btn btn-info btn-sm mb-2">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection