@extends('layouts.layout')

@section('content')
    <div class="margin-down jumbotron">
      @include('includes.messages')
      @if($post)
        <h1>
          {{$post->title}}
        </h1>
        <span>
          <strong>Date:</strong> {{$post->updated_at}} <strong>Author:</strong> {{$post->author}}
        </span>

        <div>
          {!!$post->blogBody!!}
        </div>
      @endif

      <a href="/blogpost">
        <button class="btn btn-primary margin-down">
          back
        </button>
      </a>
      <a href="/blogpost/{{$post->id}}/edit">
        <button class="btn btn-success margin-down">
          edit post
        </button>
      </a>
      {!! Form::open(['action' => ['BlogPostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('delete post', ['class' => 'btn btn-danger'])}}
      {!! Form::close() !!}
    </div>
@endsection