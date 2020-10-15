@extends('layout.master')
@section('title','Roles')
@section('content')
<div class="container">
  <div class="col-md-8 offset-md-2">
    <table class="table table-bodered">
      <thead>
        <th>ID</th>
        <th>Name</th>
      </thead>
      @foreach($roles as $role)
      <tr>
        <td>{{$role->id}}</td>
        <td>{{$role->name}}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection