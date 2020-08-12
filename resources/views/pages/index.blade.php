@extends('layouts.app')
@section('content')
<div class="jumbotron">
  <h1 class="text-center"> {{$title}} </h1>
  <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non repudiandae animi unde, consectetur repellat voluptas perferendis expedita vel reprehenderit mollitia, iusto dolorum modi deleniti consequuntur ipsum. Ipsum nostrum eveniet esse.</p>
  <p class="lead text-center">
    <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
    <a class="btn btn-secondary btn-lg" href="/register" role="button">Signup</a>
  </p>
</div>
@endsection