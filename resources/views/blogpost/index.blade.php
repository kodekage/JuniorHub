@extends('layouts.app')

@section('content')
@include('includes.messages')
<section class="container">
<div>
  @foreach ($post as $blogpost)
    <div class="margin-down">
      <h2>
        <a href="/blogpost/{{$blogpost->id}}">
          {{$blogpost->title}}
        </a>
      </h2>
      <span>
        written by <strong>{{$blogpost->author}}</strong> on <strong>{{$blogpost->created_at}}</strong>
      </span>    
    </div>
  @endforeach
</section>
@endsection