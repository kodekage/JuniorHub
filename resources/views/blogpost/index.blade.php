@extends('layouts.layout')

@section('content')
<h1 class="margin-down">
  ARTICLES
</h1>
@include('includes.messages')
<div>
  @foreach ($post as $blogpost)
    <div>
      <h2>
        <a href="/blogpost/{{$blogpost->id}}">
          Title: {{$blogpost->title}}
        </a>
      </h2>
      <p>
        {!!$blogpost->blogBody!!}
      </p>
      <p>
        Author: {{$blogpost->author}}
      </p>
    </div>
  @endforeach
@endsection