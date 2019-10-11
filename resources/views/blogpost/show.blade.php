@extends('layouts.layout')

@section('content')
    <div class="margin-down jumbotron">
      @if($post)
        <h1>
          {{$post->title}}
        </h1>
        <span>
          <strong>Date:</strong> {{$post->updated_at}} <strong>Author:</strong> {{$post->author}}
        </span>

        <div>
          {{$post->blogBody}}
        </div>
      @endif

      <a href="/blogpost"><button class="btn btn-success margin-down">Back</button></a>
    </div>
@endsection