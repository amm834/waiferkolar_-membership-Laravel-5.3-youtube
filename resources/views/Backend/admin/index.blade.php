@extends('layout.master')
@section('title','Admin Panel')
@section('content')
<div class="container-fluid">
  <div class="container my-3">
    <div class="row mt-3 no-gutter">
    <!--   Role -->
      <div class="col-md-6 card my-3">
        <h2 class="text-center">Manage Users</h2>
        <div class="row d-flex justify-content-between">
          <a href="{{route('view-users')}}" class="btn btn-success btn-sm">
            View Users
          </a>
          <a href="{{route('view-roles')}}" class="btn btn-info btn-sm">
            View Roles
          </a>
        </div>
      </div>
    <!--   Category -->
      <div class="col-md-6 card my-3">
        <h2 class="text-center">Manage Category</h2>
        <div class="row d-flex justify-content-between">
          <a href="{{route('category')}}" class="btn btn-success btn-sm">
            View Category
          </a>
          <a href="{{route('add-cat')}}" class="btn btn-info btn-sm">
            Add Category
          </a>
        </div>
      </div>
      <!-- Edit Post -->
      <div class="col-md-6 card my-3">
        <h2 class="text-center">Manage Posts</h2>
        <div class="row d-flex justify-content-between">
          <a href="{{route('show-posts')}}" class="btn btn-success btn-sm">
            View Posts
          </a>
          <a href="" class="btn btn-info btn-sm">
            Edit Posts
          </a>
        </div>
      </div>
      
      
    </div>
  </div>

</div>
@endsection