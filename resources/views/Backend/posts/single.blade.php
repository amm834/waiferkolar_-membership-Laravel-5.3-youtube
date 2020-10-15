@extends('layout.master')
@section('title','Show Post')
@section('content')
<div class="container my-5">
  <div class="card rounded">
    <div class="card-title bg-primary text-light rounded-top p-3">
      <h6>
        {{$post->title}}
      </h6>
    </div>
    <div class="card-body">
      <p class="text-muted">
        {{$post->content}}
      </p>
    </div>
    
<div class="container">
    @foreach($comments as $comment)
  <div class="alert border-success">
    <div class="bg-primary p-2">
      {{Auth::user()->name}}
    </div>
    <br>
      {{$comment->content}}
  </div>
  @endforeach
</div>

    <div class="container">
      <form method="post">
        @csrf
        @if(session('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
        @endif
      <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
      <input type="hidden" value="{{$post->id}}" name="commendable_id">
      <input type="hidden" value="App\Post" name="commendable_type">

      <div class="form-group my-3 text-left">
        <label>Comment Something</label>
        <textarea name="content" rows="3" class="form-control">
        </textarea>
      </div>
      <button type="submit" class="btn btn-success btn-block my-3">Contribute</button>
    </form>
    </div>

</div>
</div>
@endsection