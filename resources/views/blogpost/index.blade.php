@extends('layouts.layout')

@section('content')
  
<div class="margin-down jumbotron">
  <h1>
    BLOG LIST
  </h1>
  @foreach ($post as $blogpost)
    <div>
      <h2>
        <a href="/blogpost/{{$blogpost->id}}">
          Title: {{$blogpost->title}}
        </a>
      </h2>
      <p>
        {{$blogpost->blogBody}}
      </p>
      <p>
        Author: {{$blogpost->author}}
      </p>
    </div>
  @endforeach
  {{$post->links()}}
</ul>
@endsection