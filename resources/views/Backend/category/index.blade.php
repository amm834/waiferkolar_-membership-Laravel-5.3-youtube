@extends('layout.master')
@section('title','Category')
@section('content')
<div class="container">
  <table class="table table-bodered">
  <thead>
    <th>ID</th>
    <th>Name</th>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->name}}</td>
      <td>
    <a href="{{action('admin\CategoryController@edit',$category->id)}}" class="btn btn-warning btn-sm mb-2">
      Edit
    </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection