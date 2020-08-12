@extends('layouts.app')

@section('content')
  <a href="/posts" class="btn btn-dark">Back</a>
  <br>
  <br>
  <h1>{{$post->title}}</h1>
  @if($post->cover_image !== 'noimage.jpg')
    <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" class="mb-4">
  @endif
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
  <hr>
  @auth
    @if(Auth::user()->id == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-info float-left">Edit</a>
      {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
      {!!Form::close() !!}
    @endif
  @endauth
@endsection