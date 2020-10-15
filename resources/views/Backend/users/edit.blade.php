@extends('layout.master')
@section('title','Edit User Role')
@section('content')
<div class="container my-5">

  <form method="post">
@csrf
@if(session('status'))
<div class="alert alert-success">
  {{session('status')}}
</div>
@endif
    <h3>Manage User Role</h3>
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name" value="{{$user->name}}">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="email" value="{{$user->email}}">
    </div>
    <div class="form-group">
    <label>Roles</label><br>
    <select name="role[]" class="form-control">
   @foreach($roles as $role)
   <option value="{{$role->name}}"
   @if(in_array($role->name,$selectedRole))
   selected
   @endif
   >{{$role->name}}</option>
   @endforeach
   </select>
    </div>
<button class="btn btn-info btn-block">Edit User Role</button>
  </form>
  @endsection