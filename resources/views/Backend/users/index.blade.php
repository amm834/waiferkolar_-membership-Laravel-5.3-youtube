@extends('layout.master')
@section('title','Admin Dashboard')
@section('content')
<div class="container">
  <table class="table table-bodered">
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td class="d-flex justify-content-between">
   {{$user->name}}&nbsp;&nbsp;
      <a href="{{action('admin\UserController@edit',$user->id)}}">
      <span style="background:#f80;color:#fff;padding:2px;box-shadow:1px 2px 2px #222;">Edit</span>
      </a>
    </td>
    <td>{{$user->email}}</td>
  </tr>
  @endforeach
  </table>
</div>
@endsection