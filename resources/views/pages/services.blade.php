
@extends('layouts.app')
@section('content')
<h1>{{$title}}</h1>
<p>We provide quality services to our clients with ..... </p>
@if(count($services) > 0)
  <ul class="list-group">
    @foreach ($services as $service)
      <li class="list-group-item">{{$service}}</li>    
    @endforeach
  </ul>
    @endsection
@endif